<?php
	require_once "conf/boundary.conf.php";
	require_once "inc/patterns.php";
?>

<?php foreach ( $RENDER_ZOOMS as $zoom ):?>		
	<?php foreach ( $BOUNDARY_LEVELS[$zoom] as $level ):?>
		.boundary.level<?php echo $level;?>[zoom = <?php echo $zoom?>] {						
			<?php if ( in_array($level,$BOUNDARY_BACKGROUND[$zoom]) ):?>
			line-color: #ffffff;
			line-width: <?php echo exponential($BOUNDARY_WIDTH[$level],$zoom); ?>;
			<?php endif; ?>						
			
			xxx/line-width: <?php echo exponential($BOUNDARY_WIDTH[$level],$zoom); ?>;
			xxx/line-color: <?php echo linear($BOUNDARY_COLOR[$level],$zoom); ?>;
			<?php if ( in_array($level,$BOUNDARY_RENDER_DASH[$zoom]) ):?>
				xxx/line-dasharray: <?php echo implode(',',exponential($BOUNDARY_DASH[$level],$zoom)); ?>;
			<?php endif;?>
			xxx/line-opacity: <?php echo exponential($BOUNDARY_OPACITY[$level],$zoom); ?>;
			
			<?php if ( in_array($level,$BOUNDARY_GLOW[$zoom]) ):?>
			::glow {
				line-width: <?php echo exponential($BOUNDARY_GLOW_WIDTH[$level],$zoom); ?>;
				line-color: <?php echo linear($BOUNDARY_GLOW_COLOR[$level],$zoom); ?>;				
				line-opacity: <?php echo exponential($BOUNDARY_GLOW_OPACITY[$level],$zoom); ?>;
			}
			<?php endif; ?>
		}
	<?php endforeach;?>
	
<?php endforeach;?>
