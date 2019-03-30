<?php
/**
 * resources transport file for modJWT extra
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
/* @var xPDOObject[] $resources */


$resources = array();

$resources[1] = $modx->newObject('modResource');
$resources[1]->fromArray(array (
  'id' => 1,
  'pagetitle' => 'ModJWT',
  'longtitle' => 'ModJWT Sample Page',
  'alias' => 'modjwt',
  'richtext' => false,
  'published' => true,
  'class_key' => 'modDocument',
  'hidemenu' => '0',
  'cacheable' => '1',
  'searchable' => '1',
  'context_key' => 'web',
), '', true, true);
$resources[1]->setContent(file_get_contents($sources['data'].'resources/modjwt.content.html'));

$resources[2] = $modx->newObject('modResource');
$resources[2]->fromArray(array (
  'id' => 2,
  'pagetitle' => 'Issuing Token - JSON',
  'alias' => 'token',
  'richtext' => false,
  'published' => true,
  'content_type' => 7,
  'class_key' => 'modDocument',
  'hidemenu' => '0',
  'cacheable' => '1',
  'searchable' => '1',
  'context_key' => 'web',
), '', true, true);
$resources[2]->setContent(file_get_contents($sources['data'].'resources/issuing_token_-_json.content.html'));

$resources[3] = $modx->newObject('modResource');
$resources[3]->fromArray(array (
  'id' => 3,
  'pagetitle' => 'Validating Token - JSON',
  'alias' => 'validate',
  'richtext' => false,
  'published' => true,
  'content_type' => 7,
  'class_key' => 'modDocument',
  'hidemenu' => '0',
  'cacheable' => '1',
  'searchable' => '1',
  'context_key' => 'web',
), '', true, true);
$resources[3]->setContent(file_get_contents($sources['data'].'resources/validating_token_-_json.content.html'));

return $resources;
