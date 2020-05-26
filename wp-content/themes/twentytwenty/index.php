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
		<img data-href="<?php echo site_url();?>" data-src="<?php echo get_template_directory_uri(); ?>/images/main/img_main-1.png" src="" alt="Slide 1" />
		<img data-href="<?php echo site_url();?>" data-src="<?php echo get_template_directory_uri(); ?>/images/main/img_main-2.png" src="" alt="Slide 2" />
		<img data-href="<?php echo site_url();?>" data-src="<?php echo get_template_directory_uri(); ?>/images/main/img_main-3.png" src="" alt="Slide 2" />
	</div>
</div>
<div class="container-full">

	<div class="container">

	<!-- container-top -->
		<div class="row">
			<div class="col-xs-12 MB30">

			<!-- 공지사항 -->
				<div class="col-xs-4 PL0">
					<div class="board-box">
						<?php echo apply_filters('the_content','[kboard_latest id=4 url='.site_url().'/notice rpp=4]'); ?>
					</div>
			<!-- 사업안내 소개 -->
				<div class="col-xs-4">
					<div id="shortcut-business">
						<div class="shortcut-business-txt">광양시어린이보육재단<br>사업안내 소개</div>
						<a href="<?php echo site_url();?>/business">
							<div class="shortcut-business-btn">자세히보기</div>
						</a>
					</div>
				</div>
			<!-- 바로가기 메뉴 -->
				<div class="col-xs-4 PR0">
					<div class="board-box PD0">
						<div id="shortcut-menu">
							<a href="<?php echo site_url();?>/sponsor">
								<div class="shortcut HT139 PT95">
									<div class="shortcut-txt">후원 현황</div>
								</div>
							</a>
							<a href="<?php echo site_url();?>/facility">
								<div class="shortcut HT139 PT95">
									<div class="shortcut-txt">보육시설 현황</div>
								</div>
							</a>
							<a href="<?php echo site_url();?>/newborn">
								<div class="shortcut HT155 PT108">
									<div class="shortcut-txt">신생아양육비 지원</div>
								</div>
							</a>
							<a href="<?php echo site_url();?>/infant">
								<div class="shortcut HT155 PT108">
									<div class="shortcut-txt">영유아보육료 지원</div>
								</div>
							</a>
							<a href="<?php echo site_url();?>/nurture">
								<div class="shortcut HT137 PT95">
									<div class="shortcut-txt">양육수당 지원</div>
								</div>
							</a>
							<a href="<?php echo site_url();?>/childcare">
								<div class="shortcut HT137 PT95">
									<div class="shortcut-txt">시간제보육 지원</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

	<!-- container-middle -->
		<div class="row">
			<div class="col-xs-12 MB30">

			<!-- 갤러리 -->
				<div class="col-xs-8 PL0">
					<div class="board-box HT294">
						<?php echo apply_filters('the_content','[kboard_latest id=8 url='.site_url().'/gallery rpp=3]'); ?>
					</div>
				</div>
			<!-- 문의 -->
				<div class="col-xs-4 PR0">
					<div class= "call-center">재단문의 &nbsp;&nbsp;<span class="green">061-797-2319</span></div>
					<div id="question">
						<div class="question-txt">광양시어린이보육재단 후원이 처음이세요?</div>
					</div>
					<a href="<?php echo site_url();?>/guidance"><div class= "method">후원방법 알아보기→</div></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="container-bottom">
	<div class="container-full">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<img src="<?php echo get_template_directory_uri(); ?>/images/main/img_main_bottom.png" alt="" class="FL">
					<div class="donation-title"><span class="green FW500">따뜻한 관심</span>을 가져주셔서 감사합니다.</div>
					<div class="donation-sub">여러분들의 나눔이 우리 아이들의 새로운 희망이 되었습니다.<br>아이들을 지켜주는 행복도시 광양, 시민여러분의 든든한 버팀목이 되겠습니다.</div>
					<a href="<?php echo site_url();?>/guidance">
						<div class="donation-btn WH120;">후원하기</div>
					</a>
					<a href="<?php echo site_url();?>/donation/">
						<div class="donation-btn">후원금 사용내역보기</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php //START : 2019.06.07 : LTW : DB에서 후원현황 값 부르기
require_once("content-config.php");
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass) ;

 mysqli_set_charset($conn, 'utf8');
 mysqli_select_db($conn,$dbname);

 if(! $conn ) {
  die('Could not connect: ' . mysql_error() );
 }

 $query="select t.donation, u.name, t.date from tb_donate as t
         inner join tb_donator as u on u.id = t.donator_id
         where t.orgType='수시'
         order by t.id desc";

 $result=mysqli_query($conn,$query);
 if($result === false){
     throw new Exception(mysqli_error($conn));
 }

 //$bizList = array();
 $view = "";
 while ($row=mysqli_fetch_array($result)) {

  $view = "<li>".$row['name']."님께서 ".date('Y.m.d',strtotime($row['date'])) . "에<span> " .number_format($row['donation'])."원 </span> 후원해주셨습니다.</li>" . $view;

}

//print_r($view);

// END
?>
<!-- 후원현황 -->
<div class="container-full">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 MB30 MT30">
				<div class="support-status">
					<div class="status-title">광양시어린이보육재단 후원현황</div>
					<div class="status-txt">
						<ul id="roll" class="roll">
              <!-- 2019.06.07 : LTW : 후원현황 DB에서 가져와서 보여주기
              <li>사)한국농촌지도자 광양시협의회 회장 서현필님께서 2019년 5월 29일 <span>10,000,000원</span> 후원해주셨습니다.</li>
							<li>KETRIKETRIKETRIKETRIKETRIKETRIKETRIKETRI 우연주님께서 2019년 5월 20일 <span>1,000,000원</span> 후원해주셨습니다.</li>
							<li>중흥건설(주) 2019년 5월 15일 <span>5,000,000원</span> 후원해주셨습니다.</li>
            -->
              <?php echo $view; ?>
						</ul>
					</div>
					<a href="<?php echo site_url();?>/admin/donate/index/1"><img src="<?php echo get_template_directory_uri(); ?>/images/main/ico_add.png" style="float:right;"></a>
				</dl>
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
