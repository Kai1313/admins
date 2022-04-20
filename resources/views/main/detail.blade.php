@extends('main.master')
@section('content')
  <section class="detail-section">
    <div class="container-fluid mt-2 mb-3">
      <div class="row no-gutters">
        <div class="col-md-5 pr-2 detail-gallery">
          <div class="card">
            <div class="demo">
              <ul id="lightSlider">
                <li data-thumb="{{ url('') }}/assets/images/products/{{ $items['mainpic'] }}"> <img src="{{ url('') }}/assets/images/products/{{ $items['mainpic'] }}" /> </li>
                @if ($items['detail1'] != null)
                  <li data-thumb="{{ url('') }}/assets/images/products/{{ $items['detail1'] }}"> <img src="{{ url('') }}/assets/images/products/{{ $items['detail1'] }}" /> </li>
                @endif
                @if ($items['detail2'] != null)
                  <li data-thumb="{{ url('') }}/assets/images/products/{{ $items['detail2'] }}"> <img src="{{ url('') }}/assets/images/products/{{ $items['detail2'] }}" /> </li>
                @endif
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="card">
            {{-- <div class="d-flex flex-row align-items-center">
              <div class="p-ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div> <span class="ms-1">5.0</span>
            </div> --}}
            <div class="about"> <span class="fw-bold">{{ $items["title"] }} </span>
              <h4 class="fw-bold">Rp {{ $items["price"] }}</h4>
            </div>
            <div class="buttons">
              <a href="https://wa.me/6285237314114?text=Halo%0ASaya%20ingin%20membeli%20{{ $items['title'] }}%0A{{ url('') }}/detail/{{ $items['slug'] }}%0AApakah%20barang%20tersedia" class="btn btn-warning btn-long buy"><i class="fa fa-whatsapp"></i> Beli</a>
            </div>
            <hr>
            <div class="product-description">
              {{-- <div class="d-flex flex-row align-items-center"> <i class="fa fa-calendar-check-o"></i> <span class="ms-1">Delivery from sweden, 15-45 days</span> </div> --}}
              <div class="mt-2"> <span class="fw-bold">Description</span>
                <p>{{ $items->description }}</p>
                {{-- <div class="bullets">
                  <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Best in Quality</span> </div>
                  <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Anti-creak joinery</span> </div>
                  <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Sturdy laminate surfaces</span> </div>
                  <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Relocation friendly design</span> </div>
                  <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">High gloss, high style</span> </div>
                  <div class="d-flex align-items-center"> <span class="dot"></span> <span class="bullet-text">Easy-access hydraulic storage</span> </div>
                </div> --}}
              </div>
              <div class="mt-2"> <span class="fw-bold">Store</span> </div>
                <div class="d-flex flex-row align-items-center"> <img src="{{ url('') }}/assets/images/companies/{{ $company['mainpic'] }}" class="rounded-circle store-image">
                  <div class="d-flex flex-column ms-1 comment-profile">
                    <div class="comment-ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div> 
                    <span class="username">{{ $company["name"] }}</span> 
                    <small class="followers">{{ $company["address"] }}</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>
@endsection
@section('addon-js')

<script>
    $(function() {
      $('#lightSlider').lightSlider({
          gallery: true,
          item: 1,
          loop: true,
          slideMargin: 0,
          autowidth: true,
          thumbItem: 3
      })
    })
</script>
@endsection