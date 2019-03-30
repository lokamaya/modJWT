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
  'type' => 'document',
  'contentType' => 'text/html',
  'pagetitle' => 'ModJWT',
  'longtitle' => 'ModJWT Sample Page',
  'description' => 'Sample page for modJWT a MODx Extra',
  'alias' => 'modjwt',
  'alias_visible' => true,
  'link_attributes' => '',
  'published' => true,
  'isfolder' => true,
  'introtext' => '',
  'richtext' => false,
  'template' => 0,
  'menuindex' => 2,
  'searchable' => false,
  'cacheable' => true,
  'createdby' => 1,
  'editedby' => 1,
  'deleted' => false,
  'deletedon' => 0,
  'deletedby' => 0,
  'menutitle' => '',
  'donthit' => false,
  'privateweb' => false,
  'privatemgr' => false,
  'content_dispo' => 0,
  'hidemenu' => true,
  'class_key' => 'modDocument',
  'context_key' => 'web',
  'content_type' => 1,
  'hide_children_in_tree' => 0,
  'show_in_tree' => 1,
  'properties' => NULL,
), '', true, true);
$resources[1]->setContent(file_get_contents($sources['data'].'resources/modjwt.content.html'));

$resources[2] = $modx->newObject('modResource');
$resources[2]->fromArray(array (
  'id' => 2,
  'type' => 'document',
  'contentType' => 'application/json',
  'pagetitle' => 'Token',
  'longtitle' => 'Issuing Token - JSON',
  'description' => 'Make sure content type is JSON',
  'alias' => 'token',
  'alias_visible' => true,
  'link_attributes' => '',
  'published' => true,
  'isfolder' => true,
  'introtext' => '',
  'richtext' => false,
  'template' => 0,
  'menuindex' => 0,
  'searchable' => false,
  'cacheable' => false,
  'createdby' => 1,
  'editedby' => 1,
  'deleted' => false,
  'deletedon' => 0,
  'deletedby' => 0,
  'menutitle' => '',
  'donthit' => false,
  'privateweb' => false,
  'privatemgr' => false,
  'content_dispo' => 0,
  'hidemenu' => true,
  'class_key' => 'modDocument',
  'context_key' => 'web',
  'content_type' => 7,
  'hide_children_in_tree' => 0,
  'show_in_tree' => 1,
  'properties' => NULL,
), '', true, true);
$resources[2]->setContent(file_get_contents($sources['data'].'resources/token.content.html'));

$resources[3] = $modx->newObject('modResource');
$resources[3]->fromArray(array (
  'id' => 3,
  'type' => 'document',
  'contentType' => 'application/json',
  'pagetitle' => 'Validate',
  'longtitle' => 'Validating Token - JSON',
  'description' => 'Make sure content type is JSON',
  'alias' => 'validate',
  'alias_visible' => true,
  'link_attributes' => '',
  'published' => true,
  'isfolder' => true,
  'introtext' => '',
  'richtext' => false,
  'template' => 0,
  'menuindex' => 1,
  'searchable' => false,
  'cacheable' => false,
  'createdby' => 1,
  'editedby' => 1,
  'deleted' => false,
  'deletedon' => 0,
  'deletedby' => 0,
  'menutitle' => '',
  'donthit' => false,
  'privateweb' => false,
  'privatemgr' => false,
  'content_dispo' => 0,
  'hidemenu' => true,
  'class_key' => 'modDocument',
  'context_key' => 'web',
  'content_type' => 7,
  'hide_children_in_tree' => 0,
  'show_in_tree' => 1,
  'properties' => NULL,
), '', true, true);
$resources[3]->setContent(file_get_contents($sources['data'].'resources/validate.content.html'));

$resources[4] = $modx->newObject('modResource');
$resources[4]->fromArray(array (
  'id' => 4,
  'type' => 'document',
  'contentType' => 'application/json',
  'pagetitle' => 'Custom',
  'longtitle' => 'Validating Token & output custom value',
  'description' => 'Make sure content type is JSON',
  'alias' => 'validate',
  'alias_visible' => true,
  'link_attributes' => '',
  'published' => true,
  'isfolder' => true,
  'introtext' => '',
  'richtext' => false,
  'template' => 0,
  'menuindex' => 1,
  'searchable' => false,
  'cacheable' => false,
  'createdby' => 1,
  'editedby' => 1,
  'deleted' => false,
  'deletedon' => 0,
  'deletedby' => 0,
  'menutitle' => '',
  'donthit' => false,
  'privateweb' => false,
  'privatemgr' => false,
  'content_dispo' => 0,
  'hidemenu' => true,
  'class_key' => 'modDocument',
  'context_key' => 'web',
  'content_type' => 7,
  'hide_children_in_tree' => 0,
  'show_in_tree' => 1,
  'properties' => NULL,
), '', true, true);
$resources[4]->setContent(file_get_contents($sources['data'].'resources/custom.content.html'));

return $resources;
