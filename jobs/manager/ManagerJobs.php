<?php
class ManagerJobs
{
    static $SUDO = "echo '123456' | sudo -S ";

    static function create() {
        $output = null;
        system(ManagerJobs::$SUDO."php /opt/lampp/htdocs/AutoJob/jobs/manager/GenerateJobs.php", $output);
        return $output;
    }

    static function delete(){
        exec(ManagerJobs::$SUDO."crontab -r");
    }

    static function view(){
        return shell_exec(ManagerJobs::$SUDO."crontab -l");
    }

}