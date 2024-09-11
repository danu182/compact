<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function App\Helpers\formatDate;
use function App\Helpers\vClaim;

class DataKunjunganController extends Controller
{
    
    public function index()
    {
        $judul="Data Kunjungan";
        return view('vclaim.dataKunjungan.index', compact('judul'));
    }

    public function proses(Request $request)
    {
        $parameter1=$request->nilai;
        $parameter2= formatDate($request->tanggal1);


        $alamat="Monitoring/Kunjungan/Tanggal/".$parameter2."/JnsPelayanan/".$parameter1;
        
        list($seps, $hsl)= vClaim($alamat);
        if($hsl['metaData']['code']=='200'){
                // return $seps;
                return view('vclaim.dataKunjungan.hasil', compact('seps','parameter1','parameter2'));
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


        // $nilai=$request->nilai;
    }

}
