
@extends('dashbord.masterdash');
@section('dash')
  <div class="d-flex" id="wrapper">
    <!-- Sidebar-->

    <div class="border-end sidebar-dashbord " id="sidebar-wrapper">
      <!-- <div class="sidebar-heading border-bottom bg-light">HR jobs</div> -->
      <!-- <a class="sidebar-heading border-bottom bg-light" href="../../index.html">H<span style="color: yellow;">R</span> <small >Jobs </small> </a> -->
      <a class="sidebar-heading border-bottom bg-light btn col-lg-12" href="../../index.html">H<span style="color: yellow;">R</span> <small >Jobs </small> </a>

        <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#">Dashboard</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="protfile.html">Protfile</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="experience.html">Experience</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="skills.html">Skills</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="Qualifications.html">Qualifications</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="course.html">Courses</a>
        </div>
    </div>
   <!-- Modal -->
<!-- Button trigger modal -->
<main class="container justify-content-center">
  <div class="card col-3 m-5" style="width: 18rem;">
      <img src="../../assests/imges/skills.png" class="card-img-top img-fluid" alt="...">
      <div class="card-body">
          <div>
              <h3>Skills</h3>
              <p class="card-text">Full-Stuck Developer 7 Years working in Amazion.</p>
          </div>
          <button type="button" class="btn btn-outline-dark m-5 justify-content-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Manage Your Profile
           </button>
           <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog">
               <div class="modal-content">
                 <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Experience</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                   <img src="../../assests/imges/openSkill.jpg" class="img-fluid" alt="">
                   <form>
                    <div class="mb-3">
                      <label for="example"  class="form-label">Decision Making Skills</label>
                      <input type="text" placeholder="" class="form-control" id="example" aria-describedby="emailHelp">
                      <label for="example"  class="form-label">How</label>
                      <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                      </div>
                      <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->

                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">New</button>
                  </form>
                 </div>
                 <div class=" mb-3 modal-footer">
                  <button> <<< </button>
                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                   <button type="button" class="btn btn-primary">Edite</button>
                   <button type="button" class="btn btn-danger">Delete</button>
                   <button type="button" class="btn btn-primary">Save</button>
                   <button> >>> </button>
                 </div>
               </div>
             </div>
           </div>
      </div>
    </div>
  </main>
  @endsection
