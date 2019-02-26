@extends('layouts.main')

@section('content')
<style>
#middlead_display
{
	float:left;
	margin:30px;
	margin-left:130px;
	width:336px;
	height:280px;
}
#second_middlead_display
{
	float:left;
	margin:30px;
	width:336px;
	height:280px;
}
#image_preview img
{
	margin:10px;
	width:200px;
	height:150px;
}
span{
  font-size:15px;
}
.box-part a{
text-decoration:none;
color: #0062cc;
border-bottom:2px solid #0062cc;
}
.box{
  padding:60px 0px;
}

.box-part{
  background:#F3F3F3;
  border-radius:0;
  padding:60px 10px;

}
.active .box-part{
  background: #99D684;
}
.text{
  margin:20px 0px;
}

.fa{
   color:#4183D7;
}
.cardButton{
  padding: 0;
  width:90%
}

.marginLeft{
  margin-left: 18.666667%;

}
.logDiv{
  position: absolute;
  height: 100%;
  width: 100%;
  z-index: 10000;
  background: rgba(0, 0, 0, 0.5);
  top: 0;
}

.log{
  position: fixed;
  left: 35%;
  right: 0;
  top: 35%;
  margin: 0;
  padding: 20px;
  width: 40%;
  background: #fff;
  text-align: center;

}
html{
  position: relative;
}
.titleLog{
  padding: 10px 0 40px;
}
.btnLog{
  background: #49e018;
color: #fff;
padding: 8px 12px;
}
@media (max-width: 768px) {

  .log{
    left: 28%;
    width: 50%;
  }

}
</style>
@guest
<style media="screen">
  body{
    overflow: hidden;
  }
</style>
<section>
  <div class="logDiv">

            <div class=" log">
              <div class="titleLog">
                <h2>you must login first  </h2>
              </div>

              <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                  {{ csrf_field() }}
              <div class="log-input  {{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="log-input-left">
                  <input id="email" type="email" class="user" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">

                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>

                <div class="clearfix"> </div>
              </div>
              <div class="log-input {{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="log-input-left">
                  <input id="password" type="password" class="lock" name="password" required placeholder="password">

                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>

                <div class="clearfix"> </div>
              </div>
              <input type="hidden" name="next" value="/New-Advertising">
              <input type="submit" class="btn btn-primary btnLog"  value="Log in">
            </form>

            <span  > <a href="/register">create new account</a> </span>
        </div>
  </div>
</section>


@endguest
<section class="Section">
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="submit-ad main-grid-border">
  <div class="container">
    <h2 class="head">Add New Advertising</h2>
    <div class="post-ad-form">
      <form   method="post" action="/New-Advertising"  enctype="multipart/form-data">

          {{ csrf_field() }}
        <label>Select Category <span>*</span></label>
        <select class="Category" name="category_id" required>
          <option value="0" selected="true" disabled="disabled" >Select Category </option>
          <?php foreach ($Categories as $key => $value): ?>
              <option value="{{$value->id}}">{{$value->name_en}}</option>
          <?php endforeach; ?>


        </select>
        <div class="options">



        </div>
          <div class="clearfix"></div>
        <label>Select Country <span>*</span></label>
        <select class=" " name="country_id" required>
          <option value="0" selected="true" disabled="disabled" >Select Country </option>
          <?php foreach ($Country as $key => $value): ?>
              <option value="{{$value->id}}">{{$value->name_en}}</option>
          <?php endforeach; ?>
            </select>
        <div class="clearfix"></div>
        <label> Title <span>*</span></label>
        <input type="text" class="name" name="name" value="{{old('name')}}" placeholder="">
        <div class="clearfix"></div>
        <label> Description <span>*</span></label>
        <textarea class="mess" placeholder="Write few lines about your product" name="description">
					{{old('description')}}
				</textarea>
        <div class="clearfix"></div>
        <label> Adress <span>*</span></label>
        <input type="text" class="name" name="adress" value="{{old('adress')}}" placeholder="Your Adress">
        <div class="clearfix"></div>
        <label> Price <span>*</span></label>
        <input type="text" class="name" name="price" value="{{old('price')}}" placeholder="price">
        <div class="clearfix"></div>


  <div class="clearfix"></div>
          <div class="row" style="    margin-bottom: 15px;">

     			    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12  marginLeft">
                <button type="button" name="button" class="cardButton btn-radio active">
     					<div class="box-part text-center"  >

                        <i class="fa fa-star" aria-hidden="true"></i>

     						<div class="title">
     							<h4>Normal</h4>
     						</div>

     						<div class="text">
     							<span>Free</span>
     						</div>

     						<a href="#Normal" data-toggle="modal" data-target="#Normal">Learn More</a>


     					 </div>
               </button>
               <input type="checkbox" id="left-item" class="hidden" name="urgently_kind" value="0" checked="true">
     				</div>
            <!--  -->
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <button type="button" name="button" class="cardButton btn-radio">
            <div class="box-part text-center"  >

                          <div class="">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                          </div>

              <div class="title">
                <h4>Featured</h4>
              </div>

              <div class="text">
                <span>5 points for 1 day</span>
              </div>

              <a href="Featured" data-toggle="modal" data-target="#Featured">Learn More</a>

             </div>
             </button>
              <input type="checkbox" id="left-item" class="hidden" name="urgently_kind" value="5">
          </div>
          <!--  -->
          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
              <button type="button" name="button" class="cardButton btn-radio">
          <div class="box-part text-center" >

                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>

            <div class="title">
              <h4>Urgent</h4>
            </div>

            <div class="text">
              <span>7 pints for 1 day.</span>
            </div>

            <a href="#Urgent" data-toggle="modal" data-target="#Urgent">Learn More</a>

           </div>
           </button>
           <input type="checkbox" id="left-item" class="hidden" name="urgently_kind" value="7">
        </div>
          </div>
      <div class="clearfix"></div>
        <label class="checkbox-inline">Negotiable price  </label>
        <div class="switch-field">

          <input type="radio" id="negotiable_left" name="negotiable" value="yes" />
          <label for="negotiable_left" style="margin-right:0">Yes</label>
          <input type="radio" id="negotiable_right" name="negotiable" value="no" checked />
          <label for="negotiable_right">No</label>
        </div>


        <label class="checkbox-inline">Status</label>
        <div class="switch-field">

          <input type="radio" id="switch_left" name="status" value="yes" />
          <label for="switch_left" style="margin-right:0">Applied</label>
          <input type="radio" id="switch_right" name="status" value="no" checked/>
          <label for="switch_right">New</label>
        </div>
        <div class="clearfix"></div>
        <label> expiry date <span>*</span></label>
        <input type="date" class="date" id="expiry_date" name="expiry_date" placeholder="" onchange="check()">

        <div class="clearfix"></div>
        <label for=" " style="margin-right:0">main Images</label>
        <input type="file" id="upload_file" name="image"  required style="padding-left: 40px;padding-top: 12px;"/>
        <div class="clearfix"></div>

        <div class="clearfix"></div>
        <label for=" " style="margin-right:0">other Images</label>
       <input type="file" id="upload_file" name="upload_file[]" onchange="preview_image();" multiple style="padding-left: 40px;padding-top: 12px;"/>
       <div class="clearfix"></div>
       <div id="image_preview"></div>



                <div class="clearfix"></div>
                @auth
                <input type="submit" name="" value="Post"  class="mb">
                @endauth
          <div class="clearfix"></div>
        </form>
          </div>
        <div class="clearfix"></div>

      </div>

    </div>
  </div>
</div>
</section>
<!-- Urgent -->
<div id="Urgent" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Urgent</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Featured -->
<div id="Featured" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Featured</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Normal -->
<div id="Normal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Normal</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection

@section('js')
<script type="text/javascript">

$(function () {
  $('.btn-radio').click(function(e) {

      $('.btn-radio').not(this).removeClass('active')
      .siblings('input').prop('checked',false)
          .siblings('.img-radio').css('opacity','0.5');
    $(this).addClass('active')
          .siblings('input').prop('checked',true)
      .siblings('.img-radio').css('opacity','1');
      check();
  });
});
</script>

<script>


function preview_image()
{
 var total_file=document.getElementById("upload_file").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'> ");
 }
}
</script>

  <script type="text/javascript">
  $('.Category').on('change', function (e) {
      var id=this.value;
    $.ajax({
      type:'get',
        url: "/selectBrand/"+id,

        beforeSend: function()
        {

          $(".options").html('');
         // $('.ajax-loading').show();
        },
        success: function(data) {
          $(".options").html('');
          $(".options").html(data.selectBrand);
          // alert(data.selectBrand);
          // $(".Brand").trigger("liszt:updated");

        }
    });
});
function AddType() {

 var brandId = document.getElementById("Brand").value;
  var categoryId= $( ".Category option:selected" ).val();
  $.ajax({
    type:'get',
      url: "/selectType/"+brandId+'/'+categoryId,

      beforeSend: function()
      {

        $(".type").html('');
       // $('.ajax-loading').show();
      },
      success: function(data) {
        $(".type").html('');
        $(".type").html(data.selectType);
        // alert(data.selectBrand);
      }
  });
}

  </script>
  <script type="text/javascript">
    function check() {
        if (jQuery('#expiry_date').val()) {
          $.ajaxSetup({
                     headers: {
                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     }
                 });
                  jQuery.ajax({
                     url: "{{ url('/check-point') }}",
                     method: 'post',
                     data: {
                        date: jQuery('#expiry_date').val(),
                        urgently_kind: jQuery("input[name='urgently_kind']:checked").val(),
                        token:$('meta[name="csrf-token"]').attr('content')
                     },
                     success: function(result){
                       $.alert({

                           content: result.message,
                       });

                     }});
        }

    }
  //   $("#left-item").change(function() {
  //   if(this.checked) {
  //       check();
  //   }
  // });
  </script>
@endsection
