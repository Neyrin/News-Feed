<?php
declare(strict_types=1);

//Sort $articles by date newest to oldest
/**
* sortFunctionDate
 *
 * @param string $a
 * @param string $b
 *
 * @return int
*/
function sortFunctionDate( $a, $b ) :int {
   return strtotime($b['date']) - strtotime($a['date']);
};
