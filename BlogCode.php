<?php
    header("Content-type: text/css; charset: UTF-8");

   $brandColor = "#990000";
   $linkColor = "#555555";
   $CDNURL = "http://cdn.blahblah.net";
?>
#header {
   background: url("<?php echo $CDNURL; ?>/images/header-bg.png") no-repeat;
}
a {
  color: <?php echo $linkColor; ?>;
}
ul#main-nav li a {
  color: <?php echo $linkColor; ?>;
}
