<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function welcome()
    {
        return view('welcome', array('employee' => array()));
    }

    public function cari($nip)
    {
        $employee = Employee::where('nip', $nip)->first();
        if (!$employee) {
            return redirect()->route('welcome')->with('status', 'Data pegawai tidak ditemukan !');
        }


        return view('welcome', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        //
        return view('page.edit', compact('employee'));
    }

    public function updatePegawai(Request $request, Employee $employee)
    {
        //
        $employee->update($request->all());
        return redirect()->route('welcome')->with('sukses', 'Data pegawai berhasil di edit!');
    }
}
