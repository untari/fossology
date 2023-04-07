<?php

namespace Fossology\Lib\UI;

/**
 * @file
 * @class represent a style that contains an array os styles.
 * @array $style an associative array contining styles.
 * @function_construct initializes a new instance of the style class.
 *
 * Permissions
 * See https://github.com/fossology/fossology/wiki/Access-Control
 */
// This Style function contains array of classes 
class Style
{

  private $style;

  public function __construct()
  {
    $this->style = array(
    'cardContainer' => _("card mt-3 col-md-8 mx-auto"),
    'cardTitle' => _("card-title"),
    'cardSubtitle' => _("card-subtitle"),
    'cardText' => _("card-text"),
    );
  }
  
  public function getStyle()
  {
    return $this->style;
  }
}
