<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\QlNguoiDungModel;
use App\Models\QlPhanQuyenModel;
use App\Models\QlQuyenModel;
use Illuminate\Http\Request;

class QlPhanQuyenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phan_quyen = QlPhanQuyenModel::select('ql_phanquyen.ma_quyen', 'ten_quyen', 'ql_phanquyen.ma_nhan_vien', 'ten_nguoi_dung', 'chuc_vu')
        ->join('ql_nguoidung','ql_phanquyen.ma_nhan_vien','=','ql_nguoidung.ma_nhan_vien')
        ->join('ql_quyen','ql_phanquyen.ma_quyen','=','ql_quyen.ma_quyen');
        // $quyen = QlQuyenModel::all();
        // $nguoi_dung = QlNguoiDungModel::all();
        return $phan_quyen->get();
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
        $phan_quyen = new QlPhanQuyenModel;
        $phan_quyen->ma_nhan_vien=$request->ma_nhan_vien;
        $phan_quyen->ma_quyen=$request->ma_quyen;

        $result = $phan_quyen->save();
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
        $query = QlPhanQuyenModel::select('ql_phanquyen.ma_quyen', 'ten_quyen', 'ql_phanquyen.ma_nhan_vien', 'ten_nguoi_dung', 'chuc_vu')
        ->join('ql_nguoidung','ql_phanquyen.ma_nhan_vien','=','ql_nguoidung.ma_nhan_vien')
        ->join('ql_quyen','ql_phanquyen.ma_quyen','=','ql_quyen.ma_quyen');
        if($request->has('ma_nhan_vien')){
            $query->where('ma_nhan_vien',"like","%".$request->ma_nhan_vien."%");
        }
        if($request->has('ma_quyen')){
            $query->where('ma_quyen',"like","%".$request->ma_quyen."%");
        }
        if($request->has('ten_nguoi_dung')){
            $query->where('ten_nguoi_dung',"like","%".$request->ten_nguoi_dung."%");
        }
        if($request->has('ten_quyen')){
            $query->where('ten_quyen',"like","%".$request->ten_quyen."%");
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
    public function update(Request $request, string $id1, string $id2)
    {
        $phan_quyen = QlPhanQuyenModel::where('ma_nhan_vien',$id1)->where('ma_quyen',$id2);
        if(isset($request->ma_nhan_vien)){
            $phan_quyen->ma_nhan_vien=$request->ma_nhan_vien;
        }
        if(isset($request->ma_quyen)){
            $phan_quyen->ma_quyen=$request->ma_quyen;
        }
        
        $result = $phan_quyen->save();
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
        $phan_quyen = QlPhanQuyenModel::find($id);
        $result = $phan_quyen->delete();
        if($result){
            return "success";
        }
        else{
            return "error";
        }
    }
}