<?php get_header(); ?>
  <div class="bgm">
    <div class="bgm-cover"></div>
    <video autoplay playsinline loop muted>
      <p>動画を再生するには、videoタグをサポートしたブラウザが必要です。</p>
      <source src="<?php echo get_template_directory_uri() ?>/assets/movie/bg-2.mp4" autoplay="true" loop="true" />
    </video>
  </div>
  <main class="main">
    <div class="main-box">
      <h2 class="main-tit">
        Main<br class="_sp" />
        Title<br class="_sp" />
        Here
      </h2>
    </div>
  </main>
  <section class="sec">
    <h2 class="sec-tit">ABOUT</h2>
    <div class="sec-inner">
      <div class="sec-img">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/company.jpg" alt="" />
      </div>
      <div class="sec-box">
        <p class="sec-txt">
          会社情報をここに書く。会社情報をここに書く。会社情報をここに書く。会社情報をここに書く。会社情報をここに書く。会社情報をここに書く。会社情報をここに書く。
        </p>
        <a href="#" class="sec-link">More..</a>
      </div>
    </div>
  </section>
  <section class="sec ">
    <h2 class="sec-tit">SERVICE</h2>
    <div class="sec-inner">
      <div class="sec-img">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/business.jpg" alt="" />
      </div>
      <div class="sec-box">
        <h3 class="sec-tit _sm">工事全般</h3>
        <ul class="sec-list">
          <li class="sec-item">土木工事</li>
          <li class="sec-item">建築工事</li>
          <li class="sec-item">電気・設備工事</li>
        </ul>
        <h3 class="sec-tit _sm">その他</h3>
        <ul class="sec-list">
          <li class="sec-item">草刈り</li>
          <li class="sec-item">家屋解体工事</li>
          <li class="sec-item">田・畑等の整備工事</li>
        </ul>
        <a class="sec-link" href="">MORE..</a>
      </div>
    </div>
  </section>
  <section class="sec">
    <div class="sec-inner _fd">
      <h2 class="sec-tit">NEWS</h2>
      <div class="sec-wrapper">
        <?php query_posts('cat=3&posts_per_page=10&paged='.$paged); ?>
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
              <article class="ta">
                <div class="ta-inner">
                  <a class=ta-link href="<?php the_permalink(); ?>"><h3 class="ta-tit"><?php the_title(); ?></h3></a>
                  <p class=ta-date><?php echo  get_the_date('Y.m.d') ?></p>
                </div>
              </article>
            <?php endwhile; ?>
            <?php else: ?>
            <p>投稿データがありません</p>
        <?php endif; ?>
        <a class="sec-link" href="<?php echo get_category_link(3);?>">MORE..</a>
      </div>
    </div>
  </section>
  <section class="sec _wide">
    <div class="sec-inner _fd">
      <h2 class="sec-tit">Instagram</h2>
      <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
    </div>
  </section>
<?php get_footer(); ?>
