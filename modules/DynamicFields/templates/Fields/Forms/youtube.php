<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/**
 * Retrieve template content
 *
 * @return string
 */	
function get_body(&$ss, $vardef)
{
	$vars = $ss->get_template_vars();
	$fields = $vars['module']->mbvardefs->vardefs['fields'];
	$fieldOptions = array();
	
	foreach($fields as $id => $def) {
		$fieldOptions[$id] = $def['name'];
	}
	$ss->assign('fieldOpts', $fieldOptions);
	return $ss->fetch('custom/modules/DynamicFields/templates/Fields/Forms/youtube.tpl');
 }