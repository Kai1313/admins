<header class="section-header">
  {{-- <nav class="navbar navbar-dark navbar-expand p-0 bg-dark">
      <div class="container-fluid">
          <ul class="navbar-nav d-none d-md-flex mr-auto">
              <li class="nav-item"><a class="nav-link" href="#" data-abc="true">Cash On Delivery</a></li>
              <li class="nav-item"><a class="nav-link" href="#" data-abc="true">Free Delivery</a></li>
              <li class="nav-item"><a class="nav-link" href="#" data-abc="true">Cash Backs</a></li>
          </ul>
          <ul class="navbar-nav d-flex align-items-center">
              <li class="nav-item">
                  <div class="d-flex flex-row"> <img src="https://i.imgur.com/EYFtR83.jpg" class="rounded-circle" width="30"> </div>
              </li>
              <li class="nav-item"> <a href="#" class="nav-link d-flex align-items-center" data-abc="true"><span>Nantano M</span><i class='bx bxs-chevron-down'></i></a> </li>
          </ul>
      </div>
  </nav> --}}
  <section class="header-main border-bottom bg-success">
    <div class="container-fluid">
      <div class="row p-2 pt-3 pb-3 d-flex align-items-center">
        <div class="col-md-2">
          <a href="{{ route('home') }}">
            <img class="d-none d-md-flex logo-image" src="{{ asset('assets/images/logo.png') }}">
          </a> 
        </div>
        <div class="col-md-8">
          {{-- <div class="d-flex form-inputs"> <input class="form-control" type="text" placeholder="Search any product..."> <i class="bx bx-search"></i> </div> --}}
        </div>
        <div class="col-md-2">
          <div class="d-flex d-none d-md-flex flex-row align-items-center"> <span class="shop-bag"><i class='bx bxl-whatsapp'></i></span>
          <div class="d-flex flex-column ms-2"> <span class="qty">Information</span> <span class="fw-bold phone-navbar">0852-3731-4114</span> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid"> <a class="navbar-brand d-md-none d-md-flex" href="#">Categories</a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                  <li class="nav-item"> <a class="nav-link active" aria-current="page" href="#">Electronics</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="#">Fashion</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="#">Furnitures</a> </li>
                  <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Mobiles </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="#">Smart Phones</a></li>
                          <li><a class="dropdown-item" href="#">Feature Phones</a></li>
                          <li><a class="dropdown-item" href="#">Mobile Covers</a></li>
                      </ul>
                  </li>
              </ul>
          </div>
      </div>
  </nav> --}}
</header>