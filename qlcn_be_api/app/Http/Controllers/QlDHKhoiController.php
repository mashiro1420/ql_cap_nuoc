<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\QlDHKhoiModel;
use Illuminate\Http\Request;

class QlDHKhoiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return QlDHKhoiModel::all();
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
        $dong_ho_khoi = new QlDHKhoiModel;
        $dong_ho_khoi->ten_dong_ho_khoi=$request->ten_dong_ho_khoi;
        $dong_ho_khoi->ma_loai_dong_ho=$request->ma_loai_khach_hang;
        $dong_ho_khoi->tinh_trang=$request->tinh_trang;
        $dong_ho_khoi->so_tieu_thu=$request->so_tieu_thu;
        $dong_ho_khoi->ma_lich_su=$request->ma_lich_su;
        $dong_ho_khoi->so_tieu_thu_cu=$request->so_tieu_thu_cu;
        $dong_ho_khoi->chi_so_cu=$request->chi_so_cu;
        $dong_ho_khoi->trang_thai_dong_ho=$request->trang_thai_dong_ho;
        $dong_ho_khoi->ngay_nhap=$request->ngay_nhap;
        $dong_ho_khoi->ma_co_dong_ho=$request->ma_co_dong_ho;
        $dong_ho_khoi->ma_nha_cung_cap=$request->ma_nha_cung_cap;
        $dong_ho_khoi->so_nam_hieu_luc=$request->so_nam_hieu_luc;
        $dong_ho_khoi->ma_lap_dat=$request->ma_lap_dat;
        $dong_ho_khoi->ngay_kiem_dinh=$request->ngay_kiem_dinh;
        $dong_ho_khoi->so_thang_bao_hanh=$request->so_thang_bao_hanh;

        $result = $dong_ho_khoi->save();
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
        $query = QlDHKhoiModel::select('*','ten_loai_khach_hang')
        ->join('dm_loaikhachhang','ql_gianuoc.ma_loai_khach_hang','=','dm_loaikhachhang.ma_loai_khach_hang');
        if($request->has('ma_dong_ho_khoi')){
            $query->where('ma_dong_ho_khoi',"like","%".$request->ma_dong_ho_khoi."%");
        }
        if($request->has('ten_dong_ho_khoi')){
            $query->where('ten_dong_ho_khoi',"like","%".$request->ten_dong_ho_khoi."%");
        }
        if($request->has('ma_nha_cung_cap')){
            $query->where('ma_nha_cung_cap',$request->ma_nha_cung_cap);
        }
        if($request->has('trang_thai')){
            $query->where('trang_thai',$request->trang_thai);
        }
        if($request->has('ma_co_dong_ho')){
            $query->where('ma_co_dong_ho',$request->ma_co_dong_ho);
        }
        if($request->has('ma_co_dong_ho')){
            $query->where('ma_co_dong_ho',$request->ma_co_dong_ho);
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
        $dong_ho_khoi = QlDHKhoiModel::find($id);
        if(isset($request->ten_dong_ho_khoi)){
            $dong_ho_khoi->ten_dong_ho_khoi=$request->ten_dong_ho_khoi;
        }
        if(isset($request->ma_loai_khach_hang)){
            $dong_ho_khoi->ma_loai_khach_hang=$request->ma_loai_khach_hang;
        }
        if(isset($request->gia_0_10)){
            $dong_ho_khoi->gia_0_10=$request->gia_0_10;
        }
        if(isset($request->gia_10_20)){
            $dong_ho_khoi->gia_10_20=$request->gia_10_20;
        }
        if(isset($request->gia_20_30)){
            $dong_ho_khoi->gia_20_30=$request->gia_20_30;
        }
        if(isset($request->gia_tren_30)){
            $dong_ho_khoi->gia_tren_30=$request->gia_tren_30;
        }
        $result = $dong_ho_khoi->save();
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
        $dong_ho_khoi = QlDHKhoiModel::find($id);
        $result = $dong_ho_khoi->delete();
        if($result){
            return "success";
        }
        else{
            return "error";
        }
    }
}
