<!DOCTYPE html>

<html lang="ar" >
<!-- begin::Head -->
<head>
	<meta charset="utf-8" />

	<title>Bus Booking System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">


	<!--begin::Web font -->
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Montserrat:300,400,500,600,700","Roboto:300,400,500,600,700"]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<!--end::Web font -->

	<!--begin::Base Styles -->



	<link href="{{asset('public/backend/assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />

	<link href="{{asset('public/backend/assets/vendors/base/bootstrap-multiselect.css')}}" rel="stylesheet" type="text/css" />

	<link href="{{asset('public/backend/assets/demo/demo3/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.min.css" rel="stylesheet"/>

	<!--end::Base Styles -->

	<link rel="shortcut icon" href="{{asset('public/front/imgs/logo.png')}}" />



	<style>
		.m-timeline-1__item{
			margin-top: 5px;
		}
		#msgBox{
			color: red;
		}
		.select_multi_options .btn-group
		{
			display: block !important;
			width: 100%;
		}
		.select_multi_options .btn-group>.btn:first-child
		{
			display: block !important;
			width: 100%;
        }
        .m-checkbox-inline .m-checkbox, .m-checkbox-inline .m-radio, .m-radio-inline .m-checkbox, .m-radio-inline .m-radio {
            display: inline-block;
            margin-left: 20px;
            margin-bottom: 20px;
        }
        .m-checkbox>span, .m-radio>span {
            border-radius: 3px;
            background: 100% 0;
            position: absolute;
            top: 1px;
            right: 0;
            height: 20px;
            width: 20px;
        }
        .m-checkbox>span:after {
            top: 50%;
            right: 50%;
            margin-right: -6px;
            margin-top: -4px;
            width: 13px;
            height: 7px;
            border-width: 0 0 2px 2px!important;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }
        audio, video {
            max-width: 100% !important;
        }
        .m-timeline-1 .m-timeline-1__items .m-timeline-1__item .m-timeline-1__item-content .media>img {
            width: 50px;
            height: 50px;
            border-radius: 150px;
        }
		.custom-file-input2 {
			color: transparent;
		}
		.custom-file-input2::-webkit-file-upload-button {
			visibility: hidden;
		}
		.custom-file-input2::before {
			content: 'Upload File(s)';
			color: black;
			display: inline-block;
			background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
			border: 1px solid #999;
			border-radius: 3px;
			padding: 5px 8px;
			outline: none;
			white-space: nowrap;
			-webkit-user-select: none;
			cursor: pointer;
			text-shadow: 1px 1px #fff;
			font-weight: 700;
			font-size: 10pt;
		}
		.custom-file-input2:hover::before {
			border-color: black;
		}
		.custom-file-input2:active {
			outline: 0;
		}
		.custom-file-input2:active::before {
			background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9); 
		}
		.m-checkbox>span:after{
			left: 29%;
		}
		.ck-editor__editable {
 		   min-height: 250px !important;
		}

	</style>
</head>
<!-- end::Head -->


<!-- begin::Body -->
<body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >



	<!-- begin:: Page -->
	<div class="m-grid m-grid--hor m-grid--root m-page">


		<!-- BEGIN: Header -->
			@include('admin.templates.header')
		<!-- END: Header -->

			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close m-aside-left-close--skin-dark" id="m_aside_left_close_btn"><i class="la la-close"></i></button>

				@include('admin.templates.side_nav')

				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">

					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator"></h3>
							</div>
						</div>
					</div>

					<!-- END: Subheader -->
					<div class="m-content">
						@yield('content')
					</div>
				</div>


			</div>
			<!-- end:: Body -->


		@include('admin.templates.footer')


		</div>
		<!-- end:: Page -->


		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>
		<!-- end::Scroll Top -->

		<!--begin::Base Scripts -->
		<script src="{{asset('public/backend/assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
		<script src="{{asset('public/backend/assets/demo/demo3/base/scripts.bundle.js')}}" type="text/javascript"></script>
		<!--end::Base Scripts -->



        {{-- <script src="{{asset('public/backend/default/assets/demo/default/custom/crud/forms/widgets/bootstrap-datepicker.js')}}" type="text/javascript"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.min.js"></script>
		<script src="{{asset('public/backend/assets/demo/default/custom/components/base/sweetalert2.js')}}" type="text/javascript"></script>

		<script src="{{asset('public/backend/assets/demo/default/custom/components/base/bootstrap-multiselect.js')}}" type="text/javascript"></script>


		<script type="text/javascript"> base_url = "{{url('admin')}}"; </script>

		<!--begin::Page Snippets -->
		<script src="{{asset('public/backend/assets/app/js/dashboard.js')}}" type="text/javascript"></script>
		<script src="{{asset('public/backend/SimpleAjaxUploader.min.js')}}" type="text/javascript"></script>
		<!--end::Page Snippets -->
		<script src="{{asset('public/frontend/assets/js/plugins/imageuploadify.min.js')}}"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/additional-methods.js"></script>
		<script type="text/javascript" src="{{asset('public/frontend/assets/js/validation_localization.js')}}"></script>
      	<script type="text/javascript" src="{{asset('public/frontend/assets/js/validation/admin_ads.js')}}"></script>
      	<script type="text/javascript" src="{{asset('public/frontend/assets/js/validation/admin_setting.js')}} "></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
		<!--begin::Page Scripts(used by this page) -->
		<script src="{{asset('public/backend/ckeditor-classic.bundle.js')}}" type="text/javascript"></script>
		<script src="{{asset('public/backend/ckeditor-classic.js')}}" type="text/javascript"></script>
		<!-- <script src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script> -->
        <!--end::Page Scripts -->

<script>

	  $('#ad_image').each(function(){
        if($(this).hasClass('uploadify')){
            $(this).imageuploadify();
        }
	});
	
	// var editor = CKEDITOR.replace( 'desc');
    $(function () {
		
        $('#datepicker1').datepicker({
            autoclose: true,
			todayHighlight: true,
			format: 'yyyy-mm-dd'
        });
    });

    $(document).on('focus', ".datepicker-me-class", function() {
        $(this).datepicker({
          format: 'yyyy-mm-dd',
          days: ['الاحد', 'الاثنين', 'الثلاثاء', 'الاربعاء', 'الخميس', 'الجمعة', 'السبت'],
          daysShort: ['الاحد', 'الاثنين', 'الثلاثاء', 'الاربعاء', 'الخميس', 'الجمعة', 'السبت'],
          daysMin: ['الاحد', 'الاثنين', 'الثلاثاء', 'الاربعاء', 'الخميس', 'الجمعة', 'السبت'],
          months: ['يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر', 'أكتوبر', 'نوفمبر', 'ديسمبر'],
          monthsShort: ['يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر', 'أكتوبر', 'نوفمبر', 'ديسمبر'] ,
          autoclose: true
        }).on('changeDate', function (ev) {
            console.log("here");
            $(this).datepicker('hide');
       });
    });

    {{-- $('.datePicker').datepicker().on('changeDate', function(ev)
    {
        $('.datepicker-me-class').hide();
    }); --}}


    $('._remove').on('click', function(){
        id = $(this).attr('data-id');
        swal({
		  title: 'Are you sure?',
		  confirmButtonText:  'yes',
		  cancelButtonText:  'no',
		  showCancelButton: true,
		  showCloseButton: true,
		  target: document.getElementById('container')
		}).then((result) => {
		  if (result.value) {
			       $.ajax({
                        url: '{{url("admin")}}/{{ isset($route)? $route : "" }}/'+ id,
                        type: 'POST',
                        data: {'_method':'delete','_token': $('meta[name="csrf-token"]').attr('content') },
                        success: function( msg ) {
                            if ( msg.status === 'success' ) {
                            	swal({
								  position: 'center',
								  type: 'success',
								  title: 'Deleted',
								  showConfirmButton: false,
								  timer: 2000
								});
                              window.location.reload();
							 }
							 else if(msg.status === 'failed')
							 {
								swal({
								  position: 'center',
								  type: 'error',
								  title: msg.message,
								  showConfirmButton: false,
								  timer: 2000
								});
							 }
                    },
                    error : function(){
                        swal({
								  position: 'center',
								  type: 'error',
								  title: "تم الالغاء",
								  showConfirmButton: false,
								  timer: 2000
								});
                        //window.location.reload();
                    },
                  });
		  }else {
                    swal({
								  position: 'center',
								  type: 'error',
								  title: "تم الالغاء",
								  showConfirmButton: false,
								  timer: 2000
								});
                }
		});
    });


     $('._ban').on('click', function(){
        id = $(this).attr('data-id');
        swal({
		  title: 'Are you sure ?',
		  confirmButtonText:  'Yes',
		  cancelButtonText:  'No',
		  showCancelButton: true,
		  showCloseButton: true,
		  //target: document.getElementById('rtl-container')
		}).then((result) => {
		  if (result.value) {
		           $.ajax({
                        url: '{{url("admin")}}/{{ isset($route)? $route : "" }}/ban',
                        type: 'POST',
                        data: {'_method':'post','_token': $('meta[name="csrf-token"]').attr('content'),'id':id },
                        success: function( msg ) {
                            if ( msg.status === 'success' ) {
                              window.location.reload();
                             }
                    },
                    error : function(){
                        window.location.reload();
                    },
                  });
		  }else {
                    swal({
								  position: 'center',
								  type: 'error',
								  title: "Canceled",
								  showConfirmButton: false,
								  timer: 2000
								});
                }
		});
    });




     $('._activate').on('click', function(){
        id = $(this).attr('data-id');
        swal({
		  title: 'Are you sure ?',
		  confirmButtonText:  'Yes',
		  cancelButtonText:  'No',
		  showCancelButton: true,
		  showCloseButton: true,
		  //target: document.getElementById('rtl-container')
		}).then((result) => {
		  if (result.value) {
		           $.ajax({
                        url: '{{url("admin")}}/{{ isset($route)? $route : "" }}/activate',
                        type: 'POST',
                        data: {'_method':'post','_token': $('meta[name="csrf-token"]').attr('content'),'id':id },
                        success: function( msg ) {
                            if ( msg.status === 'success' ) {
                              window.location.reload();
                             }
                    },
                    error : function(){
                        window.location.reload();
                    },
                  });
		  }else {
                    swal({
								  position: 'center',
								  type: 'error',
								  title: "Canceled",
								  showConfirmButton: false,
								  timer: 2000
								});
                }
		});
    });


     $('._approve').on('click', function(){
        id = $(this).attr('data-id');
        swal({
		  title: 'هل تريد الاستمرار؟',
		  confirmButtonText:  'نعم',
		  cancelButtonText:  'لا',
		  showCancelButton: true,
		  showCloseButton: true,
		  target: document.getElementById('rtl-container')
		}).then((result) => {
		  if (result.value) {
		           $.ajax({
                        url: '{{url("admin")}}/{{ isset($route)? $route : "" }}/approve',
                        type: 'POST',
                        data: {'_method':'post','_token': $('meta[name="csrf-token"]').attr('content'),'id':id },
                        success: function( msg ) {
                            if ( msg.status === 'success' ) {
                              window.location.reload();
                             }
                    },
                    error : function(){
                        window.location.reload();
                    },
                  });
		  }else {
                    swal({
								  position: 'center',
								  type: 'error',
								  title: "تم الالغاء",
								  showConfirmButton: false,
								  timer: 2000
								});
                }
		});
    });


     $('._reject').on('click', function(){
        id = $(this).attr('data-id');
        swal({
		  title: 'هل تريد الاستمرار؟',
		  confirmButtonText:  'نعم',
		  cancelButtonText:  'لا',
		  showCancelButton: true,
		  showCloseButton: true,
		  target: document.getElementById('rtl-container')
		}).then((result) => {
		  if (result.value) {
		           $.ajax({
                        url: '{{url("admin")}}/{{ isset($route)? $route : "" }}/reject',
                        type: 'POST',
                        data: {'_method':'post','_token': $('meta[name="csrf-token"]').attr('content'),'id':id },
                        success: function( msg ) {
                            if ( msg.status === 'success' ) {
                              window.location.reload();
                             }
                    },
                    error : function(){
                        window.location.reload();
                    },
                  });
		  }else {
                    swal({
								  position: 'center',
								  type: 'error',
								  title: "تم الالغاء",
								  showConfirmButton: false,
								  timer: 2000
								});
                }
		});
    });


$('._statusApprove').on('click', function(){
        id = $(this).attr('data-id');
        status = $(this).attr('data-status');
        swal({
		  title: 'هل تريد الاستمرار؟',
		  confirmButtonText:  'نعم',
		  cancelButtonText:  'لا',
		  showCancelButton: true,
		  showCloseButton: true,
		  target: document.getElementById('rtl-container')
		}).then((result) => {
		  if (result.value) {
		           $.ajax({
                        url: '{{url("admin")}}/transaction/approve',
                        type: 'POST',
                        data: {'_method':'post','_token': $('meta[name="csrf-token"]').attr('content'),'id':id,'status':status },
                        success: function( msg ) {
                            if ( msg.status === 'success' ) {
                              window.location.reload();
                             }
                    },
                    error : function(){
                        window.location.reload();
                    },
                  });
		  }else {
                    swal({
								  position: 'center',
								  type: 'error',
								  title: "تم الالغاء",
								  showConfirmButton: false,
								  timer: 2000
								});
                }
		});
    });

$('._statusApprove').on('click', function(){
        id = $(this).attr('data-id');
        status = $(this).attr('data-status');
        swal({
		  title: 'هل تريد الاستمرار؟',
		  confirmButtonText:  'نعم',
		  cancelButtonText:  'لا',
		  showCancelButton: true,
		  showCloseButton: true,
		  target: document.getElementById('rtl-container')
		}).then((result) => {
		  if (result.value) {
		           $.ajax({
                        url: '{{url("admin")}}/transaction/approve',
                        type: 'POST',
                        data: {'_method':'post','_token': $('meta[name="csrf-token"]').attr('content'),'id':id,'status':status },
                        success: function( msg ) {
                            if ( msg.status === 'success' ) {
                              window.location.reload();
                             }
                    },
                    error : function(){
                        window.location.reload();
                    },
                  });
		  }else {
                    swal({
								  position: 'center',
								  type: 'error',
								  title: "تم الالغاء",
								  showConfirmButton: false,
								  timer: 2000
								});
                }
		});
    });




$('._transactionApprove').on('click',function(){

	balance = $(this).attr('data-balance');
	name = $(this).attr('data-name');
	id = $(this).attr('data-id');
	var balance_html = '<div class="form-group">' +
		'<label>محفظة العميل</label>' +
		'<input value="'+balance+'" type="text" placeholder=" القيمة المحولة " name="balance" class="balance form-control" required disabled />' +
		'</div>' ;
	$.confirm({
		title: ' تحويل بنكى ',
		content: '' +
			'<form action="" class="formName">' +
				'<div class="form-group">' +
			'<label>العميل '+name+' </label>' +
			'</div>' +balance_html+
			  '<div class="form-group">' +
			'<label>القيمة المحولة</label>' +
			'<input value="" type="text" placeholder=" القيمة المحولة " name="amount" class="amount form-control" required />' +
			'</div>' +
			'</form>',
			buttons: {
				formSubmit: {
					text: 'تأكيد التحويل',
					btnClass: 'btn-blue',
					action: function () {
						var amount = this.$content.find('.amount').val();
						var balance = this.$content.find('.balance').val();

                        swal({
                            title: 'هل تريد الاستمرار؟',
                            confirmButtonText:  'نعم',
                            cancelButtonText:  'لا',
                            showCancelButton: true,
                            showCloseButton: true,
                            target: document.getElementById('rtl-container')
                          }).then((result) => {
                            if (result.value) {
                                var checkFloat = parseFloat(amount);
                                var checkInt = parseFloat(amount);
                                if(isNaN(checkFloat) || isNaN(checkInt))
                                {
                                    $.dialog({title: 'خطأ !',content: 'يجب ادخال ارقام فقط فى هذه الخانه',rtl: true,type: 'red'});
                                    return false;
                                }
                                //if (!(/^\d+$/.test(amount))) {
                                    // Contain numbers only
                                    //$.dialog({title: 'خطأ !',content: 'يجب ادخال ارقام فقط فى هذه الخانه',rtl: true,type: 'red'});
                                    //return false;
                                //}
                                if(Number(amount) > Number(balance))
                                {
                                    $.dialog({title: 'خطأ !',content: 'لا يمكن اتمام عملية التحويل. قسمة التحويل اكبر من محفظة العميل',rtl: true,type: 'red'});
                                    return false;
                                }
                                $.ajax({
                                    url: '{{url("admin")}}/transaction/ConsultantTransaction',
                                    type: 'POST',
                                    data: {'_method':'post','_token': $('meta[name="csrf-token"]').attr('content'),'id':id,'amount':amount },
                                    success: function( msg ) {
                                        if ( msg.status === 'success' ) {
                                            window.location.reload();
                                        }
                                    },
                                    error : function(){
                                            window.location.reload();
                                    },
                                });
                            }
                          });

					}
				},
				cancel: {
							text: 'الغاء',
							action: function () {
							}
					}
			},
			onContentReady: function () {
				// bind to events
				var jc = this;
				this.$content.find('form').on('submit', function (e) {
					// if the user submits the form by pressing enter in the field.
					e.preventDefault();
					jc.$$formSubmit.trigger('click'); // reference the button and click it
				});
			}
		});

});



$('._campaignApprove').on('click', function(){
        id = $(this).attr('data-id');
        status = $(this).attr('data-status');
        swal({
		  title: 'Are you sure?',
		  confirmButtonText:  'نعم',
		  cancelButtonText:  'لا',
		  showCancelButton: true,
		  showCloseButton: true,
		  target: document.getElementById('rtl-container')
		}).then((result) => {
		  if (result.value) {
		           $.ajax({
                        url: '{{url("admin")}}/campaigns/approve',
                        type: 'POST',
                        data: {'_method':'post','_token': $('meta[name="csrf-token"]').attr('content'),'id':id,'status':status },
                        success: function( msg ) {
                            if ( msg.status === 'success' ) {
                              //window.location.reload();
                             }
                    },
                    error : function(){
                        //window.location.reload();
                    },
                  });
		  }else {
                    swal({
								  position: 'center',
								  type: 'error',
								  title: "تم الالغاء",
								  showConfirmButton: false,
								  timer: 2000
								});
                }
		});
    });


   $('#confirm_search').on('click', function(e){
   		e.preventDefault();
   		$('#search_form').submit();
   });

    $(document).ready(function () {
 		 $('#multiselect').multiselect({includeSelectAllOption: true, maxHeight: 200,enableFiltering: true});

	});



</script>

<script>
	window.onload = function() {

		var btn = document.getElementById('uploadBtn'),
				progressBar = document.getElementById('progressBar'),
				progressOuter = document.getElementById('progressOuter'),
				msgBox = document.getElementById('msgBox');

		var uploader = new ss.SimpleUpload({
					button: btn,
					url: '{{asset("public/backend/extras/file_upload.php")}}',
					name: 'uploadfile',
					multipart: true,
					allowedExtensions: ['jpg', 'jpeg', 'png', 'gif'],
					hoverClass: 'hover',
					focusClass: 'focus',
					responseType: 'json',
					startXHR: function() {
							$('button:submit').attr('disabled',true);
							progressOuter.style.display = 'block'; // make progress bar visible
							this.setProgressBar( progressBar );
					},
					onExtError : function () {
						$('button:submit').attr('disabled',false);
						progressOuter.style.display = 'none';
						msgBox.innerHTML = ' يجب اختيار صورة jpg ,jpeg,png,gif ';
					},
					onSubmit: function() {
							$('button:submit').attr('disabled',false);
							msgBox.innerHTML = ''; // empty the message box
							btn.innerHTML = 'جارى الرفع...'; // change button text to "Uploading..."
						},
					onComplete: function( filename, response ) {
							$('button:submit').attr('disabled',false);
							btn.innerHTML = 'اختر ملف اخر';
							progressOuter.style.display = 'none'; // hide progress bar when upload is completed

							if ( !response ) {
									msgBox.innerHTML = ' هناك خطأ فى الرفع حاول مرة اخرى ';
									return;
							}

							if ( response.success === true ) {
									msgBox.innerHTML = '<strong>' + filename + '</strong>' + ' تم رفع الملف بنجاح .';
									$("#file").val('/public/assets/uploads/'+response.newFileName);
									var image_url = "{{url('/public/assets/uploads')}}/"+response.newFileName;
									$("#image_file").css("display","block");
									$("#image_file").attr("src",image_url);

							} else {
									if ( response.msg )  {
											msgBox.innerHTML = escapeTags( response.msg );

									} else {
											msgBox.innerHTML = 'هناك خطأ فى الرفع حاول مرة اخرى.';
									}
							}
						},
					onError: function() {
							$('button:submit').attr('disabled',false);
							progressOuter.style.display = 'none';
							msgBox.innerHTML = 'هناك مشكلة فى الرفع';
						}
		});

		@for($i=1;$i<=2;$i++)

			var btn{{ $i }} = document.getElementById('uploadBtn{{ $i }}'),
				progressBar{{ $i }} = document.getElementById('progressBar{{ $i }}'),
				progressOuter{{ $i }} = document.getElementById('progressOuter{{ $i }}'),
				msgBox{{ $i }} = document.getElementById('msgBox{{ $i }}');

		var uploader = new ss.SimpleUpload({
					button: btn{{ $i }},
					url: '{{asset("public/backend/extras/file_upload.php")}}',
					name: 'uploadfile',
					multipart: true,
					allowedExtensions: ['jpg', 'jpeg', 'png', 'gif'],
					hoverClass: 'hover',
					focusClass: 'focus',
					responseType: 'json',
					startXHR: function() {
							$('button:submit').attr('disabled',true);
							progressOuter{{ $i }}.style.display = 'block'; // make progress bar visible
							this.setProgressBar( progressBar{{ $i }} );
					},
					onExtError : function () {
						progressOuter.style.display = 'none';
						msgBox{{ $i }}.innerHTML = ' يجب اختيار صورة jpg ,jpeg,png,gif ';
					},
					onSubmit: function() {
							$('button:submit').attr('disabled',false);
							msgBox{{ $i }}.innerHTML = ''; // empty the message box
							btn{{ $i }}.innerHTML = 'جارى الرفع...'; // change button text to "Uploading..."
						},
					onComplete: function( filename, response ) {
							$('button:submit').attr('disabled',false);
							btn{{ $i }}.innerHTML = 'اختر ملف اخر';
							progressOuter{{ $i }}.style.display = 'none'; // hide progress bar when upload is completed

							if ( !response ) {
									msgBox{{ $i }}.innerHTML = ' هناك خطأ فى الرفع حاول مرة اخرى ';
									return;
							}

							if ( response.success === true ) {
									msgBox{{ $i }}.innerHTML = '<strong>' + filename + '</strong>' + ' تم رفع الملف بنجاح .';
									$("#file{{ $i }}").val('/public/assets/uploads/'+response.newFileName);
									var image_url = "{{url('/public/assets/uploads')}}/"+response.newFileName;
									$("#image{{ $i }}").css("display","block");
									$("#image{{ $i }}").attr("src",image_url);

							} else {
									if ( response.msg )  {
											msgBox{{ $i }}.innerHTML = escapeTags( response.msg );

									} else {
											msgBox{{ $i }}.innerHTML = 'هناك خطأ فى الرفع حاول مرة اخرى.';
									}
							}
						},
					onError: function() {
							$('button:submit').attr('disabled',false);
							progressOuter{{ $i }}.style.display = 'none';
							msgBox{{ $i }}.innerHTML = 'هناك مشكلة فى الرفع';
						}
		});

		@endfor;

	};

	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			
			reader.onload = function(e) {
			$('#image_file').show();
			$('#image_file').attr('src', e.target.result);
			}
			
			reader.readAsDataURL(input.files[0]);
		}
	}

	function readURLUpload(input,img_name) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			
			reader.onload = function(e) {
			$('#'+img_name).show();
			$('#'+img_name).attr('src', e.target.result);
			}
			
			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#imgInp").change(function() {
		readURL(this);
	});

	$(".imgInpu").change(function() {
		$img_name = $(this).attr('name');
		readURLUpload(this,$img_name);
	});
	</script>

    @stack('script')
	</body>
	<!-- end::Body -->
	</html>
