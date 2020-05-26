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
					<li class="inner">인재채용</li>
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

		<div id="sub-menu-6">
			<div class="sub-menu-txt">우리 가족과 이웃의 따뜻한 손길이<br>아이들의 큰 꿈을 만듭니다.</div>
			<IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/ico_menu-6.png" alt="">
		</div>

		<UL>
			<li>
				<dl>
					<a href="<?php echo site_url();?>/guidance"><IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/menu_guidance.png" alt="">
					<DT>후원안내</DT>
					<DD>어린이가 행복한 세상, 우리 광양시가 만듭니다.</DD></a>
				</dl>
			</li>
			<li>
				<dl>
					<a href="<?php echo site_url();?>/sponsor"><IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/menu_sponsor.png" alt="">
					<DT>후원현황</DT>
					<DD>우리의 가족과 이웃에게 나눔과 돌봄의 문화를 실천합니다.</DD></a>
				</dl>
			</li>
			<li>
				<dl>
					<a href="<?php echo site_url();?>/donation"><IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/menu_donation.png" alt="">
					<DT>후원금사용내역</DT>
					<DD>신뢰를 바탕으로 보육의 미래를 선도합니다.</DD></a>
				</dl>
			</li>
		</UL>
	</LI>
	<!-- 두섯번째 서브 메뉴 끝 -->

	<!-- 세번째 서브 메뉴 -->
	<LI tabindex="0" class="gnb_2dp_2dp">
		<UL>
			<li>
				<dl>
					<a href="<?php echo site_url();?>/business"><IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/menu_business.png" alt="">
					<DT>사업안내</DT>
					<DD>아이 양육과 교육에 지원되는 사업을 안내드립니다.</DD></a>
				</dl>
			</li>
			<li>
				<dl>
					<a href="<?php echo site_url();?>/business-chk"><IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/menu_business_bk.png" alt="">
					<DT>지원사업 신청조회</DT>
					<DD>신청하신 사업을 직접 조회 하실 수 있습니다.</DD></a>
				</dl>
			</li>
		  </UL>

		 <div id="sub-menu-2">
			<div class="sub-menu-txt PL30">어린이들을 안전한 환경 속에서<br>건강하고 행복한 어린이로 성장하도록 도와드립니다.</div>
			<IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/ico_menu-2.png" alt="">
		</div>
	</LI>
	<!-- 세번째 서브 메뉴 끝 -->

	<!-- 네번째 서브 메뉴 -->
	<LI tabindex="0" class="gnb_2dp_3dp">

		<div id="sub-menu-3">
			<div class="sub-menu-txt PT19">시민 여러분들의 지속적인 관심이<br>꿈이 가득한 세상을 만드는 한걸음 입니다.</div>
			<IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/ico_menu-3.png" alt="">
		</div>

		<UL>
			<li>
				<dl>
					<a href="<?php echo site_url();?>/general"><IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/menu_general.png" alt="">
					<DT>일반현황</DT>
					<DD>어린이가 자라나는 아름다운 세상을 향한 사업을 운영합니다.</DD></a>
				</dl>
			</li>
			<li>
				<dl>
					<a href="<?php echo site_url();?>/operation"><IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/menu_operation.png" alt="">
					<DT>운영현황</DT>
					<DD>국가 정책에 적극 동참하여 보육 선진화에 참여합니다.</DD></a>
				</dl>
			</li>
			<li>
				<dl>
					<a href="<?php echo site_url();?>/directorate"><IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/menu_directorate.png" alt="">
					<DT>이사회</DT>
					<DD>어린이의 권익과 질높은 보육을 지원합니다.</DD></a>
				</dl>
			</li>
			<li>
				<dl>
					<a href="<?php echo site_url();?>/report"><IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/menu_report.png" alt="">
					<DT>사업보고서</DT>
					<DD>광양시어린이보육재단의 운영 결과보고서입니다.</DD></a>
				</dl>
			</li>
		</UL>
	</LI>
	<!--네번째 서브 메뉴 끝 -->


	<!-- 다섯번째 서브 메뉴 -->
	<LI tabindex="0" class="gnb_2dp_5dp">
		<UL>
			<li>
				<dl>
					<a href="<?php echo site_url();?>/facility"><IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/menu_facility.png" alt="">
					<DT>보육시설현황</DT>
					<DD>안전한 환경 속에서 건강하고 창의적인 인재로 육성합니다.</DD></a>
				</dl>
			</li>
			<li>
				<dl>
					<a href="<?php echo site_url();?>/newborn"><IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/menu_newborn.png" alt="">
					<DT>신생아양육비지원</DT>
					<DD>우리 아이의 행복과 꿈을 키워가는 광양시어린이보육재단입니다.</DD></a>
				</dl>
			</li>
			<li>
				<dl>
					<a href="<?php echo site_url();?>/infant"><IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/menu_infant.png" alt="">
					<DT>영유아보육료지원</DT>
					<DD>행복한 영유아의 성장 발달을 위해 전문적인 노력을 기울입니다.</DD></a>
				</dl>
			</li>
			<li>
				<dl>
					<a href="<?php echo site_url();?>/nurture"><IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/menu_nurture.png" alt="">
					<DT>양육수당지원</DT>
					<DD>일하는 부모의 양육과 교육 문제를 지원합니다.</DD></a>
				</dl>
			</li>
			<li class="MT35">
				<dl>
					<a href="<?php echo site_url();?>/childcare"><IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/menu_childcare.png" alt="">
					<DT>시간제보육지원</DT>
					<DD>아이, 부모, 교사 모두가 행복한 보육환경을 제공합니다.</DD></a>
				</dl>
			</li>

			<div id="sub-menu-5">
				<div class="sub-menu-txt PT25 PL20">어린이를 건강하고 안전하게 보호하기 위한<br>최적의 보육환경을 제공합니다.</div>
			</div>
		</UL>
	</LI>
	<!-- 다섯번째 서브 메뉴 끝 -->

	<!-- 여섯번째 서브 메뉴 -->
	<LI tabindex="0" class="gnb_2dp_4dp">

		<div id="sub-menu-4">
			<div class="sub-menu-txt">시민 여러분들의 지속적인 관심이<br>꿈이 가득한 세상을 만드는<br>위대한 한걸음입니다.</div>
			<IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/ico_menu-4.png" alt="">
		</div>

		<UL>
			<li>
				<dl>
					<a href="<?php echo site_url();?>/notice"><IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/menu_notice.png" alt="">
					<DT>공지사항</DT>
					<DD>광양시어린이보육재단의 새로운 소식을 알려드립니다.</DD></a>
				</dl>
			</li>
			<li>
				<dl>
					<a href="<?php echo site_url();?>/board"><IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/menu_board.png" alt="">
					<DT>자유게시판</DT>
					<DD>자유롭게 사용할 수 있는 게시판 입니다.</DD></a>
				</dl>
			</li>
			<li>
				<dl>
					<a href="<?php echo site_url();?>/faq"><IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/menu_faq.png" alt="">
					<DT>자주하는질문</DT>
					<DD>자주하는 질문들에 대한 답변을 확인 할 수 있습니다.</DD></a>
				</dl>
			</li>
			<li class="MT35">
				<dl>
					<a href="<?php echo site_url();?>/reference"><IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/menu_reference.png" alt="">
					<DT>자료실</DT>
					<DD>필요한 양식과 자료를 확인할 수 있습니다.</DD></a>
				</dl>
			</li>
			<li class="MT35">
				<dl>
					<a href="<?php echo site_url();?>/gallery"><IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/menu_gallery.png" alt="">
					<DT>갤러리</DT>
					<DD>광양시어린이보육재단의 활동들을 확인할 수 있습니다.</DD></a>
				</dl>
			</li>
		</UL>
	</LI>
	<!-- 여섯번째 서브 메뉴 끝 -->

	<!-- 일곱번째 서브 메뉴 -->
	<LI tabindex="0" class="gnb_2dp_7dp">
		<UL>
			<li>
				<dl>
					<a href="<?php echo site_url();?>/admin/donate/index"><IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/menu_support.png" alt="">
					<DT>수시후원</DT>
					<DD>큰 사랑을 실천하는 후원자님을<br>소개합니다.</DD></a>
				</dl>
			</li>
			<li>
				<dl>
					<a href="<?php echo site_url();?>/admin/donator/cmsIndex/1"><IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/menu_cms.png" alt="">
					<DT>정기후원(CMS기부리더)</DT>
					<DD>후원자님께서 보내주신 사랑과<br>후원에 다시 한번 감사드립니다.</DD></a>
				</dl>
			</li>
		  </UL>

		 <div id="sub-menu-7">
			<div class="sub-menu-txt PL30">여러분들의 작은 실천이<br>우리 아이들의 새로운 희망이 되었습니다.</div>
			<IMG src="<?php echo get_template_directory_uri(); ?>/images/submenu/ico_menu-7.png" alt="">
		</div>
	</LI>
	<!-- 일곱번째 서브 메뉴 끝 -->
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
