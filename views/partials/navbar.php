<nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <div class="d-flex gap-2">
        <?php if (isset($_SESSION["username"])){?>
          <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo $_SESSION["username"]; ?>
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="#">Change password</a></li>
              <li><a class="dropdown-item" href="/logout">Log out</a></li>

            </ul>
          </div>
        <?php } else{?>
          <a href="/login" class="btn btn-outline-secondary">Login</a>
          <a href="/register" class="btn btn-primary">Register</a>
        <?php }?>
      </div>
    </div>
  </div>
</nav>