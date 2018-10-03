	<footer class="site__footer">
      <div class="lace clear"><a href="<?php echo home_url()?>" class="site__logo">Barcoding</a>
        <nav class="nav nav-social">
          <ul>
            <li><a href="" target="_blank"><span class="bottle">
                    <svg class="symbol symbol-pinterest">
                      <use xlink:href="#pinterest"></use>
                    </svg></span><span class="visible-for-screen-readers">Pinterest</span></a></li>
            <li><a href="" target="_blank"><span class="bottle">
                    <svg class="symbol symbol-google">
                      <use xlink:href="#google"></use>
                    </svg></span><span class="visible-for-screen-readers">Google+</span></a></li>
            <li><a href="" target="_blank"><span class="bottle">
                    <svg class="symbol symbol-linkedin">
                      <use xlink:href="#linkedin"></use>
                    </svg></span><span class="visible-for-screen-readers">linkedin</span></a></li>
            <li><a href="" target="_blank"> <span class="bottle">
                    <svg class="symbol symbol-twitter">
                      <use xlink:href="#twitter"></use>
                    </svg></span><span class="visible-for-screen-readers">Twitter   </span></a></li>
            <li><a href="" target="_blank"><span class="bottle">
                    <svg class="symbol symbol-facebook">
                      <use xlink:href="#facebook"></use>
                    </svg></span><span class="visible-for-screen-readers">Facebook</span></a></li>
          </ul>
        </nav>
      </div>
      <div class="sole clear">
        <div class="tread">
        <?php
$menu_name = 'main_nav';
//$locations = get_nav_menu_locations();
//$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
$menu = wp_get_nav_menu_object( $menu_name );
$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
?>
          <nav class="nav nav-secondary-main">
            <ul>
              
<?php
$count = 0;
$submenu = false;
foreach( $menuitems as $item ):
	$title = $item->title;
	$link = $item->url;
	
	// item does not have a parent so menu_item_parent equals 0 (false)
	if ( !$item->menu_item_parent ):
		
		$parent_id = $item->ID;
		?>
		<li><a href="<?php echo $link; ?>"><?php echo $title; ?></a>
		<?php endif; ?>
		<?php if ( $parent_id == $item->menu_item_parent ): ?>
		<?php if ( !$submenu ): $submenu = true; ?>
		<ul>
		<?php endif; ?>
		<li><a href="<?php echo $link; ?>"><?php echo $title; ?></a></li>
		
		<?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
		</ul>
		
		<?php $submenu = false; endif; ?>
		
		<?php endif; ?>
		<?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
		</li>                           
		<?php $submenu = false; endif; ?>
		
		<?php $count++; endforeach; ?>
            </ul>
          </nav>
        </div>
        <div class="tread">
          <nav class="nav nav-bulleted nav-action">
            <ul>
              <li><a href="/">Contact</a></li>
              <li><a href="/">Employee Login</a></li>
              <li><a href="/">Employment</a></li>
              <li><a href="/">Store</a></li>
            </ul>
          </nav>
          <nav class="nav nav-bulleted nav-legal">
            <ul>
              <li><a href="/">@ 2016 Barcoding</a></li>
              <li><a href="/">Privacy Policy</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/build/main.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/build/site.js"></script>
  </body>
<?php wp_footer(); ?>

</body>
</html>
