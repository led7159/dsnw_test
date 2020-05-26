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

<div class="container-full">
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="footer-map">
						<div class="footer-map-top-txt">광양시어린이보육재단</div>
						<div class="footer-map-bottom-txt">
							<a href="<?php echo site_url();?>/purpose">재단설립취지</a><br>
							<a href="<?php echo site_url();?>/history">재단개요및연혁</a><br>
							<a href="<?php echo site_url();?>/greeting">인사말</a><br>
							<a href="<?php echo site_url();?>/organization">조직도</a><br>
							<a href="<?php echo site_url();?>/directions">찾아오시는길</a>
						</div>
					</div>
					<div class="footer-map">
						<div class="footer-map-top-txt">후원안내</div>
						<div class="footer-map-bottom-txt">
							<a href="<?php echo site_url();?>/guidance">후원안내</a><br>
							<a href="<?php echo site_url();?>/sponsor">후원현황</a><br>
							<a href="<?php echo site_url();?>/donation">후원금사용내역</a>
						</div>
					</div>
					<div class="footer-map">
						<div class="footer-map-top-txt">사업안내</div>
						<div class="footer-map-bottom-txt">
							<a href="<?php echo site_url();?>/business">지원사업안내</a><br>
							<a href="<?php echo site_url();?>/business-chk">지원사업신청 조회</a>
						</div>
					</div>
					<div class="footer-map">
						<div class="footer-map-top-txt">경영공시</div>
						<div class="footer-map-bottom-txt">
							<a href="<?php echo site_url();?>/general">일반현황</a><br>
							<a href="<?php echo site_url();?>/operation">운영현황</a><br>
							<a href="<?php echo site_url();?>/directorate">이사회</a><br>
							<a href="<?php echo site_url();?>/report">사업보고서</a>
						</div>
					</div>
					<div class="footer-map">
						<div class="footer-map-top-txt">보육양육정보안내</div>
						<div class="footer-map-bottom-txt">
							<a href="<?php echo site_url();?>/facility">보육시설현황</a><br>
							<a href="<?php echo site_url();?>/newborn">신생아양육비지원</a><br>
							<a href="<?php echo site_url();?>/infant">영유아보육료지원</a><br>
							<a href="<?php echo site_url();?>/nurture">양육수당지원</a><br>
							<a href="<?php echo site_url();?>/childcare">시간제보육지원</a>
						</div>
					</div>
					<div class="footer-map">
						<div class="footer-map-top-txt">알림마당</div>
						<div class="footer-map-bottom-txt">
							<a href="<?php echo site_url();?>/notice">공지사항</a><br>
							<a href="<?php echo site_url();?>/board">자유게시판</a><br>
							<a href="<?php echo site_url();?>/faq">자주하는질문</a><br>
							<a href="<?php echo site_url();?>/reference">자료실</a><br>
							<a href="<?php echo site_url();?>/gallery">갤러리</a>
						</div>
					</div>
					<div class="footer-map">
						<div class="footer-map-top-txt">기부의전당</div>
						<div class="footer-map-bottom-txt">
							<a href="<?php echo site_url();?>/admin/donate/index">수시후원</a><br>
							<a href="<?php echo site_url();?>/admin/donator/cmsIndex/1">정기후원<br>(CMS기부리더)</a><br>
						</div>
					</div>
					<div class="footer-btn">후원문의<br><b>061-797-2319</b></div>
					<a href="<?php echo site_url();?>/guidance"><div class="footer-btn HT37 MT15 PT8 FS13">후원안내 바로가기 ></div></a>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="footer-bottom" class="HT125">
	<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<img src="<?php echo get_template_directory_uri(); ?>/images/footer_logo.png" alt="" class="PT13 FL">
					<div class="footer-txt FL PL50">
						<a href="<?php echo site_url();?>/purpose">광양시어린이보육재단소개</a>&nbsp;&nbsp;|&nbsp;&nbsp;
						<a href="<?php echo site_url();?>/faq">자주하는질문</a>&nbsp;&nbsp;|&nbsp;&nbsp;
						<a href="<?php echo site_url();?>/directions">찾아오시는길</a>&nbsp;&nbsp;|&nbsp;&nbsp;
						<a href="<?php echo site_url();?>/notice">공지사항</a><br>단체명 : 광양시어린이보육재단 | 주소 : [57785]전남 광양시 행정2길 5, 4층 어린이보육재단(중동) | 전화번호 : 061-797-2319<br>COPYRIGHT@BOYOK.OR.KR_ALL RIGHT RESERVED
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
