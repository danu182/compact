<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function App\Helpers\formatDate;
use function App\Helpers\iCare;
use function App\Helpers\vClaim;

class IcareController extends Controller
{
    public function index() 
    {
        $parameter1 = 1;
        $parameter2 = formatDate(date('Y-m-d H:i:s'));
        $parameter3 = 1;

        $alamat="referensi/dokter/pelayanan/".$parameter1."/tglPelayanan/".$parameter2."/Spesialis/".$parameter3;
        
        list($dokter, $hsl)= vClaim($alamat);
        
        if($hsl['metaData']['code']=='200'){
                // return $dokter;
                return view('vclaim.icare.index', compact('dokter'));
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
    
    public function proses(Request $request) 
    {
        $arr=[
            "param"=>$request->nomor,
            "kodedokter"=> (int)$request->dokter

        ];

        $nomorBpjs=$arr['param'];
        $alamat="api/rs/validate";
        // return $alamat;
        list($data, $hasil)= iCare($alamat,$arr);
        // return $hasil;
        if($hasil['metaData']['code']=='200'){
                // return $data;
                return view('vclaim.icare.hasil', compact('data','nomorBpjs'));
        }else{
            return Redirect()->back()->withErrors(
                                [
                                    'mgs' => [
                                        // 'inputan = '.$parameter1,
                                        'pesan dari bpjs',
                                        $hasil['metaData']['code'],
                                        $hasil['metaData']['message'],
                                        $hasil['response']?:'null',                    
                                            ]                            
                                ]);

        }
        return view('vclaim.icare.hasil', compact('peserta', 'parameter2'));

    }

}
