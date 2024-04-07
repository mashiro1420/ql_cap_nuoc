<?php

namespace App\Http\Controllers;

use App\Models\DmQuanHuyenModel;
use Illuminate\Http\Request;

class DmQuanHuyenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DmQuanHuyenModel::all();
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
        $quan_huyen = new DmQuanHuyenModel;
        $quan_huyen->ten_quan_huyen=$request->ten_quan_huyen;

        $result = $quan_huyen->save();
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
        return DmQuanHuyenModel::where("ten_quan_huyen","like","%".$id."%")->get();
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
        $quan_huyen = DmQuanHuyenModel::find($id);
        if(isset($request->ten_quan_huyen)){
            $quan_huyen->ten_quan_huyen=$request->ten_quan_huyen;
        }
        $result = $quan_huyen->save();
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
        $quan_huyen = DmQuanHuyenModel::find($id);
        $result = $quan_huyen->delete();
        if($result){
            return "success";
        }
        else{
            return "error";
        }
    }
}
