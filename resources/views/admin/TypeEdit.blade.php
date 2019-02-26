@extends('layouts.admin')
@section('csscontent')

<!-- <link href="{{ asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet"> -->
<link href="{{ asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/buttons.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/responsive.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/scroller.bootstrap.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Type</h3>
            </div>
<style media="screen">
form:after{
   display: inline;
 }
</style>


          <div class="clearfix"></div>

          <div class="row">




            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="col-md-12">
              <form class="form-horizontal form-label-left" action="\update-Type\{{$type->id}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Brand  AR<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="name" name="name_ar" value="{{$type->name_ar}}" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Brand  TR<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="name" name="name_tr" value="{{$type->name_tr}}" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Brand  EN<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="name" name="name_en" value="{{$type->name_en}}" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Brand<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                   <select name="brand_id"   class="selectpicker form-control col-md-7 col-xs-12"    data-live-search="true" title="Select a Category"  >
                      @foreach($brands as $item)
                      <option value="{{$item->id}}" <?php if ($item->id == $type->brand_id ): ?> selected <?php endif; ?> >{{$item->name_en}}</option>
                      @endforeach
                   </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Category<span class="required">*</span>
                </label>

                <div class="col-md-6 col-sm-6 col-xs-12">
                   <select name="category_id" multiple class="selectpicker form-control col-md-7 col-xs-12"    data-live-search="true" title="Select a Category"  >
                      @foreach($categories as $item)
                      <option value="{{$item->id}}" <?php if ($item->id == $type->category_id ): ?> selected <?php endif; ?>>{{$item->name_en}}</option>
                      @endforeach
                   </select>
                </div>
              </div>



                  <div class="form-group">
                <input type="submit" name="submit" value="submit" class="btn btn-primary col-md-6 col-md-offset-3 col-xs-12">
              </div>
              </form>
            </div>
          </div>
        </div>

  </div>

      </div>
      <!-- /page content -->







       <!-- /page content -->

       @endsection

@section('jscontent')

       <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
       <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
       <script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
       <script src="{{ asset('js/buttons.bootstrap.min.js') }}"></script>
       <script src="{{ asset('js/buttons.flash.min.js') }}"></script>
       <script src="{{ asset('js/buttons.html5.min.js') }}"></script>
       <script src="{{ asset('js/buttons.print.min.js') }}"></script>
       <script src="{{ asset('js/dataTables.fixedHeader.min.js') }}"></script>
       <script src="{{ asset('js/dataTables.keyTable.min.js') }}"></script>
       <script src="{{ asset('js/dataTables.responsive.min.js') }}"></script>
       <script src="{{ asset('js/responsive.bootstrap.min.js') }}"></script>
       <script src="{{ asset('js/dataTables.scroller.min.js') }}"></script>
       <script src="{{ asset('js/jszip.min.js') }}"></script>
       <script src="{{ asset('js/pdfmake.min.js') }}"></script>
       <script src="{{ asset('js/vfs_fonts.min.js') }}"></script>
<script type="text/javascript">
$('#basic2').selectpicker({
liveSearch: true,
maxOptions: 1
});
</script>
           @endsection
