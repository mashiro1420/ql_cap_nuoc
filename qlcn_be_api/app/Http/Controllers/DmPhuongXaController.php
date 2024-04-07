<?php

namespace App\Http\Controllers;

use App\Models\DmPhuongXaModel;
use Illuminate\Http\Request;

class DmPhuongXaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DmPhuongXaModel::all();
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
        $phuong_xa = new DmPhuongXaModel;
        $phuong_xa->ten_phuong_xa=$request->ten_phuong_xa;
        $phuong_xa->ma_quan_huyen=$request->ma_quan_huyen;

        $result = $phuong_xa->save();
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
        return DmPhuongXaModel::where("ten_phuong_xa","like","%".$id."%")->get();
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
        $phuong_xa = DmPhuongXaModel::find($id);
        if(isset($request->ten_phuong_xa)){
            $phuong_xa->ten_phuong_xa=$request->ten_phuong_xa;
        }
        if(isset($request->ma_quan_huyen)){
            $phuong_xa->ma_quan_huyen=$request->ma_quan_huyen;
        }
        $result = $phuong_xa->save();
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
        $phuong_xa = DmPhuongXaModel::find($id);
        $result = $phuong_xa->delete();
        if($result){
            return "success";
        }
        else{
            return "error";
        }
    }
}
