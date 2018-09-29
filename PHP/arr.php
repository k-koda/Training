<?php

$idols = array();
$idol1 = array(
            'id'    => 1,
            'first' => 'リン',
            'last'  => '渋谷',
            'stadio'=> '346'
            ); 
$idol2 = array(
            'id'    => 2,
            'first' => '春香',
            'last'  => '天海',
            'stadio'=> '765'
            ); 
$idol3 = array(
            'id'    => 3,
            'first' => '甜花',
            'last'  => '大崎',
            'stadio'=> '253'
            );
$idol4 = array(
            'id'    => 4,
            'first' => '甘奈',
            'last'  => '大崎',
            'stadio'=> '253'
            );
$idol5 = array(
            'id'    => 5,
            'first' => '茄子',
            'last'  => '鷹富士',
            'stadio'=> '346'
            );
$idol6 = array(
            'id'    => 6,
            'first' => '萌香',
            'last'  => '天空橋',
            'stadio'=> '765'
            );
$idol7 = array(
            'id'    => 7,
            'first' => 'ありす',
            'last'  => '橘',
            'stadio'=> '346'
            );

$mishiro = [$idol1, $idol5, $idol7];
$students = [$idol1, $idol2, $idol3, $idol4, $idol5, $idol6, $idol7];
$fav = [$idol2, $idol3, $idol6];

//var_dump($mishiro);
//var_dump($students);

//$idols = $mishiro + $students;
$idols = array_merge($mishiro , $students, $fav);
var_dump($idols);
$idols = array_unique($idols, SORT_REGULAR);
var_dump($idols);

?>
