@extends('admin.layouts.index_layout',['title' => __('admin.dashboard')])


@section('content')
<div class="row">
	<div class="col-lg-12">

			<!--begin:: Widgets/Quick Stats-->
			<div class="row m-row--full-height">


				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="m-portlet m-portlet--half-height m-portlet--border-bottom-success ">
						<div class="m-portlet__body">
							<div class="m-widget26" style="text-align:center">
								<div class="m-widget26__number">
									
								</div>
								<div class="m-widget26__chart" style="height:180px; width: 220px;">
								</div>
							</div>
						</div>
					</div>
					<div class="m--space-30"></div>
					
                </div>


				<div class="col-sm-12 col-md-12 col-lg-12" style="margin-top: -140px;">
					<div class="m-portlet m-portlet--half-height m-portlet--border-bottom-success ">
						<div class="m-portlet__body">
							<div class="m-widget26" style="text-align:center">
								<div class="m-widget26__number">
								</div>
								<div class="m-widget26__chart" style="height:180px; width: 220px;">
								</div>
							</div>
						</div>
					</div>
					<div class="m--space-30"></div>
					
                </div>









			</div>


			<!--end:: Widgets/Quick Stats-->
	</div>
</div>





@endsection
