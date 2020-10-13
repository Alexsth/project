
@extends('layouts.main')

@section('custom_js')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
@endsection

@section('content')
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Update Product  </h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              {{-- <li><a class="dropdown-item" href="#">Settings 1</a>
              </li>
              <li><a class="dropdown-item" href="#">Settings 2</a>
              </li> --}}
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br>
      <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method="POST"  enctype="multipart/form-data" action="{{route('products.update',$product->id)}}">
        @csrf
        @method('PUT')

        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Category<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">

            <select class="form-control js-example-basic-multiple" name="categories[]" multiple="multiple" required="required">
                @foreach ($productCategory as $procat)
                <option value="{{$procat->id}}" @if (in_array($procat->id, $selectedProductCategory)) selected @endif >{{$procat->title}}</option>
                @endforeach
            </select>
            </div>
          </div>

        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" >Title
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" value="{{$product->title}}" id="title" name="title" required="required" class="form-control ">
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Intro Description<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" value="{{$product->intro_desc}}" id="intro_desc" name="intro_desc" required="required" class="form-control ">
            </div>
          </div>



          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Description<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
                <textarea id="description"  required="required" class="form-control" name="description" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10">{{$product->description}}
                </textarea>


            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" >Price
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" value="{{$product->price}}" id="price" name="price" required="required" class="form-control ">
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" >Discount
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="number" value="{{$product->discount}}" id="discount" name="discount" required="required" class="form-control ">
            </div>
          </div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Add Feature Image</label>
            <div class="col-md-6 col-sm-6 ">
                <input type="file" id="feature_image" name="feature_image" accept="image/*" class="form-control ">
            </div>
        </div>
        <div style="width: 150px; margin: 0 auto">
            <img src="/images/product/{{$product->feature_image}}" alt="" style="width: 100%; padding:10px" >
        </div>
        <div style="clear: both"></div>

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Meta Title <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
                <input type="text" value="{{$product->meta_title}}" id="meta_title" name="meta_title" required="required" class="form-control ">
            </div>
        </div>

        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Meta Description <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
                <input type="text" value="{{$product->meta_description}}" id="meta_description" name="meta_description" required="required" class="form-control ">
            </div>
        </div>

        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Meta Keywords <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
                <input type="text" value="{{$product->meta_keywords}}" id="meta_keywords" name="meta_keywords" required="required" class="form-control ">
            </div>
        </div>

          <div class="ln_solid"></div>
          <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
              <button class="btn btn-primary" type="button">Cancel</button>
              <button class="btn btn-primary" type="reset">Reset</button>
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
@endsection

