<?php
declare(strict_types=1);

$authors = [
   12345 => 'Malcolm Reynolds',
   23451 => 'Hoban Washburne',
   34512 => 'Kaylee Frye',
   45123 => 'Jayne Cobb',
   51234 => 'Zoë Washburne',
];

$articles = [
   [
    //Mal
   'title' => 'Captain\'s log',
   'content' => file_get_contents('./Articles/CaptainsLog.txt'),
   'date' => '2016-06-12',
   'likes'=> 17,
   'authorID' => '12345',
   ],
   [
    //Wash
   'title' => 'Curse your sudden but inevitable betrayal!',
   'content' => file_get_contents('./Articles/CurseYourBetrayal.txt'),
   'date' => '2016-12-14',
   'likes'=> 32,
   'authorID' => '23451',
   ],
   [
    //Kaylee
   'title' => 'Strawberry Pie',
   'content' => file_get_contents('./Articles/StrawberryPie.txt'),
   'date' => '2017-10-30',
   'likes'=> 25,
   'authorID' => '34512',
   ],
   [
    //Jayne
   'title' => 'Why my hat is awesome!',
   'content' => file_get_contents('./Articles/WhyMyHatIsAwesome.txt'),
   'date' => '2017-09-05',
   'likes'=> 11,
   'authorID' => '45123',
   ],
   [
    //Zoë
   'title' => 'I\'m surrounded by idiots',
   'content' => file_get_contents('./Articles/ImSurroundedByIdiots.txt'),
   'date' => '2016-07-26',
   'likes'=> 15,
   'authorID' => '51234',
   ],
   [
    //Mal
   'title' => 'Captain\'s log nr.2',
   'content' => file_get_contents('./Articles/CaptainsLognr2.txt'),
   'date' => '2017-06-21',
   'likes'=> 18,
   'authorID' => '12345',

   ],
   [
    //Kaylee
   'title' => 'Why all the unecessary parts?',
   'content' => file_get_contents('./Articles/WhyAllTheParts.txt'),
   'date' => '2016-09-23',
   'likes'=> 23,
   'authorID' => '34512',
   ],
   [
    //Wash
   'title' => 'I\'m a leaf on the wind',
   'content' => file_get_contents('./Articles/ImALeafOnTheWind.txt'),
   'date' => '2016-08-14',
   'likes'=> 19,
   'authorID' => '23451',
   ],
   [
    //Zoë
   'title' => 'Nice place for an ambush',
   'content' => file_get_contents('./Articles/NicePlaceForAnAmbush.txt'),
   'date' => '2017-07-12',
   'likes'=> 15,
   'authorID' => '51234',
   ],
   [
    //Jayne
   'title' => 'Meet Vera',
   'content' => file_get_contents('./Articles/MeetVera.txt'),
   'date' => '2017-02-18',
   'likes'=> 9,
   'authorID' => '45123',
   ],
];
