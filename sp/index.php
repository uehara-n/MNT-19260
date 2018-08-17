<?php get_header(); ?>
<div class="main_v">
	<div class="slide_inner">
		<p class="slide"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/mainv_slide1.jpg" srcset="<?php echo get_template_directory_uri(); ?>/page_image/top/mainv_slide1.jpg 1x,<?php echo get_template_directory_uri(); ?>/page_image/top/mainv_slide1@2x.jpg 2x" alt="" width="640" height="224"></p>
		<p class="slide"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/mainv_slide2.jpg" srcset="<?php echo get_template_directory_uri(); ?>/page_image/top/mainv_slide2.jpg 1x,<?php echo get_template_directory_uri(); ?>/page_image/top/mainv_slide2@2x.jpg 2x" alt="" width="640" height="224"></p>
		<p class="slide"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/mainv_slide4.jpg" srcset="<?php echo get_template_directory_uri(); ?>/page_image/top/mainv_slide4.jpg 1x,<?php echo get_template_directory_uri(); ?>/page_image/top/mainv_slide4@2x.jpg 2x" alt="" width="640" height="224"></p>
		<p class="slide"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/mainv_slide5.jpg" srcset="<?php echo get_template_directory_uri(); ?>/page_image/top/mainv_slide5.jpg 1x,<?php echo get_template_directory_uri(); ?>/page_image/top/mainv_slide5@2x.jpg 2x" alt="" width="640" height="224"></p>
		</div>
  <p class="caption"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/mainv_pic1.png" srcset="<?php echo get_template_directory_uri(); ?>/page_image/top/mainv_pic1.png 1x,
             <?php echo get_template_directory_uri(); ?>/page_image/top/mainv_pic1@2x.png 2x" width="626" height="433" alt="あなたにぴったりの家づくり"></p>
</div>

<!--<div id="oshirase">
◆◇◆◇　ゴールデンウィーク休業のご案内　◆◇◆◇<br />
誠に勝手ながら、2018年5月1日（火）～ 2018年5月6日（日）は休業させていただきます。<br />
通常営業は、5月7日（月）からとなります。<br />
休暇中にいただいたお問い合わせについては、通常営業日より順次対応させていただきますので、ご了承ください。<br />
今後も変わらぬご愛顧をどうぞよろしくお願いいたします。
</div>-->

<?php gr_kaiyu(); ?>

<main class="mainContents">
<!-- ===================================お客様の声-->
<?php
	$args = array(
	'post_type' => 'voice', /* 投稿タイプ */
	'posts_per_page' => 1 /* 件数表示 */
	);
	query_posts( $args );?>
  <section class="t_voice">
    <h3 class="sec_tit top_tit"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/voice_tit.svg" alt="お客様の声"></h3>
<?php if (have_posts()) :
	while (have_posts()) : the_post();//
	 ?>
<div class="box">
      <a href="<?php the_permalink(); ?>">
	      <span class="pic"><?php
		      printf('%s',
		      gr_get_image('voice_image01',
		      array( 'width' => 580, 'alt' => esc_attr( get_the_title())	)));?></span> <span class="name"><?php the_title(); ?></span></a>
    </div>
<?php endwhile;endif; ?>
<?php wp_reset_query(); ?>
    <p class="more base_inner"> <a href="<?php echo home_url();; ?>/voice" class="more_btn1 more_btn"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/more_btn.svg" alt="一覧を見る"></a> </p>
  </section>

	<!-- ====================================イベント -->
	<?php query_posts( array(
	    'post_type' => 'event', //カスタム投稿名
	    'taxonomy' => 'event_cat',
	    'term' => 'event_top',
	    'posts_per_page' => -1 //表示件数（ -1 = 全件 ）
	)); ?>
	<div id="top_event">
	<div class="inner">
	<h3 class="thi_tit"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/top_event_tit.gif" width="100%" alt="開催中の見学会情報" /></h3>
	<?php if(have_posts()): ?>
	<?php while(have_posts()):the_post(); ?>
	<p class="top_event_one">
	<img src="<?php echo get_template_directory_uri(); ?>/page_image/top/top_event_new.gif" width="48" height="16" alt="NEW" style="vertical-align:middle;" />　<a href="<?php the_permalink() ?>"><?php echo post_custom( 'event_date' ); ?>　<?php the_title(); ?></a>
	</p>
	<?php endwhile; else: ?>
	<link rel="stylesheet" href="https://www.tatsuken.jp/wp-content/themes/new/css/none.css">
	<?php endif; ?>
	<?php wp_reset_query(); ?>
	</div>
	</div>
	<!-- ====================================/イベント -->

<!-- ===================================施工事例-->
<?php
	$args = array(
	'post_type' => 'seko', /* 投稿タイプ */
	'posts_per_page' => 1 /* 件数表示 */
	);
	query_posts( $args );?>
  <section class="t_seko">
    <h3 class="top_tit"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/works_tit.svg" alt="最新施工事例" width="640" height="113"></h3>
<?php if (have_posts()) : while (have_posts()) : the_post();/* ループ開始 */ ?>
<div class="box">
      <a href="<?php the_permalink(); ?>">
	      <span class="pic"><?php
		      printf('%s',
		      gr_get_image('seko_after_image',
		      array( 'width' => 580, 'alt' => esc_attr( post_custom( 'seko_comment' ))	)));?></span> <span class="tit"><?php the_title(); ?></span></a>
    </div>
<?php endwhile;endif; ?>
<?php wp_reset_query(); ?>
    <p class="more base_inner"> <a href="<?php echo home_url();; ?>/seko" class="more_btn2 more_btn"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/more_btn.svg" alt="一覧を見る"></a> </p>
  </section>
  <div class="t_tab_area base_inner">
    <ul class="tab">
      <li class="active"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/tab_event_active.svg" alt="イベント情報"></li>
      <li class="inactive"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/tab_log_stack.svg" alt="タツログ"></li>
    </ul>
	  <div class="tab_inner">
<?php
	$args = array(
	'post_type' => 'event', /* 投稿タイプ */
	'posts_per_page' => 4 /* 件数表示 */
	);
	query_posts( $args ); ?>
		<div class="t_event tab_contents">
<?php if (have_posts()) :
	while (have_posts()) : the_post();
	/* ループ開始 */ ?>
		  <div class="box">
			<a href="<?php the_permalink(); ?>" class="inner"><span class="pic"><?php
								printf(
									'%s',
									gr_get_image(
										'event_img00',
										array( 'width' => 220, 'alt' => esc_attr( post_custom( get_the_title() ) ) )
									)
								);
								?></span> <span class="text"><span class="date"><?php echo post_custom( 'event_date' ); ?></span> <span class="tit"><?php the_title(); ?></span> <?php if($place = post_custom('event_place' )){?><span class="place">場所：<?php echo $place; ?></span><? } ?></span></a>
		  </div>
<?php endwhile;endif; ?>
<?php wp_reset_query(); ?>
		<p class="more base_inner"> <a href="<?php the_permalink() ?>/event" class="more_btn1 more_btn"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/more_btn.svg" alt="一覧を見る"></a> </p>
		</div>
		<div class="t_tatsulog tab_contents hide">
<?php
$args = array(
'post_type' => 'tatsulog', /* 投稿タイプ */
'posts_per_page' => 4 /* 件数表示 */
); query_posts( $args ); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post();
	/* ループ開始 */ ?>
		  <div class="box">
			<a href="<?php the_permalink(); ?>" class="inner"><span class="pic"><img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" /></span> <span class="text"><span class="date"><? the_time('Y年n月j日'); ?></span> <span class="tit"><?php the_title(); ?></span> <span class="detail"><?php echo mb_strimwidth(get_the_excerpt(), 0, 60, "…", "UTF-8"); ?></span></span></a>
		  </div>
<?php endwhile;endif; ?>
<?php wp_reset_query(); ?>
			<p class="more base_inner"> <a href="/tatsulog" class="more_btn1 more_btn"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/more_btn.svg" alt="一覧を見る"></a> </p>
		</div>
	</div>
  </div>

  <section class="t_blog base_inner">
<?php
	$args = array(
	'post_type' => 'kojiblog', /* 投稿タイプ */
	'posts_per_page' => 1 /* 件数表示 */
	);query_posts( $args ); ?>
    <h3 class="sec_tit top_tit"> <img src="<?php echo get_template_directory_uri(); ?>/page_image/top/blog_tit.svg" alt="工事ブログ" > </h3>
<?php if (have_posts()) :
	while (have_posts()) : the_post();/* ループ開始 */ ?>
	  <div class="box">
	  <h4 class="tit"><?php the_title(); ?></h4>
	  <p class="pic">
		  <img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" /></p>
	  <p class="date"><? the_time('Y年n月j日'); ?></p>
    <div class="text"><?php echo the_excerpt(); ?></div>
<p class="more base_inner"> <a href="<?php the_permalink() ?>" class="more_btn1 more_btn"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/more_btn2.svg" alt="続きを見る"></a> </p>
		  </div>
<?php endwhile;endif; ?>
<?php wp_reset_query(); ?>
  </section>
  <section class="t_item">
    <h3 class="sec_tit top_tit"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/item_tit.svg" alt="商品ラインナップ"></h3>
    <ul class="base_inner">
      <li><a href="https://www.tatsuken.jp/house_concept" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/item_bnr1.png" srcset="<?php echo get_template_directory_uri(); ?>/page_image/top/item_bnr1.png 1x,
             <?php echo get_template_directory_uri(); ?>/page_image/top/item_bnr1@2x.png 2x" alt="ZEROCUBE+FUN" width="582" height="130"></a></li>
      <li><a href="https://www.tatsuken.jp/t_house" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/item_bnr2.png" srcset="<?php echo get_template_directory_uri(); ?>/page_image/top/item_bnr2.png 1x,
             <?php echo get_template_directory_uri(); ?>/page_image/top/item_bnr2@2x.png 2x" alt="注文住宅フルオーダー" width="582" height="130"></a></li>
    </ul>
  </section>
</main>
<?php get_footer(); ?>
