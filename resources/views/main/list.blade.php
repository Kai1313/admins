@extends('main.master')
@section('content')
  <section class="container">
    <div class="row justify-content-center">
      <span class="product-list-title">Semua</span><span class="hr-product-list"></span>
    </div>
    <div class="row product-list">
      @foreach ($items as $item)
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
                  <div class="px-2 mt-3 d-grid gap-2 d-md-flex justify-content-md-end"> <button class="btn btn-primary btn-sm px-3"><i class="fa fa-whatsapp"></i> Beli</button> <button class="btn btn-outline-primary btn-sm px-3">Detail <i class="fa fa-angle-double-right"></i></button> </div>
                </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    {{-- <div class="row justify-content-center">
      <div class="col-4 text-center">
        <button type="button" class="btn btn-sm btn-load-more">Lihat Lainnya</button>
      </div>
    </div> --}}
  </section>
@endsection