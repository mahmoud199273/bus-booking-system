


        <div class="m-portlet__body">

@if($errors->any())
    <div class="m-alert m-alert--icon alert alert-danger" role="alert" id="m_form_1_msg">
        <div class="m-alert__icon">
            <i class="la la-warning"></i>
        </div>
        <div class="m-alert__text">
            {{ __('admin.fix_errors') }}
        </div>
        <div class="m-alert__close">
            <button type="button" class="close" data-close="alert" aria-label="Close">
            </button>
        </div>
    </div>
@endif


        <div class="form-group m-form__group row {{ $errors->has('from_city') ? 'has-danger' : ''}}">
                <label for="from_city" class="col-2 col-form-label">Start City</label>
                 <div class="col-9">
                <select name="from_city" {{ isset($show)?$show:"" }} class="form-control m-input">
                    <option value=""> Select City </option>
                    @if($cities)
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}" {{ (isset($row) && $row->from_city == $city->id)? 
                            "selected" : "" }}> {{ $city->title }}</option>
                        @endforeach
                    @endif
                </select>
                    {!! $errors->first('from_city', '<span class="form-control-feedback">:message</span>') !!}
                </div>
        </div>

        <div class="form-group m-form__group row {{ $errors->has('to_city') ? 'has-danger' : ''}}">
                <label for="to_city" class="col-2 col-form-label">End City</label>
                 <div class="col-9">
                <select name="to_city" {{ isset($show)?$show:"" }} class="form-control m-input">
                    <option value=""> Select City </option>
                    @if($cities)
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}" {{ (isset($row) && $row->to_city == $city->id)? 
                            "selected" : "" }}> {{ $city->title }}</option>
                        @endforeach
                    @endif
                </select>
                    {!! $errors->first('to_city', '<span class="form-control-feedback">:message</span>') !!}
                </div>
        </div>

    <div class="form-group m-form__group row {{ $errors->has('title') ? 'has-danger' : ''}}">
        <label for="name" class="col-2 col-form-label"> Title  </label>
        <div class="col-9">
            <input type="text" {{ isset($show)?$show:"" }} id="title" name="title" class="form-control m-input"
                    placeholder="Title" value="{{ (isset($row) && $row->title)? $row->title: old('title') }}">
            {!! $errors->first('title', '<span class="form-control-feedback">:message</span>') !!}
        </div>
    </div>


    <div class="form-group m-form__group row {{ $errors->has('seats_num') ? 'has-danger' : ''}}">
        <label for="name" class="col-2 col-form-label"> Seats Number  </label>
        <div class="col-9">
            <input type="text" {{ isset($show)?$show:"" }} id="seats_num" name="seats_num" class="form-control m-input"
                    placeholder="Seats Number" value="{{ (isset($row) && $row->seats_num)? $row->seats_num: old('seats_num') }}">
            {!! $errors->first('seats_num', '<span class="form-control-feedback">:message</span>') !!}
        </div>
    </div>


            <div class="form-group m-form__group row {{ $errors->has('crosses') ? 'has-danger' : ''}}">
                <label for="name" class="col-2 col-form-label"> Crosses Cities </label>
                <div class="col-9 select_multi_options">
                   <select name="crosses[]" id="multiselect" class="mt-multiselect btn btn-default" multiple="multiple" data-label="left" data-select-all="true" data-width="100%" data-filter="true" >
                       @foreach ($cities as $item)
                       <option value="{{$item->id}}" {{ (isset($crosessCities) && in_array($item->id,$crosessCities))? "selected" : "" }}> {{$item->title}}
                        </option>
                       @endforeach
                    </select>
                    {!! $errors->first('crosses', '<span class="form-control-feedback">:message</span>') !!}
                </div>
            </div>



</div>
<div class="m-portlet__foot m-portlet__foot--fit">
    <div class="m-form__actions m-form__actions--solid">
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-9">
                @if(!isset($show))
                <button type="submit" class="btn btn-brand">{{ __('admin.Submit') }}</button>
                @endif
                <a type="reset" href="{{url("admin/$route")}}" class="btn btn-secondary">{{ __('admin.cancel') }}</a>
            </div>
        </div>
    </div>
</div>


