@extends('layouts.admin')
@section('csscontent')

<!-- <link href="{{ asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet"> -->
<link href="{{ asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/buttons.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/responsive.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/scroller.bootstrap.min.css') }}" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
@endsection
@section('content')
<div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Category</h3>
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


            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Products Table</h2>
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
                        <th>Owner</th>
                        <th>Options</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($products as $item)
                      <tr>
                        <td>{{$item->name_ar}} </td>
                        <td>{{$item->name_tr}} </td>
                        <td>{{$item->name_en}} </td>

                        <td>  {{$item->Owner->name }} </td>
                        <td>
                     <!-- <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal{{$item->id}}"><span class="glyphicon glyphicon-pencil"></span>Edit</button> -->
                     <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal{{$item->id}}"><span class="
glyphicon glyphicon-asterisk"></span> Detalis</button>

                        <a  onclick="approveProduct({{$item->id}})" class="btn btn-success "><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Approve </a>
                        <a  class="btn btn-danger " onclick="deleteJob({{$item->id}})"><span class="glyphicon glyphicon-remove"></span> Delete </a>
                       <!-- <form class="deleteform" action="/delete-product" method="post" style="display: inline-block;">
                       {{ csrf_field() }}
                       <input type="hidden" name="id" value="{{$item->id}}">
                       <button type="submit" class="btn btn-danger delete" name="button"><span class="glyphicon glyphicon-remove"></span> Delete</button>
                        </form> -->
                        </td>


                        <div class="modal fade" id="myModal{{$item->id}}" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Detalis</h4>
                              </div>
                              <div class="modal-body">
                                <div class="col-md-12">
                                  Category : {{$item->Category->name_en}}
                                </div>
                                <div class="col-md-12">
                                  <?php if ($item->Brand): ?>
                                      Brand : {{$item->Brand->name_en}}
                                  <?php endif; ?>

                                </div>
                                <div class="col-md-12">
                                  Type : {{$item->Type['name_en']}}
                                </div>

                                <div class="col-md-12">
                                  Country : {{$item->Country->name_en}}
                                </div>
                                <div class="col-md-12">
                                  Adress : {{$item->adress}}
                                </div>
                                <div class="col-md-12">
                                  Price : {{$item->price}}
                                </div>
                                <div class="col-md-12">
                                  Discount : {{$item->discount}}
                                </div>
                                <div class="col-md-12">
                                  Description ar : {{$item->description_ar}}
                                </div>
                                <div class="col-md-12">
                                  Description tr : {{$item->description_tr}}
                                </div>
                                <div class="col-md-12">
                                  Description EN : {{$item->description_en}}
                                </div>
                                <div class="col-md-12">
                                  View  : {{$item->view}}
                                </div>
                                <div class="col-md-12">
                                  Contact clicked : {{$item->Contact_clicked}}
                                </div>
                                <div class="col-md-12">
                                  Status   : {{$item->status_en}}
                                </div>
                                <div class="col-md-12">
                                  Shipping   : {{$item->shipping}}
                                </div>
                                <div class="col-md-12">
                                  Negotiable   : {{$item->negotiable}}
                                </div>
                                <div class="col-md-12">
                                Urgently Kind	 : {{$item->urgently_kind	}}
                                </div>
                                <div class="col-md-12">
                                Technical Condition	 : {{$item->Technical_condition_en	}}
                                </div>
                                <div class="col-md-12">
                                image : {{$item->image	}}
                                </div>
                                <div class="col-md-12">
                                Expiry date : {{$item->expiry_date	}}
                                </div>
                                <div class="col-md-12">
                                is active : {{$item->is_active	}}
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

 {{ $products->links() }}
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
       <!-- <script src="{{ asset('js/responsive.bootstrap.min.js') }}"></script> -->
       <script src="{{ asset('js/dataTables.scroller.min.js') }}"></script>
       <script src="{{ asset('js/jszip.min.js') }}"></script>
       <script src="{{ asset('js/pdfmake.min.js') }}"></script>
       <!-- <script src="{{ asset('js/vfs_fonts.min.js') }}"></script> -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

       <script type="text/javascript">

        function  deleteJob(id){

         $.confirm({
             title: 'confirm delete',
             content: 'Are you sure ?',
             buttons: {
                 confirm: function () {
                   $.get( "/delete-product/"+id, function( data ) {
                     console.log('test');

                   if (data.success) {
                     $.alert( data.success );
                   }
                   if (data.failed) {
                     $.alert( data.failed );
                   }
                   location.reload();
                 });

                 },
                 cancel: function () {
                     $.alert('Canceled');
                   }

             }
         });
       }
       function  approveProduct(id){

        $.confirm({
            title: 'confirm approv',
            content: 'Are you sure ?',
            buttons: {
                confirm: function () {
                  $.get( "/approv-product/"+id, function( data ) {
                    console.log('test');

                  if (data.success) {
                    $.alert( data.success );
                  }
                  if (data.failed) {
                    $.alert( data.failed );
                  }
                  location.reload();
                });

                },
                cancel: function () {
                    $.alert('Canceled');
                  }

            }
        });
      }

       </script>
           @endsection
