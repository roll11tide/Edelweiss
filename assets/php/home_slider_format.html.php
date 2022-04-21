<!-- SLIDE  -->
<!-- <li data-index="rs-129"> -->
<?php echo '<li data-index="rs-' . $rs . '" data-title="" data-description="">'; ?>
	<!-- MAIN IMAGE -->
	<?php echo'<img src="' . $path . '"  alt=""  class="rev-slidebg" >'; ?>
	<!-- LAYERS -->

	<!-- LAYER NR. 2 -->
	<div class="tp-caption Newspaper-Title tp-resizeme "
	<?php echo'id="slide-' . $rs . '-layer-1"'; ?>
	data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
	data-y="['center','center','center','center']" data-voffset="['0','0','0','0']"
	data-fontsize="['50','50','50','30']"
	data-lineheight="['55','55','55','35']"
	data-width="['600','600','600','420']"
	data-height="none"
	data-whitespace="normal"
	data-transform_idle="o:1;"

	data-transform_in="y:[100%];z:0;rX:100deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
	data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
	data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	data-mask_out="x:0;y:0;s:inherit;e:inherit;"
	data-start="1000"
	data-splitin="none"
	data-splitout="none"
	data-responsive_offset="on" >
		<div class="banner-text text-center">
			<?php include 'assets/php/home_banner_lead.html.php'; ?>
		</div>
	</div>
</li>

<?php
	$rs = null;
	$path = null;
?>