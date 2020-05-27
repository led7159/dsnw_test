<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<title>대신네트웍스순천</title>
	<meta name="google-site-verification" content="a2t5sfeBOWkHe4sY6_Xl1UIYAQt_h_NMd0KtQBZQX1Y" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- <meta name="viewport" content="width=device-width"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	<meta property="og:type" content="website">
	<meta property="og:title" content="대신네트웍스순천">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

	<script language="JavaScript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script language="JavaScript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>

	<link href="<?php echo get_template_directory_uri();?>/stylesheets/sass/style.css" rel="stylesheet" type="text/css" media="screen, print">

	<script language="JavaScript" src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
	<script language="JavaScript" src="<?php echo get_template_directory_uri();?>/js/TweenMax.min.js"></script>

	<meta name="viewport" content="width=1200, user-scalable=yes">
</head>

<body>

<div class="container-full">
	<div id="header">
		<div id="gnb-top"> 	<!-- gnb -->
			<div class="container">
				<div class="row">
					<div class="col-xs-6">
							<?php if (is_user_logged_in()) { ?>
						<a href="<?php echo site_url();?>/admin" >
							<div class="btn-admin">관리자페이지로 돌아가기</div>
						</a>
						<? } ?>
					</div>
					<div class="col-xs-6">
						<div class="gnb-txt">
							<!-- <a href="<?php echo site_url();?>/directions">
								<div class="btn-map">MAP</div>
							</a> -->

							<a href="<?php echo site_url();?>/notice" >
								<div class="btn-gnb" >공지사항&nbsp;&nbsp;&nbsp;</div>
							</a>
							<a href="<?php echo site_url();?>/faq">
								<div class="btn-gnb" >장애접수&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</div>
							</a>
							<?php if (!is_user_logged_in()) { ?>
							<a href="<?php echo site_url();?>/admin/user/login">
								<div class="btn-gnb" >관리자 로그인&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</div>
							</a>
							<? } else { ?>
							<a href="<?php echo site_url();?>/admin/user/logout">
								<div class="btn-gnb">관리자 로그아웃&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</div>
							</a>
						<? } ?>
						</div>
					</div>
				</div>
			</div> <!-- container -->
		</div> <!-- gnb -->
	</div> <!-- header -->

	<div class="container ht85">
		<div class="row" >
			<div class="col-xs-12" >
				<div id="logo">
					<a href="<?php echo site_url();?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">
					</a>
				</div>
				<!-- <div class="gnb-header-txt">
					<a href="<?php echo site_url();?>/gallery" class="MR17">
						<img src="<?php echo get_template_directory_uri(); ?>/images/gallery_ico.png" alt="">갤러리
					</a>
					<a href="<?php echo site_url();?>/reference" class="MR17">
						<img src="<?php echo get_template_directory_uri(); ?>/images/content_ico.png" alt="">자료실
					</a>
					<a href="<?php echo site_url();?>/sponsor" class="MR0">
						<img src="<?php echo get_template_directory_uri(); ?>/images/heart_ico.png" alt="">후원현황
					</a>
				</div> -->
			</div>
		</div>
	</div>
</div>


<DIV id="wrap"><!-- header -->
<HEADER id="header1">
<DIV class="header_wrap">

<NAV>
	<div id="gnb2">
		<UL id="gnb" class="container">
			<LI><div class="menu_btn"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/lnb_btn.png" alt=""></a></LI>
			<LI><a href="<?php echo site_url();?>/purpose">홈</a></LI>
			<LI><a href="<?php echo site_url();?>/guidance">소개</a></LI>
			<LI><a href="<?php echo site_url();?>/business">사업영역</a></LI>
			<LI><a href="<?php echo site_url();?>/general">서비스</a></LI>
			<LI><a href="<?php echo site_url();?>/facility">인재채용</a></LI>
			<LI><a href="<?php echo site_url();?>/notice">고객지원</a></LI>
			<!-- <LI><a href="<?php echo site_url();?>/admin/donate/index">기부의전당</a></LI> -->
		</ul>
	  </div>

	<UL class="gnb_2dp">

	<!-- 전체 서브 메뉴 -->
	<LI tabindex="0" class="gnb_2dp_0dp">
		<ul class='main-menubar'>
			<li>
				<ul id="submenu01" class="main-menu">
					<li class="inner">홈</li>
					<li><a href="<?php echo site_url();?>/purpose">개요 및 연혁</a></li> <!-- intro -->
					<li><a href="<?php echo site_url();?>/history">인사말</a></li> <!-- introduction -->
					<li><a href="<?php echo site_url();?>/greeting">그룹사 소개</a></li>  <!-- content -->
					<li><a href="<?php echo site_url();?>/organization">대신 이야기</a></li> <!-- organization -->
					<li><a href="<?php echo site_url();?>/directions">찾아오시는길</a></li> <!-- result -->
				</ul>
			</li>
			<li>
				<ul id="submenu06" class="main-menu">
					<li class="inner inner-rest">소개</li>
					<li><a href="<?php echo site_url();?>/guidance">윤리 경영</a></li>
					<li><a href="<?php echo site_url();?>/sponsor">경영과 비전</a></li>
					<li><a href="<?php echo site_url();?>/donation">CI소개</a></li>
				</ul>
			</li>
			<li>
				<ul id="submenu02" class="main-menu">
					<li class="inner inner-rest">사업영역</li>
					<li><a href="<?php echo site_url();?>/business">사업안내</a></li> <!-- culture -->
					<li><a href="<?php echo site_url();?>/business-chk">참조사항</a></li> <!-- culture -->
				</ul>
			</li>
			<li>
				<ul id="submenu03" class="main-menu">
					<li class="inner inner-rest">서비스</li>
					<li><a href="<?php echo site_url();?>/general">통합유지보수</a></li>
					<li><a href="<?php echo site_url();?>/operation">주요사업현황</a></li>
				</ul>
			</li>
			<li>
				<ul id="submenu05" class="main-menu">
					<li class="inner inner-rest">인재채용</li>
					<li><a href="<?php echo site_url();?>/facility">대신 인재상</a></li>
					<li><a href="<?php echo site_url();?>/newborn">인재채용</a></li>
				</ul>
			</li>
			<li>
				<ul id="submenu04" class="main-menu">
					<li class="inner inner-rest">고객지원</li>
					<li><a href="<?php echo site_url();?>/notice">공지사항</a></li>
					<li><a href="<?php echo site_url();?>/board">자유게시판</a></li>
					<li><a href="<?php echo site_url();?>/faq">장애접수</a></li>
					<li><a href="<?php echo site_url();?>/reference">자료실</a></li>
					<li><a href="<?php echo site_url();?>/gallery">고객의 소리</a></li>
				</ul>
			</li>
		</ul>
	</LI>
	<!-- 전체 서브 메뉴 끝 -->

	<!-- 첫번째 서브 메뉴 -->
	<LI tabindex="0" class="gnb_2dp_1dp">

		<div id="sub-menu-1">
			<div class="sub-menu-txt">대신네트웍스 순천은<br>영상회의, VoIP, CTI, 키폰, 헤드셋, ERP 등<br>장비 판매, 네트워크 구축, 소프트웨어.</div>
			<IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/ico_menu-1.png" alt="">
		</div>

		<ul class="sub-menu">
			<!-- <li class="inner">홈</li> -->
			<li><a href="<?php echo site_url();?>/purpose">개요 및 연혁</a></li> <!-- intro -->
			<li><a href="<?php echo site_url();?>/history">인사말</a></li> <!-- introduction -->
			<li><a href="<?php echo site_url();?>/greeting">그룹사 소개</a></li>  <!-- content -->
			<li><a href="<?php echo site_url();?>/organization">대신 이야기</a></li> <!-- organization -->
			<li><a href="<?php echo site_url();?>/directions">찾아오시는길</a></li> <!-- result -->
		</ul>
	</LI>
	<!-- 첫번째 서브 메뉴 끝 -->

	<!-- 두번째 서브 메뉴 -->
	<LI tabindex="0" class="gnb_2dp_6dp">

		<div id="sub-menu-1">
			<div class="sub-menu-txt">대신네트웍스 순천은<br>영상회의, VoIP, CTI, ERP 등<br>장비 판매, 네트워크 구축, 소프트웨어.</div>
			<IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/ico_menu-1.png" alt="">
		</div>

		<ul class="sub-menu">
			<!-- <li class="inner">홈</li> -->
			<li><a href="<?php echo site_url();?>/guidance">윤리 경영</a></li>
			<li><a href="<?php echo site_url();?>/sponsor">경영과 비전</a></li>
			<li><a href="<?php echo site_url();?>/donation">CI소개</a></li>
		</ul>
	</LI>
	<!-- 두섯번째 서브 메뉴 끝 -->

	<!-- 세번째 서브 메뉴 -->
	<LI tabindex="0" class="gnb_2dp_2dp">
		<div id="sub-menu-1">
			<div class="sub-menu-txt">대신네트웍스 순천은<br>고객과 20년간 함께해온<br>파트너입니다.</div>
			<IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/ico_menu-1.png" alt="" width="100px" height="100px">
		</div>

		<ul class="sub-menu">
			<!-- <li class="inner">홈</li> -->
			<li><a href="<?php echo site_url();?>/business">사업안내</a></li> <!-- culture -->
			<li><a href="<?php echo site_url();?>/business-chk">참조사항</a></li> <!-- culture -->
		</ul>
	</LI>
	<!-- 세번째 서브 메뉴 끝 -->

	<!-- 네번째 서브 메뉴 -->
	<LI tabindex="0" class="gnb_2dp_2dp">
		<div id="sub-menu-1">
			<div class="sub-menu-txt">대신네트웍스 순천은<br>고객만족과 최상의 서비스를 위해<br>최선을 다합니다.</div>
		</div>

		<ul class="sub-menu">
			<!-- <li class="inner">홈</li> -->
			<li><a href="<?php echo site_url();?>/general">통합유지보수</a></li>
			<li><a href="<?php echo site_url();?>/operation">주요사업현황</a></li>
		</ul>
	</LI>
	<!--네번째 서브 메뉴 끝 -->


	<!-- 다섯번째 서브 메뉴 -->
	<LI tabindex="0" class="gnb_2dp_2dp">
		<div id="sub-menu-1">
			<div class="sub-menu-txt">대신네트웍스 순천은<br>IT전문가들과 함께 미래를꾸려갈<br>인재를 채용합니다.</div>
		</div>

		<ul class="sub-menu">
			<!-- <li class="inner">홈</li> -->
			<li><a href="<?php echo site_url();?>/facility">대신 인재상</a></li>
			<li><a href="<?php echo site_url();?>/newborn">인재채용</a></li>
		</ul>
	</LI>
	<!-- 다섯번째 서브 메뉴 끝 -->

	<!-- 여섯번째 서브 메뉴 -->
	<LI tabindex="0" class="gnb_2dp_4dp">

		<div id="sub-menu-1">
			<div class="sub-menu-txt">대신네트웍스 순천은<br>신속한 장애처리를 위해<br>다양한 서비스를 제공합니다..</div>
			<IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/ico_menu-1.png" alt="">
		</div>

		<ul class="sub-menu">
			<!-- <li class="inner">홈</li> -->
			<li><a href="<?php echo site_url();?>/notice">공지사항</a></li>
			<li><a href="<?php echo site_url();?>/board">자유게시판</a></li>
			<li><a href="<?php echo site_url();?>/faq">장애접수</a></li>
			<li><a href="<?php echo site_url();?>/reference">자료실</a></li>
			<li><a href="<?php echo site_url();?>/gallery">고객의 소리</a></li>
		</ul>
	</LI>
	<!-- 여섯번째 서브 메뉴 끝 -->
	</ul>
</nav>
</div>
</header>
</div>
</div>
<style>
html {
     margin-top: 0px !important;
}
</style>
