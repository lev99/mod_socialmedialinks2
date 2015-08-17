<?php 
/* 
* @author Dallas Moore
* Email : Dallas@viperwebistes.com
* URL : www.viperwebsites.com
* Description : This module displays icon links to your social media profiles.
* Copyright (c) 2008-2010 Viper Web Solutions
* License GNU GPL
***/

// no direct access
defined('_JEXEC') or die;

// Leonidas reference parameters
$mod_name               = "mod_socialmedialinks2";
$mod_copyrights_start   = "\n\n<!-- Leonidas \"Social Media Icon Links 2\" Module (v2.4.1) starts here -->\n";
$mod_copyrights_end     = "\n<!-- Leonidas \"Social Media Icon Links 2\" Module (v2.4.1) ends here -->\n\n";

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
