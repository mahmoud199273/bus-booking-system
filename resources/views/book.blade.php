@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Trips</div>
            </div>


            <div class="trips-table">
            <form method="post" action="{{ route('store') }}">
            @csrf
            <input type="hidden" name="trip_id" value="{{ $trip->id }}">
            <input type="hidden" name="from_city" value="{{ request()->city_from }}">
            <input type="hidden" name="to_city" value="{{ request()->city_to }}">
                    <div class="form-group row">
                    <label for="" class="col-md-4 col-form-label text-md-right">Start City</label>
                            <div class="col-md-6">
                                <input class="form-control" type="text" disabled value="{{ $city_from->title }}">
                            </div>
                    </div>


                    <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">End City</label>
                            <div class="col-md-6">
                                <input class="form-control" type="text" disabled value="{{ $city_to->title }}">
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">Trip Title</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" disabled value="{{ $trip->title }}">
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">Avaliable Seats</label>

                            <div class="col-md-6">
                                @for($i=1;$i<=$trip->seats_num;$i++)
                                    @if(!in_array($i, $booked_seats))
                                        <input type="radio" name="num_of_seat" value="{{ $i }}">
                                        <label for="male">{{ $i }}</label><br>
                                    @endif    
                                @endfor
                                
                                @if($errors->has('num_of_seat'))
                                    <span class="invalid-feedback" role="alert" style="display:block">
                                        <strong>{{ $errors->first('num_of_seat') }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    
                    
            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary"> Book </button>
                </div>
            </div>
            </form>
            </div>

        </div>
    </div>
</div>
@endsection
