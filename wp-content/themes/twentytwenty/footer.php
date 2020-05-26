<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<footer>

<div id="footer-bottom" class="HT125">
	<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<img src="<?php echo get_template_directory_uri(); ?>/images/footer_logo.png" alt="" class="PT13 FL">
					<div class="footer-txt FL PL50">
						<a href="<?php echo site_url();?>/purpose">대신네트웍스소개</a>&nbsp;&nbsp;|&nbsp;&nbsp;
						<a href="<?php echo site_url();?>/faq">자주하는질문</a>&nbsp;&nbsp;|&nbsp;&nbsp;
						<a href="<?php echo site_url();?>/directions">찾아오시는길</a>&nbsp;&nbsp;|&nbsp;&nbsp;
						<a href="<?php echo site_url();?>/notice">공지사항</a><br>기업명 : 대신네트웍스(주)순천 | 주소 : [57785]전남 순천시 매안로 83 유진빌딩 2층 대신네트웍스 | 전화번호 : 061-910-2000<br>© 2016 DAESHIN all rights reserved
					</div>
				</div>
			</div>
		</div>
	</div>
</footer><!-- .site-footer -->
</div>
<?php wp_footer(); ?>


</body>
</html>
