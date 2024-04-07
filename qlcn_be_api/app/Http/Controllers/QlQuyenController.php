<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\QlQuyenModel;
use Illuminate\Http\Request;

class QlQuyenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return QlQuyenModel::all();
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
        $quyen = new QlQuyenModel;
        $quyen->ten_quyen=$request->ten_quyen;
        $quyen->trang_thai=$request->trang_thai;

        $result = $quyen->save();
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
        return QlQuyenModel::where("ten_quyen","like","%".$id."%")->get();
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
        $quyen = QlQuyenModel::find($id);
        if(isset($request->ten_quyen)){
            $quyen->ten_quyen=$request->ten_quyen;
        }
        if(isset($request->trang_thai)){
            $quyen->trang_thai=$request->trang_thai;
        }
        $result = $quyen->save();
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
        $quyen = QlQuyenModel::find($id);
        $result = $quyen->delete();
        if($result){
            return "success";
        }
        else{
            return "error";
        }
    }
}