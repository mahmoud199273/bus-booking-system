<?php

namespace App\Http\Controllers\API\V1;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Response;
use App\Hosts;



class BaseController extends Controller
{

    public function UniqueVistors()
    {
        // $response = collect();
        // Hosts::groupby('URL')->chunk(1000000, function ($hosts) use($response){
        //     foreach ($hosts as $host) {
        //         $response->push($host);
        //         //dd($host);
        //     }
        // });
        $response = Hosts::select('URL')->groupby('URL')->get();
        return Response::json($response);
    }


    public function Hits()
    {
        // $response = collect();
        // Hosts::groupby('URL')->chunk(1000000, function ($hosts) use($response){
        //     foreach ($hosts as $host) {
        //         $response->push($host);
        //         //dd($host);
        //     }
        // });
        $response = Hosts::select('URL', DB::raw('count(URL) as hits'))->groupBy('URL')->get();
        return Response::json($response);
    }


    public function TopHits()
    {
        // $response = collect();
        // Hosts::groupby('URL')->chunk(1000000, function ($hosts) use($response){
        //     foreach ($hosts as $host) {
        //         $response->push($host);
        //         //dd($host);
        //     }
        // });
        $response = Hosts::select('URL', DB::raw('count(URL) as hits'))->groupBy('URL')->orderBy('hits','desc')->get();
        return Response::json($response);
    }
}
