<?php

namespace App\Http\Controllers;

use App\Models\DmNhaCungCapModel;
use Illuminate\Http\Request;

class DmNhaCungCapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DmNhaCungCapModel::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nha_cung_cap = new DmNhaCungCapModel;
        $nha_cung_cap->ten_nha_cung_cap=$request->ten_nha_cung_cap;
        $result = $nha_cung_cap->save();
        if($result){
            return "success";
        }
        else{
            return "error";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return DmNhaCungCapModel::where("ten_nha_cung_cap","like","%".$id."%")->get();
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
        $nha_cung_cap = DmNhaCungCapModel::find($id);
        if(isset($request->ten_nha_cung_cap)){
            $nha_cung_cap->ten_nha_cung_cap=$request->ten_nha_cung_cap;
        }
        $result = $nha_cung_cap->save();
        if($result){
            return "success";
        }
        else{
            return "error";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $nha_cung_cap = DmNhaCungCapModel::find($id);
        $result = $nha_cung_cap->delete();
        if($result){
            return "success";
        }
        else{
            return "error";
        }
    }
}
