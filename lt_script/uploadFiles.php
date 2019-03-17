<?php 
// Create by: Luis Torres Carpio
// Version: 1.0
// Report Bug: luis.torres.carpio1@gmail.com
// FB: https://facebook.com/developer.ltc
// Uso Libre
// Mas complementos web en: www.micodigolibre.com
function uploadFiles($d, $b, $c = false){$a = array(); if (isset($b)){$g = count($b["name"]); for( $i=0; $i<$g; $i++) {$f = explode(' ',microtime())[0]; $e = basename( $b["name"][$i] ); $j = pathinfo($e, PATHINFO_EXTENSION); if($c){$e = $c."_".date("dmY_his")."_". number_format($f, 5, '', '').".".$j; }else{$e = date("dmY_his")."_". number_format($f, 5, '', '').".".$j; } $h = $d."/".$e; if(move_uploaded_file($b['tmp_name'][$i], $h)) {array_push($a, $e); } } } return $a; } ?>