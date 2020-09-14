<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Transaksi\Transaksi;
use App\Http\Resources\TransaksiResource;
use Symfony\Component\HttpFoundation\Response;


class TransaksiController extends Controller
{
    //
    public function index(){
        return TransaksiResource::collection(Transaksi::where('status',0)->latest()->get());
    }

    public function destroy(Transaksi $transaksi){
        $transaksi->delete();
        return response('Deleted Seccessfully',Response::HTTP_OK);
    }

    public function store(Request $request){
        $trans = new Transaksi;
        $trans->id_tiket = $request->id_tiket;
        $trans->qty = $request->qty;
        $trans->status = 0;
        $trans->save();

        return response('Created Successfully',Response::HTTP_CREATED); //jika kita menggunakan HTTP_CREATED. Wajib ~ use Symfony\Component\HttpFoundation\Response ~ Lihat baris 8

    }

    public function update(Request $request,$id){

        $trans = Transaksi::find($id);
        $trans->id_tiket = $request->id_tiket;
        $trans->qty = $request->qty;
        $trans->status = $request->status;
        $trans->save();
        return response('Update Successfully',Response::HTTP_CREATED); //jika kita menggunakan HTTP_CREATED. Wajib ~ use Symfony\Component\HttpFoundation\Response ~ Lihat baris 8

    }

    public function show(Transaksi $transaksi){
        return new TransaksiResource($transaksi);

    }
}
