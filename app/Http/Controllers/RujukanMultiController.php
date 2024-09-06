<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function App\Helpers\vClaim;

class RujukanMultiController extends Controller
{
    
    public function index() 
    {
        return view('vclaim.rujukan_multi.index');
    }

    public function proses(Request $request)
    {
        $parameter1=$request->nomor;
        $alamat="Rujukan/RS/List/Peserta/".$parameter1;
        
        list($peserta, $hasil)= vClaim($alamat);
        // return $hasil;
        if($hasil['metaData']['code']=='200'){
                return $peserta;
                // return view('vclaim.rujukan_multi.hasil', compact('peserta'));
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
