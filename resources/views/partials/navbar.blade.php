<nav class="navbar navbar-expand-lg navbar-dark sticky-top pb-lg-2 pb-0" style="background-color:#36312b">
      <div class="container-fluid">
          <?php
            
          if (!$pos) {
              $logged_in = false;
          ?>
              <button class="btn btn-lg ms-3 me-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapsableColumn" aria-controls="collapsableColumn" style="margin-right:2%;">
                  <i class="bi bi-list-task"  style="color:white !important"></i>
              </button>

          <?php
          } else {
              $logged_in = true;
          ?>
              <button class="btn btn-lg ms-1 me-0 d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCategories" aria-controls="navbarCategories" style="margin-right:2%;">
                  <i class="bi bi-list-task" style="color:white !important"></i>
              </button>
          <?php
          }
          ?>

          <a class="navbar-brand ms-lg-4" href="/"><img class="img-fluid" width="150" height="30" src="{{ asset('img/logo_light.png') }}"></a>
          <button class="navbar-toggler btn btn-lg border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="bi bi-lg bi-person-circle"></i>
          </button>

          <div class="collapse navbar-collapse d-lg-flex justify-content-between text-center" id="navbarSupportedContent">
              <form action="/searchResults"class="d-lg-inline d-none w-50 ms-5" method="get">
                  <div class="input-group">
                      <select class="form-select fs-lg-3" aria-placeholder="Category" aria-label="Default select example">
                          <option selected>All</option>
                          <option value="1">Computers</option>
                          <option value="2">Televisions</option>
                          <option value="3">Smartphones</option>
                          <option value="4">Electrodomestics</option>
                      </select>
                      <input type="text" id="search" name="search" class="form-control w-50" placeholder="Search For An Item" aria-label="Text input with dropdown button">
                      <button type="submit" class="btn btn-secondary" aria-label="Text input with dropdown button"><i class="bi bi-search"></i></button>
                  </div>
              </form>
              <ul class="navbar-nav mb-2 mb-lg-0">
                  <?php if($logged_in){ ?>
                      <li class="nav-item d-lg-flex align-items-lg-center py-2 py-lg-0 px-lg-2">
                          <a class="nav-link" href="cart.php">
                              <i class="fas fa-shopping-cart" style="font-size: 1.5em;"></i>
                          </a>
                      </li>
                  <?php } ?>
                  <li class="nav-item">
                      <?php if (!$logged_in) { ?>
                          <a class="nav-link" href="/login" style="color:white !important">Login</a>
                      <?php } else { ?>
                          <a href="user.php">
                              <img src="{{ asset('img/userIcon.png') }}" class="card-img-top px-1" style="max-height: 3em; max-width: 3em;" alt="User Icon">
                          </a>
                      <?php } ?>
                  </li>
                  <li class="nav-item">
                      <?php if (!$logged_in) { ?>
                          <a class="nav-link" href="/register" style="color:white !important">Register</a>
                      <?php } else { ?>
                          <a class="nav-link" href="user.php" style="color:white !important">User</a>
                      <?php } ?>
                  </li>

              </ul>
          </div>
      </div>
      <div class="d-lg-none row w-100 h-100">
          <form class="col-11 offset-1">
              <div class="input-group">
                  <select class="form-select fs-lg-3" aria-placeholder="Category" aria-label="Default select example">
                      <option selected>Category</option>
                      <option value="1">Computers</option>
                      <option value="2">Televisions</option>
                      <option value="3">Smartphones</option>
                      <option value="4">Electrodomestics</option>
                  </select>
                  <input type="text" class="form-control w-25" aria-label="Text input with dropdown button">
                  <button type="submit" class="btn btn-dark w-25" aria-label="Text input with dropdown button"><i class="bi bi-search"></i></button>
              </div>
          </form>
      </div>
  </nav>