@extends('layout.master');
@section('content')

 <section class="container-fluid my-5">
   <section class="row frieds">
 <section class="col align-self-start">
    {{-- "assests/imges/ourCompany.jpg" --}}
    <img src="{{ URL('/assests/imges/Exbag.jpg') }}" class="card-img img-fluid f" alt="..." style="height: 40px; width: 40px; position: absolute; z-index: 3;"  >
  <div class="card fried" style="width: 18rem;">
    <img src="assests/imges/Exbag.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">Microsoft</p>
    </div>
  </div>
</section>

  <section  class="col-lg-4  align-self-center ">
    <img src="/assests/imges/ourCompany.jpg" class="card-img img-fluid f" alt="..." style="height: 40px; width: 40px; position: absolute; z-index: 3;"  >

    </div>
  </div>
  <div class="col-lg-4 card fried " style="width: 18rem;">
    <img src="/assests/imges/apple.png" class="card-img-top img-fluid" alt="...">
    <div class="card-body">
      <p class="card-text">Apple</p>
    </div>
  </div>
</section>
<section class="col align-self-end">

     <img src="/assests/imges/ourCompany.jpg" class="card-img img-fluid " alt="..." style="height: 40px; width: 40px; position: absolute; z-index: 3;"  >
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


@endsection
