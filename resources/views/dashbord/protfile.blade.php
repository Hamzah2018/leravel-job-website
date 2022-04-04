
@extends('dashbord.masterdash');
@section('dash')
  <div class="d-flex dl" id="wrapper">
    <!-- Sidebar-->
    <!-- bg-white -->
    <div class="border-end sidebar-dashbord " id="sidebar-wrapper">
      <!-- <div class="sidebar-heading border-bottom bg-light">HR jobs</div> -->
      <a class="sidebar-heading border-bottom bg-light btn col-lg-12 " href="../../index.html">H<span style="color: yellow;">R</span> <small >Jobs </small> </a>

        <div class="list-group list-group-flush ">
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#">Dashboard</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#">Protfile</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="experience.html">Experience</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="skills.html">Skills</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="Qualifications.html">Qualifications</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="course.html">Courses</a>
        </div>
    </div>



<!-- Button trigger modal -->
<main class="container justify-content-center">
<div class="card col-3 m-5" style="width: 18rem;">
    <img src="../../assests/imges/profile.png" class="card-img-top img-fluid" alt="...">
    <div class="card-body">
        <div>
            <h3>Hamzah Ismail</h3>
            <p class="card-text">Full-Stuck Developer 7 Years working in Amazion.</p>
        </div>
        <button type="button" class="btn btn-outline-dark m-5 justify-content-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Manage Your Profile
         </button>

         <!-- Modal -->
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Hamzah Al-Hagi</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                 <img src="../../assests/imges/profile.png" alt="">
                 <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1"  class="form-label">Email address</label>
                      <input type="email" placeholder="khalid@hotmail.com" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Your Phone Number</label>
                        <input type="text" placeholder="967-773770030" class="form-control" id="exampleInputPassword1">
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">New</button>
                  </form>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <button type="button" class="btn btn-primary">Edite</button>
                 <button type="button" class="btn btn-danger">Delete</button>
                 <button type="button" class="btn btn-primary">Save</button>
                 <a class="btn " href="experience.html"> >>> </a>
               </div>
             </div>
           </div>
         </div>
    </div>
  </div>
</main>
@endsection
