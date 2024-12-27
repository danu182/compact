<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function App\Helpers\formatDate;
use function App\Helpers\vClaim;

class DataNomorSuratKontrolController extends Controller
{

public function index()
{
    $judul="surat kontrol";
    return view('vclaim.suratKontrol.index');
}


public function proses(Request $request)
{

    // Parameter 1: Tanggal awal format : yyyy-MM-dd

    // Parameter 2: Tanggal akhir format : yyyy-MM-dd

    // Parameter 3: Format filter --> 1: tanggal entri, 2: tanggal rencana kontrol
    // return $request->all();
    $validatedData = $request->validate([
        'filter_' => 'required|in:1,2',
        'tanggalAwal'=>'required|',
        'tanggalAkhir'=>'required|date',
    ]);

    $parameter1 = formatDate($validatedData['tanggalAwal']);
    $parameter2 = formatDate($validatedData['tanggalAkhir']);
    $parameter3 = $request->filter_;

    
    $alamat="RencanaKontrol/ListRencanaKontrol/tglAwal/".$parameter1."/tglAkhir/".$parameter1."/filter/".$parameter3;
    
    // return $alamat;
    list($surkon, $hsl)= vClaim($alamat);
    
    
    if($hsl['metaData']['code']=='200'){
            // dd($surkon);
            return view('vclaim.suratKontrol.hasil', compact('surkon'));
    }else{
        return Redirect()->back()->withErrors(
                            [
                                'mgs' => [
                                    'tanggal awal = '.$parameter1,
                                    'tanggal akhir = '.$parameter2,
                                    'berdawarkan = '.$parameter2,
                                    'pesan dari bpjs',
                                    $hsl['metaData']['code'],
                                    $hsl['metaData']['message'],
                                    $hsl['response']?:'null',                    
                                        ]                            
                            ]);

    }
}


public function surKonByNoKa()
{
    $judul="surat kontrol";
    return view('vclaim.suratKontrol.indexSurKonByNoKa');
}

public function surKonByNoKaProses(Request $request)
{
    $validatedData = $request->validate([
        'Parameter1' =>'required|numeric',
        'Parameter2'=>'required|numeric',
        'Parameter3'=>'required',
        'Parameter4'=>'required|numeric',
    ]);

    $parameter1 = ($validatedData['Parameter1']);
    $parameter2 = ($validatedData['Parameter2']);
    $parameter3 = ($validatedData['Parameter3']);
    $parameter4 = ($validatedData['Parameter4']);
    
    // $parameter1 = formatDate($validatedData['tanggalAwal']);
    // $parameter2 = formatDate($validatedData['tanggalAkhir']);
    // $parameter3 = $request->Parameter1;


    
    // $alamat="RencanaKontrol/ListRencanaKontrol/tglAwal/".$parameter1."/tglAkhir/".$parameter1."/filter/".$parameter3;

    $alamat= "RencanaKontrol/ListRencanaKontrol/Bulan/". $parameter1 ."/Tahun/". $parameter2 . "/Nokartu/". $parameter3 . "/filter/". $parameter4;

    // return $alamat;
    list($surkon, $hsl)= vClaim($alamat);
    
    // return $surkon;
    if($hsl['metaData']['code']=='200'){
            // dd($surkon);
            return view('vclaim.suratKontrol.hasilByNoKa', compact('surkon'));
    }else{
        return Redirect()->back()->withErrors(
                            [
                                'mgs' => [
                                    'tanggal awal = '.$parameter1,
                                    'tanggal akhir = '.$parameter2,
                                    'berdawarkan = '.$parameter2,
                                    'pesan dari bpjs',
                                    $hsl['metaData']['code'],
                                    $hsl['metaData']['message'],
                                    $hsl['response']?:'null',                    
                                        ]                            
                            ]);

    }
}






}
