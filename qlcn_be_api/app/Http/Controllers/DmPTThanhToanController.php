<?php

namespace App\Http\Controllers;

use App\Models\DmPTThanhToanModel;
use Illuminate\Http\Request;

class DmPTThanhToanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DmPTThanhToanModel::all();
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
        $phuong_thuc_thanh_toan = new DmPTThanhToanModel;
        $phuong_thuc_thanh_toan->ten_phuong_thuc_thanh_toan=$request->ten_phuong_thuc_thanh_toan;

        $result = $phuong_thuc_thanh_toan->save();
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
        return DmPTThanhToanModel::where("ten_phuong_thuc_thanh_toan","like","%".$id."%")->get();
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
        $phuong_thuc_thanh_toan = DmPTThanhToanModel::find($id);
        if(isset($request->ten_phuong_thuc_thanh_toan)){
            $phuong_thuc_thanh_toan->ten_phuong_thuc_thanh_toan=$request->ten_phuong_thuc_thanh_toan;
        }
        $result = $phuong_thuc_thanh_toan->save();
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
        $phuong_thuc_thanh_toan = DmPTThanhToanModel::find($id);
        $result = $phuong_thuc_thanh_toan->delete();
        if($result){
            return "success";
        }
        else{
            return "error";
        }
    }
}
