<?php 

namespace Fossology\Lib\UI;

/**
  *@file
  *@brief Contains the constants and helpers for authentication of user.
  *@class Auth
  *@brief Contains the constants and helpers for authentication of user.
  *
  * Permission
  * See https://github.com/fossology/fossology/wiki/Access-Control
  */ 
  
class Style {
  private $style;
  
  public function_construct()
  {
    $this->style = array(
      'cardTitle' => _("card col-md-8 mx-auto"),
    );
  }
  public funtion getStyle(){
    return $this->style;
  }
}
