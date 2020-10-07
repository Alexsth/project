@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2> Add Category Image</h2>
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
                <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method="POST" enctype="multipart/form-data" action="{{route('categories.storeImg')}}">
                    @csrf
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Image  Upload<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="file" name="img" id="image" accept="image/*" required="required"/>
                        </div>
                        <input type="hidden" name="catId" value="{{$id}}">
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
                        <img src="/images/{{$img->image}}" alt="" style="width: 100%; padding:10px" >
                        <form method="POST" action="{{route('categories.destroyImg', $img->id)}}">
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
