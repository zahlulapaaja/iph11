<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Siswa;
 
use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class SiswaController extends Controller
{
    public function index()
    {
        // $siswa = new Siswa;
    $siswa = Siswa::all();
    // $siswa = ['a','a'];
    return view('siswa',['siswa'=>$siswa]);
    }
    
    public function export_excel()
    {
    return Excel::download(new SiswaExport, 'siswa.xlsx');
    }
}
