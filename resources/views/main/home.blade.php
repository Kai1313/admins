@extends('main.master')
@section('content')
  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 no-gutter" style="margin: auto">
          <div class="main-banner">
            <div class="banner-item">
              <a href="http://"><img src="{{ asset('assets/images/banners/1.jpg') }}" alt="" srcset=""></a>
            </div>
            <div class="banner-item">
              <a href="http://"><img src="{{ asset('assets/images/banners/2.jpg') }}" alt="" srcset=""></a>
            </div>
            <div class="banner-item">
              <a href="http://"><img src="{{ asset('assets/images/banners/3.jpg') }}" alt="" srcset=""></a>
            </div>
            <div class="banner-item">
              <a href="http://"><img src="{{ asset('assets/images/banners/1.jpg') }}" alt="" srcset=""></a>
            </div>
          </div>
        </div>
        {{-- <div class="col-md-4" style="background-color: green; height: 400px;"></div> --}}
      </div>
    </div>
  </section>

  <section class="container">
    <div class="row justify-content-center">
      <span class="product-list-title">Produk Terbaru</span><span class="hr-product-list"></span>
    </div>
    <div class="row product-list">
      <div class="col-lg-4 col-6">
        <div class="d-flex justify-content-center align-items-center">
          <div class="card">
              <div class="inner-card"> <img src="https://i.imgur.com/4qXhMAM.jpg" class="img-fluid rounded">
                  <div class="d-flex justify-content-between align-items-center mt-3 px-2">
                      <span class="card-title">Worksheet Chair</span> 
                      {{-- <span class="heart"><i class="fa fa-heart"></i></span> --}}
                  </div>
                  <div class="mt-2 px-2 d-none d-sm-block"> <small>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</small> </div>
                  <div class="px-2">
                      <span class="card-price">Rp 1000</span>
                  </div>
                  <div class="px-2 mt-3 d-grid gap-2 d-md-flex justify-content-md-end"> <button class="btn btn-primary btn-sm px-3"><i class="fa fa-whatsapp"></i> Beli</button> <button class="btn btn-outline-primary btn-sm px-3">Detail <i class="fa fa-angle-double-right"></i></button> </div>
              </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-6">
        <div class="d-flex justify-content-center align-items-center">
          <div class="card">
              <div class="inner-card"> <img src="https://i.imgur.com/4qXhMAM.jpg" class="img-fluid rounded">
                  <div class="d-flex justify-content-between align-items-center mt-3 px-2">
                      <span class="card-title">Worksheet Chair</span> 
                      {{-- <span class="heart"><i class="fa fa-heart"></i></span> --}}
                  </div>
                  <div class="mt-2 px-2 d-none d-sm-block"> <small>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</small> </div>
                  <div class="px-2">
                      <span class="card-price">Rp 1000</span>
                  </div>
                  <div class="px-2 mt-3 d-grid gap-2 d-md-flex justify-content-md-end"> <button class="btn btn-primary btn-sm px-3"><i class="fa fa-whatsapp"></i> Beli</button> <button class="btn btn-outline-primary btn-sm px-3">Detail <i class="fa fa-angle-double-right"></i></button> </div>
              </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-6">
        <div class="d-flex justify-content-center align-items-center">
          <div class="card">
              <div class="inner-card"> <img src="https://i.imgur.com/4qXhMAM.jpg" class="img-fluid rounded">
                  <div class="d-flex justify-content-between align-items-center mt-3 px-2">
                      <span class="card-title">Worksheet Chair</span> 
                      {{-- <span class="heart"><i class="fa fa-heart"></i></span> --}}
                  </div>
                  <div class="mt-2 px-2 d-none d-sm-block"> <small>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</small> </div>
                  <div class="px-2">
                      <span class="card-price">Rp 1000</span>
                  </div>
                  <div class="px-2 mt-3 d-grid gap-2 d-md-flex justify-content-md-end"> <button class="btn btn-primary btn-sm px-3"><i class="fa fa-whatsapp"></i> Beli</button> <button class="btn btn-outline-primary btn-sm px-3">Detail <i class="fa fa-angle-double-right"></i></button> </div>
              </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-6">
        <div class="d-flex justify-content-center align-items-center">
          <div class="card">
              <div class="inner-card"> <img src="https://i.imgur.com/4qXhMAM.jpg" class="img-fluid rounded">
                  <div class="d-flex justify-content-between align-items-center mt-3 px-2">
                      <span class="card-title">Worksheet Chair</span> 
                      {{-- <span class="heart"><i class="fa fa-heart"></i></span> --}}
                  </div>
                  <div class="mt-2 px-2 d-none d-sm-block"> <small>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</small> </div>
                  <div class="px-2">
                      <span class="card-price">Rp 1000</span>
                  </div>
                  <div class="px-2 mt-3 d-grid gap-2 d-md-flex justify-content-md-end"> <button class="btn btn-primary btn-sm px-3"><i class="fa fa-whatsapp"></i> Beli</button> <button class="btn btn-outline-primary btn-sm px-3">Detail <i class="fa fa-angle-double-right"></i></button> </div>
              </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-6">
        <div class="d-flex justify-content-center align-items-center">
          <div class="card">
              <div class="inner-card"> <img src="https://i.imgur.com/4qXhMAM.jpg" class="img-fluid rounded">
                  <div class="d-flex justify-content-between align-items-center mt-3 px-2">
                      <span class="card-title">Worksheet Chair</span> 
                      {{-- <span class="heart"><i class="fa fa-heart"></i></span> --}}
                  </div>
                  <div class="mt-2 px-2 d-none d-sm-block"> <small>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</small> </div>
                  <div class="px-2">
                      <span class="card-price">Rp 1000</span>
                  </div>
                  <div class="px-2 mt-3 d-grid gap-2 d-md-flex justify-content-md-end"> <button class="btn btn-primary btn-sm px-3"><i class="fa fa-whatsapp"></i> Beli</button> <button class="btn btn-outline-primary btn-sm px-3">Detail <i class="fa fa-angle-double-right"></i></button> </div>
              </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-6">
        <div class="d-flex justify-content-center align-items-center">
          <div class="card">
              <div class="inner-card"> <img src="https://i.imgur.com/4qXhMAM.jpg" class="img-fluid rounded">
                  <div class="d-flex justify-content-between align-items-center mt-3 px-2">
                      <span class="card-title">Worksheet Chair</span> 
                      {{-- <span class="heart"><i class="fa fa-heart"></i></span> --}}
                  </div>
                  <div class="mt-2 px-2 d-none d-sm-block"> <small>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</small> </div>
                  <div class="px-2">
                      <span class="card-price">Rp 1000</span>
                  </div>
                  <div class="px-2 mt-3 d-grid gap-2 d-md-flex justify-content-md-end"> <button class="btn btn-primary btn-sm px-3"><i class="fa fa-whatsapp"></i> Beli</button> <button class="btn btn-outline-primary btn-sm px-3">Detail <i class="fa fa-angle-double-right"></i></button> </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-4 text-center">
        <button type="button" class="btn btn-sm btn-load-more">Lihat Lainnya</button>
      </div>
    </div>
  </section>
@endsection