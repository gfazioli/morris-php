<?php

/**
 * Morris Donut Charts
 *
 * @class           MorrisAreaCharts
 * @author          =undo= <info@wpxtre.me>
 * @copyright       Copyright (C) 2012-2014 wpXtreme Inc. All Rights Reserved.
 * @date            2014-04-01
 * @version         1.0.0
 *
 */
class MorrisDonutCharts extends Morris {

  /**
   * An array of strings containing HTML-style hex colors for each of the donut segments. Note: if there are fewer
   * colors than segments, the colors will cycle back to the start of the array when exhausted.
   *
   * @brief Colors
   *
   * @var array $colors
   */
  public $colors = array();

  /**
   * A function that will translate a y-value into a label for the centre of the donut.
   *
   * eg: currency function (y, data) { return '$' + y }
   *
   * Note: if required, the method is also passed an optional second argument, which is the complete data row for the given value.
   *
   * @brief Formatter
   *
   * @var string $formatter
   */
  public $formatter = '';

  /**
   * Create an instance of MorrisDonutCharts class
   *
   * @brief Construct
   *
   * @param string $element_id The element id
   *
   * @return MorrisDonutCharts
   */
  public function __construct( $element_id )
  {
    $this->element         = $element_id;
    $this->__charts_method = 'Donut';
  }

}