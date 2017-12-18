<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();


$autoload['libraries'] = array('database','form_validation','session');

$autoload['drivers'] = array('cache');

$autoload['helper'] = array('url','file','form','text');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('login_model','student_model','admin_model','teacher_model','news_model','post_model','home_model');
