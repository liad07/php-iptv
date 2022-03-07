<?php
$link="https://liad07.github.io/crack-apps.github.io/assets/iptv/iptv%20project/";
$chanel=readline('please enter the chanel');
if ($chanel=="ספורט1"||$chanel=="ספורט 1"||$chanel=="51"){
    $tempch="";
    $tempch=readline('did you mean sport 1 ? yes/no ');
    $tempch=strtolower($tempch);
    if ($tempch=="yes"||($tempch=="כן")){
        $chanel="sport1";
    }
}
if ($chanel=="ספורט2"||$chanel=="ספורט 2"||$chanel=="52"){
    $tempch="";
    $tempch=readline('did you mean sport 2 ? yes/no ');
    $tempch=strtolower($tempch);
    if ($tempch=="yes"||($tempch=="כן")){
        $chanel="sport2";
    }
}
if ($chanel=="ספורט3"||$chanel=="ספורט 3"||$chanel=="53"){
    $tempch="";
    $tempch=readline('did you mean sport 3 ? yes/no ');
    $tempch=strtolower($tempch);
    if ($tempch=="yes"||($tempch=="כן")){
        $chanel="sport3";
    }
}
if ($chanel=="ספורט4"||$chanel=="ספורט 4"||$chanel=="54"){
    $tempch="";
    $tempch=readline('did you mean sport 4 ? yes/no ');
    $tempch=strtolower($tempch);
    if ($tempch=="yes"||($tempch=="כן")){
        $chanel="sport4";
    }
}
if ($chanel=="ספורט5"||$chanel=="ספורט 5"||$chanel=="55"){
    $tempch="";
    $tempch=readline('did you mean sport 5 ? yes/no ');
    $tempch=strtolower($tempch);
    if ($tempch=="yes"||($tempch=="כן")){
        $chanel="sport5";
    }
}
if ($chanel=="ספורט5פלוס"||$chanel=="ספורט 5 פלוס"||$chanel=="56"){
    $tempch="";
    $tempch=readline('did you mean  sport 5 plus ? yes/no ');
    $tempch=strtolower($tempch);
    if ($tempch=="yes"||($tempch=="כן")){
        $chanel="sport5plus";
    }
}
if ($chanel=="ספורט5לייב"||$chanel=="ספורט 5 לייב"||$chanel=="57"){
    $tempch="";
    $tempch=readline('did you mean  sport 5 live ? yes/no ');
    $tempch=strtolower($tempch);
    if ($tempch=="yes"||($tempch=="כן")){
        $chanel="sport5live";
    }
}
if ($chanel=="ספורט5גולד"||$chanel=="ספורט 5 גולד"||$chanel=="58"){
    $tempch="";
    $tempch=readline('did you mean  sport 5 gold ? yes/no ');
    $tempch=strtolower($tempch);
    if ($tempch=="yes"||($tempch=="כן")){
        $chanel="sport5gold";
    }
}
if ($chanel=="כאן11"||$chanel=="כאן 11"||$chanel=="11"){
    $tempch="";
    $tempch=readline('did you mean  kan11 ? yes/no ');
    $tempch=strtolower($tempch);
    if ($tempch=="yes"||($tempch=="כן")){
        $chanel="kan11";
    }
}
if ($chanel=="קשת12"||$chanel=="קשת 12"||$chanel=="12"){
    $tempch="";
    $tempch=readline('did you mean  keshet12 ? yes/no ');
    $tempch=strtolower($tempch);
    if ($tempch=="yes"||($tempch=="כן")){
        $chanel="keshet12";
    }
}
if ($chanel=="רשת13"||$chanel=="רשת 13"||$chanel=="13"){
    $tempch="";
    $tempch=readline('did you mean  reshet13  ? yes/no ');
    $tempch=strtolower($tempch);
    if ($tempch=="yes"||($tempch=="כן")){
        $chanel="reshet13 ";
    }
}
if ($chanel=="עכשיו14"||$chanel=="עכשיו 14"||$chanel=="14"){
    $tempch="";
    $tempch=readline('did you mean  now-14  ? yes/no ');
    $tempch=strtolower($tempch);
    if ($tempch=="yes"||($tempch=="כן")){
        $chanel="now-14 ";
    }
}
$str3="";
        if ($chanel=="reshet13" ||$chanel=="keshet12"||$chanel=="now-14"||$chanel=="kan-11") {
            $str3="news category";
           echo $str3;
            print "the link is: " . $link.strtolower($chanel);
        }
        if ($chanel=="sport1"||$chanel=="sport2"|| $chanel=="sport3"||$chanel=="sport4"||$chanel=="sport5"||$chanel=="sport5live"|| $chanel=="sport5plus"||$chanel=="sport5gold"){
            $str3= "sport category";
            echo $str3;
            print "the link is: " . $link.strtolower($chanel);
        }

     if ($str3=="sport category" || $str3=="news category"){
     }
     else
     {
         echo("the link is not found");



}