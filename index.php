<!DOCTYPE HTML>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Getting started with using Ohanae">
		<meta charset="utf-8">

		<link type="text/css" rel="stylesheet" href="stylesheet_tut.css">
		<link type="text/css" rel="stylesheet" href="common/header.css">
		<link type="text/css" rel="stylesheet" href="common/footer.css">
		
		<script type="text/javascript" src="resources/plugins/jquery-1.10.0.js"></script> 
        <script type="text/javascript" src="resources/scripts/jquery.client.min.js"></script>
        <script type="text/javascript" src="resources/scripts/detectdevice.js"></script>
        <script type="text/javascript" src="resources/scripts/jquery.js"></script>
		
		<title>Ohanae: Tutorial</title>
	</head>
<!--
TODO:
1. Make sure the light grey part is 1000*484.
2. How to do the Back to top visible only when top is not visible.
-->
<body>
	<a id="top"></a>
	<div id="backtotop">
		<a href="#top"><img src="/resources/images/backtotop(50).png" style="width:50px"></a>
	</div>
	
	<?php include $path.'/common/header.php'; ?>
	
	<div id="pg1" class="content">
		<h1>Getting Started</h1>
		<p2>Thank you for using Ohanae! 
		<br/><br/>
		Spend a few minutes going through this guide to learn 
		some basics of Ohanae to make the most of it. 
		</br></br>
		Before getting started, here are a few terms 
		that will be used throughout this tutorial:
		<br/></br/>
		</p2>
		<p3>
		<ul>
			<li>
			Ohanae Account: 
			Your account registered with Ohanae including a 
			username and passphrase or password.
			</li>
			
			<li>Private Files:
			Your personal files with sensitive information. These
			are stored in designated folders, or in ordinary folders 
			in an encrypted form.
			</li>
			
			<li>Secure Folder:
			Designated folders and drive, in which all files are private.
			</br>
			</li>
			
	<!--		<li>
			<p>1-Tap Login:
			1-Tap Login allows you to log into multiple accounts 
			for different services only through 1 click. Ohanae manages 
			all your passwords. You simply need to select your username.
			</p>
			</li>
			
			<li>Secure Workplace:
			Ohanae Secure Workplace ensures your secure 
			information is not compromised. Secure Workplace enables you to 
			work conveniently with your files, while ensuring that you do 
			not leave work file with sensitive information unencrypted on a device. 
			</br>
			</li>
			
			<li>Secure Drive:
			Ohanae Secure Drive enables you to coveniently store data while 
			protecting you from security threats to private data. It encrypts 
			and stores your data locally as well as on the cloud.
			</br>
			</li>
			
			<li>Secure File Sharing Client:
			The online website that manages access control for encrypted 
			files and folders, allowing users to add new groups and members 
			who can view private documents.
			</br>
			</li>		-->
		</ul>
		</p3>
	</div>

	<div id="navBar">
		<div id="links">
			<a href="http://www.google.com">Windows</a>
			<a href="#information_protection">Mac OS</a>
			<a href="#cloud_compliance">iOS</a>
			<a href="#cloud_compliance">Android</a>
			<a href="#cloud_compliance">Windows Phone</a>
			<a href="#cloud_compliance">Windows RT</a>
		</div>
	</div>	
	
	<div id="pg3" class="content">
		<h2>Features</h2>
		
		<table cellpadding="20" cellspacing="10">
			<tr>
				<td><p1>1-Tap Login</p1><br>
					<p2>1-Tap Login allows you to log into multiple accounts for different services only through 1 click. Ohanae manages all your passwords. You simply need to select your username.</p2>
			<!--		<p2>
					<ul>
						<li>1 click login only, simply select your username</li>
						<li>Generates and manages complex passwords for your security</li>
						<li>Unique password for multiple accounts</li>
					</ul>
					</p2> -->
				</td>
			
			<td>
				<p1>Secure Drive</p1> <br>
				<p2>Ohanae Secure Drive enables you to conveniently store data while protecting you from security threats. It encrypts and stores your data locally as well as on the cloud.</p2>
			</td>
			
			</tr>
			
			<tr>
			<td><p1>Secure Workplace<p1><br>
					<p2>Ohanae Secure Workplace ensures your secure information is not compromised. It enables you to work conveniently with your files, while ensuring that you do not leave work file with sensitive information unencrypted on a device. </p2>

			<!--	<p2>
				<ul>
					<li>Ensures secure information is not compromised</li>
					<li>Work conveniently with your files</li>
					<li> No fear of leaving sensitive information unencrypted on a public device</li>
				</ul>
				</p2>	-->
			</td>
			<td><p1>Secure File Sharing<p1><br>
					<p2>Ohanae enables you to provide access to specific people to be able to read your encrypted files when you share with them. A Secure File Sharing Client, or an online portal is available to manage access control for encrypted files and folders.</p2>
			</td>
			</tr>
		</table>
	<!--	
		<p1>1-Tap Login</p1>
		<p2>1-Tap Login allows you to log into multiple accounts for different services only through 1 click. Ohanae manages all your passwords. You simply need to select your username.</p2>
		<br><br>
		<p1>Secure Workplace</p1>
		<p2>Ohanae Secure Workplace ensures your secure information is not compromised. Secure Workplace enables you to work conveniently with your files, while ensuring that you do not leave work file with sensitive information unencrypted on a device. </p2>
		<br><br>
		<p1>Secure Drive</p1>
		<p2>Ohanae Secure Drive enables you to coveniently store data while protecting you from security threats to private data. It encrypts and stores your data locally as well as on the cloud.</p2>
		<br><br>
		<p1>Secure File Sharing</p1>
		<p2>Ohanae enables you to provide access to specific people to be able to read your encrypted files when you share with them. A Secure File Sharing Client, or an online portal is available to manage access control for encrypted files and folders.</p2>
	-->	
	</div>
	<?php include $path.'/common/footer.php'; ?>
</body>
</html>