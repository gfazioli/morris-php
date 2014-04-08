<?php

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
class MorrisAreaCharts extends MorrisLineCharts {

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
}