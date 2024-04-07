<?php

namespace App\Http\Controllers;

use App\Models\DmLoaiKhachHangModel;
use Illuminate\Http\Request;

class DmLoaiKhachHangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DmLoaiKhachHangModel::all();
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
        $loai_khach_hang = new DmLoaiKhachHangModel;
        $loai_khach_hang->ten_loai_khach_hang=$request->ten_loai_khach_hang;

        $result = $loai_khach_hang->save();
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
        return DmLoaiKhachHangModel::where("ten_loai_khach_hang","like","%".$id."%")->get();
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
        $loai_khach_hang = DmLoaiKhachHangModel::find($id);
        if(isset($request->ten_loai_khach_hang)){
            $loai_khach_hang->ten_loai_khach_hang=$request->ten_loai_khach_hang;
        }

        $result = $loai_khach_hang->save();
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
        $loai_khach_hang = DmLoaiKhachHangModel::find($id);
        $result = $loai_khach_hang->delete();
        if($result){
            return "success";
        }
        else{
            return "error";
        }
    }
}
