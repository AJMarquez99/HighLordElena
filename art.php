<?php
  $page_title = "Art";
  include ('components/_header.html');
?>
<div class="col">
  <div class="row art-favorites mb-5">
      <div class="col">
        <h3>Favorites</h3>
        <!-- Slideshow container -->
        <div class="slideshow-container" id="slideshow_container">

          <div class="mySlides" data-img-src="images/art_random1.jpg"></div>
          <div class="mySlides" data-img-src="images/art_random6.jpg"></div>
          <div class="mySlides" data-img-src="images/art_random3.jpg"></div>

          <!-- Full-width images with number and caption text -->
          <!--<div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="images/art_random1.jpg">
            <div class="text">Caption Text</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="images/art_random2.jpg">
            <div class="text">Caption Two</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="images/art_random3.jpg">
            <div class="text">Caption Three</div>
          </div>

           Next and previous buttons
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

          The dots/circles
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>-->
        </div>
      </div>
  </div>
  <div class="row art-gallery">
      <div class="col-sm-12 col-md-2 col-lg-3">
        <a href="images/art_random1.jpg" data-toggle="lightbox" data-max-width="750" data-max-height="750" data-title="A random title" data-footer="A custom footer text" data-gallery="artwork">
          <img src="images/art_random1.jpg" class="img-fluid">
        </a>
        <a href="images/art_random2.jpg" data-toggle="lightbox" data-max-width="750" data-max-height="750" data-title="A random title" data-footer="A custom footer text" data-gallery="artwork">
          <img src="images/art_random2.jpg" class="img-fluid">
        </a>
        <a href="images/art_random3.jpg" data-toggle="lightbox" data-max-width="750" data-max-height="750" data-title="A random title" data-footer="A custom footer text" data-gallery="artwork">
          <img src="images/art_random3.jpg" class="img-fluid">
        </a>
      </div>
      <div class="col-sm-12 col-md-2 col-lg-3">
        <a href="images/art_random4.jpg" data-toggle="lightbox" data-max-width="750" data-max-height="750" data-title="A random title" data-footer="A custom footer text" data-gallery="artwork">
          <img src="images/art_random4.jpg" class="img-fluid">
        </a>
        <a href="images/art_random5.jpg" data-toggle="lightbox" data-max-width="750" data-max-height="750" data-title="A random title" data-footer="A custom footer text" data-gallery="artwork">
          <img src="images/art_random5.jpg" class="img-fluid">
        </a>
        <a href="images/art_random6.jpg" data-toggle="lightbox" data-max-width="750" data-max-height="750" data-title="A random title" data-footer="A custom footer text" data-gallery="artwork">
          <img src="images/art_random6.jpg" class="img-fluid">
        </a>
      </div>
      <div class="col-sm-12 col-md-2 col-lg-3">
        <a href="images/art_random7.jpg" data-toggle="lightbox" data-max-width="750" data-max-height="750" data-title="A random title" data-footer="A custom footer text" data-gallery="artwork">
          <img src="images/art_random7.jpg" class="img-fluid">
        </a>
        <a href="images/art_random8.jpg" data-toggle="lightbox" data-max-width="750" data-max-height="750" data-title="A random title" data-footer="A custom footer text" data-gallery="artwork">
          <img src="images/art_random8.jpg" class="img-fluid">
        </a>
        <a href="images/art_random9.jpg" data-toggle="lightbox" data-max-width="750" data-max-height="750" data-title="A random title" data-footer="A custom footer text" data-gallery="artwork">
          <img src="images/art_random9.jpg" class="img-fluid">
        </a>
      </div>
      <div class="col-sm-12 col-md-2 col-lg-3">
        <a href="images/art_random10.jpg" data-toggle="lightbox" data-max-width="750" data-max-height="750" data-title="A random title" data-footer="A custom footer text" data-gallery="artwork">
          <img src="images/art_random10.jpg" class="img-fluid">
        </a>
        <a href="images/art_random11.jpg" data-toggle="lightbox" data-max-width="750" data-max-height="750" data-width="350" data-title="A random title" data-footer="A custom footer text" data-gallery="artwork">
          <img src="images/art_random11.jpg" class="img-fluid">
        </a>
        <a href="images/art_random12.jpg" data-toggle="lightbox" data-max-width="750" data-max-height="750" data-width="350" data-title="A random title" data-footer="A custom footer text" data-gallery="artwork">
          <img src="images/art_random12.jpg" class="img-fluid">
        </a>
      </div>
  </div>
</div>
<?php
  include ('components/_footer.html');
?>
