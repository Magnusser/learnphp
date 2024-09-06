<?php

class ConsoleLogger implements Logger{
    public function log($message){
        echo "$message\n";
    }
}

class Task {
    public function work($logger){
        for($i=0;$i<10;$i++){
            $logger->log($i);
        }
    }
}

class NothingLogger implements Logger{
    public function log($message){

    }
}

class FileLogger implements Logger{
    public function log($message){
        $file = fopen('log.txt', 'a');
        fwrite($file, "$message\n");
        fclose($file);
    }
}

interface Logger {
    public function 
}

$logger = new FileLogger();
$task = new Task();
$task->work();

?>
