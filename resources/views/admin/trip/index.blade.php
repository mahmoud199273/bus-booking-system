@extends('admin.layouts.index_layout' , ['title' => __("admin.$route") ,'route' => $route])

@section('content')




<br>

<div class="row">
    <div class="col-lg-12">

        <!--begin::Portlet-->
        <div class="m-portlet m-portlet--last m-portlet--head-lg m-portlet--responsive-mobile" id="main_portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-progress">

                    <!-- here can place a progress bar-->
                </div>
                <div class="m-portlet__head-wrapper">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon">
                                <i class="fa fa-map"></i>
                            </span>
                            <h3 class="m-portlet__head-text">
                                {{ $route }}
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">

                        <a href='{{url("admin/$route/create")}}' class="btn btn-brand m-btn m-btn--icon m-btn--wide m-btn--md m--margin-right-10">
                            <span>
                                <i class="la la-plus"></i>
                                <span>{{ __('admin.add') }}</span>
                            </span>
                        </a>

                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <!--begin::Section-->
                <div class="m-section">
                    <div class="m-section__content">
                        <div class="table-responsive">
                        
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th><b>Start City</b></th>
                                    <th><b>To City</b></th>
                                    <th><b>{{ __('admin.title') }}</b></th>
                                    <th><b>{{ __('admin.created_at') }}</b></th>
                                    <th><b>{{ __('admin.control') }}</b></th>

                                    
                                </tr>
                            </thead>
                            <tbody>
                                @if($list)
                                @foreach ($list as $row)

                                <tr>
                                    <th scope="row">{{ $row->city_from->title }}</th>
                                    <th scope="row">{{ $row->city_to->title }}</th>

                                    <th scope="row">{{ $row->title }}</th>
                                   
                                    <th scope="row">{{ $row->created_at }}</th>
                                    
                                    <td>
                                        <div class="btn-group mr-2" role="group" aria-label="First group">
                                            <a type="button" 
                                            href="{{url('admin')}}/{{ $route }}/{{ $row->id }}" 
                                            class="m-btn m-btn m-btn--square btn btn-secondary">
                                            <i class="fa fa-eye m--font-primary"></i>
                                        </a>
                                        <div class="btn-group mr-2" role="group" aria-label="First group">
                                            <a type="button" 
                                            href="{{url('admin')}}/{{$route}}/{{ $row->id }}/edit" 
                                            class="m-btn m-btn m-btn--square btn btn-secondary">
                                            <i class="fa fa-edit m--font-info"></i>
                                        </a>

                                        <a type="button"  data-id = "{{ $row->id }}" 
                                            class="m-btn m-btn m-btn--square btn btn-secondary _remove">
                                            <i class="flaticon-delete-1 m--font-danger"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
            <!--end::Section-->
             @if($list)
            <div> 
                <span>
                    <span>{{ __('admin.showing') }}</span>
                    {{($list->currentpage()-1)*$list->perpage()+1}} 
                    <span>{{ __('admin.to') }}</span> 
                    {{$list->currentpage()*$list->perpage()}}
                </span> 
                <span>{{ __('admin.from') }}</span>
                <span class="badge badge-info">{{ $list->total() }}</span>
                <span>{{ __('admin.items') }}</span>
            </div>
            @endif

        </div>


    </div>
    <!--end::Portlet-->
</div>
</div>

<div class="container">
    <div class="text-center">
       @if($list)
       {{ $list->links() }}
       @endif
   </div>
</div>
<br>
@if(isset($query ) or isset($message))
<div>
    <a href="{{url('admin/bank')}}" class="btn btn-danger m-btn m-btn--icon m-btn--wide">
        <span>
            <i class="la la-warning"></i>
            <span>{{ __('admin.cancel_search') }}</span>
        </span>
    </a>
</div>
@endif






@endsection