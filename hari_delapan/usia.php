<?php 

//switch-case --> percabangan

$Hari=6;

switch($Hari){
    case 1:
        $Hari="ahad";
        break;
    case 2:
        $Hari="senin";
        break;
    case 3:
        $Hari="selasa";
        break;
    case 4:
        $Hari="rabu";
        break;
    case 5:
        $Hari="kamis";
        break;
    case 6:
        $Hari="jum'at";
        break;
    case 7:
        $Hari="sabtu";
        break;
        default:
        $Hari="";
    }

    echo $Hari;