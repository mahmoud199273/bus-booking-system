

 <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
       .gm-style-cc{
    display:none
    }
      .controls {
        margin-top: 16px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        text-overflow: ellipsis;
        position: absolute;
        z-index: 1000000000000000000000000;
        margin-top: 10px;
        left: 40%;
        width: 30%;
      }

      #pac-input:focus {
        border-color: #4d90fe;
        margin-left: -1px;
        padding-left: 14px;  /* Regular padding-left + 1. */
      }

      .pac-container {
        font-family: Roboto;
      }

      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

    </style>



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



<!--       
    <div class="form-group m-form__group row {{ $errors->has('phone') ? 'has-danger' : ''}}">
        <label for="name" class="col-1 col-form-label"> Site Title  </label>
        <div class="col-9">
            <input type="text" name="site_title" class="form-control m-input"
                    placeholder="Site Title" value="{{ (isset($row) && $row->site_title)? $row->site_title: old('site_title') }}">
            {!! $errors->first('site_title', '<span class="form-control-feedback">:message</span>') !!}
        </div>
    </div> -->

    <div class="form-group m-form__group row {{ $errors->has('phone') ? 'has-danger' : ''}}">
        <label for="name" class="col-1 col-form-label"> Welcome Title  </label>
        <div class="col-9">
            <input type="text" name="title" class="form-control m-input"
                    placeholder="Title" value="{{ (isset($row) && $row->title)? $row->title: old('title') }}">
            {!! $errors->first('title', '<span class="form-control-feedback">:message</span>') !!}
        </div>
    </div>


    
    <div class="form-group m-form__group row {{ $errors->has('desc') ? 'has-danger' : ''}}">
        <label for="name" class="col-1 col-form-label"> Welcome Description  </label>
        <div class="col-9">
            <textarea {{ isset($show)?$show:"" }} id="kt-ckeditor-5" name="desc" class="form-control m-input"
                    placeholder="Description" rows="10">{{ (isset($row) && $row->desc)? $row->desc: old('desc') }}</textarea>
            {!! $errors->first('desc', '<span class="form-control-feedback">:message</span>') !!}
        </div>
    </div>


    <div class="form-group m-form__group row {{ $errors->has('phone') ? 'has-danger' : ''}}">
        <label for="name" class="col-1 col-form-label"> Phone  </label>
        <div class="col-9">
            <input type="text" name="phone" class="form-control m-input"
                    placeholder="Phone" value="{{ (isset($row) && $row->phone)? $row->phone: old('phone') }}">
            {!! $errors->first('phone', '<span class="form-control-feedback">:message</span>') !!}
        </div>
    </div>

    <div class="form-group m-form__group row {{ $errors->has('email') ? 'has-danger' : ''}}">
        <label for="name" class="col-1 col-form-label"> Email  </label>
        <div class="col-9">
            <input type="text" name="email" class="form-control m-input"
                    placeholder="Email" value="{{ (isset($row) && $row->email)? $row->email: old('email') }}">
            {!! $errors->first('email', '<span class="form-control-feedback">:message</span>') !!}
        </div>
    </div>

    <div class="form-group m-form__group row {{ $errors->has('address') ? 'has-danger' : ''}}">
        <label for="name" class="col-1 col-form-label"> Address  </label>
        <div class="col-9">
            <input type="text" name="address" id="address" class="form-control m-input"
                    placeholder="Address" value="{{ (isset($row) && $row->address)? $row->address: old('address') }}">
            {!! $errors->first('address', '<span class="form-control-feedback">:message</span>') !!}
        </div>
    </div>

<!-- 
    <div class="form-group m-form__group row {{ $errors->has('fax') ? 'has-danger' : ''}}">
        <label for="name" class="col-1 col-form-label"> Post Office Box </label>
        <div class="col-9">
            <input type="text" name="fax" class="form-control m-input"
                    placeholder="Fax" value="{{ (isset($row) && $row->fax)? $row->fax: old('hotline') }}">
            {!! $errors->first('fax', '<span class="form-control-feedback"></span>') !!}
        </div>
    </div> -->

    <div class="form-group m-form__group row {{ $errors->has('fb_link') ? 'has-danger' : ''}}">
        <label for="name" class="col-1 col-form-label"> Facebook  </label>
        <div class="col-9">
            <input type="text" name="fb_link" class="form-control m-input"
                    placeholder="Facebook" value="{{ (isset($row) && $row->fb_link)? $row->fb_link: old('fb_link') }}">
            {!! $errors->first('fb_link', '<span class="form-control-feedback">:message</span>') !!}
        </div>
    </div>

    <div class="form-group m-form__group row {{ $errors->has('linkedin_link') ? 'has-danger' : ''}}">
        <label for="name" class="col-1 col-form-label"> Linkedin  </label>
        <div class="col-9">
            <input type="text" name="linkedin_link" class="form-control m-input"
                    placeholder="Linkedin" value="{{ (isset($row) && $row->linkedin_link)? $row->linkedin_link: old('linkedin_link') }}">
            {!! $errors->first('linkedin_link', '<span class="form-control-feedback">:message</span>') !!}
        </div>
    </div>


    <div class="form-group m-form__group row {{ $errors->has('insta_link') ? 'has-danger' : ''}}">
        <label for="name" class="col-1 col-form-label"> Instagram  </label>
        <div class="col-9">
            <input type="text" name="insta_link" class="form-control m-input"
                    placeholder="Instagram" value="{{ (isset($row) && $row->insta_link)? $row->insta_link: old('insta_link') }}">
            {!! $errors->first('insta_link', '<span class="form-control-feedback">:message</span>') !!}
        </div>
    </div>

    <!-- <div class="form-group m-form__group row {{ $errors->has('youtube_link') ? 'has-danger' : ''}}">
        <label for="name" class="col-1 col-form-label"> Youtube  </label>
        <div class="col-9">
            <input type="text" name="youtube_link" class="form-control m-input"
                    placeholder="Youtube" value="{{ (isset($row) && $row->youtube_link)? $row->youtube_link: old('youtube_link') }}">
            {!! $errors->first('youtube_link', '<span class="form-control-feedback">:message</span>') !!}
        </div>
    </div> -->

    
    <!-- <div class="form-group m-form__group row {{ $errors->has('google_play_link') ? 'has-danger' : ''}}">
        <label for="name" class="col-1 col-form-label"> Google Play Link  </label>
        <div class="col-9">
            <input type="text" name="google_play_link" class="form-control m-input"
                    placeholder="Google Play Link" value="{{ (isset($row) && $row->google_play_link)? $row->google_play_link: old('google_play_link') }}">
            {!! $errors->first('google_play_link', '<span class="form-control-feedback">:message</span>') !!}
        </div>
    </div>

    <div class="form-group m-form__group row {{ $errors->has('itunes_link') ? 'has-danger' : ''}}">
        <label for="name" class="col-1 col-form-label"> Apple Store Link  </label>
        <div class="col-9">
            <input type="text" name="itunes_link" class="form-control m-input"
                    placeholder="Apple Store Link" value="{{ (isset($row) && $row->itunes_link)? $row->itunes_link: old('itunes_link') }}">
            {!! $errors->first('itunes_link', '<span class="form-control-feedback">:message</span>') !!}
        </div>
    </div> -->

  
    <div class="form-group m-form__group row {{ $errors->has('file') ? 'has-danger' : ''}}">
            <label for="example-text-input" class="col-1 col-form-label">Logo</label>
                @if(!isset($show))
                <div class="col-9">
                <input class="custom-file-input2" type="file" name="file" value="Upload" id="imgInp" />
                {!! $errors->first('file', '<span class="form-control-feedback">:message</span>') !!}
                </div>
                @endif
                    
        </div>
            @if(isset($row->image) !='')
                <img src="{{url('')}}{{ $row->image }}" id="image_file" width="100" height="100" >
            @else
                <img src="" id="image_file" width="100" height="100" style="display:none;">
            @endif


    
   
    <!-- <input type="text" id='pac-input' class="form-control" placeholder="Search">
    <div id="map"></div>
    <input type="hidden" name = "lat" id="lat" value="{{ (isset($row) && $row->lat)? $row->lat:"" }}" />
    <input type="hidden" name = "lng" id="lng" value="{{ (isset($row) && $row->lng)? $row->lng:"" }}" />
 -->



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



@push('script')
<script>
	
    function initMap() {
    $lat = " {{ (isset($row) && $row->lat)? $row->lat:"-25.363882" }} ";
    $lng = " {{ (isset($row) && $row->lng)? $row->lng:"131.044922" }} ";
    var map = new google.maps.Map(document.getElementById('map'),{
            center:{
                lat: parseFloat($lat),
                lng: parseFloat($lng)
            },
            zoom:15
        });
        var marker = new google.maps.Marker({
            position: {
                lat: parseFloat($lat),
                lng: parseFloat($lng)
            },
            map: map,
            draggable: true
        });
        var pac_input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(pac_input);
        google.maps.event.addListener(searchBox,'places_changed',function(){
            var places = searchBox.getPlaces();
            var bounds = new google.maps.LatLngBounds();
            var i, place;
            for(i=0; place=places[i];i++){
                  bounds.extend(place.geometry.location);
                  marker.setPosition(place.geometry.location); //set marker position new...
                  map.setCenter(place.geometry.location);
              }
              map.fitBounds(bounds);
              map.setZoom(15);
        });
        google.maps.event.addListener(marker,'position_changed',function(){
            var lat = marker.getPosition().lat();
            var lng = marker.getPosition().lng();
            var center_latlng = {lat: lat, lng: lng}; 
            //map.setCenter(center_latlng);
            $('#lat').val(lat);
            $('#lng').val(lng);
        });

        google.maps.event.addListener(map, 'center_changed', function() {
            var center_lat = map.getCenter().lat();  
            var center_lng = map.getCenter().lng();  
            var center_latlng = {lat: center_lat, lng: center_lng}; 
            //console.log(center_latlng);    
            marker.setPosition(center_latlng);
        }); 
    
    }
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkgu7k3juP6jiYhKxRLgrAalnTu8sGayA&callback=initMap&libraries=places">
    </script>
@endpush