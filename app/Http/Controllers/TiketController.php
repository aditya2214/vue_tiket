<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Tiket\Tiket;
use App\Http\Resources\TiketResource;
use Symfony\Component\HttpFoundation\Response;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return TiketResource::collection(Tiket::latest()->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $category = Tiket::create($request->all());
        return response(new TiketResource($category),Response::HTTP_CREATED); //jika kita menggunakan HTTP_CREATED. Wajib ~ use Symfony\Component\HttpFoundation\Response ~ Lihat baris 8

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tiket $tiket)
    {
        //
        return new TiketResource($tiket);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tiket $tiket)
    {
        //
        $tiket->update($request->all());
        return response('Updated Successfully',Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tiket $tiket)
    {
        //
        $tiket->delete();

        return response('Deleted Seccessfully',Response::HTTP_OK);
    }
}
