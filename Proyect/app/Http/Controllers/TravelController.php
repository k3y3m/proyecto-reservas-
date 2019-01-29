<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class TravelController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->json()->all();
        $sql = "select * from travels";
        $response = DB::select($sql);
        return $response;

    }

    public function createTravel(Request $request)
    {
        $data = $request -> json() -> all();
        $sql = "insert into travels(destinos,fechaSalida, fechaLlegada) values(?,?,?)";
        $parameters = [$data['destinos'], $data['fechaSalida'], $data['fechaLlegada']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    // public function updateTravel(Request $request,$id)
    public function updateTravel(Request $request)
     { 
        $data = $request -> json() -> all();
        $sql = "update travels set destinos = ?, fechaSalida = ?, fechaLlegada = ?";
        $parameters = [$data['destinos'], $data['fechaSalida'], $data['fechaLlegada']];
        $response = DB::select($sql, $parameters);
        return $response;
     }
}