<?php

/**
 * Morris Bar Charts
 *
 * @class           MorrisBarCharts
 * @author          =undo= <info@wpxtre.me>
 * @copyright       Copyright (C) 2012-2014 wpXtreme Inc. All Rights Reserved.
 * @date            2014-04-01
 * @version         1.0.0
 *
 */
class MorrisBarCharts extends MorrisCharts {

  /**
   * Array containing colors for the series bars.
   *
   * @brief Bars colors
   *
   * @var array $barColors
   */
  public $barColors = array();

  /**
   * Set to true to draw bars stacked vertically.
   *
   * @brief Stacked
   *
   * @var bool $stacked
   */
  public $stacked = true;
}