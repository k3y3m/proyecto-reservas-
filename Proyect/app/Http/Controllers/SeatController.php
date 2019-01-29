<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seat;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class SeatController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->json()->all();
        $sql = "select * from seats";
        $response = DB::select($sql);
        return $response;

    }

    public function createSeat(Request $request)
    {
        $data = $request -> json() -> all();
        $sql = "insert into seats(numeroAsiento,bus_id) values(?,?)";
        $parameters = [$data['numeroAsiento'], $data['bus_id'],];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    // public function updateSeat(Request $request,$id)
    public function updateSeat(Request $request)
     { 
        $data = $request -> json() -> all();
        $sql = "update seats set numeroAsiento = ?, bus_id = ?";
        $parameters = [$data['numeroAsiento'], $data['bus_id'],];
        $response = DB::select($sql, $parameters);
        return $response;
     }
}