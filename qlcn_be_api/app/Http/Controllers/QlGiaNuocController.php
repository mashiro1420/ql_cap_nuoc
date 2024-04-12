<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\QlGiaNuocModel;
use Illuminate\Http\Request;

class QlGiaNuocController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $index = QlGiaNuocModel::select('ma_nhom_gia','ten_nhom_gia','dm_loaikhachhang.ten_loai_khach_hang','gia_0_10','gia_10_20','gia_20_30','gia_tren_30')
        ->join('dm_loaikhachhang','ql_gianuoc.ma_loai_khach_hang','=','dm_loaikhachhang.ma_loai_khach_hang');
        return $index->get();
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
        $nhom_gia = new QlGiaNuocModel;
        $nhom_gia->ten_nhom_gia=$request->ten_nhom_gia;
        $nhom_gia->ma_loai_khach_hang=$request->ma_loai_khach_hang;
        $nhom_gia->gia_0_10=$request->gia_0_10;
        $nhom_gia->gia_10_20=$request->gia_10_20;
        $nhom_gia->gia_20_30=$request->gia_20_30;
        $nhom_gia->gia_tren_30=$request->gia_tren_30;

        $result = $nhom_gia->save();
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
    public function show(Request $request)
    {
        $query = QlGiaNuocModel::select('*','dm_loaikhachhang.ten_loai_khach_hang')
        ->join('dm_loaikhachhang','ql_gianuoc.ma_loai_khach_hang','=','dm_loaikhachhang.ma_loai_khach_hang');
        if($request->has('ma_nhom_gia')){
            $query->where('ma_nhom_gia',$request->ma_nhom_gia);
        }
        if($request->has('ten_nhom_gia')){
            $query->where('ten_nhom_gia',"like","%".$request->ten_nhom_gia."%");
        }
        if($request->has('ma_loai_khach_hang')){
            $query->where('ma_loai_khach_hang',$request->ma_loai_khach_hang);
        }
        $result = $query->get();
        return $result;
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
        $nhom_gia = QlGiaNuocModel::find($id);
        if(isset($request->ten_nhom_gia)){
            $nhom_gia->ten_nhom_gia=$request->ten_nhom_gia;
        }
        if(isset($request->ma_loai_khach_hang)){
            $nhom_gia->ma_loai_khach_hang=$request->ma_loai_khach_hang;
        }
        if(isset($request->gia_0_10)){
            $nhom_gia->gia_0_10=$request->gia_0_10;
        }
        if(isset($request->gia_10_20)){
            $nhom_gia->gia_10_20=$request->gia_10_20;
        }
        if(isset($request->gia_20_30)){
            $nhom_gia->gia_20_30=$request->gia_20_30;
        }
        if(isset($request->gia_tren_30)){
            $nhom_gia->gia_tren_30=$request->gia_tren_30;
        }
        $result = $nhom_gia->save();
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
        $nhom_gia = QlGiaNuocModel::find($id);
        $result = $nhom_gia->delete();
        if($result){
            return "success";
        }
        else{
            return "error";
        }
    }
}
