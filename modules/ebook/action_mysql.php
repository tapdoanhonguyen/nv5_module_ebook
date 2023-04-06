<?php

/**
 * @Project NUKEVIET 4.x
 * @Author TDHN <adminwmt@gmail.com>
 * @Copyright (C) 2023 TDHN. All rights reserved
 * @License: Not free read more http://nukeviet.vn/vi/store/modules/nvtools/
 * @Createdate Thu, 06 Apr 2023 14:36:56 GMT
 */

if (!defined('NV_MAINFILE'))
    die('Stop!!!');

$sql_drop_module = array();
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_cat";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_type";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_author";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_ebook";

$sql_create_module = $sql_drop_module;
$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_cat (
 id mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
 parentid mediumint(8) unsigned NOT NULL DEFAULT '0',
 alias varchar(250) NOT NULL,
 title varchar(250) NOT NULL,
 introduction mediumtext NOT NULL,
 addtime int(11) unsigned NOT NULL DEFAULT '0',
 weight smallint(4) unsigned NOT NULL DEFAULT '0',
 status tinyint(1) unsigned NOT NULL DEFAULT '0',
 PRIMARY KEY (id),
 UNIQUE KEY alias (alias),
 KEY weight (weight)
) ENGINE=MyISAM;";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_type (
 id mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
 parentid mediumint(8) unsigned NOT NULL DEFAULT '0',
 alias varchar(250) NOT NULL,
 title varchar(250) NOT NULL,
 weight smallint(4) unsigned NOT NULL DEFAULT '0',
 status tinyint(1) unsigned NOT NULL DEFAULT '0',
 PRIMARY KEY (id),
 UNIQUE KEY alias (alias),
 KEY weight (weight)
) ENGINE=MyISAM;";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_author (
 id mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
 name varchar(255) NOT NULL,
 positions varchar(255) NOT NULL,
 weight smallint(4) unsigned NOT NULL DEFAULT '0',
 status tinyint(1) unsigned NOT NULL DEFAULT '0',
 PRIMARY KEY (id)
) ENGINE=MyISAM;";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_ebook (
id mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
 type mediumint(8) unsigned NOT NULL DEFAULT '0',
 catid mediumint(8) unsigned NOT NULL DEFAULT '0',
 alias varchar(250) NOT NULL,
 title varchar(250) NOT NULL,
 code varchar(100) NOT NULL,
 content mediumtext NOT NULL,
 file varchar(255) NOT NULL,
 from_org varchar(255) NOT NULL,
 from_depid mediumint(8) unsigned NOT NULL DEFAULT '0',
 from_author mediumint(8) unsigned NOT NULL DEFAULT '0',
 from_time int(11) unsigned NOT NULL DEFAULT '0',
 date_iss int(11) unsigned NOT NULL DEFAULT '0',
 date_first int(11) unsigned NOT NULL DEFAULT '0',
 date_die int(11) unsigned NOT NULL DEFAULT '0',
 to_org mediumtext NOT NULL,
 groups_view varchar(255) NOT NULL,
 status tinyint(1) unsigned NOT NULL DEFAULT '0',
 view int(11) unsigned NOT NULL DEFAULT '0',
 PRIMARY KEY (id),
 UNIQUE KEY alias (alias),
 KEY type (type),
 KEY catid (catid)
) ENGINE=MyISAM;";

// Comments
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'auto_postcomm', '1')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'allowed_comm', '-1')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'view_comm', '6')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'setcomm', '4')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'activecomm', '1')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'emailcomm', '0')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'adminscomm', '')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'sortcomm', '0')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'captcha', '1')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'perpagecomm', '5')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'timeoutcomm', '360')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'allowattachcomm', '0')";
$sql_create_module[] = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $module_name . "', 'alloweditorcomm', '0')";
