<?php

class Idol {
  public function create_profile($id, $first, $last, $stadio) {
    $idol = array(
        $this->id    = $id,
        $this->first = $first,
        $this->last  = $last,
        $this->stadio= $stadio
        ); 
  }
}
$idols = array();
$idol1 = new Idol(); 
$idol1->create_profile(
            1,
            'リン',
            '渋谷',
            '346'
            ); 
$idol2 = new Idol(); 
$idol2->create_profile(
            2,
            '春香',
            '天海',
            '765'
            ); 
$idol3 = new Idol(); 
$idol3->create_profile(
            3,
            '甜花',
            '大崎',
            '253'
            ); 
$idol4 = new Idol(); 
$idol4->create_profile(
            4,
            '甘奈',
            '大崎',
            '253'
            ); 
$idol5 = new Idol(); 
$idol5->create_profile(
            5,
            '茄子',
            '鷹富士',
            '346'
            ); 
$idol6 = new Idol(); 
$idol6->create_profile(
            6,
            '萌香',
            '天空橋',
            '765'
            ); 
$idol7 = new Idol(); 
$idol7->create_profile(
            7,
            'ありす',
            '橘',
            '346'
            );

$mishiro = [$idol1, $idol5, $idol7];
$students = [$idol1, $idol2, $idol3, $idol4, $idol5, $idol6, $idol7];
$fav = [$idol2, $idol3, $idol6];

//var_dump($mishiro);
//var_dump($students);

//$idols = $mishiro + $students;
$idols = array_merge($mishiro , $students, $fav);
var_dump($idols);
//$idols = array_unique($idols, SORT_REGULAR);
//var_dump($idols);

?>
