<div id="contact" class="row">

  <div class="mb20 col-sm-12">
    <h2 ><strong>Get in <span class="notoSerif italic fw500">touch</span>,</strong> <br> i'd love to hear from you.</h2>
  </div>

  <div class="col-sm-4 col-xs-12 mt30 mb30">
    <p class="col-sm-12 col-xs-6">
      <strong>Address :</strong> <br>
      438 Marine Parade <br>
      Elwood, Victoria <br>
      P.O Box 3184<br>
  </p>

    <p class="col-sm-12 col-xs-6">
      <strong>Phone: </strong><br>  (123) 456-7890 <br> <br>
    </p>

  </div>

  <div class="col-sm-8 pl0 pr0">
    <form id="contact_form" class="row" method="post" action="php/mailer.php">
        <div class="col-sm-6 col-xs-12 ">
          <!-- <label for="name">Full Name</label> -->
          <!-- <span class="placeholder-icon ion-android-person"></span> -->
          <input type="name" name="name" class="input-name input-field" placeholder="Full Name">
        </div>

        <div class="col-sm-6 col-xs-12 pl5">
          <!-- <label for="email">Email Address</label> -->
          <!-- <span class="placeholder-icon ion-android-mail pl5"></span> -->
          <input type="email" name="email" class="input-email input-field" placeholder="Email Address">
        </div>

        <div class="col-sm-12 col-xs-12">
          <!-- <label for="message">Message</label> -->
          <!-- <span class="placeholder-icon ion-android-chat"></span> -->
          <textarea name="message" class="input-message" placeholder="Message"></textarea>
        </div>

        <div class="col-sm-12 col-xs-12">
          <button class="btn-solid pull-right round input-submit">Send</button>

          <div id="form-messages" class="pull-left col-sm-8 col-xs-8">
            <span class="success col-sm-12 col-xs-12"></span>
            <span class="error col-sm-12 col-xs-12"></span>
          </div>
        </div>


    </form>
  </div>

</div>


<footer class="mt70 mb50">
  <p class="">&copy; 2016 Deft made with <i class="ion-heart"></i> by Coderare</p>
  <!-- <div class="social pull-right">
    <i class="up ion-social-facebook"></i>
    <i class="up ion-social-twitter"></i>
  </div> -->
</footer>

</div>

</div>
</section>


<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
<!-- Background of PhotoSwipe.
 It's a separate element as animating opacity is faster than rgba(). -->
<div class="pswp__bg"></div>

<!-- Slides wrapper with overflow:hidden. -->
<div class="pswp__scroll-wrap">

<!-- Container that holds slides.
    PhotoSwipe keeps only 3 of them in the DOM to save memory.
    Don't modify these 3 pswp__item elements, data is added later on. -->
<div class="pswp__container">
    <div class="pswp__item"></div>
    <div class="pswp__item"></div>
    <div class="pswp__item"></div>
</div>

<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
<div class="pswp__ui pswp__ui--hidden">

    <div class="pswp__top-bar">

        <!--  Controls are self-explanatory. Order can be changed. -->
        <div class="pswp__counter"></div>
        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
        <button class="pswp__button pswp__button--share" title="Share"></button>
        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

        <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
        <div class="pswp__preloader">
            <div class="pswp__preloader__icn">
              <div class="pswp__preloader__cut">
                <div class="pswp__preloader__donut"></div>
              </div>
            </div>
        </div>
    </div>

    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
        <div class="pswp__share-tooltip"></div>
    </div>

    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
    </button>
    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
    </button>

    <div class="pswp__caption">
        <div class="pswp__caption__center"></div>
    </div>
</div>
</div>
</div>

<!--<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/animsition.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/photoswipe.min.js"></script>
<script src="js/photoswipe-ui-default.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/sketch.js"></script>
<script type="text/javascript">-->
// ----------------------------------------
// Particle
// ----------------------------------------

function Particle( x, y, radius ) {
this.init( x, y, radius );
}

Particle.prototype = {

init: function( x, y, radius ) {

this.alive = true;

this.radius = radius || 10;
this.wander = 0.15;
this.theta = random( TWO_PI );
this.drag = 0.92;
this.color = '#fff';

this.x = x || 0.0;
this.y = y || 0.0;

this.vx = 0.0;
this.vy = 0.0;
},

move: function() {

this.x += this.vx;
this.y += this.vy;

this.vx *= this.drag;
this.vy *= this.drag;

this.theta += random( -0.5, 0.5 ) * this.wander;
this.vx += sin( this.theta ) * 0.1;
this.vy += cos( this.theta ) * 0.1;

this.radius *= 0.96;
this.alive = this.radius > 0.5;
},

draw: function( ctx ) {

ctx.beginPath();
ctx.arc( this.x, this.y, this.radius, 0, TWO_PI );
ctx.fillStyle = this.color;
ctx.fill();
}
};

// ----------------------------------------
// Example
// ----------------------------------------

var MAX_PARTICLES = 180;
var COLOURS = [ '#69D2E7', '#A7DBD8', '#20FC8F', '#F38630', '#FA6900', '#FF4E50', '#009DDC' ];

var particles = [];
var pool = [];

var demo = Sketch.create({
container: document.getElementById( 'container' ),
retina: 'auto'
});

demo.setup = function() {

// Set off some initial particles.
var i, x, y;

for ( i = 0; i < 20; i++ ) {
x = ( demo.width * 0.5 ) + random( -100, 100 );
y = ( demo.height * 0.5 ) + random( -100, 100 );
demo.spawn( x, y );
}
};

demo.spawn = function( x, y ) {

var particle, theta, force;

if ( particles.length >= MAX_PARTICLES )
pool.push( particles.shift() );

particle = pool.length ? pool.pop() : new Particle();
particle.init( x, y, random( 5, 40 ) );

particle.wander = random( 0.5, 2.0 );
particle.color = random( COLOURS );
particle.drag = random( 0.9, 0.99 );

theta = random( TWO_PI );
force = random( 2, 8 );

particle.vx = sin( theta ) * force;
particle.vy = cos( theta ) * force;

particles.push( particle );
};

demo.update = function() {

var i, particle;

for ( i = particles.length - 1; i >= 0; i-- ) {

particle = particles[i];

if ( particle.alive ) particle.move();
else pool.push( particles.splice( i, 1 )[0] );
}
};

demo.draw = function() {

demo.globalCompositeOperation  = 'lighter';

for ( var i = particles.length - 1; i >= 0; i-- ) {
particles[i].draw( demo );
}
};

demo.mousemove = function() {

var particle, theta, force, touch, max, i, j, n;

for ( i = 0, n = demo.touches.length; i < n; i++ ) {

touch = demo.touches[i], max = random( 1, 4 );
for ( j = 0; j < max; j++ ) {
demo.spawn( touch.x, touch.y );
}

}
};
</script>
<script src="js/script.js"></script>
</body>
</html>
