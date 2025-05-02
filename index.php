<?php
require 'vendor/autoload.php';
use Src\DbConnection; 
$db = new Database();
$conn = $db->getConnection();
$view_blade = './index.blade.php';
include './layouts/default.php';
