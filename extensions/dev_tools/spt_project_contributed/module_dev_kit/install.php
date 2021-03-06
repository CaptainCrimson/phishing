<?php

/**
 * file:    install.php
 * version: 6.0
 * package: Simple Phishing Toolkit (spt)
 * component:	Module Template
 * copyright:	Copyright (C) 2012 The SPT Project. All rights reserved.
 * license: GNU/GPL, see license.htm.
 * 
 * This file is part of the Simple Phishing Toolkit (spt).
 * 
 * spt is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, under version 3 of the License.
 *
 * spt is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with spt.  If not, see <http://www.gnu.org/licenses/>.
 * */

//Module Configuration
//Module Name - This is what will be displayed in the sidebar
$module_name = "Module_Name";
//Module Path - this is the directory that will be created in the root of spt where this module will be stored
$module_path = "module_path";
//Module Description - This is the description of the module that will be listed in the modules module
$module_description = "A brief description about your module";
//Module Date - This is the date the module was created (yyyy-mm-dd)
$module_date = "2012-01-01";
//Modure Core - You can specify if this is a core module or not.  Core = 1.  Non-Core = 0.  99% of the time this will be 0.
$module_core = 0;
//Module dependencies - Specify which modules this module depends on.  The first one depends on the second one.  Add additional entries by adding a comma and a new entry
$module_dependencies = array("'Your_Module_Name','Module_it_depends_on'", "'Your_Module_Name','Another_Module_it_depends_On'");
//Module Upgrade - If this is an upgrade set this value to 1
$module_upgrade = 0;

//Write Module Configuration to database or modify the database as necessary if an upgrade
$sql_module = "INSERT INTO `modules` VALUES ('".$module_name."','".$module_path."','".$module_description."','".$module_date."','".$module_core."')";
mysql_query($sql_module) or die(mysql_error());
foreach ($module_dependencies as $mod_dep) {
	$sql_dependencies = "INSERT INTO `modules_dependencies` VALUES (".$mod_dep.")";
	mysql_query($sql_dependencies) or die (mysql_error());
}

//Any Additional Installation modifications should go below this line

//Create a table for this module (table name is same as module name) (optional)
//$sql = "
//  CREATE TABLE `module_name` (
//      `id` int(10) NOT NULL AUTO_INCREMENT,
//      your_table_schema_here,
//      your_table_schema_here,
//      your_table_schema_here,
//      PRIMARY KEY (`id`)
//  )";
//mysql_query($sql) or die(mysql_error());
 
//Create additional tables (table name should reference module name, like 'moduleX_data1' (optional)
//$sql = "
//  CREATE TABLE `module_name` (
//      `id` int(10) NOT NULL AUTO_INCREMENT,
//      your_table_schema_here,
//      your_table_schema_here,
//      your_table_schema_here,
//      PRIMARY KEY (`id`)
//  )";
//mysql_query($sql) or die(mysql_error());   

//Modify existing tables...
//Copy files outside of the module directory...
?>