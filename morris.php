<?php

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
   * Create an instance of MorrisCharts class
   *
   * @brief Construct
   *
   * @param string $element_id The element id
   *
   * @return Morris
   */
  public function __construct( $element_id )
  {
    $this->element = $element_id;
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
      if ( '' === $value || is_null( $value ) || ( is_array( $value ) && empty( $value ) ) ) {
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

}