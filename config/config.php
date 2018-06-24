<?php

Config::set('site_name', 'The.cx.ua');

Config::set('languages', array('ru'));

Config::set('static_controller_head', 'head');
Config::set('static_controller_footer', 'footer');

Config::set('static_action_head','index');
Config::set('static_action_footer','index');

// Routes. Route name => method prefix
Config::set('routes', array(
    'default' => '',
    'admin'   => 'admin_',
));

Config::set('default_route', 'default');
Config::set('default_language', 'ru');
Config::set('default_controller', 'tasks');
Config::set('default_action', 'index');

Config::set('db.host', 'localhost');
Config::set('db.user', 'homestead');
Config::set('db.password', 'secret');
Config::set('db.db_name', 'the_db');

Config::set('salt', 'jd7sj3sdkd964he7e');