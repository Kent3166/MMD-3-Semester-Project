<!-- FOOTER AREA -->
<footer> 
  <div id="footer-main-menu-area"> 
    <nav>
      <?php 
        if ( has_nav_menu('footer-menu') )
        {
            wp_nav_menu(
                array(
                    'theme_location' => 'footer-menu',
                    'menu-class' => '',
                    'item_spacing' => 'preserve'
                )
            );        
        }
      ?> 
    </nav>
  </div>
  
  <div id="footer-misc-menu-area"> 
    <nav> 
      <?php
      if ( has_nav_menu('misc-menu') )
      {
          wp_nav_menu(
              array(
                  'theme_location' => 'misc-menu',
                  'menu-class' => '',
                  'item_spacing' => 'preserve'
              )
          );        
      }
      ?>
    </nav>
  </div>
</footer>

</body>

    <?php 
        wp_footer(); 
    ?>
</html>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136109379-5">
</script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-136109379-5');
</script>
