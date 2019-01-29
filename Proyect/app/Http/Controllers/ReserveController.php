<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserve;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class ReserveController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->json()->all();
        $sql = "select * from reserves";
        $response = DB::select($sql);
        return $response;

    }

    public function createReserve(Request $request)
    {
        $data = $request -> json() -> all();
        $sql = "insert into reserves(destino, fechaReserva, fechaSalida,persona_id) values(?,?,?,?)";
        $parameters = [$data['destino'], $data['fechaReserva'], $data['fechaSalida'], $data['persona_id']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    // public function updatePerson(Request $request,$id)
    public function updateReserve(Request $request)
     { 
        $data = $request -> json() -> all();
        $sql = "update reserves set destino = ?, fechaReserva = ?, fechaSalida = ?, persona_id = ?";
        $parameters = [$data['destino'], $data['fechaReserva'], $data['fechaSalida'], $data['persona_id']];
        $response = DB::select($sql, $parameters);
        return $response;
     }
}