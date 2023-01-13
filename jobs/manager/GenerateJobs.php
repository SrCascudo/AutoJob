<?php
$dir = '/opt/lampp/htdocs/AutoJob/jobs/manager/cron/job.txt';
$file = fopen($dir, 'w');
fwrite($file,'');
fclose($file);

/*
    Instruções para passagem do parâmetro Cron:

    . _____________ Minutos
    | . ___________ Horas (no formato de 24 horas)
    | | . _________ Dia do Mês (de 1 a 31)
    | | | . _______ Mês (Ex: 1, 2, ..., 8, ..., 12 )
    | | | | . _____ Dia da Semana (Ex: Sun, Mon, Tue)
    | | | | |
    * * * * *

    O asteristico indica que aquela informação não será definida no agendamento da tarefa, o Cron
    define o espaço de tempo que deve ser respeitado para repetição da tarefa, por exemplo a seguente sintaxe
    diz uma tarefa sera executada a cada 10 minutos:

        * /10 * * * *

    Essa outra indica que uma tarefa será executada todos os dias a 14 horas

        0 * /14 * * *

 */

create('* * * * *', '/opt/lampp/htdocs/AutoJob/jobs/LogMemory.php', 'Log de Memória');

function create($cron, $arquivo, $chave){
    if (strrpos($arquivo, '.php') === false){
        die($chave . " : Falha 😞");
    }

    $diretorio = '/opt/lampp/htdocs/AutoJob/jobs/manager/cron/job.txt';
    exec("echo '$cron php $arquivo \n' >> $diretorio");
    exec('crontab ' . $diretorio);
    die($chave . " : Sucesso 😄"." \n");
}