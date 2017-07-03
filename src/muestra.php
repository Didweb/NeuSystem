<?php
/**
* @author Eduardo Pinuaga Linares <eduardo.pinuaga-linares@elementsystems.de>
*
* @package muestra
*
*/
class muestra {

  /**
  * Probe die texte mit h1.
  *
  * @return string text mit h1
  * @param string $text text
  */
  public function muestra_h1($text){
    $result = "<h1>".$text."</h1>";
    return $result;
  }

  /**
  * Probe die texte mit h2.
  *
  * @return string text mit h2
  * @param string $text text
  */
  public function muestra_h2($text){
    $result = "<h2>".$text."</h2> ffffffffffffffff";
    return $result;
  }

 ?>
