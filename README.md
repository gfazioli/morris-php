## Morris PHP v0.0.2

This project is a PHP part for Morris.js ( http://morrisjs.github.io/morris.js/ ).

You can use this PHP class to wrap the Morris Javascript class

### Getting Started

1. Download libs from ...
2. Include main `Morris` php file

### Examples

```php
/**
 * Display
 *
 * @brief Display
 */
public function draw()
{
  ?>
  <div id="my-charts"></div>
<?php
  $morris = new MorrisLineCharts( 'my-charts' );
  $morris->xkey = array( 'date' );
  $morris->ykeys = array( 'value' );
  $morris->labels = array( 'Money' );
  $morris->data = array(
    array( 'date' => '2010', 'value' => 88 ),
    array( 'date' => '2011', 'value' => 18 ),
    array( 'date' => '2012', 'value' => 28 ),
    array( 'date' => '2013', 'value' => 48 ),
  );
  echo $morris->toJavascript();
}

```
