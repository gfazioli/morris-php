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

  public $barSizeRatio = 0.75;

  public $barGap = 3;

  public $barOpacity = 1.0;

  public $barRadius = array( 0, 0, 0, 0 );

  public $xLabelMargin = 50;

  /**
   * Array containing colors for the series bars.
   *
   * @brief Bars colors
   *
   * @var array $barColors
   */
  public $barColors = array(
    '#0b62a4',
    '#7a92a3',
    '#4da74d',
    '#afd8f8',
    '#edc240',
    '#cb4b4b',
    '#9440ed'
  );

  /**
   * Set to true to draw bars stacked vertically.
   *
   * @brief Stacked
   *
   * @var bool $stacked
   */
  public $stacked = true;

  /**
   * Create an instance of MorrisBarCharts class
   *
   * @brief Construct
   *
   * @param string $element_id The element id
   *
   * @return MorrisBarCharts
   */
  public function __construct( $element_id )
  {
    $this->element         = $element_id;
    $this->__charts_method = 'Bar';
  }
}