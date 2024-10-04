<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function App\Helpers\vClaim;

class JmlSep extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('vclaim.jmlSep.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function proses(Request $request)
    {
        $validatedData = $request->validate([
        // 'nomor' => 'required|alpha_num|min:19|max:19',
        'nomor' => 'required|min:19|max:19',
    ]);

        $parameter1=$request->nilai;
        $parameter2=$validatedData['nomor'];
        
        $alamat="Rujukan/JumlahSEP/".$parameter1."/".$parameter2;

        // return $alamat;
        
        list($peserta, $hasil)= vClaim($alamat);
        // return $hasil;
        if($hasil['metaData']['code']=='200'){
                // return $peserta;
                return view('vclaim.jmlSep.hasil', compact('peserta', 'parameter2'));
        }else{
            return Redirect()->back()->withErrors(
                                [
                                    'mgs' => [
                                        'inputan = '.$parameter1,
                                        'pesan dari bpjs',
                                        $hasil['metaData']['code'],
                                        $hasil['metaData']['message'],
                                        // $hasil['response']?:'null',                    
                                            ]                            
                                ]);

        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
