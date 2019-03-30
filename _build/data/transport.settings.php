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
  'key' => 'modjwt.assetPath',
  'value' => '',
  'xtype' => 'textfield',
  'namespace' => 'modjwt',
  'area' => 'modjwt_setting',
  'name' => 'Development Assets URI',
  'description' => 'URL to modJWT development assets',
), '', true, true);
$systemSettings[2] = $modx->newObject('modSystemSetting');
$systemSettings[2]->fromArray(array (
  'key' => 'modjwt.corePath',
  'value' => '',
  'xtype' => 'textfield',
  'namespace' => 'modjwt',
  'area' => 'modjwt_setting',
  'name' => 'Development Core Path',
  'description' => 'Absolute path to modJWT develompent core path',
), '', true, true);
$systemSettings[3] = $modx->newObject('modSystemSetting');
$systemSettings[3]->fromArray(array (
  'key' => 'modjwt.enabled',
  'value' => true,
  'xtype' => 'combo-boolean',
  'namespace' => 'modjwt',
  'area' => 'modjwt_setting',
  'name' => 'Panic Button',
  'description' => 'One click setting to disable modJWT without unistall it',
), '', true, true);
$systemSettings[4] = $modx->newObject('modSystemSetting');
$systemSettings[4]->fromArray(array (
  'key' => 'modjwt.privatekey',
  'value' => '',
  'xtype' => 'textfield',
  'namespace' => 'modjwt',
  'area' => 'modjwt_key',
  'name' => 'Private Key',
  'description' => 'Absolute path to <strong>private key</strong> file for issuing asymmetric algorithm (i.e. RS256)',
), '', true, true);
$systemSettings[5] = $modx->newObject('modSystemSetting');
$systemSettings[5]->fromArray(array (
  'key' => 'modjwt.publickey',
  'value' => '',
  'xtype' => 'textfield',
  'namespace' => 'modjwt',
  'area' => 'modjwt_key',
  'name' => 'Public Key',
  'description' => 'Absolute path to <strong>public key</strong> file for validating asymmetric algorithm (i.e. RS256)',
), '', true, true);
$systemSettings[6] = $modx->newObject('modSystemSetting');
$systemSettings[6]->fromArray(array (
  'key' => 'modjwt.secretkey',
  'value' => 'my-secret-key-please-change-' . substr(md5(rand()),1,7),
  'xtype' => 'textfield',
  'namespace' => 'modjwt',
  'area' => 'modjwt_key',
  'name' => 'Secret Key',
  'description' => 'Use this as <strong>Secret Key</strong> for symmetric algorithm (i.e. HS256)',
), '', true, true);
return $systemSettings;
