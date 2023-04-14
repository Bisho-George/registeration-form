<style>
  .navbar {
    font-size: x-large;
  }
  .navbar-brand {
    color: #fff;
  }
  .navbar-brand:hover {
    color: #27a5cc;
  }
  .navbar-nav .nav-link {
    color: #ddd;
  }
  
  .navbar-nav .nav-link:hover {
    color: #27a5cc;
  }
  
  .navbar-nav .nav-link.active {
    color: #27a5cc;
    font-weight: bolder;
  }
  
</style>

<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Registration Form</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>