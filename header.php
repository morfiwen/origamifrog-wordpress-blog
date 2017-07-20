<!DOCTYPE html>
<html lang="pl">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('', true,''); ?></title>
	<meta name="keywords" content="DIY, przepisy, gotowanie, sport, workout, bieganie, lifestyle, bullet journal">
  <meta name="author" content="Edyta Tarnowska">
  <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="p:domain_verify" content="af779cac91ea4665850f7b8f08d63613"/>

  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
  <link rel="icon" type="image/png" href="<?php bloginfo('template_url')?>/img/origamifrog_icon.png">

  <link href="https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="<?php bloginfo('template_url')?>/styles/fontello.css">

  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

  <?php wp_head(); ?>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-77424012-1', 'auto');
		ga('send', 'pageview');
	</script>

	<meta name="verification" content="c9c8a7924e37d6ded6cd26ae5069c32b" />
  <meta name='B-verify' content='4e41551afbede58206040e94d5897d78f0a65868' />
</head>
<body>

  <div class="page-wrap">
    <header id="header">
      <div class="container">
        <div class="header-bg">
          <a href="<?php echo site_url(); ?>"><img class="header-img" alt="Origami Frog Blog" src="<?php bloginfo('template_url')?>/img/origamifrog_header.png"></a>
        </div>
      </div>

      <nav>
        <div class="menu-navigation">
          <div class="mobile-nav-toggle">
            <span> </span>
          </div>

          <ul class="navlist">

            <?php wp_list_categories('orderby=name&title_li=&use_desc_for_title=0');
            $this_category = get_category($cat);
            if (get_category_children($this_category->cat_ID) != "") {
                echo "<ul>";
                wp_list_categories('orderby=id&show_count=0&title_li=
                    &use_desc_for_title=0&child_of='.$this_category->cat_ID);
                echo "</ul>";
            }
            ?>

            <li><a class="link-bg" href="<?php echo site_url(); ?>/o-mnie/">O mnie</a></li>
            <li><a class="link-bg" href="<?php echo site_url(); ?>/wspolpraca/">Współpraca</a></li>
          </ul>

          <div class="search-box">
            <i class="icon-search icon-search-box"></i>
            <div class="search-box-form">
              <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                <label>
                  <span class="screen-reader-text"><?php echo _x( 'Szukaj:', 'label' ) ?></span>
                  <input type="search" class="search-field"
                      placeholder="<?php echo esc_attr_x( 'Szukaj …', 'placeholder' ) ?>"
                      value="<?php echo get_search_query() ?>" name="s"
                      title="<?php echo esc_attr_x( 'Szukaj:', 'label' ) ?>" />
                </label>
                <input type="submit" class="search-submit btn btn-green"
                      value="<?php echo esc_attr_x( 'Szukaj', 'submit button' ) ?>" />
              </form>
            </div>
          </div>

        </div>

        <div class="mobile-nav">
          <ul class="mobile-navlist">

              <?php wp_list_categories('orderby=name&title_li=');
          		$this_category = get_category($cat);
          		if (get_category_children($this_category->cat_ID) != "") {
          		echo "<ul>";
          		wp_list_categories('orderby=id&show_count=0&title_li=
          		&use_desc_for_title=1&child_of='.$this_category->cat_ID);
          		echo "</ul>";
          		}
          		?>

            <li><a class="link-bg" href="<?php echo site_url(); ?>/o-mnie/">O mnie</a></li>
            <li><a class="link-bg" href="<?php echo site_url(); ?>/wspolpraca/">Współpraca</a></li>
          </ul>
        </div>

      </nav>
    </header>
  </div>
