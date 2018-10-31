<?php

//Sort $articles by date newest to oldest
function sortFunctionDate( $a, $b ) {
   return strtotime($b['date']) - strtotime($a['date']);
};
