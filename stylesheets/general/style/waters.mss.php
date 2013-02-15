<?php
	require_once "inc/patterns.php";
	require_once "conf/waters.conf.php";
?>

<?php foreach ( $RENDER_ZOOMS as $zoom ):?>	
	[zoom = <?php echo $zoom?>] {		
		<?php if ( $RENDER_WATERWAY ):?>
			<?php foreach ( array_filter(range(0,35), function($x) use ($zoom) { return waterway_grades($zoom,$x); }) as $grade ):?>
				.waterway[grade = <?php echo $grade?>] {			
					line-color: <?php echo linear(waterway_color($grade),$zoom)?>;
					line-width: <?php echo waterway_width($zoom,$grade)?>;				
					line-cap: round; 
					line-join: round;	
					line-smooth: 1;				
				}
			<?php endforeach;?>	
		<?php endif ?>
		
		<?php if ( $RENDER_WATERAREA ):?>
			.waterarea[way_area >= <?php echo pixelareas($WATERAREA_MINIMAL_AREA,$zoom)?>] {
				<?php foreach ( $WATERAREA AS $selector => $a ): ?>
					<?php if ( !empty($a['zooms']) &&  in_array($zoom,$a['zooms']) ):?>
						<?php echo $selector?>::level<?php echo $a['level']?> {
							polygon-fill: <?php echo linear($a['color'],$zoom)?>;
						}
					<?php endif;?>
					<?php if ( !empty($a['pattern-zooms']) && in_array($zoom,$a['pattern-zooms']) ): ?>
						<?php echo $selector?>::level<?php echo $a['level']?> {
							polygon-pattern-file: url('<?php echo
								getPatternFile($a['pattern'],
									exponential($a['pattern-size'],$zoom),
									linear($a['pattern-rotation'],$zoom),
									linear($a['pattern-opacity'],$zoom),
									linear($a['pattern-color'],$zoom),
									exponential($a['pattern-stroke'],$zoom)
								)
							?>');
						}
					<?php endif; ?>
				<?php endforeach; ?>
			}
		<?php endif; ?>
	}
<?php endforeach;?>
