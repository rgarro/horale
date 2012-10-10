<?php
if(!defined('DP_BASE_DIR')){
	die('Que onda wey?');
}

/**
 * Name: horale
 * Directory: horale
 * Version: 1.0
 * Type: User
 * UI Name: Horale
 * UI Icon: ?
 * 
 */ 
$config = array();
$config['mod_name'] = 'Horale';
$config['mod_version'] = '1.0';
$config['mod_directory'] = 'horale';
$config['mod_setup_class'] = 'cSetupHorale';
$config['mod_type'] = 'user';
$config['mod_ui_name'] = 'Horale';
$config['mod_ui_icon'] = "tr.jpeg";
$config['mod_description'] = "Time Reports";
$config['mod_config'] = false;
$config['permissions_item_table'] = 'horaledash';
$config['permissions_item_field'] = 'horaledash_id';
$config['permissions_item_label'] = 'report_name';

if(@$a == 'setup'){
	echo dPshowModuleConfig($config);
}

class cSetupHorale{
	
	function configure(){
		return true;
	}

	function upgrade(){
		return true;		
	}

	function install(){
		$q = new DBQuery();
		$q->createTable('horaledash');
		$q->createDefinition("(
			`horaledash_id` int(11) NOT NULL AUTO_INCREMENT,
			`report_name` varchar(255) NOT NULL DEFAULT ' ',
			PRIMARY_KEY(`horaledash_id`)
		) TYPE= MYISAM ");
		$q->exec($sql);
		return NULL;
	}
	
	function remove(){
		$q = new DBQuery();
		$q->dropTable('horaledash');
		$q->exec();
	}
	
}