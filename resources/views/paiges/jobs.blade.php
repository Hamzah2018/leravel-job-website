<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR jobs</title>
    <!-- <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assests/css/style.css">
    <script src="../assests/lib/jquery-3.6.0.min_2.js"></script>
    <!-- <script src="assests/js/jquery-3.6.0.min_2.js"></script> -->
</head>
<body>
    <!-- menu section  -->
 <nav class="navbar navbar-expand-lg navbar-light container-fluid" >
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.html">H<span style="color: yellow;">R</span> <small >Jobs </small> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="jobs.html">Jobs</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="services.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="resume.html">Make resme</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">The job you wish</a>
        </li>
      </ul>
      <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>
<!--End menu section  -->
<header>
</header>
<!-- <div class="container">
  <h2>Filterable List</h2>
  <p>Type something in the input field to search the list for specific items:</p>
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <ul class="list-group" id="myList">
    <li class="list-group-item">Graphic Desgin</li>
    <li class="list-group-item">Camera Man</li>
    <li class="list-group-item">Arcticure</li>
    <li class="list-group-item">Doctore</li>
  </ul>
</div> -->
<h2>Filterable List</h2>
<p>Type something in the input field to search the list for specific items:</p>
<input class="form-control" id="myInput" type="text" placeholder="Search..">
<br>
<!-- class="col-sm-4" -->
    <main class="container-fluid" >
      <article>
      <section class=" row">
      <section class="list-group col-6 " id="myList" >
      <div class="card border-primary mb-3 list-group-item " style="max-width: 18rem;">
        <div class="card-header">Graphic Desgin</div>
        <div class="card-body text-primary">
          <h5 class="card-title"></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card border-secondary mb-3 list-group-item" style="max-width: 18rem;">
        <div class="card-header">Camera Man</div>
        <div class="card-body text-secondary">
          <h5 class="card-title">Secondary card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card border-success mb-3 list-group-item" style="max-width: 18rem;">
        <div class="card-header">Arcticure</div>
        <div class="card-body text-success">
          <h5 class="card-title">Success card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card border-danger mb-3 list-group-item" style="max-width: 18rem;">
        <div class="card-header">Doctore</div>
        <div class="card-body text-danger">
          <h5 class="card-title">Danger card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </section>
      <section class="list-group col-6 " id="myList" >
      <div class="card border-primary mb-3 list-group-item " style="max-width: 18rem;">
        <div class="card-header">Graphic Desgin</div>
        <div class="card-body text-primary">
          <h5 class="card-title"></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card border-secondary mb-3 list-group-item" style="max-width: 18rem;">
        <div class="card-header">Camera Man</div>
        <div class="card-body text-secondary">
          <h5 class="card-title">Secondary card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card border-success mb-3 list-group-item" style="max-width: 18rem;">
        <div class="card-header">Arcticure</div>
        <div class="card-body text-success">
          <h5 class="card-title">Success card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card border-danger mb-3 list-group-item" style="max-width: 18rem;">
        <div class="card-header">Doctore</div>
        <div class="card-body text-danger">
          <h5 class="card-title">Danger card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </section>
  </section>
  </article>
    </main>
    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script> -->
    <script src="assests/js/template .js"></script>
    <script src="../assests/js/main-1.js"></script>
  </body>


</html>
