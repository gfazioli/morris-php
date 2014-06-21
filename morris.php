<?php

/**
 * Model class constanst with Morris Chart types
 *
 * @class           MorrisChartType
 * @author          =undo= <info@wpxtre.me>
 * @copyright       Copyright (C) 2012-2014 wpXtreme Inc. All Rights Reserved.
 * @date            2014-04-09
 * @version         1.0.0
 *
 */
class MorrisChartTypes {

  const LINE  = 'Line';
  const BAR   = 'Bar';
  const DONUT = 'Donut';
  const AREA  = 'Area';
}

/**
 * Main Morris model class
 *
 * @class           MorrisCharts
 * @author          =undo= <info@wpxtre.me>
 * @copyright       Copyright (C) 2012-2014 wpXtreme Inc. All Rights Reserved.
 * @date            2014-04-01
 * @version         1.0.0
 *
 */
class Morris {

  /**
   * Type of chart. This value is used in Javascript Morris method
   *
   * @brief Chart
   *
   * @var string $__chart_type
   */
  protected $__chart_type = MorrisChartTypes::LINE;

  /**
   * The ID of (or a reference to) the element into which to insert the graph.
   * Note: this element must have a width and height defined in its styling.
   *
   * @brief Element
   *
   * @var string $element
   */
  public $element = '';

  /**
   * The data to plot. This is an array of objects, containing x and y attributes as described by the xkey and ykeys options.
   * Note: the order in which you provide the data is the order in which the bars are displayed.
   *
   * Note 2: if you need to update the plot, use the setData method on the object that Morris.Bar
   * returns (the same as with line charts).
   *
   * @brief Data
   *
   * @var array $data
   */
  public $data = array();

  /**
   * Return a singleton instance of Morris class
   *
   * @brief Singleton
   *
   * @return Morris
   */
  public static function init( $element_id )
  {
    static $instance = null;
    if ( is_null( $instance ) ) {
      $instance = new self( $element_id );
    }

    return $instance;
  }

  /**
   * Create an instance of Morris class
   *
   * @brief Construct
   *
   * @param string $element_id The element id
   * @param string $chart      Optional. Chart Type of chart. Default MorrisChartTypes::LINE
   *
   * @return Morris
   */
  public function __construct( $element_id, $chart = MorrisChartTypes::LINE )
  {
    $this->element      = $element_id;
    $this->__chart_type = $chart;
  }

  /**
   * Return the array of this object
   *
   * @brief Array
   *
   * @return array
   */
  public function toArray()
  {
    $return = array();
    foreach ( $this as $property => $value ) {
      if ( '__' == substr( $property, 0, 2 ) || '' === $value || is_null( $value ) || ( is_array( $value ) && empty( $value ) ) ) {
        continue;
      }
      $return[ $property ] = $value;
    }

    return $return;
  }

  /**
   * Return the jSON encode of this chart
   *
   * @brief JSON
   *
   * @return string
   */
  public function toJSON()
  {
    return json_encode( $this->toArray() );
  }

  /**
   * Return the HTML markup for Javascript code
   *
   * @brief Brief
   * @return string
   */
  public function toJavascript()
  {
    ob_start();
    ?>
    <script type="text/javascript">
      jQuery( function ( $ )
      {
        "use strict";

        Morris.<?php echo $this->__chart_type ?>(
          <?php echo $this->toJSON() ?>
          );
      });
    </script>
    <?php
    $buffer = ob_get_contents();
    ob_end_clean();

    return $buffer;
  }


}