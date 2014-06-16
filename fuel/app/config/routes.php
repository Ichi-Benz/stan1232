<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
    'admin/addvideo' => array('admin/addvideo'),
    'admin/editvideos' => array('admin/editvideos'),
);