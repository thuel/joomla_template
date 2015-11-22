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
</head>
<body>
<div id="wrapper">
<header>
<div id="logo" class="box">
  <p>position: logo</p>
  <jdoc:include type="modules" name="logo" />
</div>
<div id="headertitle">
  <p>position: header</p>
  <jdoc:include type="modules" name="header" />
</div>
<div id="search" class="box">
  <p>position: search</p>
  <jdoc:include type="modules" name="search" />
</div>
<jdoc:include type="modules" name="top" />
</header>
<nav class="box">
  <p>position: topmenu</p>
  <jdoc:include type="modules" name="topmenu" />
</nav>
<aside class="left">
<div id="sidebar_top" class="box">
  <p>position: left_top</p>
  <jdoc:include type="modules" name="left_top" />
</div>
<div id="sidebar_bottom" class="box">
  <p>position: left_bottom</p>
  <jdoc:include type="modules" name="left_bottom" />
</div>
</aside>
<?php if ($this->countModules( 'right_top' ) && $this->countModules( 'right_bottom' )) : ?>
<aside class="right">
<?php if ($this->countModules( 'right_top' )) : ?>
<div id="sidebar_top" class="box">
  <p>position: right_top</p>
  <jdoc:include type="modules" name="right_top" />
</div>
<?php endif; ?>
<?php if ($this->countModules( 'right_bottom' )) : ?>
<div id="sidebar_bottom" class="box">
  <p>position: right_bottom</p>
  <jdoc:include type="modules" name="right_bottom" />
</div>
<?php endif; ?>
</aside>
<?php endif; ?>
<section>
<div id="breadcrumb" class="box">
  <p>position: breadcrumb</p>
  <jdoc:include type="modules" name="breadcrumb" />
</div>
<article class="box">
<jdoc:include type="component" />
</article>
</section>
<footer>
<jdoc:include type="modules" name="footer" />
Copyright © Lukas Steffen
</footer>
</div>
</body> 