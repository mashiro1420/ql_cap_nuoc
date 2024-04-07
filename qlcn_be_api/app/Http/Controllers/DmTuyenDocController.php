<?php

namespace App\Http\Controllers;

use App\Models\DmTuyenDocModel;
use Illuminate\Http\Request;

class DmTuyenDocController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DmTuyenDocModel::all();
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
        $tuyen_doc = new DmTuyenDocModel;
        $tuyen_doc->ten_tuyen_doc=$request->ten_tuyen_doc;
        $tuyen_doc->ma_chi_nhanh=$request->ma_chi_nhanh;
        $tuyen_doc->ma_to_quan_ly=$request->ma_to_quan_ly;

        $result = $tuyen_doc->save();
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
        return DmTuyenDocModel::where("ten_tuyen_doc","like","%".$id."%")->get();
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
        $tuyen_doc = DmTuyenDocModel::find($id);
        if(isset($request->ten_tuyen_doc)){
            $tuyen_doc->ten_tuyen_doc=$request->ten_tuyen_doc;
        }
        if(isset($request->ma_chi_nhanh)){
            $tuyen_doc->ma_chi_nhanh=$request->ma_chi_nhanh;
        }
        if(isset($request->ma_to_quan_ly)){
            $tuyen_doc->ma_to_quan_ly=$request->ma_to_quan_ly;
        }
        $result = $tuyen_doc->save();
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
        $tuyen_doc = DmTuyenDocModel::find($id);
        $result = $tuyen_doc->delete();
        if($result){
            return "success";
        }
        else{
            return "error";
        }
    }
}
