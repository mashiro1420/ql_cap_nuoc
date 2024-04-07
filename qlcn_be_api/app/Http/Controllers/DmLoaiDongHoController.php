<?php

namespace App\Http\Controllers;

use App\Models\DmLoaiDongHoModel;
use Illuminate\Http\Request;

class DmLoaiDongHoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DmLoaiDongHoModel::all();
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
        $loai_dong_ho = new DmLoaiDongHoModel;
        $loai_dong_ho->ten_loai_dong_ho=$request->ten_loai_dong_ho;

        $result = $loai_dong_ho->save();
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
        return DmLoaiDongHoModel::where("ten_loai_dong_ho","like","%".$id."%")->get();
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
        $loai_dong_ho = DmLoaiDongHoModel::find($id);
        if(isset($request->ten_loai_dong_ho)){
            $loai_dong_ho->ten_loai_dong_ho=$request->ten_loai_dong_ho;
        }
        $result = $loai_dong_ho->save();
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
        $loai_dong_ho = DmLoaiDongHoModel::find($id);
        $result = $loai_dong_ho->delete();
        if($result){
            return "success";
        }
        else{
            return "error";
        }
    }
}
