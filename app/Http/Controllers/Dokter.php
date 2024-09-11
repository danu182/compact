<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function App\Helpers\formatDate;
use function App\Helpers\vClaim;

class Dokter extends Controller
{
    public function index()
    {

        $judul="info dokter";;

        $alamat="referensi/spesialistik";
        list($spesialis, $hsl)= vClaim($alamat);
        
        if($hsl['metaData']['code']=='200'){
                // return $spesialis;
                // return view('vclaim.peserta.hasil', compact('peserta'));
                return view('vclaim.dokter.index', compact('spesialis','judul'));
        }else{
            return Redirect()->back()->withErrors(
                                [
                                    'mgs' => [
                                        // 'inputan = '.$parameter1,
                                        'pesan dari bpjs',
                                        $hsl['metaData']['code'],
                                        $hsl['metaData']['message'],
                                        $hsl['response']?:'null',                    
                                            ]                            
                                ]);

        }

        // return view('vclaim.dokter.index', compact('spesialis','judul'));
    }

    public function proses(Request $request)
    {
        $parameter1 = $request->nilai;
        $parameter2 = formatDate($request->tanggal1);
        $parameter3 = $request->spesialis;

        $alamat="referensi/dokter/pelayanan/".$parameter1."/tglPelayanan/".$parameter2."/Spesialis/".$parameter3;
        
        list($dokter, $hsl)= vClaim($alamat);
        // return $peserta;

        if($hsl['metaData']['code']=='200'){
                // return $dokter;
                return view('vclaim.dokter.hasil', compact('dokter'));
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
