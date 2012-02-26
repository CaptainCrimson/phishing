<?php
/**
 * file:		target_update.php
 * version:		2.0
 * package:		Simple Phishing Toolkit (spt)
 * component:	Target management
 * copyright:	Copyright (C) 2011 The SPT Project. All rights reserved.
 * license:		GNU/GPL, see license.htm.
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
**/

//start session
session_start();

//check for authenticated session
if($_SESSION['authenticated']!=1)
	{
		//for potential return
		$_SESSION['came_from']='targets';
		
		//set error message and send them back to login
		$_SESSION['login_error_message']="login first";
		header('location:../');
		exit;
	}

//check for session hijacking
elseif($_SESSION['ip']!=md5($_SESSION['salt'].$_SERVER['REMOTE_ADDR'].$_SESSION['salt']))
	{
		//set error message and send them back to login
		$_SESSION['login_error_message']="your ip address must have changed, please authenticate again";
		header('location:../');
		exit;
	}

//make sure the user is an admin
	if($_SESSION['admin']!=1)
		{
			$_SESSION['targets_alert_message'] = "you do not have permission to update targets";
			header('location:../targets/#alert');
			exit;
		}
		
//set target id
$target_id=$_POST['id'];

//set target type
$target_column=$_POST['column'];

//set target data
$target_data=$_POST['data'];

//connect to database
include "../spt_config/mysql_config.php";

//update
mysql_query("UPDATE targets SET $target_column = '$target_data' WHERE id= '$target_id'");
		
?>
