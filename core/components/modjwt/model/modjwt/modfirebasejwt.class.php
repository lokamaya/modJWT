<?php
/**
 * modFirebaseJWT class file for modJWT extra
 *
 * Copyright (C) 2019 by Zaenal <zaenal(#)lokamaya.com>
 * Created on 03-26-2019
 *
 * modJWT is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * modJWT is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * modJWT; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package modjwt
 */
require_once dirname(__FILE__) . '/jwt/firebase/jwt.class.php';
require_once dirname(__FILE__) . '/jwt/firebase/src/Key.php';
use Firebase\JWT\JWT as FirebaseJWT;
use Firebase\JWT\Key;

class modFirebaseJWT extends FirebaseJWT {
    /** @var $modx modX */
    public $modx;

    /** @var array $config */
    public $config;

    /** @var bool isError */
    public $isError;

    /** @var string logError */
    public $logError;

    /** @var mixed output */
    public $errorData;
    
    /** @var mixed output */
    public $jsonData;

    /** @var mixed payload */
    public $payload;
    
    /** @var mixed token */
    public $token;
    
    /**
     * @param modX $modx
     * @param array $config
    **/
    function __construct(modX &$modx, array $config = []) {
        error_reporting(E_ALL);
        $this->modx =& $modx;
        $this->isError = false;
        
        $corePath = MODX_CORE_PATH . 'components/modjwt/';
        $assetsUrl = MODX_ASSETS_URL . 'components/modjwt/';
        
        $this->config = array_merge([
            'corePath' => $corePath,
            'modelPath' => $corePath . 'model/',
            'assetsUrl' => $assetsUrl,
        ], $config);
        
        $this->modx->lexicon->load('modjwt:firebase');
        
        static::$timestamp = time();
        
        if (!headers_sent()) {
            //http_response_code($errorCode);
            //header("HTTP/1.1 $errorCode " . $errorMessage[$errorCode]);
            header("Cache-Control: no-store");
            header("Pragma: no-cache");
        }
    }

    /**
     * Encode a string with URL-safe Base64.
     *
     * @param string $input The string you want encoded
     *
     * @return string The base64 encode of what you passed in
     */
    public function base64url_encode($input) {
        return static::urlsafeB64Encode($input);
    }
    
    /**
     * Decode a string with URL-safe Base64.
     *
     * @param string $input A Base64 encoded string
     *
     * @return string A decoded string
     */
    public function base64url_decode($input) {
        return static::urlsafeB64Decode($input);
    }
    
    /**
     * encodeJWT
     * Output JWT Token
     *
     * @return string
    **/
    public function encodeJWT($payload, $key, $alg = 'HS256', $base64sign=false, $keyId = null, $head = null) {
        return parent::encode($payload, $key, $alg, $keyId, $head);
    }
    
    /**
     * decodeJWT
     * validate JWT Token
     * 
     * @return bool
    **/
    public function decodeJWT($jwt, $keyOrKeyArray, array $allowed_algs = array()) {
        return parent::decode($jwt, $keyOrKeyArray, $allowed_algs);
    }
    
    /**
     * prepareSecretKey
     * Prepare secret key for encoding JWT Token
     *
     * @var string key
     * @var string algorithm
     * @output string
    **/
    public function prepareSecretKey($algorithm) {
        $secretKey  = null;
        
        if (in_array( $algorithm, array('HS256', 'HS384', 'HS512') )) {
            $secretKey  = trim($this->config['secretKey']);
        } elseif (in_array( $algorithm, array('RS256', 'RS384', 'RS512') )) {
            $secretFile = trim($this->config['secretFile']);
            if (!empty($secretFile)) {
                $secretKey = @file_get_contents($secretFile);
            }
        }
        
        return $secretKey;
    }
    
   /**
     * getTokenClaim
     *
     * @return string
    **/
    public function getTokenClaim($allowedMethod="HEADER,JSON,POST") {
        if (!is_array($allowedMethod)) {
            $allowedMethod = explode(",", $allowedMethod);
        }
        
        $token = null;
        $query = $this->config['httpQuery'];
        
        foreach ($allowedMethod as $method) {
            switch ($method) {
                case 'HEADER':
                    $token = $this->getBearerToken();
                    break;
                case 'JSON':
                    $token = $this->getJsonToken($query);
                    break;
                case 'POST':
                    $token = isset($_POST[$query]) ? trim($_POST[$query]) : null;
                    break;
                case 'GET':
                    $token = isset($_GET[$query]) ? urldecode($_GET[$query]) : null;
                    break;
                case 'COOKIE':
                    $token = isset($_COOKIE[$query]) ? trim($_COOKIE[$query]) : null;
                    break;
            }
            if ($token !== null) break;
        }
        return $token;
    }
    
    /**
      * get access token from JSON
      * @return string
    **/
    function getJsonToken($query) {
        //$json_request = (static::jsonDecode($request) !== NULL) ? true : false;
        if ($json_request = static::jsonDecode(file_get_contents("php://input"))) {
            $token = trim($json_request[$query]);
            return $token;
        }
        
        return null;
    }
    
    /**
      * get access token from header
      * @return string
    **/
    function getBearerToken() {
        $headers = $this->getAuthorizationHeader();
        
        // HEADER: Get the access token from the header
        if (!empty($headers)) {
            if (preg_match('/Bearer\s(\S+)/', $headers, $matches)) {
                return trim($matches[1]);
            }
        }
        return null;
    }
    
    /**
      * get header from http request
      * @return string
    **/
    public function getAuthorizationHeader(){
        $headers = null;
        if (isset($_SERVER['Authorization'])) {
            $headers = trim($_SERVER["Authorization"]);
        } else if (isset($_SERVER['HTTP_AUTHORIZATION'])) { //Nginx or fast CGI
            $headers = trim($_SERVER["HTTP_AUTHORIZATION"]);
        } elseif (function_exists('apache_request_headers')) {
            $requestHeaders = apache_request_headers();
            
            // Server-side fix for bug in old Android versions (a nice side-effect of this fix means we don't care about capitalization for Authorization)
            $requestHeaders = array_combine(array_map('ucwords', array_keys($requestHeaders)), array_values($requestHeaders));
            //print_r($requestHeaders);
            
            if (isset($requestHeaders['Authorization'])) {
                $headers = trim($requestHeaders['Authorization']);
            }
        }
        
        return $headers;
    }
    
    public function setJSONData($token) {
        $output = array('token' => $token);
        
        if ($this->config['mimeType'] == 'json') {
            if (!headers_sent()) header('Content-Type: application/json;charset=utf-8');
            $output = static::jsonEncode($output);
        }
        $this->jsonData = $output;
        return $output;
    }
    
    public function setJWTData($token) {
        if (!headers_sent()) header('Content-Type: application/jwt;charset=utf-8');
        return $token;
    }
    
    public static function safeBase64Encode($input)
    {
        return static::urlsafeB64Encode($input);
    }
    public static function safeBase64Decode($input)
    {
        return static::urlsafeB64Decode($input);
    }

    
    /**
     * outputError
     *
     * @var string log
     * @var int errorCode
     * @var string status
     * @return string
    **/
    public function outputError($log='', $errorCode=403) {
        $errorMessage = array(
            400 => $this->modx->lexicon('modjwt_status_400'),
            401 => $this->modx->lexicon('modjwt_status_401'),
            402 => $this->modx->lexicon('modjwt_status_402'),
            403 => $this->modx->lexicon('modjwt_status_403'),
            404 => $this->modx->lexicon('modjwt_status_404'),
            405 => $this->modx->lexicon('modjwt_status_405'),
            406 => $this->modx->lexicon('modjwt_status_406'),
            407 => $this->modx->lexicon('modjwt_status_407'),
            408 => $this->modx->lexicon('modjwt_status_408'),
            409 => $this->modx->lexicon('modjwt_status_409'),
            410 => $this->modx->lexicon('modjwt_status_410'),
            413 => $this->modx->lexicon('modjwt_status_413'),
            429 => $this->modx->lexicon('modjwt_status_429'),
            431 => $this->modx->lexicon('modjwt_status_431'),
            500 => $this->modx->lexicon('modjwt_status_500'),
            501 => $this->modx->lexicon('modjwt_status_501'),
            502 => $this->modx->lexicon('modjwt_status_502'),
            503 => $this->modx->lexicon('modjwt_status_503'),
            504 => $this->modx->lexicon('modjwt_status_504'),
            );
        
        $output = array(
            'status' => $errorCode,
            'text' => $errorMessage[$errorCode]
            );
               
        if (empty($log)) $log = $errorCode . ': ' . $errorMessage[$errorCode];
        $log = '[JWT] ' . $log;
        
        $this->isError  = true;
        $this->logError = $log;
        
        $this->modx->log(modX::LOG_LEVEL_ERROR, $log);
        $this->modx->setPlaceholder($this->config['debugPlaceholder'], $log);

        /*
        if (!headers_sent()) {
            http_response_code($errorCode);
            header("HTTP/1.1 $errorCode " . $errorMessage[$errorCode]);
            header("Cache-Control: no-store");
            header("Pragma: no-cache");
        }
        */
        if ($this->config['mimeType'] == 'json') {
            if (!headers_sent()) header('Content-Type: application/json;charset=utf-8');
            $output = static::jsonEncode($output);
        }
        
        $this->errorData = $output;
        return false;
    }
    
}