<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bus;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class BusController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->json()->all();
        $sql = "select * from buses";
        $response = DB::select($sql);
        return $response;

    }

    public function createBus(Request $request)
    {
        $data = $request -> json() -> all();
        $sql = "insert into buses(nombre, state, travel_id) values(?,?,?)";
        $parameters = [$data['nombre'], $data['state'], $data['travel_id']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    // public function updateBus(Request $request,$id)
    public function updateBus(Request $request)
     { 
        $data = $request -> json() -> all();
        $sql = "update buses set nombre = ?, state = ?, travel_id = ?";
        $parameters = [$data['nombre'], $data['state'], $data['travel_id']];
        $response = DB::select($sql, $parameters);
        return $response;
     }
}