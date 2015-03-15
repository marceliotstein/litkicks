<?php
/**
* @file
* Default theme implementation to display a single Drupal page.
*
* The doctype, html, head and body tags are not in this template. Instead they
* can be found in the html.tpl.php template in this directory.
*
* Available variables:
*
* General utility variables:
* - $base_path: The base URL path of the Drupal installation. At the very
*   least, this will always default to /.
* - $directory: The directory the template is located in, e.g. modules/system
*   or themes/bartik.
* - $is_front: TRUE if the current page is the front page.
* - $logged_in: TRUE if the user is registered and signed in.
* - $is_admin: TRUE if the user has permission to access administration pages.
*
* Site identity:
* - $front_page: The URL of the front page. Use this instead of $base_path,
*   when linking to the front page. This includes the language domain or
*   prefix.
* - $logo: The path to the logo image, as defined in theme configuration.
* - $site_name: The name of the site, empty when display has been disabled
*   in theme settings.
* - $site_slogan: The slogan of the site, empty when display has been disabled
*   in theme settings.
*
* Navigation:
* - $main_menu (array): An array containing the Main menu links for the
*   site, if they have been configured.
* - $secondary_menu (array): An array containing the Secondary menu links for
*   the site, if they have been configured.
* - $breadcrumb: The breadcrumb trail for the current page.
*
* Page content (in order of occurrence in the default page.tpl.php):
* - $title_prefix (array): An array containing additional output populated by
*   modules, intended to be displayed in front of the main title tag that
*   appears in the template.
* - $title: The page title, for use in the actual HTML content.
* - $title_suffix (array): An array containing additional output populated by
*   modules, intended to be displayed after the main title tag that appears in
*   the template.
* - $messages: HTML for status and error messages. Should be displayed
*   prominently.
* - $tabs (array): Tabs linking to any sub-pages beneath the current page
*   (e.g., the view and edit tabs when displaying a node).
* - $action_links (array): Actions local to the page, such as 'Add menu' on the
*   menu administration interface.
* - $feed_icons: A string of all feed icons for the current page.
* - $node: The node object, if there is an automatically-loaded node
*   associated with the page, and the node ID is the second argument
*   in the page's path (e.g. node/12345 and node/12345/revisions, but not
*   comment/reply/12345).
*
* Regions:
* - $page['help']: Dynamic help text, mostly for admin pages.
* - $page['highlighted']: Items for the highlighted content region.
* - $page['content']: The main content of the current page.
* - $page['sidebar_first']: Items for the first sidebar.
* - $page['sidebar_second']: Items for the second sidebar.
* - $page['header']: Items for the header region.
* - $page['footer']: Items for the footer region.
*
* @see bootstrap_preprocess_page()
* @see template_preprocess()
* @see template_preprocess_page()
* @see bootstrap_process_page()
* @see template_process()
* @see html.tpl.php
*
* @ingroup themeable
*/
?>
<div class="lknavbar">
  <div class="lkunpad container">
    <div class="navbar-header lkflush row col-xs-12">
      <!-- narrow way -->
      <div class="lkflush row col-xs-12 col-sm-12 hidden-md hidden-lg hidden-xl">
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
                  <a href="/Archives">Archives (1994 to 2015)</a> <img src="/litkicks/sites/all/themes/litstrap/images/lkicon24.png" />
                </span>
                <span class="branding-linkbox">
                  <a href="http://www.facebook.com/litkicks">Facebook</a> <img src="/litkicks/sites/all/themes/litstrap/images/fbicon24.png" />
                </span>
                <span class="branding-linkbox">
                  <a href="http://twitter.com/asheresque">Twitter</a> <img src="/litkicks/sites/all/themes/litstrap/images/twicon24.png" />
                </span>
                <span class="branding-linkbox">
                  <a href="http://feeds.feedburner.com/LiteraryKicks">Subscribe</a> <img src="/litkicks/sites/all/themes/litstrap/images/rsicon24.png" />
                </span>
                <span class="branding-linkbox">
                  <a href="/AboutUs">About Litkicks</a> <img src="/litkicks/sites/all/themes/litstrap/images/laicon24.png" />
                </span>
              </div>
            </td>
          </tr>
        </table>
        <table class="lktable-wide">
          <tr>
            <td class="lklogo-wide">
              <a href="/" id="logo" title="Return to the Literary Kicks home page" class="active"><img typeof="foaf:Image" src="http://www.litkicks.com/sites/default/files/paularoid217.jpg" alt="Literary Kicks" /></a>
            </td>
            <td>
              <a class="lksitetitle lksitetitle-wide" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">Literary<br />Kicks</a>
              </td>
          </tr>
        </table>

        </div>
      </div>
      <!-- end of wide way -->

    </div>

  </div>
</div><!--//header-->

<div class="main-container container">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#page-header -->

  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php print $content_column_class; ?>>
    <?php if (!empty($page['highlighted'])): ?>
      <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
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
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>
<footer class="footer container">
  <?php print render($page['footer']); ?>
</footer>
