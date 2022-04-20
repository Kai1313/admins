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
      @foreach ($recent as $item)
      <div class="col-lg-4">
        <div class="d-flex justify-content-center align-items-center">
          <div class="card">
              <div class="inner-card">
                <div class="product-image">
                  <img src="{{ url('') }}/assets/images/products/{{ $item->mainpic }}" class="img-fluid rounded">
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3 px-2">
                  <span class="card-title">{{ ucwords($item->title) }}</span> 
                  {{-- <span class="heart"><i class="fa fa-heart"></i></span> --}}
                </div>
                <div class="mt-2 px-2 d-none d-sm-block short-desc"> 
                  <small>
                    @if (strlen($item->description) > 100)
                      {{ substr($item->description, 0, 100) }}...
                    @else
                      {{ $item->description }}
                    @endif
                  </small> 
                </div>
                <div class="px-2">
                  <span class="card-price">Rp {{ $item->price }}</span>
                </div>
                <div class="px-2 mt-3 d-grid gap-2 d-md-flex justify-content-md-end"> <a href="https://wa.me/6285237314114?text=Halo%0ASaya%20ingin%20membeli%20{{ $item->title }}%0A{{ url('') }}/detail/{{ $item->slug }}%0AApakah%20barang%20tersedia" class="btn btn-primary btn-sm px-3"><i class="fa fa-whatsapp"></i> Beli</a> <a href="{{ url('') }}/detail/{{ $item->slug }}" class="btn btn-outline-primary btn-sm px-3">Detail <i class="fa fa-angle-double-right"></i></a> </div>
              </div>
          </div>
        </div>
      </div>
      @endforeach
      
    </div>
    <div class="row justify-content-center">
      <div class="col-4 text-center">
        <a href="{{ route('list-product') }}" class="btn btn-sm btn-load-more">Lihat Lainnya</a>
      </div>
    </div>
  </section>
@endsection
@section('addon-js')
<script src="{{ asset('js/main/umkm-main.js') }}"></script>
@endsection