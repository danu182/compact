<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use function App\Helpers\formatDate;
use function App\Helpers\vClaim;

class DataHistoriPelayananPesertaController extends Controller
{
    public function index() 
    {
        $judul="Data Histori Pelayanan Peserta";
        return view('vclaim.DataHistoriPelayananPeserta.index', compact('judul'));
    }

    public function proses(Request $request)
    {


         $validatedData = $request->validate([
            'nomor' => 'required|numeric',
        ]);

        // return $validatedData;

        $parameter3 = formatDate($request->tanggal2);
        // $today = Carbon::now();
        $tanggalCarbon = Carbon::parse($parameter3);

        // Mengurangi 90 hari
        $ninetyDaysAgo = $tanggalCarbon->subDays(90);

        // Memformat tanggal sesuai keinginan (misal: d-m-Y)
        $formattedDate = $ninetyDaysAgo->format('Y-m-d');
        
        $parameter1 =$validatedData['nomor'];
            $parameter2 = formatDate($formattedDate);
        
        $alamat="monitoring/HistoriPelayanan/NoKartu/".$parameter1."/tglMulai/".$parameter2."/tglAkhir/".$parameter3;
        // return $alamat;

        list($peserta, $hasil)= vClaim($alamat);
        // return $hasil;
        if($hasil['metaData']['code']=='200'){
                // return $peserta;
                return view('vclaim.DataHistoriPelayananPeserta.hasil', compact('peserta', 'parameter1','parameter2','parameter3'));
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
