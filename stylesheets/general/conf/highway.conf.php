<?php
require_once "conf/common.conf.php";

/**
 * Highway grade definition
 */
define('HIGHWAY_MOTORWAY'    , 0);
define('HIGHWAY_TRUNK'       , 1);
define('HIGHWAY_PRIMARY'     , 2);
define('HIGHWAY_SECONDARY'   , 3);
define('HIGHWAY_TERTIARY'    , 4);
define('HIGHWAY_UNCLASSIFIED', 5);
define('HIGHWAY_SERVICE'     , 6);
define('HIGHWAY_RESIDENTIAL' , 7);
define('HIGHWAY_TRACK1'      , 8);
define('HIGHWAY_TRACK2'      , 9);
define('HIGHWAY_TRACK3'      ,10);
define('HIGHWAY_TRACK4'      ,11);
define('HIGHWAY_TRACK5'      ,12);
define('HIGHWAY_UNKNOWN'     ,13);


/**
 * Smoothness definition
 */
define('SMOOTHNESS_EXCELLENT'    , 0);
define('SMOOTHNESS_GOOD'         , 1);
define('SMOOTHNESS_INTERMEDIATE' , 2);
define('SMOOTHNESS_BAD'          , 3);
define('SMOOTHNESS_VERY_BAD'     , 4);
define('SMOOTHNESS_HORRIBLE'     , 5);
define('SMOOTHNESS_VERY_HORRIBLE', 6);
define('SMOOTHNESS_IMPASSABLE'   , 7);

/**
 * Zoom => Highway grade road visibility maping 
 */
$ROAD_GRADES = array (
 5 => array(),
 6 => range(HIGHWAY_MOTORWAY, HIGHWAY_PRIMARY),
 7 => range(HIGHWAY_MOTORWAY, HIGHWAY_PRIMARY),
 8 => range(HIGHWAY_MOTORWAY, HIGHWAY_PRIMARY),
 9 => range(HIGHWAY_MOTORWAY, HIGHWAY_SECONDARY),
10 => range(HIGHWAY_MOTORWAY, HIGHWAY_TERTIARY),
11 => range(HIGHWAY_MOTORWAY, HIGHWAY_UNCLASSIFIED),
12 => range(HIGHWAY_MOTORWAY, HIGHWAY_UNCLASSIFIED),
13 => range(HIGHWAY_MOTORWAY, HIGHWAY_TRACK3),
14 => range(HIGHWAY_MOTORWAY, HIGHWAY_UNKNOWN),
15 => range(HIGHWAY_MOTORWAY, HIGHWAY_UNKNOWN),
16 => range(HIGHWAY_MOTORWAY, HIGHWAY_UNKNOWN),
17 => range(HIGHWAY_MOTORWAY, HIGHWAY_UNKNOWN),
18 => range(HIGHWAY_MOTORWAY, HIGHWAY_UNKNOWN),
);

/**
 * Zoom => Highway grade central line road visibility maping 
 */
$ROAD_LINE_GRADES = array (
 9 => array(),
10 => array(),
11 => array(),
12 => array(),
13 => array(),
14 => array(),
15 => array(),
16 => array(),
17 => array(),
18 => array(),
);

/**
 * Zoom  path visibility maping
 */
$PATH_ZOOMS = range(14, 18);

/**
 * Road stroke color grade x zoom maping
 */
$ROAD_STROKE_COLOR = array(
HIGHWAY_MOTORWAY     => array( 7 => '#995555', 9 => '#aa3333'),
HIGHWAY_TRUNK        => array( 7 => '#995555', 9 => '#aa3333'),
HIGHWAY_PRIMARY      => array( 7 => '#222222', 9 => '#000000'),
HIGHWAY_SECONDARY    => array(10 => '#000000'),
HIGHWAY_TERTIARY     => array(11 => '#000000'),
HIGHWAY_UNCLASSIFIED => array(12 => '#000000'),
HIGHWAY_SERVICE      => array(13 => '#000000'),
HIGHWAY_RESIDENTIAL  => array(13 => '#000000'),
HIGHWAY_TRACK1       => array(13 => '#000000'),
HIGHWAY_TRACK2       => array(13 => '#000000'),
HIGHWAY_TRACK3       => array(13 => '#000000'),
HIGHWAY_TRACK4       => array(13 => '#000000'),
HIGHWAY_TRACK5       => array(13 => '#000000'),
HIGHWAY_UNKNOWN      => array(13 => '#000000'),
);

/**
 * Road fill color grade x zoom maping
 */
$ROAD_FILL_COLOR = array(
HIGHWAY_MOTORWAY     => array( 6 => '#b5a8a8',7 => '#ffddbb', 9 => '#ffbb77', 11 => '#ffbb77', 14 => '#ffbb77'),
HIGHWAY_TRUNK        => array( 6 => '#b5a8a8',7 => '#ffddbb', 9 => '#ffbb77', 11 => '#ffbb77', 14 => '#ffbb77'),
HIGHWAY_PRIMARY      => array( 6 => '#b5a8a8',7 => '#ddaaaa', 9 => '#bb5555', 11 => '#bb5555', 14 => '#dd9999'),
HIGHWAY_SECONDARY    => array( 8 => '#ee9999', 11 => '#ee9999', 14 => '#eecccc'),
HIGHWAY_TERTIARY     => array( 8 => '#ffffff', 11 => '#ffffff', 14 => '#ffdddd'),
HIGHWAY_UNCLASSIFIED => array(                 12 => '#ffffff', 14 => '#ffeeee'),
HIGHWAY_SERVICE      => array(13 => '#ffffff'),
HIGHWAY_RESIDENTIAL  => array(13 => '#ffffff'),
HIGHWAY_TRACK1       => array(13 => '#ffffff'),
HIGHWAY_TRACK2       => array(13 => '#ffffff'), 
HIGHWAY_TRACK3       => array(13 => '#ffffff'),
HIGHWAY_TRACK4       => array(13 => '#ffffff'),
HIGHWAY_TRACK5       => array(13 => '#ffffff'),
HIGHWAY_UNKNOWN      => array(13 => '#ffffff'),
);

/**
 * Road width grade x zoom maping
 */
$ROAD_WIDTH = array(
HIGHWAY_MOTORWAY     => array( 5 => 0.20, 6 => 0.30, 7 => 3.4,  8 =>  5.5, 11 =>  7.5, 14 => 15.0, 16=>26,18 => 32),
HIGHWAY_TRUNK        => array( 5 => 0.17, 6 => 0.27, 7 => 3.0,  8 =>  4.5, 11 =>  6.0, 14 => 13.3, 16=>23,18 => 30),
HIGHWAY_PRIMARY      => array( 5 => 0.10, 6 => 0.20, 7 => 2.0,  8 =>  3.5, 11 =>  4.5, 14 => 11.5, 16=>23,18 => 32),
HIGHWAY_SECONDARY    => array(                       8 => 2.7, 11 =>  4.0, 14 => 10.0, 16=>20, 18 => 30),
HIGHWAY_TERTIARY     => array(                       8 => 2.5, 11 =>  3.7, 14 =>  9.0, 16=>18, 18 => 28),
HIGHWAY_UNCLASSIFIED => array(                       8 => 1.5, 11 =>  2.8, 14 =>  8.0, 16=>16, 18 => 26),
HIGHWAY_SERVICE      => array(                                 11 =>  2.0, 14 =>  6.5, 16=>13, 18 => 26),
HIGHWAY_RESIDENTIAL  => array(                                 13 =>  2.3, 14 =>  6.0, 16=>13, 18 => 26),
HIGHWAY_TRACK1       => array(                                 11 =>  1.0, 14 =>  5.0, 16=>10, 18 => 20),
HIGHWAY_TRACK2       => array(                                 11 =>  0.9, 14 =>  4.5, 16=> 9, 18 => 18),
HIGHWAY_TRACK3       => array(                                 11 =>  0.8, 14 =>  4.0, 16=> 8, 18 => 16),
HIGHWAY_TRACK4       => array(                                 11 =>  0.7, 14 =>  3.5, 16=> 7, 18 => 14),
HIGHWAY_TRACK5       => array(                                 11 =>  0.6, 14 =>  3.0, 16=> 6, 18 => 12),
HIGHWAY_UNKNOWN      => array(                                 11 =>  0.5, 14 =>  2.5, 16=> 5, 18 => 10),
);

/**
 * Road stroke width grade x zoom maping
 */
$ROAD_STROKE_WIDTH = array(
HIGHWAY_MOTORWAY     => array( 6 => 0.0, 7 => 2.0, 8 =>  2.0, 11 =>  2.7, 14 => 5.3,18=>9),
HIGHWAY_TRUNK        => array( 6 => 0.0, 7 => 2.0, 8 =>  2.0, 11 =>  2.7, 14 => 5.3,18=>9),
HIGHWAY_PRIMARY      => array( 6 => 0.0,           8 =>  0.4, 11 =>  0.8, 14 => 1.0),
HIGHWAY_SECONDARY    => array(                     8 =>  0.4, 11 =>  0.8, 14 => 0.8),
HIGHWAY_TERTIARY     => array(                     8 =>  0.4, 11 =>  0.8, 14 => 0.8),
HIGHWAY_UNCLASSIFIED => array(                     8 =>  0.4, 11 =>  0.8, 14 => 0.8),
HIGHWAY_SERVICE      => array(                                11 =>  0.6, 14 => 0.7),
HIGHWAY_RESIDENTIAL  => array(                                11 =>  0.0, 14 => 0.4),
HIGHWAY_TRACK1       => array(                                11 =>  0.3, 14 => 0.5),
HIGHWAY_TRACK2       => array(                                11 =>  0.3, 14 => 0.5),
HIGHWAY_TRACK3       => array(                                11 =>  0.3, 14 => 0.5),
HIGHWAY_TRACK4       => array(                                11 =>  0.3, 14 => 0.5),
HIGHWAY_TRACK5       => array(                                11 =>  0.3, 14 => 0.5),
HIGHWAY_UNKNOWN      => array(                                11 =>  0.3, 14 => 0.5),
);

/**
 * Link width/road width ratio grade x zoom maping
 */
$LINK_WIDTH_RATIO = array(
HIGHWAY_MOTORWAY  => array( 8 =>  0.1, 13 => 0.4, 15 => 0.6),
HIGHWAY_TRUNK     => array( 8 =>  0.1, 13 => 0.4, 15 => 0.6),
HIGHWAY_PRIMARY   => array( 8 =>  0.1, 13 => 0.5, 15 => 0.7),
HIGHWAY_SECONDARY => array( 8 =>  0.1, 13 => 0.5, 15 => 0.7),
HIGHWAY_TERTIARY  => array( 8 =>  0.1, 13 => 0.6, 15 => 0.8),		
);


/**
 * This grades are drawed just like tiny lines
 */
$ROAD_DRAFT_DRAW = array(
 5 => array(),
 6 => array(),
 7 => array(),
 8 => array(),
 9 => array(HIGHWAY_SECONDARY),
10 => array(HIGHWAY_TERTIARY),
11 => array(HIGHWAY_UNCLASSIFIED),
12 => array(),
13 => array(),
14 => array(),
15 => array(),
16 => array(),
17 => array(),
18 => array(),
);

/**
 * For low zooms non e-roads are drawed just like tine lines
 */
$ROAD_DRAFT_RATIO = array(5 => 0.2, 9 => 0.25, 10 => 0.4);

/**
 * Central line color grade x zoom maping
 */
$ROAD_LINE_COLOR = $ROAD_STROKE_COLOR;

/**
 * Central line width grade x zoom maping
 */
$ROAD_LINE_WIDTH = array(
HIGHWAY_MOTORWAY => array( 9 =>  0.8, 13 =>  1.0 ),
HIGHWAY_TRUNK    => array( 9 =>  0.8, 13 =>  1.0 ),
);

/**
 * Path color zoom mapping
 */
$PATH_COLOR = array(13 => '#000000');

/**
 * Path width zoom mapping
 */
$PATH_WIDTH = array(14 => '0.5', 15 => '0.65');

/**
 * Smoothness road casing dashing
 */
$HIGHWAY_SMOOTHNESS_CASING = array(		
SMOOTHNESS_INTERMEDIATE  => array( 8 =>  array(0.6,0.1), 13 => array(6,1), 17 => array(18,3) ),
SMOOTHNESS_BAD           => array( 8 =>  array(0.5,0.2), 13 => array(5,2), 17 => array(15,6) ),
SMOOTHNESS_VERY_BAD      => array( 8 =>  array(0.4,0.3), 13 => array(4,3), 17 => array(12,9) ),
SMOOTHNESS_HORRIBLE      => array( 8 =>  array(0.3,0.4), 13 => array(3,4), 17 => array(9,12) ),
SMOOTHNESS_VERY_HORRIBLE => array( 8 =>  array(0.2,0.5), 13 => array(2,5), 17 => array(6,15) ),
SMOOTHNESS_IMPASSABLE    => array( 8 =>  array(0.1,0.6), 13 => array(1,6), 17 => array(3,18) ),
);


$PATH_GLOW_COLOR = array(13 => '#ffffff');

$PATH_GLOW_WIDTH = array(13 => 3);

$PATH_GLOW_OPACITY_SOLID = array(13 => 0.4);
$PATH_GLOW_OPACITY = array(13 => 0.2);


/**
 * Minimal bridge size in pixels
 */
$MIN_BRIDGE_SIZE = 8;


/**
 * Minimal tunnel size in pixels
 */
$MIN_TUNNEL_SIZE = 5;