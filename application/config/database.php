<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$active_group = 'default';
$active_record = TRUE;


$db['default']['hostname'] = $GLOBALS['wl_db']['hostname'];
$db['default']['username'] = $GLOBALS['wl_db']['username'];
$db['default']['password'] = $GLOBALS['wl_db']['password'];
$db['default']['database'] = $GLOBALS['wl_db']['database'];
$db['default']['dbdriver'] = 'mysql';
$db['default']['dbprefix'] = 'wl_';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = $GLOBALS['wl_ts']['db_debug'];
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = 'wl_';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;


/* End of file database.php */
/* Location: ./application/config/database.php */