<?php
/**
 * Template Name: Home
 */
?>

<?php
get_header();
$intro = get_field("introduction");
$slides = get_field("slides");
$testimonial = get_field("testimonial");
$links = get_field("links");
?>


    <main class="clear">
      <div class="video-bubble hero halfway-section">
        <div class="compartment">
          <div class="video__details">		  
		  <h1 class="larger"><?php echo $intro['title']?></h1>
            <p><?php echo $intro['description']?></p><a href="" class="button button--inverse full-width">Ask a Question</a><a href="" class="button button--inverse full-width">Request a Quote</a><a href="" class="button button--inverse full-width">Shop Now</a>
          </div>
        </div><img src="<?php echo $intro['image'] ?>" alt="undefined">
      </div>
      <ul class="swift-slide product-slide halfway-section">
        <li class="hero product">
          <div class="compartment">
            <div class="product__details">
              <h2 class="larger"><?php echo $slides['first']['title']?></h2>
              <p><?php echo $slides['first']['description']?><a href="<?php echo $slides['first']['link']?>" class="button">Read More</a>
            </div>
          </div><img src="<?php echo $slides['first']['image']?>" alt="undefined">
        </li>
        <li class="hero product">
          <div class="compartment">
            <div class="product__details">
              <h2 class="larger"><?php echo $slides['second']['title']?></h2>
              <p><?php echo $slides['second']['description']?><a href="<?php echo $slides['second']['link']?>" class="button">Read More</a>
            </div>
          </div><img src="<?php echo $slides['second']['image']?>" alt="undefined">
        </li>
        <li class="hero product">
          <div class="compartment">
            <div class="product__details">
              <h2 class="larger"><?php echo $slides['third']['title']?></h2>
              <p><?php echo $slides['third']['description']?><a href="<?php echo $slides['third']['link']?>" class="button">Read More</a>
            </div>
          </div><img src="<?php echo $slides['third']['image']?>" alt="undefined">
        </li>
      </ul>
      <div class="halfway-section">
        <ul class="partners">
          <li class="partners__title">
            <h2 class="stay">Our Trusted Partners</h2>
          </li>
		  <?php
			$args = array( 'post_type' => 'partner' );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();				
				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
				echo '<li class="partners__item"><a href="'.get_permalink().'"><img src="'.$featured_img_url.'" alt=""></a></li>';
			endwhile;
			?>
          <!--li class="partners__item"><a href=""><img src="/assets/images/descartes.png" alt="undefined"></a></li>
          <li class="partners__item"><a href=""><img src="/assets/images/honeywell.png" alt="undefined"></a></li>
          <li class="partners__item"><a href=""><img src="/assets/images/nicelabel.png" alt="undefined"></a></li>
          <li class="partners__item"><a href=""><img src="/assets/images/intellitrack.png" alt="undefined"></a></li>
          <li class="partners__item"><a href=""><img src="/assets/images/zebra.png" alt="undefined"></a></li-->
        </ul>
        <div class="bubble bubble--big bubble--white">
          <div class="compartment">
            <div class="blockquote-bubble clear">
                <figure class="shifted-asset shifted-asset--left"><img src="<?php echo $testimonial['photo']?>" alt="">
                  <figcaption></figcaption>
                </figure>
              <div class="block-out">
                <blockquote><?php echo $testimonial['content']?>
                  <cite><?php echo $testimonial['name']?></cite>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="grid halfway-section">
        <div class="col-aldnoah-6">
          <div class="callout callout--blue callout--larger hero"><a href="" class="callout__details">
              <h3 class="mini">Blog</h3>
              <h2 class="larger"><?php echo get_the_title($links['blog'])?></h2>
              <?php echo get_post_field('post_content', $links['blog'])?></a>
              <div class="callout__share">
                <h3 class="mini"><span>Share +</span></h3>
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
              </div><img src="<?php bloginfo('template_directory'); ?>/assets/images/hero.jpg" alt="undefined">
          </div>
        </div>
        <div class="col-aldnoah-6">
          <div class="grid">
            <div class="col-medium-6">
              <div class="callout callout--orange"><a href="" class="callout__details">
                  <h3 class="mini">Whitepapers</h3>
                  <h2 class="larger"><?php echo get_the_title($links['whitepaper'])?></h2></a>
                  <div class="callout__share">
                    <h3 class="mini"><span>Share +</span></h3>
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
              </div>
            </div>
            <div class="col-medium-6">
              <div class="callout callout--gray"><a href="" class="callout__details">
                  <h3 class="mini">Events</h3>
                  <h2 class="larger"><?php echo get_the_title($links['event'])?></h2>
                  <h2 class="larger"><?php echo get_field('date', $links['event'])?></h2></a>
                  <div class="callout__share">
                    <h3 class="mini"><span>Share +</span></h3>
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
              </div>
            </div>
            <div class="col-flush">
              <div class="callout callout--dark-blue callout--featured"><a href="" class="callout__details">
                  <h3 class="mini"><?php echo get_the_title($links['partner'])?></h3>
                  <div class="callout__logo"><img src="<?php bloginfo('template_directory'); ?>/assets/images/honeywell-white.png" alt="undefined">
                  </div>
                  <?php echo get_post_field('post_content', $links['partner'])?></a>
                  <div class="callout__share">
                    <h3 class="mini"><span>Share +</span></h3>
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
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="halfway-section">
        <div class="social-feeds">
          <div class="compartment">
            <ul>
              <li><a href="" target="_blank" class="social__bubble social__bubble--facebook">
                  <div class="social__icon">
                      <svg class="symbol symbol-facebook">
                        <use xlink:href="#facebook"></use>
                      </svg>
                  </div></a>
                <p>Could #‎hyperloop‬ systems replace trucks and rail for cargo <strong>‪#‎transportation‬</strong>?</p>
              </li>
              <li><a href="" target="_blank" class="social__bubble social__bubble--twitter">
                  <div class="social__icon">
                      <svg class="symbol symbol-twitter">
                        <use xlink:href="#twitter"></use>
                      </svg>
                  </div></a>
                <p>Proud sponsor of World Refugee Day in <strong>#Baltimore @RYPnews #CelebrateDiversity @ShaneBarcode</strong></p>
              </li>
              <li><a href="" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/images/geeknetwork.png" class="full-width"></a></li>
            </ul>
          </div>
        </div>
        <div class="sign-up">
          <div class="compartment">
            <div class="sign-up__bubble">
              <h2>Sign up for our newsletter:</h2>
              <div class="sign-up__form">
                <input type="text" placeholder="Email Address">
                <input type="submit" value="Sign Up" class="button">
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

<?php get_footer();

