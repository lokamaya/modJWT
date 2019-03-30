<?php
/**
 * events transport file for modJWT extra
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
/* @var xPDOObject[] $events */


$events = array();

$events[1] = $modx->newObject('modEvent');
$events[1]->fromArray(array (
  'name' => 'OnJWTBeforeFire',
  'groupname' => 'modJWT',
  'service' => 1,
), '', true, true);
$events[2] = $modx->newObject('modEvent');
$events[2]->fromArray(array (
  'name' => 'OnJWTAuthenticated',
  'groupname' => 'modJWT',
  'service' => 2,
), '', true, true);
return $events;
