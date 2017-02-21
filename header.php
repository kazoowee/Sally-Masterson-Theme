<!DOCTYPE html>

<html lang="en">
    <head>
      <meta charset="utf-8">
      <title><?php bloginfo('info');?></title>
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

      <!-- Favicon ================== -->
      <!-- Standard -->
      <link rel="shortcut icon" href="img/favicon-144.png">
      <!-- Retina iPad Touch Icon-->
      <link rel="apple-touch-icon" sizes="144x144" href="img/favicon-144.png">
      <!-- Retina iPhone Touch Icon-->
      <link rel="apple-touch-icon" sizes="114x114" href="img/favicon-114.png">
      <!-- Standard iPad Touch Icon-->
      <link rel="apple-touch-icon" sizes="72x72" href="img/favicon-72.png">
      <!-- Standard iPhone Touch Icon-->
      <link rel="apple-touch-icon" sizes="57x57" href="img/favicon-57.png">

      <!--  Resources style ================== -->
      <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" type="text/css" media="all"/>
      <?php wp_head(); ?>
    </head>
    <body>
      <section id="parent" class="animsition">

        <div id="subscribe">
          <div class="row border">
            <div class="col-sm-9 col-xs-9">
              <h2 class=""><strong>Sign up</strong> for <br> Our newletter</h2>
            </div>
            <div class="mail-icon">
              <i class="ion-paper-airplane"></i>
            </div>
            <div class="col-sm-12 col-xs-12 mb50">
              <h4 class="">New cases and investigations <br>settlement deadlines, and news<br> straight to your inbok.</h4>
            </div>

            <form
            id="subscribe-form" class="col-sm-12"
            action="http://coderare.us12.list-manage.com/subscribe/post-json?u=112a29375b248b89f47be54b7&amp;id=e46717ab68"
            method="get">
              <input type="email" name="EMAIL" class="input-email round" placeholder="Email Address">
              <button type="submit" name="subscribe" class="submit btn-solid round input-submit">SUBSCRIBE</button>
              <div id="subscribe-result">
              </div>
            </form>
          </div>
        </div>

        <div id="leftSide" class="color">

          <div id="container"></div>
          <div id="home" class="center col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">

            <div class="h-content  text-center top-12">
              <img src="img/logo.png" alt="logo" class="quick fadeIn align- relative mb30 main-logo" />

              <h1 class="mid animated fadeInUp  fw700"><?php bloginfo('name');?></h1>
              <h4 class="mid animated fadeInUp fw700 mb20"><?php bloginfo('description');?></h4>


              <div class="mt40 slow animated fadeInUp">
                <a id="info" href="#info" class="btn-solid round">PORTFOLIO</a>
                <div class="social_tab inline quick fadeIn">
                  <ul class="social_icons">
                    <li><a href="#"><i class="ti-facebook "></i></a></li>
                    <li><a href="#"><i class="ti-twitter-alt "></i></a></li>
                    <li><a href="#"><i class="ti-instagram "></i></a></li>
                  </ul>
                </div>
              </div>

              </div>
            </div>


        </div>
