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
class TemplateYoutube 
	extends TemplateField
{
    /**
     * Field type
	 *
     * @var string
     */	
	var $type = 'youtube';
	
	function __construct()
	{
		$this->vardef_map['width'] = 'ext1';
		$this->vardef_map['height'] = 'ext2';
		$this->vardef_map['list_width'] = 'ext3';
		$this->vardef_map['list_height'] = 'ext4';		
	}
	
    /**
     * Setter
     *
     * @return void
     */	 	
	function set($values)
	{
		parent::set($values);
	   
		if(!empty($this->ext1)){
			$this->width = $this->ext1;
		}
		if(!empty($this->ext2)){
			$this->height = $this->ext2;
		}
		if(!empty($this->ext3)){
			$this->list_width = $this->ext3;
		}
		if(!empty($this->ext4)){
			$this->list_height = $this->ext4;
		}		
	}	
	
    /**
     * Retrieve db field type
     *
     * @return string
     */	 
    function get_field_def()
	{
		$def = parent::get_field_def();
		$def['dbType'] = 'varchar';
		
		if (isset($this->ext1) && isset($this->ext2)) {
			$def['width'] = $this->ext1;
			$def['height'] = $this->ext2;
		}
		
		if (isset($this->ext3) && isset($this->ext4)) {
			$def['list_width'] = $this->ext3;
			$def['list_height'] = $this->ext4;
		}
		
	    if (isset($this->width) && isset($this->height)) {
            $def['width'] = $this->width;
            $def['height'] = $this->height;
        }		
	
	    if (isset($this->list_width) && isset($this->list_height)) {
            $def['list_width'] = $this->list_width;
            $def['list_height'] = $this->list_height;
        }	
		
		return $def;	
	}
}