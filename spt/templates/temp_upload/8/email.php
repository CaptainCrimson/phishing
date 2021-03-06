<?php

/**
 * file:    email.php
 * version: 2.0
 * package: Simple Phishing Toolkit (spt)
 * component:	Email template - Quick Start campaign templates (Elavon)
 * copyright:	Copyright (C) 2011 The SPT Project. All rights reserved.
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

//this is the email template

//populate the variables below with what you want the email to look like
//the variable @link will be generated by the application, just place the
//variable @link somewhere in the email.

//You can also use @fname (first name), @lname (last name) and @url (phishing url).
$subject = 'Elavon Merchant Account Status';

//This will set the sender's name and email address as well as reply to address
$sender_email = "security@elavon.com";
$sender_friendly = "Account Administrator";
$reply_to = "no-reply@elavon.com";

//Set the Content Type and transfer encoding
$content_type = "text/html; charset=utf-8";

//Set the fake link
$fake_link = "https://www.merchantconnect.com/CWRWeb/displayMemberLogin.do";

//This will populate the body of the email
$message = '<html><body>Dear Elavon customer,<br /><br />Your Elavon Merchant Account is about to expire.<br /><br />To continue using the MyVirtualMerchant portal, your account must be renewed.  You may renew your account, at no cost to you, by logging into your account at the link below.<br /><br />@link<br /><br />If your Elavon Merchant Account is not renewed this month, it will be closed permanently and you will need to open a new Elavon Merchant Account to continue using the MyVirtualMerchant portal.  We hope that your Elavon Merchant Account has been a valuable part of your business.<br /><br /><br />MESSAGE ID:  42IDQERF4JM3FDD4DS55K25HNSASGJ65L38Q8342<br /><br /><br />Copyright Elavon, Inc.  All Rights Reserved.<br /><br />Received this message in error?  Please visit our <a href=@url>Customer Service</a> pages to report this occurence to us.</body></html>';
?>