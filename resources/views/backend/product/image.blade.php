@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2> Add Product Image</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br>
                <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method="POST" enctype="multipart/form-data" action="{{route('products.storeImg')}}">
                    @csrf
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Image  Upload<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="file" name="img" id="image" accept="image/*" required="required"/>
                        </div>
                        <input type="hidden" name="proId" value="{{ $id }}">
                      </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="item form-group" style="clear: both">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <button class="btn btn-primary" type="button">Cancel</button>
                            <button class="btn btn-primary" type="reset">Reset</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>

                <div class="col-md-12">
                    @foreach ($images as $img )
                    <div class="col-md-3">
                        <img src="/images/product/{{$img->product_img}}" alt="" style="width: 100%; padding:10px" >
                        <form method="POST" action="{{route('products.deleteImg', $img->id)}}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-small btn-danger btn-remove">Remove</button>
                        </form>

                    </div>

                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
<style>
    .btn-remove{
        display: block;
        margin: 5px auto;
    }
</style>
@endsection
