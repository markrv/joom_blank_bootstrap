<?php defined( '_JEXEC' ) or die; 

include_once JPATH_THEMES.'/'.$this->template.'/logic.php';

?><!doctype html>

<html lang="<?php echo $this->language; ?>">

<head>
  <jdoc:include type="head" />
    <link rel="stylesheet" href="templates/Roslagen/css/bootstrap.css">
    <link rel="stylesheet" href="templates/Roslagen/css/bootstrap-responsive.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <script src="templates/Roslagen/js/bootstrap.min.js"></script>
</head>

<body class="<?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('site')).' '.$active->alias.' '.$pageclass; ?>">
<div class="container">
    <div class="row-fluid">
        <div class="span4 lft">Logo<div class="logo" onclick="location.href='/home';"></div></div>
        <div class="span6">phone <jdoc:include type="modules" name="phone"/></div>
        <div class="span2">langu<jdoc:include type="modules" name="langu"/></div>
    </div>
    <div class="row-fluid">
        <div class="span4 lft">
            <div class="navigation">
                <jdoc:include type="modules" name="navigation"/>
            </div>
        </div>
        <div class="span8">
            <div id="main">
                    <div class="inmain">
                        <div class="content">
                            <jdoc:include type="component" />
                        </div>
                    </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div id="footer">
        <div class="infooter">
            <jdoc:include type="modules" name="footer"/>
        </div>
    </div>
    <jdoc:include type="modules" name="debug" />
</div>
</body>

</html>
