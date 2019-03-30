<?php
/**
 * en default topic lexicon file for modJWT extra
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

/** DEFAULT **/
$_lang['modjwt'] = 'modJWT';
$_lang['modjwt_error_class']         = 'Could not load modJWT class!';
$_lang['modjwt_secretkey_not_match'] = 'A secret key not match!';
$_lang['modjwt_keypair_not_match']   = 'Private key and public key not match!';



/** SETTING **/
$_lang['area_modjwt_setting'] = 'Setting';
$_lang['area_modjwt_key'] = 'Secret Key';
$_lang['area_modjwt_keys'] = 'Secret Keys';
$_lang['area_modjwt_configs'] = 'Configuration';
$_lang['area_modjwt_props'] = 'Properties';

$_lang['setting_modjwt.enabled'] = 'Panic Button';
$_lang['setting_modjwt.enabled_desc'] = 'Disable modJWT without uninstalling it';

$_lang['setting_modjwt.assetPath'] = 'Development Assets URI';
$_lang['setting_modjwt.assetPath_desc'] = 'URL to modJWT development assets';

$_lang['setting_modjwt.corePath'] = 'Development Core Path';
$_lang['setting_modjwt.corePath_desc'] = 'Absolute path to modJWT develompent core path';

$_lang['setting_modjwt.secretkey'] = 'Secret Key';
$_lang['setting_modjwt.secretkey_desc'] = 'Use this as <strong>Secret Key</strong> for symmetric algorithm (i.e. HS256)';

$_lang['setting_modjwt.privatekey'] = 'Private Key';
$_lang['setting_modjwt.private_desc'] = 'Use <strong>Private Key</strong> as key pair with <strong>Public Key</strong> for asymmetric algorithm (i.e. RS256)';

$_lang['setting_modjwt.publickey'] = 'Public Key';
$_lang['setting_modjwt.public_desc'] = 'Use <strong>Public Key</strong> as key pair with <strong>Private Key</strong> for asymmetric algorithm (i.e. RS256)';
