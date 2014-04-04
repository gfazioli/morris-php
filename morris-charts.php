<?php

/**
 * Morris Charts common model
 *
 * @class           MorrisCharts
 * @author          =undo= <info@wpxtre.me>
 * @copyright       Copyright (C) 2012-2014 wpXtreme Inc. All Rights Reserved.
 * @date            2014-04-01
 * @version         1.0.0
 *
 */
class MorrisCharts extends Morris {

  /**
   * A string containing the name of the attribute that contains date (X) values.
   * Timestamps are accepted in the form of millisecond timestamps (as returned by Date.getTime() or as strings in the following formats:
   * 2012
   * 2012 Q1
   * 2012 W1
   * 2012-02
   * 2012-02-24
   * 2012-02-24 15:00
   * 2012-02-24 15:00:00
   * 2012-02-24 15:00:00.000
   *
   * Note: when using millisecond timestamps, it's recommended that you check out the dateFormat option.
   * Note 2: date/time strings can optionally contain a T between the date and time parts, and/or a Z suffix, for compatibility with ISO-8601 dates.
   *
   * @brief XKeys
   *
   * @var array $xkey
   */
  public $xkey = array();

  /**
   * A list of strings containing names of attributes that contain Y values (one for each series of data to be plotted).
   *
   * @brief YKeys
   *
   * @var array $ykeys
   */
  public $ykeys = array();

  /**
   * A list of strings containing labels for the data series to be plotted (corresponding to the values in the ykeys option).
   *
   * @brief Labels
   *
   * @var array $labels
   */
  public $lables = array();

  /**
   * Max. bound for Y-values. Alternatively, set this to 'auto' to compute automatically, or 'auto [num]' to
   * automatically compute and ensure that the max y-value is at least [num].
   *
   * @brief Max Y
   *
   * @var string $ymax
   */
  public $ymax = 'auto';

  /**
   * Min. bound for Y-values. Alternatively, set this to 'auto' to compute automatically, or 'auto [num]' to
   * automatically compute and ensure that the min y-value is at most [num].
   * Hint: you can use this to create graphs with false origins.
   *
   * @brief Min Y
   *
   * @var string $ymin
   */
  public $ymin = 0;

  /**
   * Set to false to always show a hover legend.
   * Set to true or 'auto' to only show the hover legend when the mouse cursor is over the chart.
   * Set to 'always' to never show a hover legend.
   *
   * @brief Hide over legend
   *
   * @var string
   */
  public $hideHover = 'auto';

  /**
   * Provide a function on this option to generate custom hover legends. The function will be called with the index of
   * the row under the hover legend, the options object passed to the constructor as arguments, and a string containing
   * the default generated hover legend content HTML.
   * eg:
   *
   *     hoverCallback: function (index, options, content) {
   *       var row = options.data[index];
   *       return "sin(" + row.x + ") = " + row.y;
   *     }
   *
   *
   * @brief Hover callback
   *
   * @var string $hoverCallback
   */
  public $hoverCallback = '';

  /**
   * Set to false to disable drawing the x and y axes.
   *
   * @brief Axes
   *
   * @var bool $axes
   */
  public $axes = true;

  /**
   * Set to false to disable drawing the horizontal grid lines.
   *
   * @brief Grid
   *
   * @var bool $grid
   */
  public $grid = true;

  /**
   * Set the color of the axis labels (default: #888).
   *
   * @brief Grid text color
   *
   * @var string $gridTextColor
   */
  public $gridTextColor = '#888';

  /**
   * Set the point size of the axis labels (default: 12).
   *
   * @brief Grid text color
   *
   * @var int $gridTextSize
   */
  public $gridTextSize = '12';

  /**
   * Set the font family of the axis labels (default: sans-serif).
   *
   * @brief Grid font
   *
   * @var string $gridTextFamily
   */
  public $gridTextFamily = 'sans-serif';

  /**
   * Set the font weight of the axis labels (default: normal).
   *
   * @brief Font weight
   *
   * @var string $gridTextWeight
   */
  public $gridTextWeight = 'normal';

}