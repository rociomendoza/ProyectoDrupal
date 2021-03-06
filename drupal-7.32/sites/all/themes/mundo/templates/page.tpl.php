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


<header id="navbar" role="banner">
<div id="EdV">
  <div class="edicion">
   Edición:  <span class="cont"> América</span>
  </div>
  <div class="Version">
    Versión: <span class="cont">Clásica</span>  
  </div>
</div>

<div id="rs">
  <a class="orbyt" href="http://quiosco.orbyt.es/" title="Orbyt">
  <img alt="Orbyt" src="http://estaticos.elmundo.es/assets/desktop/master/img/iconos/logo-orbyt.png">
  </a>
  <ul class="siguenos">
  <li><a href="http://www.facebook.com/elmundo" title="Síguenos en Facebook"><img src="//estaticos01.elmundo.es/assets/desktop/master/img/redes-sociales/facebook_cab.png" alt="Facebook"></a> </li>
  <li><a href="http://twitter.com/elmundoes" title="Síguenos en Twitter"> <img src="//estaticos02.elmundo.es/assets/desktop/master/img/redes-sociales/twitter_cab.png" ></a> </li>
  <li><a href="https://plus.google.com/+elmundo" title="Síguenos en Google+"><img src="//estaticos02.elmundo.es/assets/desktop/master/img/redes-sociales/google_cab.png"></a> </li>
  </ul>
  <div id="mundoSocialToolbar" class="comunidad"> 
    <a href="https://seguro.elmundo.es/compras/quiosco?cid=PAYCI23301&amp;s_kw=em72x26" class="paywall">Suscríbete</a>
   <a href="https://seguro.elmundo.es/elmundo/login/login.html" onclick="ueLogin.open(); return false;">Iniciar sesión</a> 
  </div>
  
  <div >
   
  </div>
</div>
<br>
<br>

<div class="publicidad-cabecera-a"></div>
<div id="cen1">
<?php if ($logo): ?>
      <a id="log" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
      <?php endif; ?>
  <div id="hora">
<time datetime="2014-11-04T19:54:42+01:00">
  "4 de noviembre de 2014, actualizado a las " 
  <strong>19:54</strong>
  " horas
  "
  </time>
 </div>
</div>

</header>

<div class="container">
  <a href="">
  <div id="menu_izq">
    <h2 class="menu_izq1">SECCIONES</h2>
   </div>
 </a>
   <?php if (!empty($primary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse">
        <nav role="navigation">
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
          
          </nav>
        </div>
    <?php endif; ?>


</div>


<?php print render($page['header']); ?>

    <section<?php print $content_column_class; ?>>
      
      <?php print render($page['content']); ?>
    </section>

<div id="contenido">
  <div class="main-container">
     
    <?php print render($page['columna1']); ?>
    <?php print render($page['columna2_h']); ?>
    
  </div>
<?php print render($page['columna3']); ?>
</div>

<footer class="footer container">
  <?php print render($page['footer']); ?>
</footer>
