<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;

class infoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $info = Info::all();
        return view('project.info.croud',compact("info"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project.info.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $info = new Info();
        $info->name=$request->name;
        $info->shortDisc=$request->shortDisc;
        $info->longDisc=$request->longDisc;

        $file = $request->image;
        $fileName = time().'.'.$file->getClientOriginalExtension();
        $request->image->move(public_path('newFile'),$fileName);
        $info->url = $fileName;


        $info->save();
        return redirect("addInfo");
        
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
        $info = Info::find($id);
        return view('project.info.edit',compact('info'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $info = Info::find($id);
        $info->name=$request->name;
        $info->shortDisc=$request->shortDisc;
        $info->longDisc=$request->longDisc;

        $file = $request->image;
        $fileName = time().'.'.$file->getClientOriginalExtension();
        $request->image->move(public_path('newFile'),$fileName);
        $info->url = $fileName;


        $info->save();
        return redirect("addInfo");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $info = Info::find($id);
        $info->delete();
        return redirect("addInfo");

    }
}
