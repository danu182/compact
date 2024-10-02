<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

use function App\Helpers\formatDate;
use function App\Helpers\getJadwalOperasi;
use function App\Helpers\getToken;
use function PHPUnit\Framework\returnSelf;

class JadwalOperasiController extends Controller
{
    public function index()
    {
        return view('vclaim.jadwalOperasi.index');
    }

    public function proses(Request $request)
    {
        $tgl1 = $request->validate([
                'tanggal1' => 'date|required',
                'tanggal2' => 'date|required',
            ]);

        $parameter1 = formatDate($tgl1['tanggal1']);
        $parameter2 = formatDate($tgl1['tanggal2']);
        $parameter=[
            'tanggalawal'=>$parameter1,
            'tanggalakhir'=>$parameter2,
        ];


        list($data, $jadwal)=getJadwalOperasi($parameter);
        
        if($jadwal['metadata']['code']=='200'){
            return view('vclaim.jadwalOperasi.hasil', compact('data', 'parameter'));
        }else{
            return Redirect()->back()->withErrors(
                                [
                                    'mgs' => [
                                        'Tamggal awal = '.$parameter['tanggalawal'],
                                        'Tamggal akhir = '.$parameter['tanggalakhir'],
                                        'pesan dari WS RS',
                                        $jadwal['metadata']['code'],
                                        $jadwal['metadata']['message'],
                                        // $jadwal['response']?:'null',                       
                                            ]                            
                                ]);
    }
}
}
