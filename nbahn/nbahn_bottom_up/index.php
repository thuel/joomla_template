<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<html>
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed:500' rel='stylesheet' type='text/css'>
<!--get the parameters of the template-->
<?php if ( $this->params->get('headerimage') ) {
  $headerimage = $this->params->get('headerimage'); 
} else {
  $headerimage = $this->baseurl . "/templates/" . $this->template . "/images/headerimage.jpg"; 
} ?>
<?php if ( $this->params->get('logotype') == "image" ) {
  $logo = $this->params->get('logo'); 
  $logotype = "image";
} else {
  $logo = $this->params->get('sitetitle');
  $logotype = "text";
} ?>
<!--php logic to hide sidebars on the left an right in general if there is no joomla module-->
<?php $noLeftSidebarModules = TRUE; ?>
<?php $noRightSidebarModules = TRUE; ?>
<?php if ( $this->countModules( 'left_top or left_bottom' )) { $noLeftSidebarModules = FALSE; } ?>
<?php if ( $this->countModules( 'right_top or right_bottom' )) { $noRightSidebarModules = FALSE; } ?>
<?php if ( $noRightSidebarModules ) { ?> <!--css styling if there is no module in the right sidebar-->
<style type="text/css" media="screen"> 
#main_body {width:100%;} 
section{width:78%;} 
aside.left_sidebar{width:22%;}
aside.right_sidebar{display:none;} 
</style>
<?php } ?>
<?php if ( $noLeftSidebarModules ) { ?> <!--css styling if there is no module in the left sidebar-->
<style type="text/css" media="screen"> 
#main_body {width:78%;} 
section{width:100%;} 
aside.left_sidebar{display:none;}
aside.right_sidebar{width:22%;} 
</style>
<?php } ?>
<?php if ( $noRightSidebarModules && $noLeftSidebarModules ) { ?> <!--css styling if there is no sidebar at all-->
<style type="text/css" media="screen"> 
#main_body {width:100%;} 
section{width:100%;} 
aside.left_sidebar{display:none;}
aside.right_sidebar{display:none;} 
</style>
<?php } ?>
<!--end of php logic to hide sidebars if there is no joomla module enabled-->
</head>
<body>
<div id="wrapper">
<header>
<div class="container">
<img class="header" title="Header Image" alt="Header image not selected" src="<?php echo $headerimage; ?>" >
<div id="inside" class="header">
<div id="logo" class="box"><!--position logo-->
  <?php if ( $logotype == "image" ) : ?>
    <img src="<?php echo $logo; ?>
  <?php else : ?>
    <a href="/"><?php echo $logo; ?></a>
  <?php endif; ?>  
  <jdoc:include type="modules" name="logo" />
</div>
<!--<div id="headertitle">
  <jdoc:include type="modules" name="header" />
</div>-->
<div id="search"><!--position search-->
  <jdoc:include type="modules" name="search" />
</div>
<jdoc:include type="modules" name="top" />
</div>
</div>
</header>
<nav>
<div id="inside">
  <jdoc:include type="modules" name="topmenu" />
</div>
</nav>
<!--start of the three column layout-->
<div id="content">
<div id="breadcrumb">
  <jdoc:include type="modules" name="breadcrumb" />
</div>
<div id="main_body">
<section>
<div id="breadcrumb" class="box">
  <p>position: breadcrumb</p>
  <jdoc:include type="modules" name="breadcrumb" />
</div>
<article>
<jdoc:include type="component" />
</article>
</section>
<?php if ( $this->countModules( 'left_top or left_bottom' )) : ?>
<aside class="left_sidebar">
<?php if ($this->countModules( 'left_top' )) : ?>
<div id="sidebar_top">
  <p>position: left_top</p>
  <jdoc:include type="modules" name="left_top" />
</div>
<?php endif; ?>
<?php if ($this->countModules( 'left_bottom' )) : ?>
<div id="sidebar_bottom">
  <p>position: left_bottom</p>
  <jdoc:include type="modules" name="left_bottom" />
</div>
<?php endif; ?>
</aside>
<?php endif; ?>
</div><!--end of main_body div-->
<?php if ($this->countModules( 'right_top or right_bottom' )) : ?>
<aside class="right_sidebar">
<?php if ($this->countModules( 'right_top' )) : ?>
<div id="sidebar_top">
  <p>position: right_top</p>
  <jdoc:include type="modules" name="right_top" />
</div>
<?php endif; ?>
<?php if ($this->countModules( 'right_bottom' )) : ?>
<div id="sidebar_bottom">
  <p>position: right_bottom</p>
  <jdoc:include type="modules" name="right_bottom" />
</div>
<?php endif; ?>
</aside>
<?php endif; ?>
</div><!--end of content div-->
<!--end of the three column layout-->
<footer>
<div id="inside">
<jdoc:include type="modules" name="footer" />
Copyright © Lukas Steffen
</div>
</footer>
</div><!--end of div wrapper-->
</body> 
</html>
