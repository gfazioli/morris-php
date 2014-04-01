<?php

/**
 * Morris Line Charts
 *
 * @class           MorrisLine
 * @author          =undo= <info@wpxtre.me>
 * @copyright       Copyright (C) 2012-2014 wpXtreme Inc. All Rights Reserved.
 * @date            2014-04-01
 * @version         1.0.0
 *
 */
class MorrisLineCharts extends MorrisCharts {

  /**
   * Array containing colors for the series lines/points.
   *
   * @brief Line colors
   *
   * @var array $lineColors
   */
  public $lineColors = array();

  /**
   * Width of the series lines, in pixels.
   *
   * @brief Line width
   *
   * @var int $lineWidth
   */
  public $lineWidth = 3;

  /**
   * Diameter of the series points, in pixels.
   *
   * @brief Point size
   *
   * @var int $pointSize
   */
  public $pointSize = 4;

  /**
   * Colors for the series points. By default uses the same values as lineColors
   *
   * @brief Point fill colors
   *
   * @var array $pointFillColors
   */
  public $pointFillColors = array();

  /**
   * Colors for the outlines of the series points. (#ffffff by default).
   *
   * @brief Point stroke color
   *
   * @var array $pointStrokeColors
   */
  public $pointStrokeColors = array();

  /**
   * Set to false to disable line smoothing.
   *
   * @brief Smooth
   *
   * @var bool smooth
   */
  public $smooth = true;

  /**
   * Set to false to skip time/date parsing for X values, instead treating them as an equally-spaced series.
   *
   * @brief Parse time
   *
   * @var bool $parseTime
   */
  public $parseTime = true;

  /**
   * Set to a string value (eg: '%') to add a label suffix all y-labels.
   *
   * @brief Post units
   *
   * @var string $postUnits
   */
  public $postUnits = '';

  /**
   * Set to a string value (eg: '$') to add a label prefix all y-labels.
   *
   * @brief Pre units
   *
   * @var string $preUnits
   */
  public $preUnits = '';

  /**
   * A function that accepts millisecond timestamps and formats them for display as chart labels.
   * default: function (x) { return new Date(x).toString(); }
   *
   * @brief Date format
   *
   * @var string $dateFormat
   */
  public $dateFormat = '';

  /**
   * Sets the x axis labelling interval. By default the interval will be automatically computed.
   * The following are valid interval strings:
   *
   * "decade"
   * "year"
   * "month"
   * "day"
   * "hour"
   * "30min"
   * "15min"
   * "10min"
   * "5min"
   * "minute"
   * "30sec"
   * "15sec"
   * "10sec"
   * "5sec"
   * "second"
   *
   * @brief X labels
   *
   * @var array $xLabels
   */
  public $xLabels = array();

  /**
   * A function that accepts Date objects and formats them for display as x-axis labels. Overrides the default formatter
   * chosen by the automatic labeller or the xLabels option.
   *
   * eg: function (x) { return x.toString(); }
   *
   * @brief X label format
   *
   * @var string $xLabelFormat
   */
  public $xLabelFormat = '';

  /**
   * A function that accepts y-values and formats them for display as y-axis labels.
   *
   * eg: function (y) { return y.toString() + 'km'; }
   *
   * @brief Y label format
   *
   * @var string $yLabelFormat
   */
  public $yLabelFormat = '';

  /**
   * A list of y-values to draw as horizontal 'goal' lines on the chart.
   *
   * eg: goals: [1.0, -1.0]
   *
   * @brief Goals
   *
   * @var array $goals
   */
  public $goals = array();

  /**
   * Width, in pixels, of the goal lines.
   *
   * @brief Goal stroke width
   *
   * @var int $goalStrokeWidth
   */
  public $goalStrokeWidth = 1;

  /**
   * Array of color values to use for the goal line colors. If you list fewer colors here than you have lines in goals,
   * then the values will be cycled.
   *
   * @brief Goals colors
   *
   * @var array $goalLineColors
   */
  public $goalLineColors = array();

  /**
   * A list of x-values to draw as vertical 'event' lines on the chart.
   *
   * eg: events: ['2012-01-01', '2012-02-01', '2012-03-01']
   *
   * @brief Events
   *
   * @var array $events
   */
  public $events = array();

  /**
   * Width, in pixels, of the event lines.
   *
   * @brief Events line width
   *
   * @var int $eventStrokeWidth
   */
  public $eventStrokeWidth = 1;

  /**
   * Array of color values to use for the event line colors. If you list fewer colors here than you have lines in
   * events, then the values will be cycled.
   *
   * @brief Events colors
   *
   * @var array $eventLineColors
   */
  public $eventLineColors = array();

  /**
   * When set to false (the default), all null and undefined values in a data series will be ignored and lines will be
   * drawn spanning them.
   * When set to true, null values will break the line and undefined values will be spanned.
   *
   * Note: in v0.5.0, this setting will be removed and the behaviour will be to break lines at null values.
   *
   * @brief Continous line
   *
   * @var bool $continuousLine
   */
  public $continuousLine = false;

  /**
   * Change the opacity of the area fill colour.
   * Accepts values between 0.0 (for completely transparent) and 1.0 (for completely opaque).
   *
   * @brief Opacity
   *
   * @var string $fillOpacity
   */
  public $fillOpacity = '1.0';

  /**
   * Enable auto resize
   *
   * @brief Resize
   *
   * @since Morris 0.5.0
   *
   * @var bool $resize
   */
  public $resize = false;
}