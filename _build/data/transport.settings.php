<?php
/**
 * systemSettings transport file for modJWT extra
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
/* @var xPDOObject[] $systemSettings */


$systemSettings = array();

$systemSettings[1] = $modx->newObject('modSystemSetting');
$systemSettings[1]->fromArray(array (
  'key' => 'modjwt.enabled',
  'name' => 'Panic Button',
  'description' => 'One click setting to disable modJWT without unistall it',
  'xtype' => 'combo-boolean',
  'value' => true,
  'area' => 'modjwt_setting',
  'namespace' => 'modjwt',
), '', true, true);
$systemSettings[2] = $modx->newObject('modSystemSetting');
$systemSettings[2]->fromArray(array (
  'key' => 'modjwt.corePath',
  'name' => 'Development Path',
  'description' => 'Path for development purpose',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'modjwt_setting',
  'namespace' => 'modjwt',
), '', true, true);
$systemSettings[3] = $modx->newObject('modSystemSetting');
$systemSettings[3]->fromArray(array (
  'key' => 'modjwt.secretkey',
  'name' => 'Secret Key',
  'description' => 'Use this as <strong>Secret Key</strong> for symmetric algorithm (i.e. HS256)',
  'xtype' => 'textfield',
  'value' => 'my-secret-key-please-change-b18886b',
  'area' => 'modjwt_key',
  'namespace' => 'modjwt',
), '', true, true);
$systemSettings[4] = $modx->newObject('modSystemSetting');
$systemSettings[4]->fromArray(array (
  'key' => 'modjwt.privatekey',
  'name' => 'Private Key',
  'description' => 'Absolute path to <strong>private key</strong> file for issuing asymmetric algorithm (i.e. RS256)',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'modjwt_key',
  'namespace' => 'modjwt',
), '', true, true);
$systemSettings[5] = $modx->newObject('modSystemSetting');
$systemSettings[5]->fromArray(array (
  'key' => 'modjwt.publickey',
  'name' => 'Public Key',
  'description' => 'Absolute path to <strong>public key</strong> file for validating asymmetric algorithm (i.e. RS256)',
  'xtype' => 'textfield',
  'value' => '',
  'area' => 'modjwt_key',
  'namespace' => 'modjwt',
), '', true, true);
return $systemSettings;
