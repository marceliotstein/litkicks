<?php
/*
* page.tpl.php for litstrap
*/
?>
<?php
global $base_url;
$filebase = $base_url . "/sites/default/files";
$themebase = $base_url . "/sites/all/themes/litstrap";
$themeimgbase = $themebase . "/images";
?>
<div class="lkmain container-fluid">

  <!--<div class="lkbuffer-left hidden-xs hidden-sm hidden-md col-lg-1 col-xl-1">
    &nbsp;
  </div>-->

  <div class="lktheater col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="row lkheader">
      <!-- narrow way -->
      <div class="col-xs-12 col-sm-12 hidden-md hidden-lg hidden-xl">
        <table class="lktable-narrow">
          <tr>
            <td class="lklogo-narrow">
              <a class="logo navbar-btn" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
              </a>
            </td>
            <td class="lksitetitle-td-narrow">
              <a class="lksitetitle lksitetitle-narrow" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">Literary Kicks</a>
            </td>
            <td class="lkmenubars">
              <div class="dropdown pull-right">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdown1" data-toggle="dropdown" aria=expanded="true">
                  <span class="glyphicon glyphicon-align-justify"></span>
                </button>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdown1">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                    <a href="/about">About This Site</a>
                  </li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                    <a href="/user/">Create Account or Log In</a>
                  </li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                    <a href="/about">Search This Site</a>
                  </li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                    <a href="/newsletter/signup">Keep In Touch Via Email</a>
                  </li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                    <a href="/feed">Subscribe To Feed</a>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <!-- wide way -->
      <div class="hidden-xs hidden-sm col-md-12 col-lg-12 col-xl-12">
        <table class="lkwidetoplinks">
          <tr>
            <td class="lkwidetoplinks-td">
              <div class="branding-links">
                <span class="branding-linkbox">
                  <a href="/Archives">Archives (1994 to 2015)</a> <img src="<?php print $themeimgbase ?>/lkicon24.png" />
                </span>
                <span class="branding-linkbox">
                  <a href="http://www.facebook.com/litkicks">Facebook</a> <img src="<?php print $themeimgbase ?>/fbicon24.png" />
                </span>
                <span class="branding-linkbox">
                  <a href="http://twitter.com/asheresque">Twitter</a> <img src="<?php print $themeimgbase ?>/twicon24.png" />
                </span>
                <span class="branding-linkbox">
                  <a href="http://feeds.feedburner.com/LiteraryKicks">Subscribe</a> <img src="<?php print $themeimgbase ?>/rsicon24.png" />
                </span>
                <span class="branding-linkbox">
                  <a href="/AboutUs">About Litkicks</a> <img src="<?php print $themeimgbase ?>/laicon24.png" />
                </span>
              </div>
            </td>
          </tr>
        </table>
        <table class="lktable-wide">
          <tr>
            <td class="lklogo-wide">
              <a class="logo navbar-btn" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
              </a>
            </td>
            <td class="lksitetitle-td-wide">
              <a class="lksitetitle lksitetitle-wide" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">Literary Kicks</a>
            </td>
          </tr>
        </table>
      </div>
      <!-- end of wide way -->
    </div>
    <!-- end of header -->

    <div class="row lkmain">
      <div class="col-xs-3 col-sm-3 col-md-2 col-lg-2 col-xl-2 lksideleft centered-text">
        <?php print render($page['sidebar_first']); ?>
      </div>  <!-- /#sidebar-first -->

      <div class="col-xs-9 col-sm-9 col-md-7 col-lg-7 col-xl-7 lkcore">
        <div class="lkcore-inner">
          <a id="main-content"></a>

          <?php if (!empty($title)): ?>
            <h1 class="page-header lkheadline"><?php print $title; ?></h1>
          <?php endif; ?>

          <?php print $messages; ?>
          <?php if (!empty($tabs)): ?>
            <?php print render($tabs); ?>
          <?php endif; ?>
          <?php if (!empty($page['help'])): ?>
            <?php print render($page['help']); ?>
          <?php endif; ?>
          <?php if (!empty($action_links)): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
          <?php endif; ?>
          <?php print render($page['content']); ?>
        </div>
      </div>

      <!-- features in right nav for wide only -->
      <div class="hidden-xs hidden-sm col-md-3 col-lg-3 col-xl-3 lksidefeature">
        <?php print render($page['sidebar_second']); ?>
      </div>  <!-- /#sidebar-second -->
    </div>

    <div class="row lkbottomrow col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <div class="col-xs-12 col-sm-12 hidden-md hidden-lg hidden-xl lkbottomfeature">
        <!-- features in bottom nav for narrow only -->
        <?php print render($page['highlighted']); ?>
      </div>
    </div>

    <footer class="footer">
      <?php print render($page['footer']); ?>
    </footer>

  </div><!--theater-->

  <!--<div class="lkbuffer-left hidden-xs hidden-sm hidden-md col-lg-1 col-xl-1">
    &nbsp;
  </div>-->
</div>
