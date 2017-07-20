<div id="sidebar" class="sidebar-column">
  <div class="tile sidebar-widget aboutme">
    <h2>Witaj!</h2>
    <div class="aboutme-photo">
      <img src="<?php bloginfo('template_url')?>/img/edytatarnowska_m.jpg" alt="Edyta Tarnowska">
    </div>
    <p class="center">
	   Szukasz inspiracji i motywacji?<br> Dobrze trafiłeś!<br>
     Jestem Edyta i mam nadzieję, że zostaniesz ze mną na dłużej. :)
    </p>
    <a href="<?php echo site_url(); ?>/o-mnie/" class="btn btn-green">Czytaj więcej</a>
  </div>
  <div class="tile sidebar-widget social-media">
    <h2>Tu mnie znajdziesz</h2>
    <div class="social-media-list">
      <ul>
        <li>
          <a title="Facebook" href="https://www.facebook.com/Origami-Frog-996101217092895/" target="_blank">
          <i class="icon-facebook"></i></a>
        </li>
        <li>
          <a title="Twitter" href="https://twitter.com/origami_frog" target="_blank">
          <i class="icon-twitter"></i></a>
        </li>
        <li>
          <a title="Google+" href="https://plus.google.com/u/0/108084893759175192901/posts" target="_blank">
          <i class="icon-gplus"></i></a>
        </li>
        <li>
          <a title="Pinterest" href="https://pl.pinterest.com/origami_frog/" target="_blank">
          <i class="icon-pinterest-circled"></i></a>
        </li>
        <li>
          <a title="Instagram" href="https://www.instagram.com/origamifrog/" target="_blank">
          <i class="icon-instagram"></i></a>
        </li>
        <li>
          <a title="Bloglovin'" href="https://www.bloglovin.com/blogs/origami-frog-14895767" target="_blank">
          <i class="icon-heart"></i></a>
        </li>
      </ul>
    </div>

    <a class="mail" href="mailto:kontakt@origamifrog.pl"><span><i class="icon-mail"></i></span><br>kontakt@origamifrog.pl</a>
  </div>

  <?php if ( is_sidebar_active('primary_widget_area') ) : ?>
    <div id="primary" class="widget-area">
      <ul class="xoxo sidebar-widget">
        <?php dynamic_sidebar('primary_widget_area'); ?>
      </ul>
    </div><!-- #primary .widget-area -->
  <?php endif; ?>

</div>
