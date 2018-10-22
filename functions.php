<?php

//Sort $articles by date newest to last
function sortFunction( $a, $b ) {
   return strtotime($b['date']) - strtotime($a['date']);
}
