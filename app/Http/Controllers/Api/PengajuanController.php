<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PengajuanController extends Controller
{
    public function store(Request $request){
        $validasi = Validator::make($request->all(), [
            'pengunjung_id' => 'required',
            'berkas' => 'required',
        ]);

        if ($validasi->fails()) {
            return $this->error($validasi->errors()->first());
        }

         $berkas = $request->berkas->getClientOriginalName();  

         // format nama dengan menghilangkan spasi
         $berkas = str_replace(' ', '', $berkas);

         // membuat agar nama file tidak ada yang sama saat terupload
         $berkas = date('Hs').rand(1,999) . "_" . $berkas;

         // ambil nama file
         $fileName = $berkas;
         $request->berkas->storeAs('public/user', $berkas);

        $pengajuan = Pengajuan::create(array_merge($request->all(), [
            'status' => 'Belum diproses',
            'berkas' => $fileName
        ]));
        return $this->success($pengajuan);
    }

    // response
    public function success($data, $message = "success") {
        return response()->json([
            'code' => 200,
            'message' => $message,
            'data' => $data
        ]);
    }

    public function error($message) {
        return response()->json([
            'code' => 400,
            'message' => $message
        ], 400);
    }
}
