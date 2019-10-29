<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Polyfen</title>


    <!-- INCLUDE HEAD.PHP start -->
      <?php include 'sections/head.php';?>
    <!-- INCLUDE HEAD.PHP end -->

    <!-- PAGE-SPECIFIC META start -->
      <meta property="og:title" content="Polyfen"/>
      <meta property="og:url" content="https://polyfen.com"/>
      <meta name="keywords" content="Brand Identity Design, Brand ID, Branding, Brand, Graphic, Design, Logo" />
      <meta name="description" property="og:description" content="We are a small team of creatives from around the world connected by our passion to design engaging brand identities." />
      <meta property="og:image" content="https://polyfen.com/imgs/meta/polyfen-homepage-thumbnail.png"/>
      <meta property="og:image:width" content="1200" />
      <meta property="og:image:height" content="630" />
      <meta property="fb:app_id" content="1799272553516195" />
      <meta name="twitter:card" content="summary_large_image" />
      <meta name="twitter:site" content="@WeArePolyfen" />
      <meta name="twitter:title" content="Polyfen" />
      <meta name="twitter:description" content="We are a small team of creatives from around the world connected by our passion to design engaging brand identities." />
      <meta name="twitter:image" content="https://polyfen.com/imgs/meta/polyfen-homepage-thumbnail.png" />
      <meta name="robots" content="index, follow">
    <!-- PAGE-SPECIFIC META end -->

    <!-- PAGE-SPECIFIC CSS start -->
      <link rel="stylesheet" href="app/css/general.css" type="text/css">
    <!-- PAGE-SPECIFIC CSS end -->

    <!-- PAGE-SPECIFIC SCRIPTS start -->
      <script type="text/javascript">
        $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 650) {
            $("#bike-in-mex-thumbnail").removeClass("bike-in-mex-thumbnail-INACTIVE").addClass("bike-in-mex-thumbnail-ACTIVE");
        }
        if (scroll <= 650) {
            $("#bike-in-mex-thumbnail").removeClass("bike-in-mex-thumbnail-ACTIVE").addClass("bike-in-mex-thumbnail-INACTIVE");
        }
        });
      </script>
      <script type="text/javascript">
        $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 90) {
            $("#polyfen-thumbnail").removeClass("polyfen-thumbnail-INACTIVE").addClass("polyfen-thumbnail-ACTIVE");
        }
        if (scroll <= 90) {
            $("#polyfen-thumbnail").removeClass("polyfen-thumbnail-ACTIVE").addClass("polyfen-thumbnail-INACTIVE");
        }
        });
      </script>
      <script type="text/javascript">
      $(window).scroll(function () {
        var st = $(window).scrollTop();
        var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();
        if (scrollBottom <= 200) {
              $("#pearl-07").removeClass("pearl-07-INACTIVE").addClass("pearl-07-ACTIVE");
              $("#pearl-08").removeClass("pearl-08-INACTIVE").addClass("pearl-08-ACTIVE");
              $("#pearl-09").removeClass("pearl-09-INACTIVE").addClass("pearl-09-ACTIVE");
              $("#pearl-10").removeClass("pearl-10-INACTIVE").addClass("pearl-10-ACTIVE");
          }
        if (scrollBottom > 200) {
              $("#pearl-07").addClass("pearl-07-INACTIVE").removeClass("pearl-07-ACTIVE");
              $("#pearl-08").addClass("pearl-08-INACTIVE").removeClass("pearl-08-ACTIVE");
              $("#pearl-09").addClass("pearl-09-INACTIVE").removeClass("pearl-09-ACTIVE");
              $("#pearl-10").addClass("pearl-10-INACTIVE").removeClass("pearl-10-ACTIVE");
          }
        });
      </script>
      <!-- PAGE-SPECIFIC SCRIPTS end -->
  </head>

  <body id="home">

    <!-- FORCE MAX-WIDTH 100% start -->
    <!-- this is for avoiding horizontal scroll due to some images having negative (ie. "-215px") margin-left or margin-right passed the width of the screen -->
      <div style="position: relative;max-width:100% !important;overflow-x:hidden !important;">

      <!-- INCLUDE HEADER.PHP start -->
        <?php include 'sections/header.php';?>
      <!-- INCLUDE HEADER.PHP end -->

      <!-- COVER start -->
        <section id="cover">
            <h1>A creative agency devoted to branding</h1>
            <div class="background">
              <div id="pearl-11" class="pearl rotate-slower">
              </div>
              <div id="pearl-12" class="pearl rotate">
              </div>
              <div id="pearl-13" class="pearl rotate-slower">
              </div>
            </div>
        </section>
      <!-- COVER end -->

      <!-- CONTENT WRAPPER start -->
        <section class="container-fluid content-wrapper">

          <!-- FEATURED WORKS start -->
          <div id="case-studies">
                <h2>Featured works</h2>

                <!-- DEVELOPING OUR OWN BRAND start -->
                <div class="case-project-wrapper" style="margin-top:40px;">

                  <div class="case-project row d-block d-sm-none d-md-none d-lg-none d-xl-none">
                    <a href="case-study.php"><div id="polyfen-cover" class="project-cover polyfen-cover-ACTIVE"  onmouseover="document.getElementById('developing-our-own-brand-button').className='secondary-button secondary-button-hover';" onmouseout="document.getElementById('developing-our-own-brand-button').className='secondary-button';"></div></a>
                  </div>

                  <div class="case-project row">

                    <div class="col d-none d-sm-block d-md-block d-lg-block d-xl-block">
                      <a href="case-study.php"><div id="polyfen-cover" class="project-cover polyfen-cover-ACTIVE"  onmouseover="document.getElementById('developing-our-own-brand-button').className='secondary-button secondary-button-hover';" onmouseout="document.getElementById('developing-our-own-brand-button').className='secondary-button';"></div></a>
                      <a href="case-study.php"><div id="polyfen-thumbnail" class="project-thumbnail polyfen-thumbnail-INACTIVE d-none d-sm-none d-md-none d-lg-none d-xl-block" onmouseover="document.getElementById('developing-our-own-brand-button').className='secondary-button secondary-button-hover';" onmouseout="document.getElementById('developing-our-own-brand-button').className='secondary-button';">
                      </div></a>
                    </div>

                    <div class="col">
                      <div class="project-description">
                      <h3>Developing our own brand</h3>
                      <p><strong>Polyfen</strong> stands for one core concept, the midpoint between business and creativity. <span class="d-none d-sm-none d-md-inline d-lg-inline d-xl-inline">A brand with a clean and professional look, yet with a playful and whimsical flair.</span></p>
                      <a class="secondary-button" href="case-study.php" id="developing-our-own-brand-button">View project <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>

                  </div>
                </div>
              </div>
              <!-- OUR CASE STUDY end -->

              <!-- BIKE IN MEX start -->
              <div class="case-project-wrapper" style="margin-bottom: 0;">

                <div class="case-project row d-block d-sm-none d-md-none d-lg-none d-xl-none">
                  <a href="https://www.instagram.com/p/Bzrpk5flCHr/" target="_blank"><div id="bike-in-mex-cover" class="project-cover bike-in-mex-ACTIVE"  onmouseover="document.getElementById('bike-in-mex-button').className='secondary-button secondary-button-hover';" onmouseout="document.getElementById('bike-in-mex-button').className='secondary-button';"></div></a>
                </div>

                <div class="case-project row">
                  <div class="col d-none d-sm-block d-md-block d-lg-block d-xl-block">
                    <a href="https://www.instagram.com/p/Bzrpk5flCHr/" target="_blank"><div id="bike-in-mex-cover" class="project-cover bike-in-mex-cover-ACTIVE"  onmouseover="document.getElementById('bike-in-mex-button').className='secondary-button secondary-button-hover';" onmouseout="document.getElementById('bike-in-mex-button').className='secondary-button';"></div></a>
                    <a href="https://www.instagram.com/p/Bzrpk5flCHr/" target="_blank"><div id="bike-in-mex-thumbnail" class="project-thumbnail bike-in-mex-thumbnail-INACTIVE d-none d-sm-none d-md-none d-lg-none d-xl-block" onmouseover="document.getElementById('bike-in-mex-button').className='secondary-button secondary-button-hover';" onmouseout="document.getElementById('bike-in-mex-button').className='secondary-button';">
                    </div></a>
                  </div>

                  <div class="col">
                    <div class="project-description">
                    <h3>Bike in Mex</h3>
                    <p>A bicycle rental shop based in Tulum, Mexico. We designed a minimalist, geometric illustration inspired by ancient aztec and mayan symbols<span class="d-none d-sm-none d-md-inline d-lg-inline d-xl-inline"> set on the vibrant colours of Mexico’s flag</span>.</p>
                    <a class="secondary-button" href="https://www.instagram.com/p/Bzrpk5flCHr/" target="_blank" id="bike-in-mex-button">View project <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>

                </div>
              </div>
            </div>
            <!-- BIKE IN MEX STUDY end -->

          </div>
          <!-- FEATURED WORKS end -->

          <div style="clear:both;">
          </div>

          <div class="row">
            <div class="horizontal-case-study-separator"></div>
          </div>

          <!-- SERVICES start -->
            <div id="services">
              <h2>Our services</h2>

              <div class="owl-carousel owl-theme">

                <!-- BRAND RESEARCH start -->
                  <div class="service-item">
                    <div class="service-item__inner">
                      <div class="service-card" id="brand-research-card">
                        <div id="" class="service-heading brand-research">
                          <img src="imgs/services/brand-research-icon.svg" class="d-xl-none" alt="Brand Research Icon">
                          <div class="icon-gradient d-none d-xl-block">
                            <img src="imgs/services/brand-research-icon.svg" alt="Brand Research Icon">
                          </div>
                          <h4>Brand Research</h4>
                        </div>
                        <ul>
                          <li>Business analysis</li>
                          <li>Competitive analysis</li>
                          <li>Audience analysis</li>
                          <li>Research conclusion</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                <!-- BRAND RESEARCH end -->

                <!-- BRAND STRATEGY start -->
                  <div class="service-item">
                    <div class="service-item__inner">
                      <div class="service-card" id="brand-strategy-card">
                        <div id="" class="service-heading brand-strategy">
                          <img src="imgs/services/brand-strategy-icon.svg" class="d-xl-none" alt="Brand Strategy Icon">
                          <div class="icon-gradient d-none d-xl-block">
                            <img src="imgs/services/brand-strategy-icon.svg" alt="Brand Strategy Icon">
                          </div>
                          <h4>Brand Strategy</h4>
                        </div>
                        <ul>
                          <li>Keywords</li>
                          <li>Creative concept</li>
                          <li>Moodboard</li>
                          <li>Voice</li>
                          <li>Naming</li>
                          <li>Key messages</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                <!-- BRAND STRATEGY end -->

                <!-- VISUAL IDENTITY start -->
                  <div class="service-item">
                    <div class="service-item__inner">
                      <div class="service-card" id="visual-identity-card">
                        <div id="" class="service-heading visual-identity">
                          <img src="imgs/services/visual-identity-icon.svg" class="d-xl-none" alt="Visual Identity Icon">
                          <div class="icon-gradient d-none d-xl-block">
                            <img src="imgs/services/visual-identity-icon.svg" alt="Visual Identity Icon">
                          </div>
                          <h4>Visual Identity</h4>
                        </div>
                        <ul>
                          <li>Visual exploration</li>
                          <li>Logo system</li>
                          <li>Typeface selection</li>
                          <li>Colour scheme</li>
                          <li>Visual language</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                <!-- VISUAL IDENTITY end -->

                <!-- BRAND GUIDELINES start -->
                  <div class="service-item">
                    <div class="service-item__inner">
                      <div class="service-card" id="brand-guidelines-card">
                        <div id="" class="service-heading brand-guidelines">
                          <img src="imgs/services/brand-guidelines-icon.svg" class="d-xl-none" alt="Brand Guidelines Icon">
                          <div class="icon-gradient d-none d-xl-block">
                            <img src="imgs/services/brand-guidelines-icon.svg"  alt="Brand Guidelines Icon">
                          </div>
                          <h4>Brand Guidelines</h4>
                        </div>
                        <p>
                          A summary of all the strategic parameters and visual assets that constitute the brand identity.
                        </p>
                      </div>
                    </div>
                  </div>
                <!-- BRAND GUIDELINES end -->

                <!-- BRAND TOUCHPOINTS start -->
                  <div class="service-item">
                    <div class="service-item__inner">
                      <div class="service-card" id="brand-touchpoints-card">
                        <div id="" class="service-heading brand-touchpoints">
                          <img src="imgs/services/brand-touchpoints-icon.svg" class="d-xl-none" alt="Brand Touchpoints Icon">
                          <div class="icon-gradient d-none d-xl-block">
                            <img src="imgs/services/brand-touchpoints-icon.svg" alt="Brand Touchpoints Icon">
                          </div>
                          <h4>Brand Touchpoints</h4>
                        </div>
                        <ul>
                          <li>Email signature</li>
                          <li>Social media profiles</li>
                          <li>Business cards</li>
                          <li>Letterhead</li>
                          <li>Presentation slides</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                <!-- BRAND TOUCHPOINTS end -->

                <!-- WEB DEVELOPMENT start -->
                  <div class="service-item">
                    <div class="service-item__inner">
                      <div class="service-card" id="web-development-card">
                        <div id="" class="service-heading web-development">
                          <img src="imgs/services/web-development-icon.svg" class="d-xl-none" alt="Web Development Icon">
                          <div class="icon-gradient d-none d-xl-block">
                            <img src="imgs/services/web-development-icon.svg" alt="Web Development Icon">
                          </div>
                          <h4>Web Development</h4>
                        </div>
                        <ul>
                          <li>UX research</li>
                          <li>Content creation</li>
                          <li>UI design</li>
                          <li>Prototyping</li>
                          <li>Programming</li>
                          <li>Deployment</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                <!-- WEB DEVELOPMENT end -->

                <div style="clear:both;" class="d-none d-xl-block">
                </div>

                <div style="clear:both;">
                </div>

                <div class="desktop-card-navigation-wrapper d-none d-sm-none d-md-block d-lg-block d-xl-block">
                  <div class="desktop-card-navigation-button">
                    <i class="fas fa-angle-right"></i>
                  </div>
                </div>

              </div>
            </div>
          <!-- SERVICES end -->

          <div style="clear:both;">
          </div>

          <div class="row">
            <div class="horizontal-case-study-separator"></div>
          </div>

          <!-- ABOUT start -->
            <div id="about" class="row">
              <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div style="max-width: 540px;">
                  <h2>The link between business &amp; creativity</h2>
                  <p>We are a small team of creatives based in Argentina combining our talents in design, marketing, and tech under the flag name of <strong>Polyfen</strong>.</p>
                  <p class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Our services are a solution for new and emerging businesses who need guidance in translating their business strategy into an engaging brand identity.</p>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-lg-6 col-xl-6" style="text-align:center;margin-left:-2px;">
                <img src="imgs/about/illustration.svg" alt="Creative Team Illustration">
              </div>
            </div>
          <!-- ABOUT end -->

        </section>
      <!-- CONTENT WRAPPER end -->

      <!-- INCLUDE FOOTER.PHP start -->
        <?php include 'sections/call-to-action.php';?>
      <!-- INCLUDE FOOTER.PHP end -->

      <!-- INCLUDE FOOTER.PHP start -->
        <?php include 'sections/footer.php';?>
      <!-- INCLUDE FOOTER.PHP end -->

      </div>
    <!-- FORCE MAX-WIDTH 100% end -->

  </body>
</html>
