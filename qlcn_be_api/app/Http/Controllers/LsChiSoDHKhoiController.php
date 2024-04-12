<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\LsChiSoDHKhoiModel;
use Illuminate\Http\Request;

class LsChiSoDHKhoiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return LsChiSoDHKhoiModel::select('ma_lich_su','ls_chisodhkhoi.ma_dong_ho_khoi','ky_chi_so','tu_ngay','den_ngay','chi_so_cu','chi_so_moi','so_tieu_thu')
        ->join('ql_donghokhoi','ls_chisodhkhoi.ma_dong_ho_khoi','=','ql_donghokhoi.ma_dong_ho_khoi')->get();
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
        $ls_dh_khoi = new LsChiSoDHKhoiModel;
        $ls_dh_khoi->ma_dong_ho_khoi=$request->ma_dong_ho_khoi;
        $ls_dh_khoi->ky_chi_so=$request->ky_chi_so;
        $ls_dh_khoi->tu_ngay=$request->tu_ngay;
        $ls_dh_khoi->den_ngay=$request->den_ngay;
        $ls_dh_khoi->khoa=0;
        $ls_dh_khoi->chi_so_cu=$request->chi_so_cu;
        $ls_dh_khoi->chi_so_moi=$request->chi_so_moi;
        $ls_dh_khoi->so_tieu_thu=$request->so_tieu_thu;
        

        $result = $ls_dh_khoi->save();
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
    public function show(String $id)
    {
        $query = LsChiSoDHKhoiModel::select('ma_lich_su','ls_chisodhkhoi.ma_dong_ho_khoi','ky_chi_so','tu_ngay','den_ngay','chi_so_cu','chi_so_moi','so_tieu_thu')
        ->join('ql_donghokhoi','ls_chisodhkhoi.ma_dong_ho_khoi','=','ql_donghokhoi.ma_dong_ho_khoi')
        ->where('ma_lich_su',$id);
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
        $ls_dh_khoi = LsChiSoDHKhoiModel::find($id);
        if(isset($request->chi_so_moi)){
            $ls_dh_khoi->chi_so_moi=$request->chi_so_moi;
        }
        if(isset($request->ky_chi_so)){
            $ls_dh_khoi->ky_chi_so=$request->ky_chi_so;
        }
        if(isset($request->tu_ngay)){
            $ls_dh_khoi->tu_ngay=$request->tu_ngay;
        }
        if(isset($request->den_ngay)){
            $ls_dh_khoi->den_ngay=$request->den_ngay;
        }
        $result = $ls_dh_khoi->save();
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
        $ls_dh_khoi = LsChiSoDHKhoiModel::find($id);
        $result = $ls_dh_khoi->delete();
        if($result){
            return "success";
        }
        else{
            return "error";
        }
    }
}
