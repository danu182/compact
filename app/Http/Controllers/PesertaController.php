<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Monolog\Handler\IFTTTHandler;

use function App\Helpers\formatDate;
use function App\Helpers\headersVclaim;
use function App\Helpers\olah;
use function App\Helpers\url;
use function App\Helpers\vClaim;

class PesertaController extends Controller
{
    
    public function index() 
    {
        return view('vclaim.peserta.index');
    }

    public function proses(Request $request )
    {
        // return view('vclaim.peserta.hasil');

        $parameter1=$request->nomor;
        $parameter2= formatDate($request->tanggal1);
        $nilai=$request->nilai;

        if($nilai==0){
            $alamat="Peserta/nokartu/".$parameter1."/tglSEP/".$parameter2;
        }else{
            $alamat="Peserta/nik/".$parameter1."/tglSEP/".$parameter2;
        }

        list($peserta, $hsl)= vClaim($alamat);
        if($hsl['metaData']['code']=='200'){
                // return $peserta;
                return view('vclaim.peserta.hasil', compact('peserta'));
        }else{
            return Redirect()->back()->withErrors(
                                [
                                    'mgs' => [
                                        'inputan = '.$parameter1,
                                        'pesan dari bpjs',
                                        $hsl['metaData']['code'],
                                        $hsl['metaData']['message'],
                                        $hsl['response']?:'null',                    
                                            ]                            
                                ]);

        }


    }
}
