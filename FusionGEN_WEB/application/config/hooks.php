<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/userguide3/general/hooks.html
|
*/

$hook['pre_system'][] = array(
    'class'    => '',
    'function' => 'cf_get_real_ip',
    'filename' => 'Cf_get_real_ip.php',
    'filepath' => 'hooks'
);

$hook['post_controller_constructor'][] = array(
    'class'    => 'Auto_update',
    'function' => 'run',
    'filename' => 'Auto_update.php',
    'filepath' => 'hooks'
);