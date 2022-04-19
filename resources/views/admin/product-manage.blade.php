@extends('admin.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Manage</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title" id="form-title">{{ (isset($item)) ? 'Edit Product' : 'Add Product' }}</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <form action="" method="post" id="product-form">
                @csrf
                <input type="hidden" name="productId" value="{{ (isset($item) ? $item->id : '' ) }}">
                <div class="form-group">
                  <label for="productName">Product Name</label>
                  <input type="text" id="productName" name="productName" class="form-control" placeholder="Product name" value="{{ (isset($item) ? $item->title : '' ) }}" {{ (isset($item) ? 'readonly' : '' ) }}>
                </div>
                <div class="form-group">
                  <label for="productName">Company</label>
                  <select name="company" id="company" class="form-control">
                    <option value="">Pick UMKM</option>
                    @foreach ($companies as $company)
                      <option value="{{ $company->id }}" {{ (isset($item)) ? ($item->companyId == $company->id) ? 'selected' : '' : '' }}>{{ $company->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="productName">Categories</label>
                  <select name="category" id="category" class="form-control">
                    <option value="">Pick Categories</option>
                    @foreach ($categories as $category)
                      <option value="{{ $category->id }}" {{ (isset($item)) ? ($item->categoriesId == $category->id) ? 'selected' : '' : '' }}>{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="productPrice">Product Price (Rp)</label>
                  <input type="number" id="productPrice" name="productPrice" class="form-control" placeholder="Product price" value="{{ (isset($item) ? $item->price : '' ) }}">
                </div>
                <div class="form-group">
                  <label for="productDescription">Product Description</label>
                  <textarea id="productDescription" name="productDescription" class="form-control" rows="4">{{ (isset($item) ? $item->description : '' ) }}</textarea>
                </div>
                <div class="form-group">
                  <label for="thumbnailImage">Thumbnail</label>
                  @if (isset($item) && ($item->mainpic != ''))
                    <div class="col-4">
                      <img src="{{ url('') }}/assets/images/products/{{ $item->mainpic }}" class="img-fluid mb-2"/>
                    </div>
                  @endif
                  <input type="file" id="thumbnailImage" name="thumbnailImage" class="form-control">
                </div>
                <div class="form-group">
                  <label for="detailImage">Detail 1</label>
                  @if (isset($item) && ($item->detail1 != ''))
                    <div class="col-4">
                      <img src="{{ url('') }}/assets/images/products/{{ $item->detail1 }}" class="img-fluid mb-2"/>
                    </div>
                  @endif
                  <input type="file" id="detailImage1" name="detailImage1" class="form-control">
                </div>
                <div class="form-group">
                  <label for="detailImage">Detail 2</label>
                  @if (isset($item) && ($item->detail2 != ''))
                    <div class="col-4">
                      <img src="{{ url('') }}/assets/images/products/{{ $item->detail2 }}" class="img-fluid mb-2"/>
                    </div>
                  @endif
                  <input type="file" id="detailImage2" name="detailImage2" class="form-control">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <button type="submit" class="btn btn-success float-right" id="btn-submit">Submit</button>
        </div>
      </div>
    </section>
@endsection
@section('addon-js')
  <!-- jquery-validation -->
  <script src="{{ asset('assets/lte/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('assets/lte/plugins/jquery-validation/additional-methods.min.js') }}"></script>
@endsection
@section('addon-script')
  <script>
    let submitUrl = "{{ route('submit-product') }}"
  </script>
  <script type="text/javascript" src="{{ asset('js/admin/product-manage.js') }}"></script>
@endsection