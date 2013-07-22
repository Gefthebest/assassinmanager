  <!-- Header Section -->
  <div id="header-wrapper" class="navbar navbar-static-top">
    <div class="navbar-inner">
      <div class="outercontainer">
      <div class="container">
      <div class="clear padding10"></div>
      <div class="padding20 visible-desktop"></div>   

      <div class="row-fluid">
        
        <!-- Logo -->
        <div class="span3">
          <center>

            <?php if (!empty($logo)): ?>
              <a class="logo pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
              </a>
            <?php endif; ?>

          </center>       
      </div>
        
        <!-- Nav -->
        <div class="span9">
          
              <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </a>
          
          <div class="padding5 hidden-phone"></div> 
          
          <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
            <div class="nav-collapse collapse">
              <nav role="navigation">
                <?php if (!empty($primary_nav)): ?>
                  <?php print render($primary_nav); ?>
                <?php endif; ?>
                <?php if (!empty($secondary_nav)): ?>
                  <?php print render($secondary_nav); ?>
                <?php endif; ?>
                <?php if (!empty($page['navigation'])): ?>
                  <?php print render($page['navigation']); ?>
                <?php endif; ?>
              </nav>
            </div>
          <?php endif; ?>

        </div>

      </div><!-- / row-fluid -->

      <div class="clear padding15"></div> 

      </div><!-- / container -->
    </div><!-- / outercontainer -->
    </div><!-- / header-wrapper -->
  </div><!-- / navbar -->
  <!-- End Header Section -->

  <div class="clear"></div>

<!-- End header -->


<div class="main-container container">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->

  <div class="row-fluid">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>  

    <section class="<?php print _bootstrap_content_span($columns); ?>">  
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>
  <!-- Footer section-->
  <div class="footer-wrapper">
    <div class="outercontainer">
    <div class="clear padding10"></div>
      <div class="container">

        <div class="row-fluid">

          <div class="span4 pull-left">
            <ul class="social-links">
              <li><a href="http://www.facebook.com" target="_blank"><img src="img/icon/24/social-icon-circle-fb.png" width="24" height="24" title="Facebook"></a></li>              <li><a href="http://www.twitter.com" target="_blank"><img src="img/icon/24/social-icon-circle-twit.png" width="24" height="24" title="Twitter"></a></li>              <li><a href="http://plus.google.com" target="_blank"><img src="img/icon/24/social-icon-circle-gplus.png" width="24" height="24" title="Google+"></a></li>             <li><a href="http://dribbble.com" target="_blank"><img src="img/icon/24/social-icon-circle-dribbble.png" width="24" height="24" title="Dribble"></a></li>             <li><a href="http://vimeo.com" target="_blank"><img src="img/icon/24/social-icon-circle-vimeo.png" width="24" height="24" title="Vimeo"></a></li>             <li><a href="http://scribo.smashingadvantage.com/feed/rss/" target="_blank"><img src="img/icon/24/social-icon-circle-rss.png" width="24" height="24" title="RSS"></a></li>            </ul>
          </div>

          <div class="span8">
            <div class="pull-right">
              <p>Copyright &copy;2013 Assassin Manager</p>            </div>
          </div>

        </div>

      </div>
    </div>
    <div class="clear"></div>
  </div>
  <!-- End Footer section -->
