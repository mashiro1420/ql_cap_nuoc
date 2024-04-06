<?php

namespace App\Http\Controllers;

use App\Models\DmCoDongHoModel;
use Illuminate\Http\Request;

class DmCoDongHoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DmCoDongHoModel::all();
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
        $co_dong_ho = new DmCoDongHoModel;
        $co_dong_ho->ten_co_dong_ho=$request->ten_co_dong_ho;

        $result = $co_dong_ho->save();
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
        return DmCoDongHoModel::where("ten_co_dong_ho","like","%".$id."%")->get();
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
        $co_dong_ho = DmCoDongHoModel::find($id);
        if(isset($request->ten_co_dong_ho)){
            $co_dong_ho->ten_co_dong_ho=$request->ten_co_dong_ho;
        }
        if(isset($request->diachi)){
            $co_dong_ho->diachi=$request->diachi;
        }
        $result = $co_dong_ho->save();
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
        $co_dong_ho = DmCoDongHoModel::find($id);
        $result = $co_dong_ho->delete();
        if($result){
            return "success";
        }
        else{
            return "error";
        }
    }
}
