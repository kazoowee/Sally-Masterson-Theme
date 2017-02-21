<?php get_header(); ?>
<div id="rightSide" class="visible">

  <div class="background-img-holder percent84">
    <img src="img/1920x1280.jpg" alt="This is my work">
  </div>

  <div id="rightContent">
    <div class="close-bar">
      <a href="#info" class="close-icon"><i class="menu ion-close-round"></i></a>
      <div class="share_icons">
        <ul class="color-bg icon-container">
          <li class="facebook"><a href="#"><i class="ti-facebook "></i></a></li>
          <li class="twitter"><a href="#"><i class="ti-twitter-alt"></i></a></li>
          <li class="instagram"><a href="#"><i class="ti-instagram "></i></a></li>
        </ul>
      </div>
      <h5 class="follow  mr15 fw600">Follow us </h5>
    </div>

    <div class="about mb50 mt50">
      <img class="mb50 mt65" src="img/1920x1280.jpg" alt="work" />
      <h2 class="mb30 fw500 notoSerif italic">"For me, the camera is a sketch book, an instrument of intuition and <strong>spontaneity</strong>."</h2>
    </div>

    <div class="swipe_portfolio mb100">
      <div class="my-gallery row" itemscope itemtype="http://schema.org/ImageGallery">

        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="item col-sm-6 col-xs-12">
          <!-- Link to the picture and to open the gallery / Fill up well the data-size property -->
          <a  href="img/1920x1280.jpg" itemprop="contentUrl" data-size="1280x853">
            <!-- Your picture -->
            <img src="img/1920x1280.jpg" itemprop="thumbnail" alt="This is my work" class="img-responsive" />
          </a>
          <!-- Picture's description below this one -->
          <figcaption itemprop="caption description">
            <div class="photo-details">
              <h4>Project 1</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
          </figcaption>
        </figure>


        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="item col-sm-6 col-xs-12">
          <!-- Link to the picture and to open the gallery / Fill up well the data-size property -->
          <a  href="img/1920x1280.jpg" itemprop="contentUrl" data-size="1280x853">
            <!-- Your picture -->
            <img src="img/1920x1280.jpg" itemprop="thumbnail" alt="This is my work" class="img-responsive" />
          </a>
          <!-- Picture's description below this one -->
          <figcaption itemprop="caption description">
            <div class="photo-details">
              <h4>Project 2</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
          </figcaption>
        </figure>

        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="item col-sm-6 col-xs-12">
          <!-- Link to the picture and to open the gallery / Fill up well the data-size property -->
          <a  href="img/1920x1280.jpg" itemprop="contentUrl" data-size="1280x853">
            <!-- Your picture -->
            <img src="img/1920x1280.jpg" itemprop="thumbnail" alt="This is my work" class="img-responsive" />
          </a>
          <!-- Picture's description below this one -->
          <figcaption itemprop="caption description">
            <div class="photo-details">
              <h4>Project 3</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
          </figcaption>
        </figure>

        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="item col-sm-6 col-xs-12">
          <!-- Link to the picture and to open the gallery / Fill up well the data-size property -->
          <a  href="img/1920x1280.jpg" itemprop="contentUrl" data-size="1280x853">
            <!-- Your picture -->
            <img src="img/1920x1280.jpg" itemprop="thumbnail" alt="This is my work" class="img-responsive" />
          </a>
          <!-- Picture's description below this one -->
          <figcaption itemprop="caption description">
            <div class="photo-details">
              <h4>Project 4</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
          </figcaption>
        </figure>

      </div>
    </div>
    <?php get_footer(); ?>
