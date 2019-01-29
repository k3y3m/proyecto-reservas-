<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReservaDetail;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class ReservaDetailController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->json()->all();
        $sql = "select * from reserve_datails";
        $response = DB::select($sql);
        return $response;

    }

    public function createReservaDetail(Request $request)
    {
        $data = $request -> json() -> all();
        $sql = "insert into reserve_datails(totalPrecio, seat_id, reserve_id) values(?,?,?)";
        $parameters = [$data['totalPrecio'], $data['seat_id'], $data['reserve_id']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    // public function updateReservaDetail(Request $request,$id)
    public function updateReservaDetail(Request $request)
     { 
        $data = $request -> json() -> all();
        $sql = "update reserve_datails set totalPrecio = ?, seat_id = ?, reserve_id = ?";
        $parameters = [$data['totalPrecio'], $data['seat_id'], $data['reserve_id']];
        $response = DB::select($sql, $parameters);
        return $response;
     }
}