<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assests/css/style.css">
    <link rel="stylesheet" href="../../assests/css/all.css">
    <link rel="stylesheet" href="dashStyle.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="dashStyle.css">
    <style>

    </style>
</head>
<body>
  <!-- menu section  -->
 <nav class="navbar navbar-expand-lg navbar-light container-fluid col-lg " >
  <div class="container-fluid">
    <a class="navbar-brand" href="../../index.html">H<span style="color: yellow;">R</span> <small >Jobs </small> </a>
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
@yield('dash')

<script src="../../assests/lib/jquery-3.6.0.min_2.js">
</script>
<!-- <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- <script>
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function () {
      myInput.focus()
    })
</script> -->
</body>
</html>
