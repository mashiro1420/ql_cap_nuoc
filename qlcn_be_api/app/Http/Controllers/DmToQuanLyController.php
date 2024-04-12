<?php

namespace App\Http\Controllers;

use App\Models\DmToQuanLyModel;
use Illuminate\Http\Request;

class DmToQuanLyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DmToQuanLyModel::select('ma_to_quan_ly','ten_to_quan_ly','dm_chinhanh.ten_chi_nhanh')
        ->join('dm_chinhanh','dm_toquanly.ma_chi_nhanh','=','dm_chinhanh.ma_chi_nhanh');
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
        $to_quan_ly = new DmToQuanLyModel;
        $to_quan_ly->ten_to_quan_ly=$request->ten_to_quan_ly;
        $to_quan_ly->ma_chi_nhanh=$request->ma_chi_nhanh;

        $result = $to_quan_ly->save();
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
        $query = DmToQuanLyModel::select('ma_to_quan_ly','ten_to_quan_ly','dm_chinhanh.ten_chi_nhanh')
        ->join('dm_chinhanh','dm_toquanly.ma_chi_nhanh','=','dm_chinhanh.ma_chi_nhanh');
        if($request->has('ma_to_quan_ly')){
            $query->where('ma_to_quan_ly',"like","%".$request->ma_to_quan_ly."%");
        }
        if($request->has('ma_chi_nhanh')){
            $query->where('ma_chi_nhanh',$request->ma_chi_nhanh);
        }
        if($request->has('ten_to_quan_ly')){
            $query->where("ten_to_quan_ly","like","%".$request->ten_to_quan_ly."%");
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
        $to_quan_ly = DmToQuanLyModel::find($id);
        if(isset($request->ten_to_quan_ly)){
            $to_quan_ly->ten_to_quan_ly=$request->ten_to_quan_ly;
        }
        if(isset($request->ma_chi_nhanh)){
            $to_quan_ly->ma_chi_nhanh=$request->ma_chi_nhanh;
        }
        $result = $to_quan_ly->save();
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
        $to_quan_ly = DmToQuanLyModel::find($id);
        $result = $to_quan_ly->delete();
        if($result){
            return "success";
        }
        else{
            return "error";
        }
    }
}
