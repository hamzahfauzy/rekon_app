<?php

namespace App\Http\Controllers;
// require 'vendor/autoload.php';

use App\Models\Employee;
use Illuminate\Http\Request;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class EmployeeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->employee = new Employee;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees = $this->employee->paginate(20);
        return view('employees.index',compact('employees'));
    }

    public function import()
    {
        return view('employees.import');
    }
    public function getdataemployee()
    {
        $employees = Employee::all();
        $no = 1;
        $data = array();
        foreach($employees as $employee){
            $data[] = [
                $no, $employee->pns_id, $employee->nip, $employee->nama, $employee->no_hp, $employee->email, $employee->email_gov,'
                    <a href="'.route('employees.edit',$employee->id).'" class="btn btn-warning btn-sm">Edit</a>
                    <a href="" class="btn btn-danger btn-sm">Hapus</a>
                '
            ];
            $no++;
        }
        echo json_encode(["data"=> $data]);
        return false;
    }

    public function storeimport(Request $request)
    {   
        try {
            $file = $request->file('file_import');
            $file_import     = $file->getRealPath();

            $reader          = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xls');
            $worksheetData   = $reader->load($file_import);
            $worksheet       = $worksheetData->getActiveSheet();
            echo "<pre>";
            $data = array();
            $no = 1;
            foreach ($worksheet->getRowIterator() as $row) {
                if($no==1){$no++;continue;}
                $cellIterator = $row->getCellIterator();
                $cellIterator->setIterateOnlyExistingCells(FALSE);
                $dt = array();
                $dt2 = array();
                foreach ($cellIterator as $cell) {
                        $dt[] = $cell->getValue();
                }
                $dt2 =[
                    'pns_id'        => $dt[0],
                    'nip'           => $dt[1],
                    'nama'          => $dt[2],
                    'email'         => $dt[3],
                    'email_gov'     => $dt[4],
                ];
                $data[] = $dt2;
                $no++;
            }

            Employee::upsert($data, ['pns_id', 'nip'], [ 'email','email_gov']);

            print_r($data);




        } catch(\PhpOffice\PhpSpreadsheet\Reader\Exception $e) {
            die('Error loading file: '.$e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
        return view('employees.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
        $employee->update($request->all());
        return redirect()->route('employees.index')->with('status', 'Data pegawai berhasil di edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
