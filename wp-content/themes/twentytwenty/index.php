<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<link href="<?php echo get_template_directory_uri(); ?>/stylesheets/sass/components/js-image-slider.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri(); ?>/stylesheets/sass/components/js-image-slider-theme.css" rel="stylesheet" type="text/css" />

<div id="bg">
	<div id="slider">
		<img data-href="<?php echo site_url();?>" data-src="<?php echo get_template_directory_uri(); ?>/images/banu.jpg" src="<?php echo get_template_directory_uri(); ?>/images/banu.jpg" alt="Slide 1" />
		<!-- <img data-href="<?php echo site_url();?>" data-src="<?php echo get_template_directory_uri(); ?>/images/main/img_main-2.png" src="" alt="Slide 2" />
		<img data-href="<?php echo site_url();?>" data-src="<?php echo get_template_directory_uri(); ?>/images/main/img_main-3.png" src="" alt="Slide 2" /> -->
	</div>
</div>
<div class="container-full">

	<div class="container">

	<!-- container-top -->
		<div class="row">
			<div class="col-xs-12 MB30">

			<!-- 공지사항 -->
				<div class="col-xs-6 PL0">
					<div class="board-box">
						<?php echo apply_filters('the_content','[kboard_latest id=1 url='.site_url().'/notice rpp=10]'); ?>
					</div>
			</div>

			<!-- 메뉴 -->
				<div class="col-xs-6 PL0">
					<div class="board-box">

					</div>
			</div>
		</div>

	</div>
</div>

<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/js-image-slider.js"></script>

<script>
var slider = new IdealImageSlider.Slider('#slider');
slider.start();
</script>

<script>
$(document).ready(function(){
 $('a[data-href]').each(function() {
    $(this).attr('href', $(this).attr('data-href'));
});
});
</script>


<script>
	function tick() {
		$('#roll li:first').slideUp(function () {
			$(this).appendTo($('#roll')).slideDown();
		});
	}
	setInterval(function(){tick()}, 3000);
</script>
