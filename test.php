<?php
require "main.php";
$tpl->assign("title", "Test Smarty");
$tpl->assign("content", "Hello World!!!");
$tpl->display('test.html');
