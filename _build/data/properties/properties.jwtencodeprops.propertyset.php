<?php
/**
 * Properties file for jwtencodeprops propertyset
 *
 * Copyright 2019 by Zaenal zaenal(#)lokamaya.com
 * Created on 03-30-2019
 *
 * @package modjwt
 * @subpackage build
 */




$properties = array (
  'aud' => 
  array (
    'name' => 'aud',
    'desc' => 'URI of the audience/server (example: yourdomain.com)',
    'type' => 'textfield',
    'options' => 
    array (
    ),
    'value' => '',
    'lexicon' => 'en',
    'area' => 'configs',
  ),
  'exp' => 
  array (
    'name' => 'exp',
    'desc' => 'Auto-populated: current timestamp + expAge',
    'type' => 'numberfield',
    'options' => 
    array (
    ),
    'value' => '',
    'lexicon' => 'en',
    'area' => 'configs',
  ),
  'iat' => 
  array (
    'name' => 'iat',
    'desc' => 'Auto-populated: current timestamp',
    'type' => 'numberfield',
    'options' => 
    array (
    ),
    'value' => '',
    'lexicon' => 'en',
    'area' => 'configs',
  ),
  'iss' => 
  array (
    'name' => 'iss',
    'desc' => 'URI of JWT issuer (example: yourdomain.com)',
    'type' => 'textfield',
    'options' => 
    array (
    ),
    'value' => '',
    'lexicon' => 'en',
    'area' => 'configs',
  ),
  'nbf' => 
  array (
    'name' => 'nbf',
    'desc' => 'Auto-populated: current timestamp + nbfAge',
    'type' => 'numberfield',
    'options' => 
    array (
    ),
    'value' => '',
    'lexicon' => 'en',
    'area' => 'configs',
  ),
  'sub' => 
  array (
    'name' => 'sub',
    'desc' => 'Subject or user that use the Token, by setting subField value (default: sessionid)',
    'type' => 'textfield',
    'options' => 
    array (
    ),
    'value' => '',
    'lexicon' => 'en',
    'area' => 'configs',
  ),
  'leeway' => 
  array (
    'name' => 'leeway',
    'desc' => 'Timestamp leeway synchronization between servers',
    'type' => 'numberfield',
    'options' => 
    array (
    ),
    'value' => '0',
    'lexicon' => 'en',
    'area' => 'configs',
  ),
  'nbfAge' => 
  array (
    'name' => 'nbfAge',
    'desc' => 'Default: 0; if greater than 0 than &nbf will be populated',
    'type' => 'numberfield',
    'options' => 
    array (
    ),
    'value' => '0',
    'lexicon' => 'en',
    'area' => 'configs',
  ),
  'expAge' => 
  array (
    'name' => 'expAge',
    'desc' => 'Expire age. Default: 3600 seconds',
    'type' => 'numberfield',
    'options' => 
    array (
    ),
    'value' => '0',
    'lexicon' => 'en',
    'area' => 'configs',
  ),
  'alg' => 
  array (
    'name' => 'alg',
    'desc' => 'JWT algorithm. Default `HS256` (options: HS256, HS384, HS512 and RS256)',
    'type' => 'textfield',
    'options' => 
    array (
    ),
    'value' => 'HS256',
    'lexicon' => 'en',
    'area' => 'configs',
  ),
  'jti' => 
  array (
    'name' => 'jti',
    'desc' => 'Default: false (if true, auto-populated by sessionid)',
    'type' => 'combo-boolean',
    'options' => 
    array (
    ),
    'value' => false,
    'lexicon' => 'en',
    'area' => 'configs',
  ),
  'typ' => 
  array (
    'name' => 'typ',
    'desc' => 'JSON Type. Default: `JWT` (options: JWT, JWS)',
    'type' => 'textfield',
    'options' => 
    array (
    ),
    'value' => 'JWT',
    'lexicon' => 'en',
    'area' => 'configs',
  ),
  'subField' => 
  array (
    'name' => 'subField',
    'desc' => 'User variable to use for "sub" as subject. Default: sessionid (options: username, email, userid, sessionid)',
    'type' => 'textfield',
    'options' => 
    array (
    ),
    'value' => 'sessionid',
    'lexicon' => 'en',
    'area' => 'configs',
  ),
  'payloadData' => 
  array (
    'name' => 'payloadData',
    'desc' => 'Data of JWT Payload ',
    'type' => 'textfield',
    'options' => 
    array (
    ),
    'value' => '',
    'lexicon' => 'en',
    'area' => 'keys',
  ),
  'privateFile' => 
  array (
    'name' => 'privateFile',
    'desc' => 'Absolute path to file PRIVATE KEY. Required for asymetric algorithm, like RS256. Default: `[[++modjwt.privatekey]]` from configuration.',
    'type' => 'textfield',
    'options' => 
    array (
    ),
    'value' => '',
    'lexicon' => 'en',
    'area' => 'keys',
  ),
  'secretKey' => 
  array (
    'name' => 'secretKey',
    'desc' => 'Secret key for symetric algorithm, like HS256, HS384 or HS512. Default: `[[++modjwt.secretkey]]` from configuration.',
    'type' => 'textfield',
    'options' => 
    array (
    ),
    'value' => '',
    'lexicon' => 'en',
    'area' => 'keys',
  ),
  'toPlaceholder' => 
  array (
    'name' => 'toPlaceholder',
    'desc' => 'Default: null (if null mean direct output)',
    'type' => 'textfield',
    'options' => 
    array (
    ),
    'value' => '',
    'lexicon' => 'en',
    'area' => 'props',
  ),
  'mimeType' => 
  array (
    'name' => 'mimeType',
    'desc' => 'Output as json or text. Default: `json` (options: json, text)',
    'type' => 'textfield',
    'options' => 
    array (
    ),
    'value' => 'json',
    'lexicon' => 'en',
    'area' => 'props',
  ),
  'debugPlaceholder' => 
  array (
    'name' => 'debugPlaceholder',
    'desc' => 'Placeholder for debuging JWT. Default: `jwtDebug`',
    'type' => 'textfield',
    'options' => 
    array (
    ),
    'value' => 'jwtDebug',
    'lexicon' => 'en',
    'area' => 'props',
  ),
);

return $properties;

