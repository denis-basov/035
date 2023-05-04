<?php


class Debug
{
  public static function dd($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
    die('Дальнейший вывод заблокирован!');
  }

  public static function d($value)
  {
    echo '<pre>';
    print_r($value);
    echo '</pre>';
  }
}