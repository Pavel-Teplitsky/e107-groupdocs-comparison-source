<?php

include_lan(e_PLUGIN."groupdocs_comparison/languages/groupdocs_comparison_".e_LANGUAGE.".php");

// Plugin info
$eplug_name = "GroupDocs Comparison";
$eplug_version = "1.0";
$eplug_author = "GroupDocs Team";
$eplug_url = "http://www.groupdocs.com";
$eplug_email = "support@groupdocs.com";
$eplug_description = GDCLAN_01;
$eplug_compatible = "e107v0.7+";
$eplug_readme = "readme.txt";
$eplug_compliant = TRUE;
$eplug_link = FALSE;
$eplug_done = GDCLAN_03;
$eplug_upgrade_done = GDCLAN_04;

// Plugin directories
$eplug_folder = "groupdocs_comparison";
$eplug_icon = $eplug_folder."/images/icon_32.png";
$eplug_icon_small = $eplug_folder."/images/icon_16.png";

// Plugin config file
//$eplug_conffile = "admin_config.php";
$eplug_caption = GDCLAN_02;

// List of preferences
$eplug_prefs = array(
'groupdocs_comparison_version' => $eplug_version 
);

// Plugin Update
if(!function_exists("groupdocs_comparison_upgrade")){
    function groupdocs_comparison_upgrade(){
        $upgrade_add_prefs = array(
        'groupdocs_comparison_version' => $eplug_version 
        );	
    }
}
// Plugin Install
if (($pref['plug_installed']['groupdocs_comparison'])  == "1.0") {
    $upgrade_add_prefs = array(
    'groupdocs_comparison_version' => $eplug_version 
    );		
    $eplug_upgrade_done = GDCLAN_03 . $eplug_version;
}
// Plugin Remove
if(!function_exists("groupdocs_comparison_uninstall")){
    function groupdocs_comparison_uninstall()	{
        $upgrade_remove_prefs = array(
        'groupdocs_comparison_version' ,
        );	
    }
}

?>