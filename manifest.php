<?php
/**
 * Faonni
 *  
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade module to newer
 * versions in the future.
 * 
 * @package     Field_Youtube
 * @copyright   Copyright (c) 2016 Karliuka Vitalii(karliuka.vitalii@gmail.com) 
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
$manifest =
        array(
            'acceptable_sugar_versions' =>
            array('regex_matches' =>array('6\\.*',),),'aceptable_sugar_flavors' =>array('CE','PRO','CORP','ENT','ULT',),
            'name' => 'Youtube Field',
            'description' => 'Module is creating a new type of field for rendering a YouTube video.',
            'version' => '0.5',
            'author' => 'Karliuka Vitalii',
            'readme' => 'README.md',
            'icon' => '',
            'is_uninstallable' => true,
            'published_date' => '2015-02-15 17:00:00',
            'type' => 'module',
        	'remove_tables' => 'false',
);

$installdefs =
        array(
            'id' => 'Youtube-ini',
            'copy' =>
            array(
            	array(
            		'from' => '<basepath>/include/SugarFields/Fields/Youtube',
            		'to' => 'custom/include/SugarFields/Fields/Youtube',
            	),
            	array (
            		'from' => '<basepath>/modules/DynamicFields/templates/Fields/TemplateYoutube.php',
            		'to' => 'custom/modules/DynamicFields/templates/Fields/TemplateYoutube.php',
            	),
            	array (
            		'from' => '<basepath>/modules/ModuleBuilder/Ext/Language/en_us.youtube.php',
            		'to' => 'custom/Extension/modules/ModuleBuilder/Ext/Language/en_us.youtube.php',
            	),            		
            ),

);