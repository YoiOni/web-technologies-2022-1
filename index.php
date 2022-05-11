<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PhotoGallery</title>
</head>
<body>
<?php

renderPhoto("lesson7-photo");
date_default_timezone_set("Asia/Yekaterinburg");
$date= date("r");
logRequest($date);

function renderPhoto($path){
    $photoArray= scandir($path);
    unset($photoArray[0], $photoArray[1]);
    foreach ($photoArray as $photo){
        //echo($photo."<br>");
        $ref=$path."/".$photo;
        echo('<a href="'.$ref.'" target="_blank"><img src="'.$ref.'" width=170px></a>');
    }
}

function logRequest($date){
    $log_dir= __DIR__ . DIRECTORY_SEPARATOR;
    $logs=scandir($log_dir);
    if(count($logs)==2){
        file_put_contents($log_dir.DIRECTORY_SEPARATOR."log0.txt",$date.PHP_EOL);
    }
    else{
        unset($logs[0],$logs[1]);
        natsort($logs);
        $last_log=end($logs);
        $log_data=explode(PHP_EOL,file_get_contents($log_dir.DIRECTORY_SEPARATOR.$last_log));
        if(count($log_data)-1>=10){
            $log_number = +preg_replace('/[^0-9]/', '', $last_log)+1;
            file_put_contents($log_dir.DIRECTORY_SEPARATOR."log".$log_number.".txt",$date.PHP_EOL);
        }
        else{
            file_put_contents($log_dir.DIRECTORY_SEPARATOR.$last_log,$date.PHP_EOL, FILE_APPEND );
        }
    }
}
?>
</body>
</html>