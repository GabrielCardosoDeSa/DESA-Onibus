<?php
sleep(5);
while (true)
{
    sleep(15);
    $codBus = "1";

    $text = file_get_contents("loc.txt");

    $array = explode(";",$text);

    foreach ($array as $arr)
    {
        $loc = explode(",",$arr);

        $lat = trim($loc[0]);
        $log = trim($loc[1]);

        $result = file_get_contents("http://robot-safira.000webhostapp.com/safira/api/updateLocBus.php?codBus=".$codBus."&lat=".$lat."&log=".$log."");
        echo '<br>';
        echo $result;
    }
    unlink("loc.txt");
    file_put_contents('loc.txt', " ");
}


header("Location: sendLocBus.php");