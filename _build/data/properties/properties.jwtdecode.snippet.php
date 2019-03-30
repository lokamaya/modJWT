<?php
/**
 * Properties file for jwtDecode snippet
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
    'desc' => 'URI of the audience/server (default: your domain) ',
    'type' => 'textfield',
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
    'desc' => 'URI of JWT issuer (default: your domain) ',
    'type' => 'textfield',
    'options' => 
    array (
    ),
    'value' => '',
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
  'sub' => 
  array (
    'name' => 'sub',
    'desc' => 'Subject or user that use the Token. If empty, auto-populated by subField value.',
    'type' => 'textfield',
    'options' => 
    array (
    ),
    'value' => '',
    'lexicon' => 'en',
    'area' => 'configs',
  ),
  'validAlg' => 
  array (
    'name' => 'validAlg',
    'desc' => 'Alternate to &alg',
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
  'expAge' => 
  array (
    'name' => 'expAge',
    'desc' => 'Expire age. Default: 3600 seconds',
    'type' => 'numberfield',
    'options' => 
    array (
    ),
    'value' => '3600',
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
    'desc' => 'User variable to use for "sub" as subject. Default: email (options: username, email, userid, sessionid)',
    'type' => 'textfield',
    'options' => 
    array (
    ),
    'value' => 'email',
    'lexicon' => 'en',
    'area' => 'configs',
  ),
  'publicFile' => 
  array (
    'name' => 'publicFile',
    'desc' => 'Absolute path to file PUBLIC KEY. Required for asymetric algorithm, like RS256. Default: `[[++modjwt.publickey]]` from configuration.',
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
  'redirectTo' => 
  array (
    'name' => 'redirectTo',
    'desc' => 'Default: 0; otherwise will be redirected to given uri.',
    'type' => 'textfield',
    'options' => 
    array (
    ),
    'value' => '0',
    'lexicon' => 'en',
    'area' => 'props',
  ),
  'method' => 
  array (
    'name' => 'method',
    'desc' => 'How to get the Token? Default: `HEADER,GET` (options: HEADER, JSON, POST, GET)',
    'type' => 'textfield',
    'options' => 
    array (
    ),
    'value' => 'HEADER,GET',
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
  'httpQuery' => 
  array (
    'name' => 'httpQuery',
    'desc' => 'Required if using method POST or GET. Default: `token`.',
    'type' => 'textfield',
    'options' => 
    array (
    ),
    'value' => 'token',
    'lexicon' => 'en',
    'area' => 'props',
  ),
);

return $properties;

