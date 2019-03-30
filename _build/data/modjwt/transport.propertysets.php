<?php
/**
 * propertySets transport file for modJWT extra
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
/* @var xPDOObject[] $propertySets */


$propertySets = array();

$propertySets[1] = $modx->newObject('modPropertySet');
$propertySets[1]->fromArray(array (
  'id' => 1,
  'name' => 'jwtdecodeprops',
  'description' => 'jwtDecode properties',
), '', true, true);
$propertySets[2] = $modx->newObject('modPropertySet');
$propertySets[2]->fromArray(array (
  'id' => 2,
  'name' => 'jwtencodeprops',
  'description' => 'jwtEncode properties',
), '', true, true);
$propertySets[3] = $modx->newObject('modPropertySet');
$propertySets[3]->fromArray(array (
  'id' => 3,
  'name' => 'jwtpluginprops',
  'description' => 'JWT plugin propertis',
), '', true, true);
return $propertySets;
