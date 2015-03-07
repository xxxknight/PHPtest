<?php
/*
 * Created on 2015-3-3
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 $prices = array('Tires'=>100,'Oil'=>10,'Spark Plugs'=>4);
 ksort($prices);
 printArray($prices);
 function printArray($array){
 	foreach($array as $key => $value){
 		echo $key." - ".$value."<br />";
 	}
 }
?>
