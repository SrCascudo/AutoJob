<?php
require_once '/opt/lampp/htdocs/AutoJob/jobs/manager/ManagerJobs.php';
class IndexController
{

    function startJobs(){
       $info = ManagerJobs::create();
       die($info);
    }

    function stopJobs(){
        ManagerJobs::delete();
    }

    function viewJobs(){
        $info = ManagerJobs::view();
        die($info);
    }
}
