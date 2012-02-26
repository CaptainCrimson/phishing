<?php
/**
 * file:		index.php
 * version:		4.0
 * package:		Simple Phishing Toolkit (spt)
 * component:	Template management
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
			$_SESSION['came_from']='templates';
			
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
?>
<!DOCTYPE HTML> 
<html>
	<head>
		<title>spt - templates</title>
		
		<!--meta-->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="welcome to spt - simple phishing toolkit.  spt is a super simple but powerful phishing toolkit." />
		
		<!--favicon-->
		<link rel="shortcut icon" href="../images/favicon.ico" />
		
		<!--css-->
		<link rel="stylesheet" href="../spt.css" type="text/css" />
		<link rel="stylesheet" href="spt_templates.css" type="text/css" />
	</head>
	<body>
		<div id="wrapper">
			<!--sidebar-->
			<?php include '../includes/sidebar.php'; ?>					

			<!--content-->
			<div id="content">
				<?php
					//check to see if the alert session is set
					if(isset($_SESSION['templates_alert_message']))
						{
							//create alert popover
							echo "<div id=\"alert\">";

							//echo the alert message
							echo "<div>".$_SESSION['templates_alert_message']."<br /><br /><a href=\"\"><img src=\"../images/left-arrow.png\" alt=\"close\" /></a></div>";
							
							//unset the seession
							unset ($_SESSION['templates_alert_message']);
							
							//close alert popover
							echo "</div>";
						}
				?>
				<span class="button"><a href="#add_template"><img src="../images/plus_sm.png" alt="add" /> Template</a></span>
				<table class="spt_table">
					<tr>
						<td><h3>ID</h3></td>
						<td><h3>Name</h3></td>
						<td><h3>Description</h3></td>
						<td><h3>Screenshot</h3></td>
						<td><h3>Delete</h3></td>
					</tr>
					
					<?php
					
						//connect to database
						include "../spt_config/mysql_config.php";
						
						//pull in list of all templates
						$r = mysql_query("SELECT * FROM templates") or die('<div id="die_error">There is a problem with the database...please try again later</div>');
						while ($ra = mysql_fetch_assoc($r))
							{
								echo	"
									<tr>
										<td><a href=\"".$ra['id']."\">".$ra['id']."</a></td>\n
										<td>".$ra['name']."</td>\n
										<td>".$ra['description']."</td>\n
										<td><img class= \"drop_shadow\" src=\"".$ra['id']."\screenshot.png\" alt=\"missing screenshot\" /></td>\n
										<td><a href=\"delete_template.php?t=".$ra['id']."\"><img src=\"../images/trash_sm.png\" alt=\"delete\" /></a></td>\n
										
									</tr>\n";
							}
					?>
				</table>
				<form method="post" action="upload_template.php" enctype="multipart/form-data">
					<div id="add_template">
						<div>
							<table id="add_template_zip">
								<tr>
									<td>Name</td>
									<td><input name="name" /></td>
								</tr>
								<tr>
									<td>Description</td>
									<td><textarea name="description" cols=50 rows=4></textarea></td>
								</tr>
								<tr>
									<td></td>
									<td><input type="file"  name="file" /></td>
								</tr>
								<tr>
									<td></td>
									<td>
										<br />
										<a href=""><img src="../images/x.png" alt="close" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="image" src="../images/plus.png" alt="add" />
									</td>
								</tr>
							</table>
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>