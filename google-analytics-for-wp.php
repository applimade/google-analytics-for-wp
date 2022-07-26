<?php

    /*
      Plugin Name: Google Analytics for Wordpress
      Description: Adds Google Analytics to a wordpress site
      Version: 1.0
    */

    add_action( 'wp_head', 'google_analytics_for_wp.php', 1 );
    function google_analytics_for_wp() {

        ?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXX-X"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-XXXXXXXX-X');
        </script>
        <?php
    }

   /**
    *
    * end of plugin.
    *
    */

?>
