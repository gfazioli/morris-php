<?php

namespace MorrisPHP;

use MorrisPHP\Charts;
use MorrisPHP\ChartTypes;

/**
 * Morris Area Charts
 *
 * @class           MorrisAreaCharts
 * @author          =undo= <info@wpxtre.me>
 * @copyright       Copyright (C) 2012-2014 wpXtreme Inc. All Rights Reserved.
 * @date            2014-04-01
 * @version         1.0.0
 *
 */
class Area extends Charts {

  /**
   * Change the opacity of the area fill colour.
   * Accepts values between 0.0 (for completely transparent) and 1.0 (for completely opaque).
   *
   * @brief Opacity
   *
   * @var string $fillOpacity
   */
  public $fillOpacity = 'auto';

  /**
   * Set to true to overlay the areas on top of each other instead of stacking them.
   *
   * @brief Line
   *
   * @var bool $behaveLikeLine
   */
  public $behaveLikeLine = false;

  /**
   * Create an instance of MorrisAreaCharts class
   *
   * @param string $element_id The element id
   *
   */
  public function __construct( $element_id )
  {
    parent::__construct( $element_id, ChartTypes::AREA );
  }
}