<?php
// no direct access
defined( '_JEXEC' ) or die;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">

<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/content.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/jquery.cycle.lite.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$('#header').cycle({
fx: 'fade',
speed:    2000, 
timeout:  4500,
});
});
</script>
<!-- Google Analytics script goes here -->
</head>

<body>
<div id="main-1">
<div id="main-2">

<!-- header -->
<div id="headerlink">
<a id="ahome" href="<?php echo $this->baseurl ?>"></a>
<a id="aemail" href="mailto:info@cricasatenovo.it"></a>
<a id="amaps" href="http://goo.gl/maps/aaO0S" target="_blank"></a></div>
<div id="header">
<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/header/header1.png" alt="Header" />
<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/header/header2.png" alt="Header" />
<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/header/header3.png" alt="Header" />
<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/header/header4.png" alt="Header" />
</div>
<!-- end header -->

<div id="main-content">
<div id="sidebar">

<!-- sidebar -->
<div class="menu-main">
<?php if ($this->countModules('menu-main')) : ?>
<jdoc:include type="modules" name="menu-main" style="xhtml" />
<?php endif; ?>
</div>
<?php if ($this->countModules('menu-main')) : ?><div class="menubottomwhite"></div><?php endif; ?>
<?php if ($this->countModules('search')) : ?>
<div class="menu-red">
<jdoc:include type="modules" name="search" style="xhtml" /> 
</div>
<?php endif; ?>
<?php if ($this->countModules('box1')) : ?>
<div class="menu-grey">
<jdoc:include type="modules" name="box1" style="xhtml" />
</div>
<?php endif; ?>
<?php if ($this->countModules('menu-login')) : ?>
<div class="menu-login">
<div class="menuovveride">
<jdoc:include type="modules" name="menu-login" style="xhtml" />
</div>
</div>
<?php endif; ?>
<?php if ($this->countModules('box2')) : ?>
<div class="menu-grey">
<jdoc:include type="modules" name="box2" style="xhtml" />
</div>
<?php endif; ?>
<?php if ($this->countModules('box3')) : ?>
<div class="menu-grey">
<jdoc:include type="modules" name="box3" style="xhtml" />
</div>
<?php endif; ?>
<?php if ($this->countModules('box4')) : ?>
<div class="menu-grey">
<jdoc:include type="modules" name="box4" style="xhtml" />
</div>
<?php endif; ?>
<?php if ($this->countModules('box5')) : ?>
<div class="menu-grey">
<jdoc:include type="modules" name="box5" style="xhtml" />
</div>
<?php endif; ?>
<?php if ($this->countModules('box6-nobox')) : ?>
<div class="menu-alpha">
<jdoc:include type="modules" name="box6-nobox" style="xhtml" />
</div>
<?php endif; ?>
<!-- end sidebar -->

</div>
<div id="right">

<!-- right side -->
<?php if ($this->countModules('over-component-1')) : ?>
<div id="over-component-1">
<jdoc:include type="modules" name="over-component-1" style="xhtml" />
</div>
<?php endif; ?>
<?php if ($this->countModules('scroller')) : ?>
<div id="scrollercontainer">
<div id="scroller">
<jdoc:include type="modules" name="scroller" style="xhtml" />
</div>
</div>
<?php endif; ?>
<?php if ($this->countModules('over-component-2')) : ?>
<div id="over-component-2">
<jdoc:include type="modules" name="over-component-2" style="xhtml" />
</div>
<?php endif; ?>
<div id="message-module">
<jdoc:include type="message" />
</div>
<?php if ($this->countModules('under-message')) : ?>
<div id="under-message">
<jdoc:include type="modules" name="under-message" style="xhtml" />
</div>
<?php endif; ?>
<?php if ($this->countModules('breadcrumb')) : ?>
<div id="breadcrumb">
<jdoc:include type="modules" name="breadcrumb" />
</div>
<?php endif; ?>
<div class="component-div"><div class="component">
<jdoc:include type="component" />
<?php if ($this->countModules('under-component-1')) : ?>
<div class="under-component-wrapper">
<div id="under-component-1">
<jdoc:include type="modules" name="under-component-1" style="xhtml" />
</div></div>
<?php endif; ?>
</div></div>
<!-- end right side -->

</div>
</div>
<div id="footer">

<!-- footer -->
<?php if ($this->countModules('footer')) : ?>
<jdoc:include type="modules" name="footer" style="xhtml" />
<?php endif; ?>
<!-- end footer -->

</div>
</div>
</div>
</body>
</html>