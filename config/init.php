<?php
date_default_timezone_set('America/Chicago');
session_start();


include('config/config.php');
include('include/db_query.php'); //THIS NEEDS TO HAPPEN RIGHT AFTER CONFIG SO THAT THE OTHER FUNCTIONS HAVE ACCESS TO THE DB
include('include/layouts.php');
include('admin/posts.php');
include('admin/tags.php');
include('admin/admin.php');
include('admin/inputs.php');
include('admin/users.php');
include('admin/tasks.php');
// include('js/javascript.php');
// include('login/login.php');

include('include/layouts-v1.php');

include('admin/cities.php');