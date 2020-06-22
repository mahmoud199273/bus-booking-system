@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

    

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Trips</div>
            </div>

            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            <div class="trips-table">
            <form method="get" action="{{ route('home') }}">
                    <div class="form-group row">
                    <div class="col-md-5">
                                <select class="from-control select-css" name="city_from">
                                    <option value=""> Select Start City </option>
                                    @foreach($cities as $key=>$value)
                                        <option value="{{ $value->id }}" {{ ($value->id == request()->city_from) ? "selected" : "" }}> {{ $value->title }} </option>
                                    @endforeach
                                </select>
                    </div>
                    <div class="col-md-2"></div>
                            <div class="col-md-5">
                                <select class="from-control select-css" name="city_to">
                                    <option value=""> Select End City </option>
                                    @foreach($cities as $key=>$value)
                                        <option value="{{ $value->id }}" {{ ($value->id == request()->city_to) ? "selected" : "" }} > {{ $value->title }} </option>
                                    @endforeach
                                </select>
                            </div>
                    </div>
                    
            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary"> Search For Trip </button>
                </div>
            </div>
            </form>
            </div>

            <div class="trips-table">
                    <table>
                        <tr>
                            <th>Trip Title</th>
                            <th>Start City</th>
                            <th>End City</th>
                            <th>Cross Cities</th>
                            <th>No of seats</th>
                            <th>Avalibale Seats NO</th>
                            <th>Controls</th>
                        </tr>
                       @foreach($trips as $key=>$value)
                        <tr>
                            <td>{{$value->title}}</td>
                            <td>{{$value->city_from->title}}</td>
                            <td>{{$value->city_to->title}}</td>
                            <td>{!! implode(" - ",$value->cross_cities->pluck('cities')->pluck('title')->toArray()) !!}</td>
                            <td>{{$value->seats_num}}</td>

                            <td> 
                                @for($i=1;$i<=$value->seats_num;$i++)
                                    @if(!in_array($i, $value->getBookedSeats(request()->city_from,request()->city_to)))
                                        {{ $i }}
                                    @endif
                                @endfor
                            </td>

                            <td> <a href="{{ url('book').'/'.$value->id.'?'.http_build_query(array_merge(request()->all(),[])) }}"> BOOk </a> </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
        </div>
    </div>
</div>
@endsection
