<?php get_header('main') ?>
<?php
$t = time();
$time = date("Y.m.d h:i A", $t);

$slide_info =  get_post_meta('122627', '_sol_slider_data'); //main_banner  post ID = 122198
//print_r ($slide_info);
if (count($slide_info)>0):
    $slide=$slide_info[0]['slider'];
?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <?php if (count($slide)>0): ?>
  <!-- Indicators -->
  <ol class="carousel-indicators hidden-xs">
  	<?php $i=0 ?>
  	<?php foreach (range(0, count($slide)-1) as $index=>$value): ?>
    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $index ?>" <?php if (!$index): ?>class="active"<?php endif ?>></li>
    <?php endforeach ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

  	<?php $i=0 ?>
  	<?php foreach ($slide as $index=>$value): ?>
  	<?php
                $sliderstatus = isset($value['status']) ? $value['status'] : '';
                $sliderdate = isset($value['schedule_meta']) ? $value['schedule_meta'] : '';
                $timetostart = isset($value['schedule_meta_start']) ? $value['schedule_meta_start'] : '';
                $timetoend = isset($value['schedule_meta_end']) ? $value['schedule_meta_end'] : '';
                $link = isset($value['link']) ? $value['link'] : '';
                $linktab = isset($value['linktab']) ? $value['linktab'] : '';

                if ($linktab == '1') {
                    $target = ' target="_blank"';
                }

                if ($sliderdate == 0 || ($timetostart <= $time and $timetoend >= $time)):
                    if ($sliderstatus == 'active'):
                        ?>
    <div class="item<?php if (!$i): ?> active<?php endif ?>">
      <a <?php echo $target ?> href="<?php echo $link ?>"><img src="<?php echo $value["src"] ?>" alt="<?php echo $value['alt'] ?>" /></a>
      <div class="carousel-caption"><?php echo $value["caption"] ?></div>
    </div>
    <?php endif ?>
    <?php endif ?>
    <?php $i++ ?>
	<?php endforeach ?>
	<?php endif ?>
  </div>
<?php endif ?>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section id="sl_main_message">
	<div class="container">
		<div class="row">
			<h1><q><br /><div>Insert Your Message</div><br /></q></h1>
		</div>
	</div>
</section>


<section id="sl_main_news" class="main_card_view">
	<div class="container">
		<div class="row">
			<div class="triangle">&nbsp;</div>
			<hgroup>
				<h2>NEWS</h2>
				<h3>News</h3>
			</hgroup>
			<?php $query = new WP_Query(array( 'category_name' => 'news','posts_per_page' => 3)); ?>
			<?php if ($query->have_posts()) : $index=0; while ($query->have_posts()) : $query->the_post(); ?>
			<div class="col xs-12 col-sm-6 col-md-4<?php if ($index==2): ?> hidden-sm<?php endif ?>">
			<?php get_template_part('main_content'); ?>
			</div>
			<?php $index++;endwhile; wp_reset_postdata(); else: ?>
			<?php __('No Article', 'sleepinglion') ?>
			<?php endif ?>
		</div>
	</div>
</section>




<section id="sl_menu_content">
	<div class="container">
		<div class="row">

<div class="col-md-12">
<div class="carousel slide" id="myCarousel">
  <div class="carousel-inner">
    <div class="item active">
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
				<a href="<?php echo get_tag_link(1135) ?>" title="연합정치">
				<article>
					<img width="150" height="150" src="/wp-content/themes/sleepinglion/images/banner02_01.png" alt="" class="img-circle hidden-xs" />
					<h3>Item1</h3>
					<p class="hidden-xs">Description1</p>
				</article>
				</a>
			</div>
    </div>
    <div class="item">
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
				<a href="<?php echo get_tag_link(1030) ?>" title="안전">
				<article>
					<img width="150" height="150" src="/wp-content/themes/sleepinglion/images/banner02_02.png" alt="" class="img-circle hidden-xs" />
					<h3>Item2</h3>
					<p class="hidden-xs">Description2</p>
				</article>
				</a>
			</div>
    </div>
    <div class="item">
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
				<a href="<?php echo get_tag_link(1036) ?>" title="일자리">
				<article>
					<img width="150" height="150" src="/wp-content/themes/sleepinglion/images/banner02_03.png" alt="" class="img-circle hidden-xs" />
					<h3>Item3</h3>
					<p class="hidden-xs">Description3</p>
				</article>
				</a>
			</div>
    </div>
    <div class="item">
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
				<a href="<?php echo get_tag_link(1191) ?>" title="북부발전">
				<article>
					<img width="150" height="150" src="/wp-content/themes/sleepinglion/images/banner02_04.png" alt="" class="img-circle hidden-xs" />
					<h3>Item4</h3>
					<p class="hidden-xs">Description4</p>
				</article>
				</a>
			</div>
    </div>
    <div class="item">
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
				<a href="<?php echo get_tag_link(1631) ?>" title="플러스복지">
				<article>
					<img width="150" height="150" src="/wp-content/themes/sleepinglion/images/banner02_05.png" alt="" class="img-circle hidden-xs" />
					<h3>Item5</h3>
					<p class="hidden-xs">Description5</p>
				</article>
				</a>
			</div>
    </div>
    <div class="item">
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
				<a href="<?php echo get_tag_link(879) ?>" title="교통">
				<article>
					<img width="150" height="150" src="/wp-content/themes/sleepinglion/images/banner02_06.png" alt="" class="img-circle hidden-xs" />
					<h3>Item6</h3>
					<p class="hidden-xs">Description6</p>
				</article>
				</a>
			</div>
    </div>
    <div class="item">
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
				<a href="<?php echo get_tag_link(1940) ?>" title="경제">
				<article>
					<img width="150" height="150" src="/wp-content/themes/sleepinglion/images/banner02_07.png" alt="" class="img-circle hidden-xs" />
					<h3>Item7</h3>
					<p class="hidden-xs">Description7</p>
				</article>
				</a>
			</div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
</div>
</div>



</div>
	</div>
</section>

<section id="sl_main_sub_message">
	<div class="container">
		<div class="row">
			<hgroup>
				<h2>Sub Message</h2>
				<h3>Welcome</h3>
			</hgroup>
<div class="col-md-12">
    	<div class="col-xs-12 col-sm-6 col-md-3">
      	<a href="/propose" title=""><img width="175" height="175" src="/wp-content/themes/sleepinglion/images/banner01_01.png" alt="" class="img-circle" /></a>
      	<h3><a href="/propose" title="">1. message</a></h3>
    	</div>
    	<div class="col-xs-12 col-sm-6 col-md-3">
      	<a href="" title="새창으로 열림" target="_blank"><img width="175" height="175" src="/wp-content/themes/sleepinglion/images/banner01_02.png" alt="" class="img-circle" /></a>
      	<h3><a href="" title="새창으로 열림" target="_blank">2. message</a></h3>
    	</div>
    	<div class="col-xs-12 col-sm-6 col-md-3">
      	<a href="/archives/category/action" title=""><img width="175" height="175" src="/wp-content/themes/sleepinglion/images/banner01_03.png" alt="" class="img-circle" /></a>
      	<h3><a href="/archives/category/action" title="">3. message</a></h3>
    	</div>
    	<div class="col-xs-12 col-sm-6 col-md-3">
      	<a href="" title="" class="no_link" target="_blank"><img width="175" height="175" src="/wp-content/themes/sleepinglion/images/banner01_04.png" alt="" class="img-circle" /></a>
      	<h3><a href="" title=""  class="no_link" target="_blank">4. message</a></h3>
      	<ul id="select_menu">
      		<li><a href="" target="_blank" title="">E-Book 보기</a></li>
      		<li><a href="" target="_blank" title="">PDF 보기</a></li>
      	</ul>
    	</div>
  </div>




			</div>
		</div>
</section>

<section id="sl_main_field" class="main_card_view">
	<div class="container">
		<div class="row">
			<div class="triangle">&nbsp;</div>
			<hgroup>
				<h2>last message</h2>
				<h3>Insert Your Message</h3>
			</hgroup>
			<?php $query = new WP_Query(array('cat' => 2130,'posts_per_page' => 1,'meta_query' => array(array( 'key' => '_thumbnail_id')))) ?>
			<?php $category_link = get_category_link(2130) ?>
			<?php if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
<div class="col-xs-12 col-sm-6 col-md-4">
<article>
		<?php if (has_post_thumbnail()): ?>
		<div class="img">
			<?php $defalt_arg =array('class' => "img-responsive" ); ?>
			<a  href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', $defalt_arg); ?></a>
		</div>
		<?php endif; ?>
	<h2><a href="<?php echo esc_url($category_link); ?>" title="<?php the_title_attribute(); ?>" ><?php echo '도지사가 갑니다' ?></a></h2>
	<p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></p>
</article>
</div>
			<?php endwhile; wp_reset_postdata(); else: ?>
			<?php __('No Article', 'sleepinglion') ?>
			<?php endif ?>

			<?php $query = new WP_Query(array('cat' => 2559,'posts_per_page' => 1,'meta_query' => array(array( 'key' => '_thumbnail_id')))) ?>
			<?php $category_link = get_category_link(2559) ?>
			<?php if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
<div class="col-sm-6 col-md-4 col-xs-12">
<article>
		<?php if (has_post_thumbnail()): ?>
		<div class="img">
			<?php $defalt_arg =array('class' => "img-responsive" ); ?>
			<a  href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', $defalt_arg); ?></a>
		</div>
		<?php endif; ?>
	<h2><a href="<?php echo esc_url($category_link); ?>" title="<?php the_title_attribute(); ?>" ><?php echo '도지사와 부지사가 갑니다' ?></a></h2>
	<p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></p>
</article>
</div>
			<?php endwhile; wp_reset_postdata(); else: ?>
			<?php __('No Article', 'sleepinglion') ?>
			<?php endif ?>

			<?php $query = new WP_Query(array('cat' => 2558,'posts_per_page' => 1,'meta_query' => array(array( 'key' => '_thumbnail_id')))) ?>
			<?php $category_link = get_category_link(2558); ?>
			<?php if ($query->have_posts()) :
             while ($query->have_posts()) : $query->the_post(); ?>
<div class="col-md-4 col-xs-12 hidden-sm">
<article>
		<?php if (has_post_thumbnail()): ?>
		<div class="img">
			<?php $defalt_arg =array('class' => "img-responsive" ); ?>
			<a  href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', $defalt_arg); ?></a>
		</div>
		<?php endif; ?>
	<h2><a href="<?php echo esc_url($category_link); ?>" title="<?php the_title_attribute(); ?>" ><?php echo '기업애로현장방문' ?></a></h2>
	<p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></p>
</article>
</div>
			<?php endwhile; wp_reset_postdata(); else: ?>
			<?php __('No Article', 'sleepinglion') ?>
			<?php endif ?>
		</div>
	</div>
</section>

<?php get_footer() ?>
