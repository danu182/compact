<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function App\Helpers\headersVclaim;

class PesertaController extends Controller
{
    
    public function index() 
    {
        return view('vclaim.peserta.index');
    }

    public function proses(Request $request )
    {
        return $request->all();
    }

}
