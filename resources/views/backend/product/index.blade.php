@extends('layouts.main')

@section('content')
<div class="x_panel">
    <div class="x_title">
      <h2>Product</h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>

        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="row">
            <div class="col-sm-12">
              <div class="card-box table-responsive">

                <a href="{{route('products.create')}}"
                class="btn btn-success"> Add Products</a>
                <a href="{{route('products.excelExport')}}"
                class="btn btn-success"> Export Excel</a>

                <a href="{{route('products.PDFExport')}}"
                class="btn btn-success"> Export PDF</a>

      {{-- <div id="datatable-fixed-header_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="datatable-fixed-header_length"><label>Show <select name="datatable-fixed-header_length" aria-controls="datatable-fixed-header" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="datatable-fixed-header_filter" class="dataTables_filter">
          <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable-fixed-header">
        </label>
    </div>
</div>
</div> --}}
        <div class="row">
              <div class="col-sm-12">
                <table id="datatable-fixed-header" class="table table-striped table-bordered dataTable no-footer" style="width:100%" role="grid" aria-describedby="datatable-fixed-header_info">
                <thead>
                    <tr role="row">
                        <form method="get" action="" class="form">
                            <div class="col-md-4">
                            <label>From Price
                            <input type="text" name="from" value="{{Request::get('from')}}" class="form-control">

                        </label>
                        </div>
                            <div class="col-md-4">
                            <label>To Price
                            <input type="text" name="to" value="{{Request::get('to')}}" class="form-control">
                        </label>
                            </div>

                            <div class="col-md-4">
                            <button class="btn btn-medium btn-success" type="submit">Submit </button>
                            </div>
                        </form>
                        <th class="sorting_asc" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 146px;">Title</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 239px;">Price</th>
                        <th class="sorting" tabindex="0" aria-controls="datatable-fixed-header" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 239px;">Intro desc</th>
                    </tr>
        </thead>



        <tbody>
            @foreach ($product as $procat)


        <tr role="row">
            <td>{{$procat->title}} </td>
            <td>{{$procat->price }}</td>
            <td>{{$procat->intro_desc}}</td>
            <td>
                <a class="btn btn-app" href="{{route('products.edit', $procat->id)}}">
                    <i class="fa fa-edit" ></i> Edit
                  </a>

                  <form method="POST" action="{{route('products.destroy', $procat->id)}}">
                  @csrf
                  @method('DELETE')
                    <button class="btn btn-app" >
                    <i class="fa fa-warning"></i> Delete
                    </button >
                  </form>
                  <a class="btn btn-app" href="{{route('products.image', $procat->id)}}">
                    <i class="fa fa-edit" ></i> Add Image
                  </a>

            </td>


          </tr>
          @endforeach
        </tbody>
      </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="datatable-fixed-header_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="datatable-fixed-header_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="datatable-fixed-header_previous"><a href="#" aria-controls="datatable-fixed-header" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="datatable-fixed-header" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="datatable-fixed-header" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="datatable-fixed-header" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="datatable-fixed-header" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="datatable-fixed-header" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="datatable-fixed-header" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="datatable-fixed-header_next"><a href="#" aria-controls="datatable-fixed-header" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
    </div>
  </div>
</div>
</div>
  </div>
@endsection
