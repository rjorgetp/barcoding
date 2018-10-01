<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="col-large-4 col-wooser-3 nav-tier-bubble">
          <nav class="nav nav-tier">
            <ul>
              <li><a href="/">
                    <svg class="symbol symbol-arrow-left">
                      <use xlink:href="#arrow-left"></use>
                    </svg><span>Back to parentPage</span></a></li>
              <li><a href="/">2nd Level Page link</a></li>
              <li><a href="/">2nd Level Page link</a></li>
              <li><a href="/">2nd Level Page link</a></li>
              <li><a href="/">2nd Level Page link</a></li>
              <li><a href="/">2nd Level Page link</a></li>
              <li><a href="/">2nd Level Page link</a></li>
            </ul>
          </nav>
        </div>
