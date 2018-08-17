<?php get_header(); ?>
	<div id="main_v">
	<div id="s_wrapper">
		<ul id="carousel">
			<li><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/main_v/slide/mainv_5.jpg" width="950" height="398" /></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/main_v/slide/mainv_1.jpg" width="950" height="398" /></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/main_v/slide/mainv_2.jpg" width="950" height="398" /></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/main_v/slide/mainv_3.jpg" width="950" height="398" /></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/main_v/slide/mainv_4.jpg" width="950" height="398" /></li>
		</ul>
		<div id="pager">
	</div>
	</div>
	<div class="inner">
		<img src="<?php echo get_template_directory_uri(); ?>/page_image/top/main_v/mainv_img1.png" width="281" height="268" alt="あなたにぴったりの家づくり" class="img1" />
		<img src="<?php echo get_template_directory_uri(); ?>/page_image/top/main_v/mainv_img2.png" width="499" height="200" alt="スタッフ" class="img2"  />
		</div>
	<!-- / #slider -->
<div class="t_bnr">
<!--<a href="https://www.tatsuken.jp/12948-2"><img src="<?php echo get_template_directory_uri(); ?>/images/common/bnr_modelhouse.jpg" width="950" height="100" alt="モデルハウス販売" class="img_over"/></a>-->
</div>

	</div>

<div id="contents">



<!-- ===================================お客様の声-->
	<?php
$args = array(
	'post_type' => 'voice', /* 投稿タイプ */
	'posts_per_page' => 4 /* 件数表示 */
); ?>
<?php query_posts( $args ); ?>
		<div id="top_voice">
				<h3><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/voice/tvoice_tit.png" width="944" height="39" alt="お客様の声" /></h3>
		<div class="inner">
<?php if (have_posts()) : ?>
	<?php $i = 0; ?>
	<?php while (have_posts()) : the_post();
	/* ループ開始 */ ?>

		<div class="box<?php if($i%4==0){ echo " c_left";} ?>"><a href="/voice#<?php echo 'voice'.$id;?>">		<?php
								printf(
									'%s',
									gr_get_image(
										'voice_image01',
										array( 'width' => 220, 'alt' => esc_attr( post_custom( '<?php the_title(); ?>' ) ) )
									)
								);
								?><span class="txt">
									<?php	$vname = post_custom('voice_name');
											$vcity = post_custom('voice_city');
											if( $vname || $vcity){
												 echo $vname .' '. $vcity.'<br/>'; } ?>
												 <?php the_title(); ?></span></a></div>
<?php
$i++; //最後にループ回数を一つ進める
endwhile; ?>
		<p class="more"><a href="/voice"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/voice/tvoice_btn_rollout.png" width="190" height="31" alt="一覧を見る" /></a></p>
<?php else : ?>
    	<p class="no_data">表示する記事はありませんでした</p>
<?php endif; ?>

</div>
		</div>
<!-- ===================================/お客様の声-->

<!-- ====================================イベント -->
<?php query_posts( array(
    'post_type' => 'event', //カスタム投稿名
    'taxonomy' => 'event_cat',
    'term' => 'event_top',
    'posts_per_page' => -1 //表示件数（ -1 = 全件 ）
)); ?>
<div id="top_event">
<div class="inner">
<h3><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/event/top_event_tit.gif" width="100%" alt="開催中の見学会情報" /></h3>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
<p class="top_event_one">
<img src="<?php echo get_template_directory_uri(); ?>/page_image/top/event/top_event_new.gif" width="48" height="16" alt="NEW" style="vertical-align:middle;" />　<a href="<?php the_permalink() ?>"><?php echo post_custom( 'event_date' ); ?>　<?php the_title(); ?></a>
</p>
<?php endwhile; else: ?>
<link rel="stylesheet" href="https://www.tatsuken.jp/wp-content/themes/new/css/none.css">
<?php endif; ?>
<?php wp_reset_query(); ?>
</div>
</div>
<!-- ====================================/イベント -->


<!-- ====================================施工事例 -->

<?php $args = array(
			'post_type' => 'seko', /* 投稿タイプ */
			'paged' => $paged,
			'posts_per_page' => 4 /* 件数表示 */
			); ?>
	<?php query_posts( $args ); ?>

	<div id="top_seko">

<br /><br />


<!--<div id="oshirase">
◆◇◆◇　夏季休暇のご案内　◆◇◆◇<br />
誠に勝手ながら、2018年8月12日（日）～ 2018年8月16日（木）は休業させていただきます。<br />
通常営業は、8月17日（金）からとなります。<br />
休暇中にいただいたお問い合わせについては、通常営業日より順次対応させていただきますので、ご了承ください。<br />
今後も変わらぬご愛顧をどうぞよろしくお願いいたします。
</div>-->




	<h3><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/seko/tseko_tit.png" width="944" height="39" alt="最新施工事例"  /></h3>
	<div class="inner">
	<?php if (have_posts()) : ?>
	<?php $i = 0; ?>

	<?php while (have_posts()) : the_post();
	/* ループ開始 */ ?>
			<div class="box <?php if($i%4==0){ echo " c_left";} ?>">
				<a href="<?php the_permalink() ?>"><?php
								printf(
									'%s',
									gr_get_image(
										'seko_after_image',
										array( 'width' => 220, 'alt' => esc_attr( post_custom( 'seko_comment' ) ) )
									)
								);
								?>

<?php if(get_post_meta($post->ID,'seko_csv2',true)): ?>
<img src="<?php echo site_url(); ?>/wp-content/themes/gaiheki/page_image<?php echo post_custom('seko_csv2') ?>" class="img" width="220" />
<?php endif ?></a>

				<p class="tit"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
			</div>
<?php
$i++; //最後にループ回数を一つ進める
?>

<?php endwhile; ?>
			<p class="more"><a href="/seko"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/seko/tseko_btn_rollout.png" width="190" height="31" alt="一覧を見る" /></a></p>
<?php else : ?>
    <p class="no_data">表示する施工事例はありませんでした</p>

<?php endif; ?>
<?php wp_reset_query(); ?>

		</div>
			</div>
<!-- ====================================/施工事例 -->
<!--
		<div class="sodan_bnr">
			<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/sodankai/bnr_sodan.png" width="951" height="149" alt="家づくり相談会" class="img_over" /></a>
		</div>
		<!-- / .sodan_bnr -->
<!-- ====================================イベント -->

	<?php
$args = array(
	'post_type' => 'event', /* 投稿タイプ */
	'posts_per_page' => 2 /* 件数表示 */
); ?>
<?php query_posts( $args ); ?>
		<div id="eve_area">
			<div class="inner">
			<div class="left">
<h3><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/event/tevent_tit.png" width="200" height="39" alt="最新イベント、キャンペーン" /></h3>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post();
	/* ループ開始 */ ?>
				<div class="box">
<a href="<?php the_permalink() ?>">		<?php
								printf(
									'%s',
									gr_get_image(
										'event_img00',
										array( 'width' => 160, 'alt' => esc_attr( post_custom( '<?php the_title(); ?>' ) ) )
									)
								);
								?></a>
					<p class="date"><?php echo post_custom( 'event_date' ); ?></p>
					<h4><?php the_title(); ?></h4>
					<p class="txt"><?php echo post_custom( 'event_summary' ); ?></p>
					<p class="more"><a href="<?php the_permalink() ?>">&gt;続きを見る</a></p>
					<br clear="all" />
				</div>
		<?php endwhile; ?>
<?php else : ?>
    <div class="box">
    	<p class="txt">表示する記事はありませんでした</p>
    </div>
<?php endif; ?>
<!-- ====================================/イベント -->
	<?php
$args = array(
	'post_type' => 'tatsulog', /* 投稿タイプ */
	'posts_per_page' => 1 /* 件数表示 */
); ?>
<?php query_posts( $args ); ?>

<h3><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/tatsulog/ttatsulog_tit.png" width="116" height="38" alt="タツログ" /></h3>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post();
	/* ループ開始 */ ?>
					<div class="box">
<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" />
					<p class="date"><? the_time('Y年n月j日'); ?></p>
					<h4><?php the_title(); ?></h4>
					<div class="txt"><?php the_excerpt(); ?></div>
					<p class="more"><a href="<?php the_permalink() ?>">&gt;続きを見る</a></p>
					<br clear="all" />
			</div>
		<?php endwhile; ?>
<?php else : ?>
    <div class="box">
    	<p class="txt">表示する記事はありませんでした</p>
    </div>
<?php endif; ?>

		</div>
			<div class="right">
<!-- ====================================工事ブログ -->
	<?php
$args = array(
	'post_type' => 'kojiblog', /* 投稿タイプ */
	'posts_per_page' => 2 /* 件数表示 */
); ?>
	<?php query_posts( $args ); ?>

<h3><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/blog/tblog_tit.png" width="68" height="39" alt="工事ブログ" /></h3>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post();
	/* ループ開始 */ ?>
					<div class="box">
<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" />
					<p class="date"><? the_time('Y年n月j日'); ?></p>
					<h4><?php the_title(); ?></h4>
					<div class="txt"><?php the_excerpt(); ?></div>
					<p class="more"><a href="<?php the_permalink() ?>">&gt;続きを見る</a></p>
					<br clear="all" />
			</div>
		<?php endwhile; ?>
<?php else : ?>
    <div class="box">
    	<p class="txt">表示する記事はありませんでした</p>
    </div>
<?php endif; ?>

<div class="link"><a href="/kojiblog"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/blog/koji-blog_rollout.png" width="180" height="30" alt="工事ブログ一覧" /></a></div>

<!-- ====================================/工事ブログ -->
    </div>
			<br clear="all"/>

			</div>
		</div><!-- / #eve_area -->
<!-- ===================================商品ラインナップ -->
	<div id="top_item">
	<h3><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/item/titem_tit.png" width="944" height="39" alt="商品ラインナップ" /></h3>
	<div class="inner">
<a href="/house_concept"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/item/bnr_zero.png" width="460" height="130" alt="ZEROCUBE+FUN" class="left img_over" /></a><a href="/t_house"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/item/bnr_full.png" width="460" height="130" alt="フルオーダー注文住宅" class="right img_over" /></a>
<br clear="all">

	</div>
	</div><!-- / #top_item -->
<!-- ===================================/商品ラインナップ -->


<!-- ===================================タツケンと関わる-->
	<div id="top_with">
	<div class="inner">
	<p class="tit"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/with/twith_tit.png" width="944" height="38" alt="タツケンと関わる" /></p>
     <div class="with_inner_left">
		<a href="http://www.tatsuken-reform.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/with/twith_bnr1.png" alt="リフォーム専門サイト" class="bnr1 img_over" width="284" height="254">		</a>
     </div>
     <div class="with_inner_right">
		<a style="margin-right:8px" href="https://himeji.cocoie.co.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/with/cocoie_himeji_bnr.gif" alt="ここいえ・姫路市" class="bnr1 img_over" width="277" height="86"></a>

		<a href="http://www.cocoie.co.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/with/cocoie_bnr.gif" alt="ここいえ・たつの市" class="bnr1 img_over" width="277" height="86"></a>
     </div>

<!--
	<a href="http://www.tatsuken-reform.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/with/twith_bnr1.png" width="284" height="254" alt="リフォーム専門サイト" class="bnr1 img_over" /></a>
	<a href="http://www.cocosumo-himeji.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/with/twith_bnr2.png" width="284" height="254" alt="不動産専門サイト" class="bnr2 img_over" /></a>
	<a href="/newsletter/"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/with/twith_bnr3.png" width="284" height="254" alt="ニュースレター最新号を見る" class="bnr3 img_over" /></a>
-->
<!-- ===================================/タツケンと関わる-->

	<hr class="line clear" />
<!-- ===================================バナー-->

	<ul id="carousel1">
		<li><a href="/nagare"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/with/twith_bnr4.png" width="250" height="80" alt="家づくりのながれ" class="img_over" /></a></li>
		<li><a href="/qa"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/with/twith_bnr5.png" width="250" height="80" alt="よくある質問" class="img_over"  /></a></li>
		<li><a href="/company/recruite"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/with/twith_bnr6.png" width="250" height="80" alt="スタッフ募集" class="img_over"  /></a></li>
		<li><a href="/newsletter"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/with/twith_bnr7.png" width="250" height="80" alt="ニュースレター" class="img_over"  /></a></li>
		<li><a href="http://www.gaiso-himeji.co/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/with/bnr_gaiso.gif" width="250" height="80" alt="住まいの外装リフォーム GAISO 姫路店" class="img_over"  /></a></li>
		</ul>

	<span id="prev"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/with/twith_arrow_l.png" width="12" height="14" alt="進む" class="img_over"  /></span> <span id="next"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/with/twith_arrow_r.png" width="12" height="14" alt="戻る" class="img_over"  /></span>
	</div>


<!-- ===================================/バナー-->

<!-- ===================================facebook-->

<div style="width:944px; padding:0 0 20px 0; text-align:center; margin:0 auto;">
<img src="<?php echo get_template_directory_uri(); ?>/images/common/fb_tit.gif" width="500" height="45" alt="facebook" /><br />
<div class="fb-page" data-href="https://www.facebook.com/%E3%82%BF%E3%83%84%E3%82%B1%E3%83%B3%E3%83%9B%E3%83%BC%E3%83%A0-883869848388401/?fref=ts" data-tabs="timeline" data-width="500" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/%E3%82%BF%E3%83%84%E3%82%B1%E3%83%B3%E3%83%9B%E3%83%BC%E3%83%A0-883869848388401/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/%E3%82%BF%E3%83%84%E3%82%B1%E3%83%B3%E3%83%9B%E3%83%BC%E3%83%A0-883869848388401/?fref=ts">タツケンホーム</a></blockquote></div>
</div>

<!-- ===================================/facebook-->
</div>

		<div id="b_contact">

<?php gr_contact_banner(); ?>
</div></div>

<?php get_footer(); ?>
