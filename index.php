<?php

// Check if the installation was cleaned up & secured
if(file_exists("Cleanup.sh"))
{
	echo("Please clean up and secure your installation via ./Cleanup.sh!");
	exit(1);
}

// Include the vendor directory and the website
require_once('vendor/autoload.php');
require_once('cms/website.php');

// Display a website site
try
{
	// Create a LDAP configuration if you whish to use a LDAP server as backend system
	// $ldapconfiguration = new LdapConfiguration("smb42", "webcms.org");
	$ldapconfiguration = null;
	
	// Create the configuration
	$configuration = new Configuration("WebCMS", "/text/show/1", "127.0.0.1", "root", "123456aA", "webcms", $ldapconfiguration);
	
	// Create the website
	$website = new Website($configuration);
	
	// Display the site
	echo($website->getDisplayableSite());
}
catch(Exception $exception)
{
	// Display the exception
	echo($exception->getMessage());
}
?>
