<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR jobs</title>
    <!-- <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css"> -->
    <link rel="stylesheet" href="assests/css/style.css">
    <!-- <script src="assests/js/jquery-3.6.0.min_2.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      .btn-outline-success:hover{
        background-color:#87cab2;
      }
    </style>
</head>
<body>
  <!-- menu section  -->
 <nav class="navbar navbar-expand-lg navbar-light container-fluid" >
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">H<span style="color: yellow;">R</span> <small >Jobs </small> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/jobs.html">Jobs</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="pages/services.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="pages/resume.html">Make Resume / CV</a></li>
              <li><a class="dropdown-item" href="#">Evaluate Resume </a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Help to know your needs</a></li>
              <li><a class="dropdown-item" href="#">Help You to know Your Goal</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">The job you wish</a>
          </li>
        </ul>
        <form class="d-flex">
          <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
          <a class="btn btn-outline-success" style="color:yellowgreen;" href="pages/dashboard/protfile.html">Sing In</a>  /
          <a class="btn btn-outline-success" style="color:yellowgreen;" href="pages/regest.html">Creat Email</a>
        </form>
        <!-- <li class="nav-item">
          <a class="nav-link" href="pages/jobs.html" style="color: yellow;">Create Email</a>
        </li> -->
      </div>
    </div>
  </nav>
 <!--End menu section  -->


  <header>
    <!-- slide  -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="assests/imges/job2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>From home</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="assests/imges/job1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>In Office</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assests/imges/job4.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>In labrary</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assests/imges/com 2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>In Big Company</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev bg-gradient" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next bg-gradient" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
      <!--End Slide  -->
  </header>
 <!-- End the header  -->
 <section class="container-fluid my-5">
   <section class="row frieds">
 <section class="col align-self-start">
    <img src="assests/imges/ourCompany.jpg" class="card-img img-fluid f" alt="..." style="height: 40px; width: 40px; position: absolute; z-index: 3;"  >
  <div class="card fried" style="width: 18rem;">
    <img src="assests/imges/microsoft.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">Microsoft</p>
    </div>
  </div>
</section>

  <section  class="col-lg-4  align-self-center ">
    <img src="assests/imges/ourCompany.jpg" class="card-img img-fluid f" alt="..." style="height: 40px; width: 40px; position: absolute; z-index: 3;"  >

    </div>
  </div>
  <div class="col-lg-4 card fried " style="width: 18rem;">
    <img src="assests/imges/apple.png" class="card-img-top img-fluid" alt="...">
    <div class="card-body">
      <p class="card-text">Apple</p>
    </div>
  </div>
</section>
<section class="col align-self-end">

     <img src="assests/imges/ourCompany.jpg" class="card-img img-fluid " alt="..." style="height: 40px; width: 40px; position: absolute; z-index: 3;"  >
  <div class="card fried" style="width: 18rem;">
    <img src="assests/imges/microsoft.png" class="card-img-top img-fluid" alt="...">
    <div class="card-body">
      <p class="card-text">Microsoft</p>
    </div>
  </div>
</section>
<!-- <section class="col align-self-start">
  <img src="assests/imges/ourCompany.jpg" class="card-img img-fluid " alt="..." style="height: 40px; width: 40px; position: absolute; z-index: 3;"  >
<div class="card fried" style="width: 18rem;">
  <img src="assests/imges/goDady.png" class="card-img-top img-fluid" alt="...">
  <div class="card-body">
    <p class="card-text">GoDady</p>
  </div>
</div>
</section> -->
</section>

 </section>

    <main class="container-fluid" >
      <div class="row  card_of_jobs ">
      <!-- <aside class="col-lg-5   col-md-8  col-sm-12 " > -->
          <!-- advertace -->
          <div class=" col-lg-4 card  bg-light link-secondary  mx-3" style="display: inline-block;">
            <div class="card-body">
              <h6 class="card-title">
                Systems Engineer, Microsoft Services
              </h6>
              <p class="card-text">
                Our Culture: At STS we are proud of our culture and how it drives everything.
              </p>
              <a href="pages/jobs.html" class="btn btn-outline-success"><Details></Details></a>
            </div>
          </div>
          <div class="col-lg-4  card  bg-light" style="display: inline-block;">
            <div class="card-body">
              <h6 class="card-title">Account Rep Intern</h6>
              <p class="card-text">At Amazon, we are working to be the most customer-centric
                 company on earth.</p>
              <a href="pages/jobs.html" class="btn btn-outline-success"><Details></Details></a>
              <hr>
            </div>
          </div>
        <!-- </aside> -->
        <!-- <aside class="col-lg-5 col-md-8 col-sm-12 " > -->
          <!-- advertace -->
          <div class="col-lg-4  card  bg-light  mx-3" style="display: inline-block;">
            <div class="card-body">
              <h6 class="card-title">Information Management and T4P Manager</h6>
              <p class="card-text">International Rescue committee(IRC) - Amman Dec 06</p>
              <a href="pages/jobs.html" class="btn btn-outline-success"><Details></Details></a>
            </div>
          </div>
          <div class="col-lg-4  card  bg-light" style="display: inline-block;">
            <div class="card-body">
              <h6 class="card-title">Manager, Secretariat of the Governing Bodies </h6>
              <p class="card-text">Background : The Syria Recovery Trust Fund (SRTF) was established for the financing.</p>
              <a href="" class="btn btn-outline-success"><Details></Details></a>
              <hr>
            </div>
          </div>
          <hr>
        </aside>
        <!-- <aside class="col-lg-5 col-md-8 col-sm-12 " > -->
          <!-- advertace -->
          <div class="col-lg-4  card  bg-light  mx-3" style="display: inline-block;">
            <div class="card-body">
              <h6 class="card-title">IT Service Delivery Administration Professional</h6>
              <p class="card-text">Description We are looking for a highly potential and motivated candidat.</p>
              <a href="#" class="btn btn-outline-success"><Details></Details></a>
            </div>
          </div>
          <div class="col-lg-4  card bg-light" style="display: inline-block;">
            <div class="card-body">
              <h6 class="card-title">Talent Acquisition Specialist (Tech).</h6>
              <p class="card-text">At Careem, we are driven by the purpose of simplifying the lives of people and building an a</p>
              <a href="pages/jobs.html" class="btn btn-outline-success"><Details></Details></a>
              <hr>

            </div>
          </div>
        <!-- </aside> -->
        <!-- <aside class="col-lg-5  col-sm-12 " > -->
          <!-- advertace -->
          <div class="col-lg-4 card  bg-light  mx-3" style="display: inline-block;">
            <div class="card-body">
              <h6 class="card-title">IT Service Delivery Administration Professional</h6>
              <p class="card-text">Description We are looking for a highly potential and motivated candidat.</p>
              <a href="#" class="btn btn-outline-success"><Details></Details></a>
            </div>
          </div>
          <div class="col-lg-4  card  bg-light" style="display: inline-block;">
            <div class="card-body">
              <h6 class="card-title">Talent Acquisition Specialist (Tech).</h6>
              <p class="card-text">At Careem, we are driven by the purpose of simplifying the lives of people and building an a</p>
              <a href="pages/jobs.html" class="btn btn-outline-success"><Details></Details></a>
              <hr>

            </div>
          </div>
        <!-- </aside> -->
        <!-- <aside></aside> -->
      </div>

        <section class="adver mt-10 ">

          <div class="card border-dark" style="width: 18rem; color: #000; font-weight: 700; " >
            <img src="assests/imges/goDady.png" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
              <h5 class=" card-title text-dark text-truncate"  style="color: #000; font-weight: 900;">Looking for the best deals? You’re in the right place.</h5>
              <p class="card-text  " style="color: #444;">There are countless coupon sites that claim to offer our best deals, but if you want promo codes for our deepest discounts – codes that actually work – this is the best place to find them. So let’s talk</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">You’ve to hit the discount jackpot.</li>
              <li class="list-group-item">Domains</li>
            </ul>
            <div class="card-body">
              <div>Managed WordPress</div>
              <div>New Products</div>
              <div class="px-4 mt-5 mb-2"> <a style="text-decoration: none; border-radius:0;background-color: black; " class="btn-primary py-2 px-3 ms-5 bg-dark" href="https://ae.godaddy.com/promos/coupon-promo-codes?isc=jodomUSD1&countryview=1&currencyType=USD&cdtl=c_15441847188.g_136092582211.k_aud-750467810158:kwd-88659201.a_566101588925.d_c&gclid=Cj0KCQiA9OiPBhCOARIsAI0y71D9gGpj6r4_A0iL8YYxoTrihm0SoWDPaw9lpqEOqg9L90godIZS1ksaAhw-EALw_wcB">Hosting.</a> </div>

              <!-- <a href="pages/dashboard/protfile.html" class="card-link">CV</a> -->
            </div>
          </div>

        </section>
    </section>
    <footer class="col-12 fixed-bottom">

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script> -->
</body>
</html>
