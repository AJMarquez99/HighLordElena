<?php
  $page_title = "Art";
  include ('components/_header.html');
?>
<div class="col">
  <h2>Art</h2>
  <div class="row">
      <div class="col">
        <h3>My Favorites</h3>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/art_random1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>...</h5>
                <p>...</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/art_random2.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>...</h5>
                <p>...</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/art_random3.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>...</h5>
                <p>...</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
  </div>
  <div class="row">
      <div class="col-sm-12 col-md-2 col-lg-3">
        <a href="images/art_random1.jpg" data-toggle="lightbox" data-gallery="example-gallery">
          <img src="images/art_random1.jpg" class="img-fluid">
        </a>
        <a href="images/art_random2.jpg" data-toggle="lightbox" data-gallery="example-gallery">
          <img src="images/art_random2.jpg" class="img-fluid">
        </a>
        <a href="images/art_random3.jpg" data-toggle="lightbox" data-gallery="example-gallery">
          <img src="images/art_random3.jpg" class="img-fluid">
        </a>
      </div>
      <div class="col-sm-12 col-md-2 col-lg-3">
        <a href="images/art_random4.jpg" data-toggle="lightbox" data-gallery="example-gallery">
          <img src="images/art_random4.jpg" class="img-fluid">
        </a>
        <a href="images/art_random5.jpg" data-toggle="lightbox" data-gallery="example-gallery">
          <img src="images/art_random5.jpg" class="img-fluid">
        </a>
        <a href="images/art_random6.jpg" data-toggle="lightbox" data-gallery="example-gallery">
          <img src="images/art_random6.jpg" class="img-fluid">
        </a>
      </div>
      <div class="col-sm-12 col-md-2 col-lg-3">
        <a href="images/art_random7.jpg" data-toggle="lightbox" data-gallery="example-gallery">
          <img src="images/art_random7.jpg" class="img-fluid">
        </a>
        <a href="images/art_random8.jpg" data-toggle="lightbox" data-gallery="example-gallery">
          <img src="images/art_random8.jpg" class="img-fluid">
        </a>
        <a href="images/art_random9.jpg" data-toggle="lightbox" data-gallery="example-gallery">
          <img src="images/art_random9.jpg" class="img-fluid">
        </a>
      </div>
      <div class="col-sm-12 col-md-2 col-lg-3">
        <a href="images/art_random10.jpg" data-toggle="lightbox" data-gallery="example-gallery">
          <img src="images/art_random10.jpg" class="img-fluid">
        </a>
        <a href="images/art_random11.jpg" data-toggle="lightbox" data-gallery="example-gallery">
          <img src="images/art_random11.jpg" class="img-fluid">
        </a>
        <a href="images/art_random12.jpg" data-toggle="lightbox" data-gallery="example-gallery">
          <img src="images/art_random12.jpg" class="img-fluid">
        </a>
      </div>
  </div>
</div>
<?php
  include ('components/_footer.html');
?>
