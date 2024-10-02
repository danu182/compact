<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function App\Helpers\Antrean;
use function App\Helpers\formatDate;

class AntreanController extends Controller
{
    public function index()
    {
        return view('vclaim.antrean.index');
    }

    public function proses(Request $request)
    {

        // return $request->tanggal;
        
        $tgl1 = $request->validate([
                'tanggal' => 'date|before:tomorrow',
            ]);
        $tanggal = formatDate(implode($tgl1));
        
        $alamat="antrean/pendaftaran/tanggal/".$tanggal;

        list($peserta, $hasil)= Antrean($alamat);
        // return $peserta;
        if($hasil['metadata']['code']=='200'){
                // return $peserta;
                return view('vclaim.antrean.hasil', compact('peserta', 'tanggal'));
        }else{
            return Redirect()->back()->withErrors(
                                [
                                    'mgs' => [
                                        'inputan = '.$tanggal,
                                        'pesan dari bpjs',
                                        $hasil['metaData']['code'],
                                        $hasil['metaData']['message'],
                                        $hasil['response']?:'null',                    
                                            ]                            
                                ]);

        }
        
          
    }
}
