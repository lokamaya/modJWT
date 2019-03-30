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
$_lang['modjwt_secretkey_not_match'] = 'A secret key not match!';
$_lang['modjwt_keypair_not_match']   = 'Private key and public key not match!';

/** SETTING **/
$_lang['area_modjwt_setting'] = 'Setting';
$_lang['area_modjwt_key'] = 'Hash Key';

$_lang['setting_modjwt.enabled'] = 'Enable modJWT';
$_lang['setting_modjwt.enabled_desc'] = 'Enable this extra, default: YES';

$_lang['setting_modjwt.default_alg'] = 'Default algorithm';
$_lang['setting_modjwt.default_alg_desc'] = 'Algorithm for JWT, default HS256 (available options: HS256, HS384, HS512, and RS256)';

$_lang['setting_modjwt.default_typ'] = 'Default type';
$_lang['setting_modjwt.default_typ_desc'] = 'JWT or JWS. Default JWT';

$_lang['setting_modjwt.default_sub_key'] = 'Subject/user field';
$_lang['setting_modjwt.default_sub_key_desc'] = 'You can use email, username, or userid as subject key';

$_lang['setting_modjwt.default_jti_key'] = 'JTI identification';
$_lang['setting_modjwt.default_jti_key_desc'] = 'This key must be unique (I use sessionid), or leave empty to disable it.';

$_lang['setting_modjwt.default_iss_uri'] = 'Default type';
$_lang['setting_modjwt.default_iss_uri_desc'] = 'The issuer\'s URI that send the Token (ie. <em>http://mydomain.com</em> if you create it, or <em>http://otherdomain.com</em> if you received it)';

$_lang['setting_modjwt.default_aud_uri'] = 'Default audience';
$_lang['setting_modjwt.default_aud_uri_desc'] = 'The audience\'s URI that recieve the Token (ie. <em>http://otherdomain.com</em> if you create it for others, or <em>http://mydomain.com</em> if you received it from other)';

$_lang['setting_modjwt.default_exp_age'] = 'Expire time';
$_lang['setting_modjwt.default_exp_age_desc'] = 'Default expire time for Token in second. Default 10800 seconds (3 hours)';

$_lang['setting_modjwt.default_nbf_age'] = 'Applicable time';
$_lang['setting_modjwt.default_nbf_age_desc'] = 'When the Token can be use (right now = 0).';

$_lang['setting_modjwt.hashkey'] = 'Secret Key';
$_lang['setting_modjwt.hashkey_desc'] = 'Use this as <strong>Secret Key</strong> for symmetric algorithm (i.e. HS256)';

$_lang['setting_modjwt.secretkey'] = 'Secret Key';
$_lang['setting_modjwt.secretkey_desc'] = 'Use this as <strong>Secret Key</strong> for symmetric algorithm (i.e. HS256)';

$_lang['setting_modjwt.privatekey'] = 'Private Key';
$_lang['setting_modjwt.private_desc'] = 'Use <strong>Private Key</strong> as key pair with <strong>Public Key</strong> for asymmetric algorithm (i.e. RS256)';

$_lang['setting_modjwt.publickey'] = 'Public Key';
$_lang['setting_modjwt.public_desc'] = 'Use <strong>Public Key</strong> as key pair with <strong>Private Key</strong> for asymmetric algorithm (i.e. RS256)';

$_lang['setting_modjwt.publickey'] = 'Load from File';
$_lang['setting_modjwt.public_desc'] = 'Upload both <strong>Public Key</strong> and <strong>Private Key</strong> to specific folder, and input the absolute path of both files to those settings.';
