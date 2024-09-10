<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function App\Helpers\vClaim;

class SepController extends Controller
{
     public function index()
    {
        return view('vclaim.jmlSep.index');
    }

   
    public function proses(Request $request)
    {
        $parameter1= $request->nomor;

        $alamat="SEP/".$parameter1;
        
        list($data, $hsl)= vClaim($alamat);
        // return $data;    
        if($hsl['metaData']['code']=='200'){
                // return $data;

                return view('vclaim.sep.hasil', ['dataKlaim' => $data]);
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
