<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\AddItems;
use App\Project;

class DashboardController extends Controller
{
    public function index()
    {
        $add_item = AddItems::all();
        // $test = "test";
        // dd($add_item);
        $timeline = Project::all();
    	return view ('dashboard', compact('add_item' , 'timeline'));
    }


    public function store(Request $request)
    {
    	$item = new AddItems;
        $item->material_name = $request->material_name;
        $item->item_code = $request->item_code;
        $item->group = $request->group;
        $item->uom = $request->uom;

        $item->save();

        return redirect('/add_item');

    }

    public function add_item()
    {
        // Soft Deletes Restore
        // AddItems::withTrashed()->restore();

    	$add_item = AddItems::all();
        // dd($add_item->toArray());
    	return view ('/add_item' , ['add_item' => $add_item]);
    }

    public function modal()
    {
        // Soft Deletes Restore
        // AddItems::withTrashed()->restore();

        $modal = AddItems::all();
        return view ('/modal' , ['modal' => $modal]);

    }

     public function show($id)
     {
        $add_item = AddItems::all();
        $item = AddItems::find($id);
        return view ('/edit' , compact('add_item', 'item'));
     }

    public function update(Request $request , $id)
    {
        $item = AddItems::find($id);
        $item->material_name = $request->material_name;
        $item->item_code = $request->item_code;
        $item->group = $request->group;
        $item->uom = $request->uom;
        $item->save();
        
        return redirect('/add_item');

    }

    public function destroy($id)
    {

        $item = AddItems::find($id);
        $item->delete();

        return redirect('/add_item');
    }

    public function laporan()
    {
        $add_item = AddItems::all();
        return view ('/laporan' , compact('add_item'));
    }

    public function hehe()
    {
        $report = AddItems::all();

        return view('print_master', compact('report'));
    }

    public function hasil(Request $request)
    {
        $awal = $request->dari_tanggal;
        $akhir = $request->sampai_tanggal;
        $laporan = $request->laporan;
        
        if ($request->laporan == 'Laporan Pengiriman') {
            $report = DB::table('project')->where('stuffing_date' , '>=' , $awal)->where('stuffing_date' , '<=' , $akhir)->get();
        }elseif ($request->laporan == 'Laporan Penerimaan') {
            $report = DB::select("
                    SELECT * FROM project WHERE at_received IS NOT null AND stuffing_date >= '$awal'
                ");
        }else{
            $report = AddItems::all();
            $pdf = PDF::loadView('/print_master', compact('report' , 'awal' , 'akhir' , 'laporan'));
            // dd($report);
            return $pdf->download('Master_Data.pdf');
        }




        // else{
        //     $report = DB::table('project')->where('at_received' , '!=' , null)->get();
        // }
        $add_item = AddItems::all();
        $pdf = PDF::loadView('/hasil', compact('report' , 'awal' , 'akhir' , 'laporan'));
        return $pdf->download('invoice.pdf');
        // return view('/hasil' , compact('add_item', 'report'));

    }

    public function export()
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();
    }


}
