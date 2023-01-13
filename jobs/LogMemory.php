<?php
$diretorio = '/home/srcascudo/LogMemory.txt';
$mode = file_exists($diretorio) ? 'a' : 'w';

$logMemory = fopen($diretorio, $mode);

$output = null;
exec('free -m', $output);

$dados = $mode == 'w' ? $output[0] . "\n" : '';
$dados .= $output[1] . "\n";
fwrite($logMemory, print_r($dados, true));
fclose($logMemory);