<?php

namespace App\Http\Controllers;

use App\Models\DmChiNhanhModel;
use Illuminate\Http\Request;

class DmTuyenDocController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DmChiNhanhModel::all();
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
        $chi_nhanh = new DmChiNhanhModel;
        $chi_nhanh->ten_chi_nhanh=$request->ten_chi_nhanh;
        $chi_nhanh->dia_chi=$request->dia_chi;

        $result = $chi_nhanh->save();
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
        return DmChiNhanhModel::where("ten_chi_nhanh","like","%".$id."%")->get();
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
        $chi_nhanh = DmChiNhanhModel::find($id);
        if(isset($request->ten_chi_nhanh)){
            $chi_nhanh->ten_chi_nhanh=$request->ten_chi_nhanh;
        }
        if(isset($request->diachi)){
            $chi_nhanh->diachi=$request->diachi;
        }
        $result = $chi_nhanh->save();
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
        $chi_nhanh = DmChiNhanhModel::find($id);
        $result = $chi_nhanh->delete();
        if($result){
            return "success";
        }
        else{
            return "error";
        }
    }
}
