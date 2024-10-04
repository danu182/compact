<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function App\Helpers\vClaim;

class RujukanSingleController extends Controller
{
    public function index()
    {
        return view('vclaim.rujukan_multi.index');
    }


    public function proses(Request $request)
    {
        $validatedData = $request->validate([
            'nomor' => 'required|numeric',
        ]);
        $parameter1=$validatedData['nomor'];
        $nilai=$request->nilai;
        
        if($nilai==0){
            $alamat="Rujukan/List/Peserta/".$parameter1;
        }else{
            $alamat="Rujukan/RS/List/Peserta/".$parameter1;
        }
        
        list($data, $hsl)= vClaim($alamat);
        // return $data;    
        if($hsl['metaData']['code']=='200'){
                // return $data;
                return view('vclaim.rujukan_multi.hasil', ['dataPasien' => $data['rujukan']]);
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

    public function single() 
    {
        
    }
    public function singleProses(Request $request) 
    {
        
    }
}
