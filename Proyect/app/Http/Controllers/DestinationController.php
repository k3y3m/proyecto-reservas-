<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destination;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class DestinationController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->json()->all();
        $sql = "select * from destinations";
        $response = DB::select($sql);
        return $response;

    }

    public function createDestination(Request $request)
    {
        $data = $request -> json() -> all();
        $sql = "insert into destinations(name,travel_id) values(?,?)";
        $parameters = [$data['nombre'], $data['travel_id']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    // public function updateDestination(Request $request,$id)
    public function updateDestination(Request $request)
     { 
        $data = $request -> json() -> all();
        $sql = "update destinations set name = ?, travel_id = ?";
        $parameters = [$data['nombre'], $data['travel_id']];
        $response = DB::select($sql, $parameters);
        return $response;
     }
}