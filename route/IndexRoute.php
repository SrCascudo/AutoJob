<?php
require_once '/opt/lampp/htdocs/AutoJob/controller/IndexController.php';

$index = new IndexController();

if (isset($_POST['btn_start'])){
    $index->startJobs();
}

if (isset($_POST['btn_stop'])){
    $index->stopJobs();
}

if (isset($_POST['btn_view'])){
    $index->viewJobs();
}