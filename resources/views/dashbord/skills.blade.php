<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
    <!-- <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../../assests/css/style.css">
    <link rel="stylesheet" href="../../assests/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="dashStyle.css">
</head>
<body>
   <!-- menu section  -->
 <nav class="navbar navbar-expand-lg navbar-light container-fluid col-lg " >
  <div class="container-fluid">
    <a class="navbar-brand col-lg-12" href="../../index.html">H<span style="color: yellow;">R</span> <small >Jobs </small> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="experience.html">Protfile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="experience.html">Experience</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="skills.html">Skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Qualifications.html">Qualifications</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="course.html">Courses</a>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../../assests/lib/jquery-3.6.0.min_2.js">
    </script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <!-- <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function () {
          myInput.focus()
        })
    </script> -->
</body>
</html>
