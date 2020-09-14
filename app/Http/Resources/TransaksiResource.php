<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransaksiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'nama_tiket'=>$this->RelasiTiket->nama_tiket,
            'qty'=>$this->qty,
            'status'=>$this->status,
            'harga_tiket'=>$this->RelasiTiket->harga_tiket,
            'created_at'=>$this->created_at,
        ];
    }
}
