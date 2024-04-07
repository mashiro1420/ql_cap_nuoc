<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\QlNguoiDungModel;
use Illuminate\Http\Request;

class QlNguoiDungController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return QlNguoiDungModel::all();
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
        $nguoi_dung = new QlNguoiDungModel;
        $nguoi_dung->ma_nhan_vien=$request->ma_nhan_vien;
        $nguoi_dung->mat_khau=$request->mat_khau;
        $nguoi_dung->ten_nguoi_dung=$request->ten_nguoi_dung;
        $nguoi_dung->chuc_vu=$request->chuc_vu;
        $nguoi_dung->sdt=$request->sdt;
        $nguoi_dung->ngay_sinh=$request->ngay_sinh;
        $nguoi_dung->email=$request->email;
        $nguoi_dung->trang_thai=$request->trang_thai;

        $result = $nguoi_dung->save();
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
        $query = QlNguoiDungModel::query();
        if($request->has('ma_nhan_vien')){
            $query->where('ma_nhan_vien',"like","%".$request->ma_nhan_vien."%");
        }
        if($request->has('chuc_vu')){
            $query->where('chuc_vu',"like","%".$request->chuc_vu."%");
        }
        if($request->has('sdt')){
            $query->where('sdt',"like","%".$request->sdt."%");
        }
        if($request->has('ten_nguoi_dung')){
            $query->where('ten_nguoi_dung',"like","%".$request->ten_nguoi_dung."%");
        }
        if($request->has('email')){
            $query->where('email',"like","%".$request->email."%");
        }
        if($request->has('ngay_sinh')){
            $query->where('ngay_sinh',$request->ngay_sinh);
        }
        if($request->has('trang_thai')){
            $query->where('trang_thai',$request->trang_thai);
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
        $nguoi_dung = QlNguoiDungModel::find($id);
        if(isset($request->mat_khau)){
            $nguoi_dung->mat_khau=$request->mat_khau;
        }
        if(isset($request->ten_nguoi_dung)){
            $nguoi_dung->ten_nguoi_dung=$request->ten_nguoi_dung;
        }
        if(isset($request->chuc_vu)){
            $nguoi_dung->chuc_vu=$request->chuc_vu;
        }
        if(isset($request->sdt)){
            $nguoi_dung->sdt=$request->sdt;
        }
        if(isset($request->ngay_sinh)){
            $nguoi_dung->ngay_sinh=$request->ngay_sinh;
        }
        if(isset($request->email)){
            $nguoi_dung->email=$request->email;
        }
        if(isset($request->trang_thai)){
            $nguoi_dung->trang_thai=$request->trang_thai;
        }
        $result = $nguoi_dung->save();
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
        $nguoi_dung = QlNguoiDungModel::find($id);
        $result = $nguoi_dung->delete();
        if($result){
            return "success";
        }
        else{
            return "error";
        }
    }
}