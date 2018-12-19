<head>
  <title>Polyfen</title>


  <!-- META General -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website"/>
  <meta name="author"  content="Polyfen"/>


  <!-- META Page-Specific -->
  <meta property="og:title" content="Polyfen"/>
  <meta property="og:url" content="http://polyfen.com"/>
  <meta name="keywords" content="Brand Identity Design, Brand ID, Branding, Brand, Graphic, Design, Logo" />
  <meta name="description" property="og:description" content="Polyfen is a
  creative agency specializing in brand identity design. Our small and efficient team of experts from around the world is run by four partners with backgrounds in business, design, tech, and marketing." />
  <meta property="og:image" content="[TBD]"/>
  <meta name="robots" content="index, follow">


  <!-- FAVICON -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#8529e2">
  <meta name="msapplication-TileColor" content="#8529e2">
  <meta name="theme-color" content="#8529e2">


  <!-- BOOTSTRAP -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


  <!-- CSS General -->
  <link rel="stylesheet" href="app/css/general.css" type="text/css">
  <link rel="stylesheet" href="app/css/typography.css" type="text/css">
  <link rel="stylesheet" href="app/css/header.css" type="text/css">
  <link rel="stylesheet" href="app/css/footer.css" type="text/css">
  <link rel="stylesheet" href="app/css/buttons.css" type="text/css">
  <link rel="stylesheet" href="app/css/separators.css" type="text/css">
  <link rel="stylesheet" href="app/css/sections.css" type="text/css">
  <link rel="stylesheet" href="app/css/animations.css" type="text/css">
  <link rel="stylesheet" href="app/css/modal.css" type="text/css">

  <!-- FONTS -->
  <!--
  /**
   * @license
   * MyFonts Webfont Build ID 3612228, 2018-07-19T08:39:14-0400
   *
   * The fonts listed in this notice are subject to the End User License
   * Agreement(s) entered into by the website owner. All other parties are
   * explicitly restricted from using the Licensed Webfonts(s).
   *
   * You may obtain a valid license at the URLs below.
   *
   * Webfont: InteloAlt-Bold by Kastelov
   * URL: https://www.myfonts.com/fonts/kastelov/intelo/alt-bold/
   *
   * Webfont: InteloAlt-SemiBold by Kastelov
   * URL: https://www.myfonts.com/fonts/kastelov/intelo/alt-semi-bold/
   *
   *
   * License: https://www.myfonts.com/viewlicense?type=web&buildid=3612228
   * Licensed pageviews: 10,000
   * Webfonts copyright: Copyright &#x00A9; 2016 by Galin Kastelov. All rights reserved.
   *
   * © 2018 MyFonts Inc
  */
  -->
  <link rel="stylesheet" type="text/css" href="libs/fonts/MyFontsWebfontsKit.css">
  <link rel="stylesheet" href="https://use.typekit.net/aba8ecz.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Source+Serif+Pro:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  <!-- PAGE-SPECIFIC SCRIPTS -->

    <script type="text/javascript">

      $(window).scroll(function() {
      var scroll = $(window).scrollTop();

      if (scroll > 0) {
          $("#pearl-01").removeClass("pearl-01-INACTIVE").addClass("pearl-01-ACTIVE");
          $("#pearl-02").removeClass("pearl-02-INACTIVE").addClass("pearl-02-ACTIVE");
          $("#pearl-03").removeClass("pearl-03-INACTIVE").addClass("pearl-03-ACTIVE");
          $("#pearl-04").removeClass("pearl-04-INACTIVE").addClass("pearl-04-ACTIVE");
          $("#pearl-05").removeClass("pearl-05-INACTIVE").addClass("pearl-05-ACTIVE");
          $("#pearl-06").removeClass("pearl-06-INACTIVE").addClass("pearl-06-ACTIVE");
      }

      if (scroll <= 0) {
          $("#pearl-01").removeClass("pearl-01-ACTIVE").addClass("pearl-01-INACTIVE");
          $("#pearl-02").removeClass("pearl-02-ACTIVE").addClass("pearl-02-INACTIVE");
          $("#pearl-03").removeClass("pearl-03-ACTIVE").addClass("pearl-03-INACTIVE");
          $("#pearl-04").removeClass("pearl-04-ACTIVE").addClass("pearl-04-INACTIVE");
          $("#pearl-05").removeClass("pearl-05-ACTIVE").addClass("pearl-05-INACTIVE");
          $("#pearl-06").removeClass("pearl-06-ACTIVE").addClass("pearl-06-INACTIVE");
      }

      if (scroll >= 20) {
          $("#polyfen-cover").addClass("polyfen-cover-ACTIVE");
      }

      if (scroll >= 20) {
          $("polyfen-cover").removeClass("polyfen-cover-INACTIVE");
      }

      if (scroll >= 50) {
          $("#polyfen-thumbnail").addClass("polyfen-thumbnail-ACTIVE");
      }

      if (scroll >= 50) {
          $("polyfen-thumbnail").removeClass("polyfen-thumbnail-INACTIVE");
      }

      });
    </script>

  <!-- Analytics -->
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122656172-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-122656172-1');
  </script>


</head>
