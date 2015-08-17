<?php
/* 
* @author Dallas Moore
* Email : Dallas@viperwebistes.com
* URL : www.viperwebsites.com
* Description : This module displays icon links to your social media profiles.
* Copyright (c) 2008-2010 Viper Web Solutions
* License GNU GPL
***/
#######################################################################################################
## Title............: Social Media Icon Links 2                                                      ##
## Description......: module uses the Mono Social Icons for Joomla CMS                               ##
## Author...........: Leonidas                                                                       ##
## Version..........: 2.4.1                                                                          ##
## Created date.....: 22.10.2013                                                                     ##
## Contact info.....: url: www.foto-s.ru / e-mail: leonidas78@mail.ru                                ##
## Joomla Version...: 2.5.х and 3.1.x Stable and high                                                ##
## Note.............: This script is a part of Social Media Icon Links 1.6 package.                  ##
## Based............: on Social Media Icon Links 1.6 by Dallas Moore [http://www.viperwebsites.com]  ##
#######################################################################################################

// no direct access
defined('_JEXEC') or die;

$nameimgsoc 			= $params->get('nameimgsoc','one');
 
$document =& JFactory::getDocument();
$mod = JURI::base() . 'modules/mod_socialmedialinks2/';
$document->addStyleSheet(JURI::base() . 'modules/mod_socialmedialinks2/css/pluralist_homepage_'.$nameimgsoc.'.css');


//jQuery
if ($params->get('off_jquery1')==1) {
$document =& JFactory::getDocument();
$document->addScript('modules/mod_socialmedialinks2/js/jquery-2.1.4.js' );
};
//tipsy - Facebook-style tooltip plugin for jQuery
if ($params->get('off_tipsy1')==1) {
$document =& JFactory::getDocument();
$document->addScript('modules/mod_socialmedialinks2/js/jquery.tipsy.js' );
$document->addScript('modules/mod_socialmedialinks2/js/tipsy.js' );
$document->addStyleSheet('modules/mod_socialmedialinks2/css/tipsy.css' );
};

// Get Basic Module Parameters 
	$target 			= $params->get('target','_blank');
	$robots				= $params->get('robots','1');
	$align 				= $params->get('align','left'); 
	$margin				= $params->get('margin','2px'); 
	$text 				= $params->get('text','Follow us on'); 
	$rsstext 			= $params->get('rsstext','Subscribe to our Feed'); 
	$credits 			= $params->get('credits','1'); 

// Prepare the Link Attribute
	if($robots == '1') {
	$nofollow = 'rel="nofollow"';
	}else{
	$nofollow = '';
	}

// Prepare the Icon Alignment Style
	$alignstyle = "text-align: $align ";

// Get Icon Parameters
$ic = array(
	$params->get('ic1'), $params->get('ic2'), $params->get('ic3'), $params->get('ic4'), $params->get('ic5'), 
	$params->get('ic6'), $params->get('ic7'), $params->get('ic8'), $params->get('ic9'), $params->get('ic10'),
	$params->get('ic11'),$params->get('ic12'),$params->get('ic13'),$params->get('ic14'),$params->get('ic15'),
	$params->get('ic16'),$params->get('ic17'),$params->get('ic18'),$params->get('ic19'),$params->get('ic20'),
	$params->get('ic21'),$params->get('ic22'),$params->get('ic23'),$params->get('ic24'),$params->get('ic25'),
	$params->get('ic26'),$params->get('ic27'),$params->get('ic28'),$params->get('ic29'),$params->get('ic30'),
	$params->get('ic31'),$params->get('ic32'),$params->get('ic33'),$params->get('ic34'));

$url = array(
	$params->get('url1'), $params->get('url2'), $params->get('url3'), $params->get('url4'), $params->get('url5'), 
	$params->get('url6'), $params->get('url7'), $params->get('url8'), $params->get('url9'), $params->get('url10'), 	
	$params->get('url11'), $params->get('url12'), $params->get('url13'), $params->get('url14'), $params->get('url15'), 
	$params->get('url16'), $params->get('url17'), $params->get('url18'), $params->get('url19'), $params->get('url20'), 	
	$params->get('url21'), $params->get('url22'), $params->get('url23'), $params->get('url24'), $params->get('url25'), 
	$params->get('url26'), $params->get('url27'), $params->get('url28'), $params->get('url29'),	$params->get('url30'),	
	$params->get('url31'), $params->get('url32'), $params->get('url33'), $params->get('url34') );
	
	$vimg = array();
    $vurl = array();
	
// Set Wrapping Div
	echo $mod_copyrights_start; 
	echo '<div id="navlist_stor" style="'. $alignstyle .'"> ';
	
// Prepare the Icon List
	for($i=0;$i < count($ic);$i++)
     {   
     $vimg[$ic[$i]]= htmlspecialchars($url[$i]);
	 $vurl[$url[$i]]=$ic[$i];
	 $title = ucwords(substr($vurl[$url[$i]], 0 ));
	 
// Output the Icon Links	
	 	 if(($vimg[$ic[$i]]) != '') {
		 	
			echo '<a style="margin:'.$margin.';" '. $nofollow .' href="'. $vimg[$ic[$i]]. '" target="'. $target .'" class=" south sprait_social '. $vurl[$url[$i]] .' " '; if($title == 'Feed') { echo 'title="'. $rsstext .'" ></a>';}else{ echo 'title="'. $text .' '. $title .'" ></a>';}
		 }
	 } 

			if($credits == '1') :
				echo '<div id="smilecredits-footer" style="text-align:'. $alignstyle .';margin: 0px '.$margin.' 0px '.$margin.';"><a href="http://www.foto-s.ru/modul-social-media-icon-links-2.html" title="Social Media Icons Links 2 for Joomla!">S.M.I.L.2</a></div>';
			endif;
			
// Output content with template
require JModuleHelper::getLayoutPath($mod_name,$params->get('layout', 'default'));
echo $mod_copyrights_end;
?>
