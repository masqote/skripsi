<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Project;
use App\DetailProject;
use App\AddItems;
// use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function store(Request $request)
    {

        $c = count($request->material);
        for($x=0; $x < $c; $x++){
        	$detailProject = new DetailProject;
        	$detailProject->internal_number = $request->internal_number;
        	$detailProject->item = $request->material[$x];
        	$detailProject->qty = $request->qty[$x];
        	$detailProject->save();
        }

    	// dd(count($request->material));
    	$project = new Project;
        $project->internal_number = $request->internal_number;
        $project->original_port = $request->original_port;
        $project->destination_port = $request->destination_port;
        $project->container_no = $request->container_no;
        $project->seal_no = $request->seal_no;
        $project->container_size = $request->container_size;
        $project->local_export = $request->local_export;
        $project->stuffing_date = $request->stuffing_date;
        $project->surat_jalan = $request->surat_jalan;
        $project->save();

        

        return redirect('/list_project');

    }

    public function index()
    {
    	$add_item = AddItems::all();
    	// $list = DB::table('project')->whereNull('at_received')->get()->toArray();
    	$list = Project::all();
    	return view ('/list_project' , compact('add_item') , compact('list'));
    }



    public function show($id)
    {
    	$add_item = AddItems::all();
    	$edit = Project::find($id);
    	$item = DB::table('project')
    			->join('detail_project', 'project.internal_number', 'detail_project.internal_number')
    			->join('additem', 'detail_project.item', 'additem.id')
    			->where('project.id', $id)
    			->get()
    			->toArray();
    	// dd($item);
    	return view('/edit_project' , compact('edit' , 'add_item', 'item'));
    }

    public function update(Request $request , $id)
    {
    	$update = Project::find($id);
    	$update->at_harbor = $request->at_harbor;
    	$update->at_sea = $request->at_sea;
    	$update->at_landed = $request->at_landed;
    	$update->at_received = $request->received;
        $update->tanda_terima = $request->tanda_terima;
    	$update->save();

    	return redirect('/list_project/' . $id);
    }

    public function edit($id)
     {
		$add_item = AddItems::all();
    	$item = Project::find($id);
    	$item1 = DB::table('project')
    			->join('detail_project', 'project.internal_number', 'detail_project.internal_number')
    			->join('additem', 'detail_project.item', 'additem.id')
    			->where('project.id', $id)
    			->get()
    			->toArray();
    	return view('/edit_list_project' , compact('item' , 'add_item','item1'));
     	// $edit = Project::find($id);
     	// // return ('owa owa' . $id);
     	// $add_item = AddItems::all();
      //   $edit = find::($id);
      //   return view ('/edit_list_project' , compact('add_item', 'edit'));
     }

     public function destroy($id)
    {

        $item = Project::find($id);
        $item->delete();

        return redirect('/list_project');
    }

    public function track(Request $request)
    {
        $trackNo = $request->track_no;
        $add_item = AddItems::all();
        $edit = DB::table('project')->where('project.internal_number', $trackNo)->first();
        $item = DB::table('project')
                ->join('detail_project', 'project.internal_number', 'detail_project.internal_number')
                ->join('additem', 'detail_project.item', 'additem.id')
                ->where('project.internal_number', $trackNo)
                ->get()
                ->toArray();
        if($edit != null)
            return view('/tracking', compact('edit' , 'add_item','item'));
        else
            return view('/dashboard', compact('add_item'));
    }
}
