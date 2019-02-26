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

          </div>
          <div class="title_right">
                   <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                     <div class="input-group-btn">



                     </div>
                   </div>
                 </div>
               </div>
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
               <form class="form-horizontal form-label-left" action="\add-Type" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Type Name EN<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="name" name="name_en" required="required" class="form-control col-md-7 col-xs-12">
          </div>
          </div>
          <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Type Name AR<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="name" name="name_ar" required="required" class="form-control col-md-7 col-xs-12">
          </div>
          </div>

          <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Type Name TR<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="name" name="name_tr" required="required" class="form-control col-md-7 col-xs-12">
          </div>
          </div>

          <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Brand<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
          <select name="brand_id"   class="selectpicker form-control col-md-7 col-xs-12"    data-live-search="true" title="Select a Category"  >
             @foreach($brands as $item)
             <option value="{{$item->id}}">{{$item->name_en}}</option>
             @endforeach
          </select>
          </div>
          </div>

          <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Category<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
          <select name="category_id"   class="selectpicker form-control col-md-7 col-xs-12"    data-live-search="true" title="Select a Category"  >
             @foreach($categories as $item)
             <option value="{{$item->id}}">{{$item->name_en}}</option>
             @endforeach
          </select>
          </div>
          </div>


          <div class="form-group  ">
          <input type="submit" name="submit" value="submit" class="btn btn-primary col-md-6 col-md-offset-3 col-xs-12">
          </div>
               </form>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Type Table</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>

                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <!-- <p class="text-muted font-13 m-b-30">
                    Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
                  </p> -->

                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Name AR</th>
                        <th>Name TR</th>
                        <th>Name EN</th>

                        <th>Options</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($Type as $item)
                      <tr>
                        <td>{{$item->name_ar}} </td>
                        <td>{{$item->name_tr}} </td>
                        <td>{{$item->name_en}} </td>


                        <td>
                     <button type="button" class="btn btn-black " data-toggle="modal" data-target="#myModal{{$item->id}}">  Details</button>
                     <a href="/edit-Type/{{$item->id}}" class="btn btn-info "><span class="glyphicon glyphicon-pencil"></span> Edit </a>

                       <form class="deleteform" action="\delete-Type" method="post" style="display: inline-block;">
                       {{ csrf_field() }}
                       <input type="hidden" name="id" value="{{$item->id}}">
                       <button type="submit" class="btn btn-danger delete" name="button"><span class="glyphicon glyphicon-remove"></span> Delete</button>
                     </form>
                        </td>


                        <div class="modal fade" id="myModal{{$item->id}}" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit</h4>
                              </div>
                              <div class="modal-body">
                                <div class="col-md-12">

                                   <div class="row">
                                     Brand : {{$item->Brand->name_en}}


                                   </div>
                                   <hr>
                                   <div class="row">
                                    Ctegory  : {{$item->Category->name_en}}


                                   </div>

                                </div>


                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
                              </div>
                            </div>

                          </div>
                        </div>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>



                </div>
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
        document.querySelector('.deleteform').addEventListener('submit', function(e) {
          var form = this;
          e.preventDefault();
          swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false
          }).then(function () {
            form.submit();
          },function (dismiss) {
            // dismiss can be 'cancel', 'overlay',
            // 'close', and 'timer'
            if (dismiss === 'cancel') {
              swal(
                'Cancelled',
                'Your imaginary file is safe :)',
                'error'
              )
            }
          });
        });
        </script>
           @endsection
