@extends('layouts.main')

@section('content')
<style media="screen">
  .m-b-10{
    margin-bottom: 10px;
  }
  .m-b-20{
      margin-bottom: 20px;
  }
</style>
<section class="Section">
  <div class="container bootstrap snippet">

      <div class="row">
        <div class="col-lg text-center m-b-20">

          <h2>Editing your ad to be in three languages brings you more views</h2>
        </div>
    		<div class="col-sm-3 left-col"><!--left col-->


        <div class="text-center">

             <div class="" style="center;position: relative">
                <img src="  <?php if (is_null(auth()->user()->image)): ?>{{asset('images\user.jpg')}}<?php else: ?>{{asset(auth()->user()->image)}}  <?php endif; ?>" class="avatar img-circle img-thumbnail" alt="avatar" id="preview_image" >
                <i id="loading" class="fa fa-spinner fa-spin fa-3x fa-fw" style="position: absolute;left: 40%;top: 40%;display: none"></i>
             </div>

             <p>
    <a href="javascript:changeProfile()"  style="text-decoration: none;">
        <i class="glyphicon glyphicon-edit"></i> Change
    </a>&nbsp;&nbsp;
    <!-- <a href="javascript:removeFile()" style="color: red;text-decoration: none;">
        <i class="glyphicon glyphicon-trash"></i>
        Remove
    </a> -->
</p>
  <form method="post" id="upload_form" enctype="multipart/form-data">
<input type="file" id="file" style="display: none"/>
   <input type="hidden" id="file_name" />
     </form>
<div class="">
            <h2 class="name">{{auth()->user()->name}}</h2>
</div>
          <!-- <label class="btn-bs-file btn btn-lg btn-default">
             Browse
               <input type="file" class=" ">
         </label> -->

         <p>To change your image click Browse</p>
        </div></hr><br>


            <div class="panel panel-default">
              <div class="panel-heading">Email <i class="fa fa-link fa-1x"></i></div>
              <div class="panel-body">{{auth()->user()->email}}  </div>
            </div>


            <ul class="list-group">
              <li class="list-group-item text-muted">Phone  <i class="fa fa-phone" aria-hidden="true"></i></li>
              <li class="list-group-item text-right"><span class="pull-left"><strong>{{auth()->user()->phone}}</strong></span><i class="fa fa-check-circle" aria-hidden="true"></i> </li>
              <li class="list-group-item text-muted">Rate      <i class="fa fa-star" aria-hidden="true"></i></li>
              <li class="list-group-item text-right">
                <span class="pull-left"><strong>  <?php $rate= auth()->user()->rating ?> </strong></span>
                 <?php for ($i =0 ; $rate >0 ;$i++){ ?>
                       <i class="fa fa-star" aria-hidden="true"></i>
                 <?php } ?>
                 <?php if ($rate == 0 ): ?>
                <span class="pull-left"><strong>  no one rated you</strong></span> .
                 <?php endif; ?>
              </li>
              <li class="list-group-item text-muted">Points  <i class="fa fa-phone" aria-hidden="true"></i></li>
              <li class="list-group-item text-right"><span class="pull-left"><strong>{{auth()->user()->points}}</strong></span><i class="fa fa-check-circle" aria-hidden="true"></i> </li>

            </ul>



          </div><!--/col-3-->
      	<div class="col-sm-9">
              <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#Active">Active Ads</a></li>
                  <li><a data-toggle="tab" href="#Pending">Pending Ads</a></li>
                  <li><a data-toggle="tab" href="#Archived">Archived  Ads</a></li>
                </ul>


            <div class="tab-content">
              <div class="tab-pane active" id="Active">
                  <hr>
                  <?php foreach ($activeProducts as $key => $value): ?>



                    <div class="col-md-4 m-b-10">
                      <div class="card mb">
                        <span>{{$value->price}} $</span>
                        <div class="cardImage" style="background-image: url({{asset($value->image)}}); height: 150px"></div>
                        <div class="card-body mb">

                          <h5 class="card-title">  <span> {{$value->TextTrans('name')}}</span> </h5>


                          <p class="card-text">{{$value->TextTrans('description')}}</p>
                          <a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a> <a href="/Edit-Advertising/{{$value->id}}" class="btn btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>

                  <?php endforeach; ?>


               </div><!--/tab-pane-->
               <div class="tab-pane" id="Pending">



                 <hr>
                 <?php foreach ($pendingProducts as $key => $value): ?>



                   <div class="col-md-4 m-b-10">
                     <div class="card mb">
                       <span>{{$value->price}} $</span>
                       <div class="cardImage" style="background-image: url({{asset($value->image)}}); height: 150px"></div>
                       <div class="card-body mb">

                         <h5 class="card-title">  <span> {{$value->TextTrans('name')}}</span> </h5>


                         <p class="card-text">{{$value->TextTrans('description')}}</p>
                         <a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a> <a href="/Edit-Advertising/{{$value->id}}" class="btn btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                       </div>
                     </div>
                   </div>

                 <?php endforeach; ?>
               </div><!--/tab-pane-->
               <div class="tab-pane" id="Archived">
                    <hr>

                    <?php foreach ($archivedProducts as $key => $value): ?>



                      <div class="col-md-4 m-b-10">
                        <div class="card mb">
                          <span>{{$value->price}} $</span>
                          <div class="cardImage" style="background-image: url({{asset($value->image)}}); height: 150px"></div>
                          <div class="card-body mb">

                            <h5 class="card-title">  <span> {{$value->TextTrans('name')}}</span> </h5>


                            <p class="card-text">{{$value->TextTrans('description')}}</p>
                            <a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a> <a href="/Edit-Advertising/{{$value->id}}" class="btn btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                          </div>
                        </div>
                      </div>

                    <?php endforeach; ?>

                </div>

                </div><!--/tab-pane-->
            </div><!--/tab-content-->

          </div><!--/col-9-->
      </div><!--/row-->
</section>

@endsection
@section('js')
<script type="text/javascript">


    function upload(img) {

      console.log(img);
        var form = $('#upload_form')[0];
        var form_data = new FormData();
        form_data.append('file', img.files[0]);
        form_data.append('_token', '{{csrf_token()}}');
        console.log(form_data);
        $('#loading').css('display', 'block');
        var url="{{url('ajax-image-upload')}}";
        console.log('ss');
        $.ajax({
           type: "POST",
           url: url,
           data:  form_data ,
           contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
           processData: false, // NEEDED, DON'T OMIT THIS
           enctype: 'multipart/form-data',
           cache: false,
               success: function (data) {
                   if (data.fail) {
                       $('#preview_image').attr('src', '{{asset('images\user.jpg')}}');
                       alert(data.errors['file']);
                   }
                   else {
                     $('#file_name').val(data);
                     $('#preview_image').attr('src', '{{asset('upload/users')}}/' + data);
                    $('#loading').css('display', 'none');
                   }



               }
               // error: function (xhr, status, error) {
               //     alert(xhr.responseText);
               //     $('#preview_image').attr('src', '{{asset('images\user.jpg')}}');
               // }

         });
        // $.ajax({
        //   url: "{{url('ajax-image-upload')}}",
        //   data: form_data,
        //    type: 'POST',
        //     success: function (data) {
        //        $('#loading').css('display', 'none');
        //     }
        //   });
        // $.ajax({
        //     url: "{{url('ajax-image-upload')}}",
        //     data: form_data,
        //     type: 'POST',
        //     contentType: false,
        //     processData: false,
        //     success: function (data) {
        //         if (data.fail) {
        //             $('#preview_image').attr('src', '{{asset('images\user.jpg')}}');
        //             alert(data.errors['file']);
        //         }
        //         else {
        //             $('#file_name').val(data);
        //             $('#preview_image').attr('src', '{{asset('uploads')}}/' + data);
        //         }
        //         $('#loading').css('display', 'none');
        //     },
        //     error: function (xhr, status, error) {
        //         alert(xhr.responseText);
        //         $('#preview_image').attr('src', '{{asset('images\user.jpg')}}');
        //     }
        // });
    }
</script>

<script type="text/javascript">
function changeProfile() {
    $('#file').click();
}

$('#file').change(function () {
    if ($(this).val() != '') {
      console.log('ddd');
        upload(this);

    }
});
</script>


<script type="text/javascript">


    function removeFile() {
        if ($('#file_name').val() != '')
            if (confirm('Are you sure want to remove profile picture?')) {
                $('#loading').css('display', 'block');
                var form_data = new FormData();
                form_data.append('_method', 'DELETE');
                form_data.append('_token', '{{csrf_token()}}');
                $.ajax({
                    url: "ajax-remove-image/" + $('#file_name').val(),
                    data: form_data,
                    type: 'POST',
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        $('#preview_image').attr('src', '{{asset('images\user.jpg')}}');
                        $('#file_name').val('');
                        $('#loading').css('display', 'none');
                    },
                    error: function (xhr, status, error) {
                        alert(xhr.responseText);
                    }
                });
            }
    }
</script>
@endsection
