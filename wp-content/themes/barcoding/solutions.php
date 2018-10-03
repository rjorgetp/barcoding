<?php
/*
Template Name: Solutions
*/
?>
<?php
get_header(); 
$solutions = get_field("solutions");
?>

<main class="clear">
      <div class="grid">
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
        <div class="col-large-8 col-wooser-9">
          <div class="main-content">
              <div class="hero hero--mask hero--default">
                <div class="compartment">
                  <h1 class="hero__title">Solutions</h1>
                </div><img src="<?php bloginfo('template_directory'); ?>./assets/images/interior.jpg" alt="undefined">
              </div>
            <div class="section">
              <div class="compartment">
                <div class="nav-tier-container">
                  <button class="nav-tier-switch"> <span>Page Menu</span>
                      <svg class="symbol symbol-chevron-down">
                        <use xlink:href="#chevron-down"></use>
                      </svg>
                  </button>
                  <nav class="nav nav-tier nav-tier--clone">
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
                <p class="lead-in"><?php echo get_post_field('post_content', $post->ID); ?></p>
                <div class="silk-harmonica silk-harmonica--expanded silk-harmonica--solutions">
                  <header role="tab" class="silk-harmonica__header"> 
                    <h6>Challenge</h6>
                    <h5> <span><?php echo $solutions['challenge']['title']?></span>
                        <svg class="symbol symbol-chevron-down">
                          <use xlink:href="#chevron-down"></use>
                        </svg>
                    </h5>
                    <figure><img src="<?php echo $solutions['challenge']['image']?>" alt="undefined">
                    </figure>
                  </header>
                  <article role="tabpanel" class="silk-harmonica__content"> 
                    <h2>Our Solution</h2>
                    <?php echo $solutions['challenge']['description']?><a href="" class="button button--mini">Share</a>
                    <div class="solution__footer">
                      <h4><a href="">
                            <svg class="symbol symbol-plane">
                              <use xlink:href="#plane"></use>
                            </svg><span>Connect with one of our solution specialists.&nbsp;</span><em>Connect Now.</em></a></h4>
                    </div>
                  </article>
                  <header role="tab" class="silk-harmonica__header"> 
                    <h6>Industry</h6>
                    <h5> <span><?php echo $solutions['industry']['title']?></span>
                        <svg class="symbol symbol-chevron-down">
                          <use xlink:href="#chevron-down"></use>
                        </svg>
                    </h5>
                    <figure><img src="<?php echo $solutions['industry']['image']?>" alt="undefined">
                    </figure>
                  </header>
                  <article role="tabpanel" class="silk-harmonica__content"> 
                    <h2>Our Solution</h2>
                    <?php echo $solutions['industry']['description']?><a href="" class="button button--mini">Share</a>
                    <div class="solution__footer">
                      <h4><a href="">
                            <svg class="symbol symbol-plane">
                              <use xlink:href="#plane"></use>
                            </svg><span>Connect with one of our solution specialists.&nbsp;</span><em>Connect Now.</em></a></h4>
                    </div>
                  </article>
                  <header role="tab" class="silk-harmonica__header"> 
                    <h6>Environment</h6>
                    <h5> <span><?php echo $solutions['environment']['title']?></span>
                        <svg class="symbol symbol-chevron-down">
                          <use xlink:href="#chevron-down"></use>
                        </svg>
                    </h5>
                    <figure><img src="<?php echo $solutions['environment']['image']?>" alt="undefined">
                    </figure>
                  </header>
                  <article role="tabpanel" class="silk-harmonica__content"> 
                    <h2>Our Solution</h2>
                    <?php echo $solutions['environment']['description']?><a href="" class="button button--mini">Share</a>
                    <div class="solution__footer">
                      <h4><a href="">
                            <svg class="symbol symbol-plane">
                              <use xlink:href="#plane"></use>
                            </svg><span>Connect with one of our solution specialists.&nbsp;</span><em>Connect Now.</em></a></h4>
                    </div>
                  </article>
                  <header role="tab" class="silk-harmonica__header"> 
                    <h6>Experience</h6>
                    <h5> <span><?php echo $solutions['experience']['title']?></span>
                        <svg class="symbol symbol-chevron-down">
                          <use xlink:href="#chevron-down"></use>
                        </svg>
                    </h5>
                    <figure><img src="<?php echo $solutions['experience']['image']?>" alt="undefined">
                    </figure>
                  </header>
                  <article role="tabpanel" class="silk-harmonica__content"> 
                    <h2>Our Solution</h2>
                    <?php echo $solutions['experience']['description']?><a href="" class="button button--mini">Share</a>
                    <div class="solution__footer">
                      <h4><a href="">
                            <svg class="symbol symbol-plane">
                              <use xlink:href="#plane"></use>
                            </svg><span>Connect with one of our solution specialists.&nbsp;</span><em>Connect Now.</em></a></h4>
                    </div>
                  </article>
                </div>
                <div class="flag">
                  <h3>You Might Also Like...</h3>
                </div>
                <div class="grid">
                  <div class="col-gamagori-4">
                    <div class="callout callout--orange"><a href="" class="callout__details">
                        <h3 class="mini">Whitepapers</h3>
                        <h2 class="stay">Asset, Patient Tracking Technology Jockeys for Bottom-line Position.</h2></a>
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
                  <div class="col-gamagori-4">
                    <div class="callout callout--gray"><a href="" class="callout__details">
                        <h3 class="mini">Events</h3>
                        <h2 class="stay">Annual Barcoding, Inc. Executive Forum</h2>
                        <h2 class="stay">9.12.16</h2></a>
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
                  <div class="col-gamagori-4">
                    <div class="callout callout--blue"><a href="" class="callout__details">
                        <h3 class="mini">Events</h3>
                        <h2 class="stay">Annual Barcoding, Inc. Executive Forum</h2>
                        <h2 class="stay">9.12.16</h2></a>
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
          </div>
        </div>
      </div>
    </main>

<?php get_footer();
