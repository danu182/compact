<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function App\Helpers\formatDate;
use function App\Helpers\vClaim;

class DataHistoriPelayananPesertaController extends Controller
{
    public function index() 
    {
        $judul="Data Histori Pelayanan Peserta";
        return view('vclaim.DataHistoriPelayananPeserta.index', compact('judul'));
    }

    public function proses(Request $request)
    {
        $parameter1 =$request->nomor;
        $parameter2 = formatDate($request->tanggal1);
        $parameter3 = formatDate($request->tanggal2);

        $alamat="monitoring/HistoriPelayanan/NoKartu/".$parameter1."/tglMulai/".$parameter2."/tglAkhir/".$parameter3;
        // return $alamat;

        list($peserta, $hasil)= vClaim($alamat);
        // return $hasil;
        if($hasil['metaData']['code']=='200'){
                // return $peserta;
                return view('vclaim.DataHistoriPelayananPeserta.hasil', compact('peserta', 'parameter1'));
        }else{
            return Redirect()->back()->withErrors(
                                [
                                    'mgs' => [
                                        'inputan = '.$parameter1,
                                        'pesan dari bpjs',
                                        $hasil['metaData']['code'],
                                        $hasil['metaData']['message'],
                                        $hasil['response']?:'null',                    
                                            ]                            
                                ]);

        }
    
    }


}
