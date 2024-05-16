<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\PerawatanImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class PerawatanController extends Controller
{
    public function import_excel(){
        $this->validate(request(), [
            'file' => 'required|mimes:xls,xlsx'
        ]);

        $file = request()->file('file');

        $nama_file = $file->getClientOriginalName();

        $file->move('file', $nama_file);

        Excel::import(new PerawatanImport, public_path('/file/'.$nama_file));

        Session::flash('sukses', 'Data Berhasil');

        return redirect('/');
    }
}
