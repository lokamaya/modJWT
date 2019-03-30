<?php
/**
 * snippets transport file for modJWT extra
 *
 * Copyright 2019 by Zaenal zaenal(#)lokamaya.com
 * Created on 03-26-2019
 *
 * @package modjwt
 * @subpackage build
 */

if (! function_exists('stripPhpTags')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<' . '?' . 'php', '', $o);
        $o = str_replace('?>', '', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */
/* @var xPDOObject[] $snippets */


$snippets = array();

$snippets[1] = $modx->newObject('modSnippet');
$snippets[1]->fromArray(array (
  'id' => 1,
  'property_preprocess' => false,
  'name' => 'jwtDecode',
  'description' => 'Validating or encoding JWT Token, return Payload Data',
), '', true, true);
$snippets[1]->setContent(file_get_contents($sources['source_core'] . '/elements/snippets/jwtdecode.snippet.php'));


$properties = include $sources['data'].'properties/properties.jwtdecode.snippet.php';
$snippets[1]->setProperties($properties);
unset($properties);

$snippets[2] = $modx->newObject('modSnippet');
$snippets[2]->fromArray(array (
  'id' => 2,
  'property_preprocess' => false,
  'name' => 'jwtEncode',
  'description' => 'Issuing or encoding JWT Token.',
), '', true, true);
$snippets[2]->setContent(file_get_contents($sources['source_core'] . '/elements/snippets/jwtencode.snippet.php'));


$properties = include $sources['data'].'properties/properties.jwtencode.snippet.php';
$snippets[2]->setProperties($properties);
unset($properties);

$snippets[3] = $modx->newObject('modSnippet');
$snippets[3]->fromArray(array (
  'id' => 3,
  'property_preprocess' => false,
  'name' => 'jwtDecodeRunSnippet',
  'description' => 'Output custom value after validating Token',
), '', true, true);
$snippets[3]->setContent(file_get_contents($sources['source_core'] . '/elements/snippets/jwtdecoderunsnippet.snippet.php'));


$properties = include $sources['data'].'properties/properties.jwtdecoderunsnippet.snippet.php';
$snippets[3]->setProperties($properties);
unset($properties);

return $snippets;
