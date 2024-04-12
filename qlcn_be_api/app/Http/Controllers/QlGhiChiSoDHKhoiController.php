<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\QlDHKhoiModel;
use Illuminate\Http\Request;

class QlGhiChiSoDHKhoiController extends Controller
{
    public function index()
    {
        $index = QlDHKhoiModel::select('ma_dong_ho_khoi','ten_dong_ho_khoi','dm_codongho.ten_co_dong_ho','tinh_trang')
        ->join('dm_codongho','ql_donghokhoi.ma_co_dong_ho','=','dm_codongho.ma_co_dong_ho');
        return $index->get();
    }
    public function show(String $id)
    {
        $index = QlDHKhoiModel::select('ma_dong_ho_khoi','ten_dong_ho_khoi','dm_codongho.ten_co_dong_ho','tinh_trang')
        ->join('dm_codongho','ql_donghokhoi.ma_co_dong_ho','=','dm_codongho.ma_co_dong_ho')
        ->where('ma_dong_ho_khoi', $id);
        return $index->get();
    }
}
