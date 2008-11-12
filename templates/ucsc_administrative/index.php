<?php
   /**
   * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
   * @license		GNU/GPL, see LICENSE.php
   * Joomla! is free software. This version may have been modified pursuant
   * to the GNU General Public License, and as distributed it includes or
   * is derivative of works licensed under the GNU General Public License or
   * other free or open source software licenses.
   * See COPYRIGHT.php for copyright notices and details.
   */

   defined('_JEXEC') or die('Restricted access');

   $url = clone(JURI::getInstance());
   $sitename = $mainframe->getCfg('sitename');
$showRightColumn = $this->countModules('user1 or user2 or right');
$showRightColumn &= JRequest::getCmd('layout') != 'form';
$showRightColumn &= JRequest::getCmd('task') != 'edit';
?>
<?php echo '<?xml version="1.0" encoding="utf-8"?'.'>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">
  <head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="http://www.ucsc.edu/includes/template/v4/css/yui/reset-fonts-grids.css" type="text/css" />
    <link rel="stylesheet" href="http://www.ucsc.edu/includes/template/v4/css/main.css" type="text/css" />
    <!--[if IE]><link rel="stylesheet" href="http://www.ucsc.edu/includes/template/v4/css/fix-ie.css" type="text/css"><![endif]-->   
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/custom.css" type="text/css" />
    <script type="text/javascript" src="http://www.ucsc.edu/includes/template/v4/js/jquery.js"></script>
    <script type="text/javascript" src="http://www.ucsc.edu/includes/template/v4/js/search-utils.js"></script>
  </head>
  <body class="<?php echo $showRightColumn ? 'primary' : 'secondary'; ?>">
    <div id="access-links">
      <ul>
	<li><a href="#center">Skip to main content</a></li>
	<li><a href="#right">Skip to secondary content</a></li>
	<li><a href="#pages">Skip to secondary navigation</a></li>
	<li><a href="#navigation">Skip to navigation</a></li>    
      </ul>
    </div>
    <div id="custom-doc" class="yui-t2">
      <!-- Header - leave the extra <span> elements, they are there for CSS image replacement purposes -->
      <div id="hd">
	<h1 id="site"><a href="<?php echo $this->baseurl ?>" title="<?php echo $sitename; ?>"><?php echo $sitename; ?><span></span></a></h1>
	<p id="org"><a href="http://www.ucsc.edu">UC Santa Cruz<span></span></a></p>     
      </div>
      <!-- Navigation -->
      <div id="navigation">
	<!-- ADMINISTRATIVE TEMPLATE -->
	<jdoc:include type="modules" name="top" style="xhtml" />
      </div><!-- /#navigation -->
      <!-- Main Content -->
      <div id="bd">
	<div id="yui-main">
	  <div class="yui-b">
	    <div class="yui-g">
	      <div id="center" class="<?php echo $showRightColumn ? 'yui-u first' : ''; ?>">
	        <jdoc:include type="component" />
	      </div>
	      <?php if ($showRightColumn) : ?>
	      <div id="right" class="yui-u">
		<!-- Right column content BEGINS here -->
		<jdoc:include type="modules" name="user1" style="ucscDivision" headerLevel="3" />
		<jdoc:include type="modules" name="user2" style="ucscDivision" headerLevel="3" />
		<jdoc:include type="modules" name="right" style="ucscDivision" headerLevel="3" />
                
		<h4>A Headline</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. [<a href="http://ucsc.edu">More</a>]</p>
		<!-- Right column content ENDS here -->              
	      </div>
	      <?php endif; ?>
	    </div>
	  </div>
	</div>
	
	<div id="sb" class="yui-b">
	  <div id="utilities">
	    <!-- Search -->
	    <form action="http://www.google.com/cse" id="cse-search-box">
	      <div>
		<input type="hidden" name="cx" value="012090462228956765947:d0ywvq7bxee" />
		<input type="hidden" name="ie" value="UTF-8" />
		<!-- To customize this search for your site, uncomment the next line and add your site to the "value" to your site  -->
		<input type="hidden" name="as_sitesearch" value="<?php echo $this->params->get('search_domain'); ?>">
		<input type="text" id="cse-field" name="q" size="18" value="Search" />
		<button type="submit" name="sa" value="Submit" id="cse-btn">Go</button>
	      </div>
	    </form>
	    <script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&lang=en"></script>
	    <!-- Utility links -->
	    <p class="links"><a href="http://www.ucsc.edu/about/alpha_index.asp" title="A-Z Index">A-Z Index</a> | <a href="http://www.ucsc.edu/about/find_people.asp" title="Find People">Find People</a></p>
	    <!-- Utility links -->
	  </div>
	  
	  <div class="inner">
	    <!-- Left column content BEGINS here -->
            <h4><?php echo $sitename; ?></h4>
            <ul class="contact-info">
              <li><?php echo $this->params->get('ucsc_mail_stop') ?></li>
              <li>UC Santa Cruz</li>
              <li>1156 High Street</li>
              <li>Santa Cruz, CA 95064</li>
              <li>Email: <a href="<?php echo $this->baseurl; ?>/contact"><?php echo $this->params->get('contact_email') ?></a><br /></li>
              <li>Phone: <?php echo $this->params->get('contact_phone') ?></li>
            </ul>

	    <jdoc:include type="modules" name="left" style="ucscDivision" headerLevel="4" />
	    
	    <!-- Inner Division/Site navigation: This should be used when the site has more than one page -->
	    <!-- <h4>Navigation</h4>
		 <ul id="pages">
		   <li><a href="interior.html">Another Page</a></li>
		   <li><a href="interior.html">Another Page</a></li>         
		 </ul>   -->
	    
	    <!--  h4 is used to divide sections of the sidebar up -->
	    <!-- <h4>Supplemental Info</h4>
		 <p>A paragraph of text in the sidebar is usually used to provide additional information about the page you are on. "Sections" of the sidebar should be divided by an <code>&lt;h4&gt;</code> element, which will have a blue border on top of to separate the sections.</p>
		 <ul>
		   <li><a href="http://www.ucsc.edu">UCSC home page</a></li>
		   <li>459-INFO hotline</li>
		   <li>KZSC Radio (88.1 FM)</li>
		 </ul> -->
	    <!-- This is the grey text at the bottom of the sidebar with contact/copyright info -->
	    <p class="information">
	      <span class="copyright">&copy; 2008 The Regents of the University of California. All rights reserved.</span>
	      Built by <a href="http://enterprises.giip.org/">GIIP-E</a>.
	      <?php if($this->params->get('google_analytics') == 1) { ?>
	        <br />Web Statistics by <a href="http://its.ucsc.edu/terms/google_analytics.php">Google Analytics</a>.
	      <?php } ?>	    
	    </p>
	    <!-- Left column content ENDS here -->
	  </div><!-- /inner -->       
	</div>
      </div>
    </div>
    <?php if($this->params->get('google_analytics') == 1) { ?>
    <jdoc:include type="modules" name="google_analytics" style="raw" />
    <?php } ?>
  </body>
</html>

