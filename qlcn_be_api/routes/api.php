<?php

use App\Http\Controllers\DmChiNhanhController;
use App\Http\Controllers\DmCoDongHoController;
use App\Http\Controllers\DmLoaiDongHoController;
use App\Http\Controllers\DmLoaiKhachHangController;
use App\Http\Controllers\DmNhaCungCapController;
use App\Http\Controllers\DmPhuongXaController;
use App\Http\Controllers\DmPTThanhToanController;
use App\Http\Controllers\DmQuanHuyenController;
use App\Http\Controllers\DmToQuanLyController;
use App\Http\Controllers\DmTuyenDocController;
use App\Http\Controllers\QlNguoiDungController;
use App\Http\Controllers\QlPhanQuyenController;
use App\Http\Controllers\QlQuyenController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
Route::apiResource("chi_nhanh",DmChiNhanhController::class);
Route::apiResource("co_dong_ho",DmCoDongHoController::class);
Route::apiResource("loai_dong_ho",DmLoaiDongHoController::class);
Route::apiResource("loai_khach_hang",DmLoaiKhachHangController::class);
Route::apiResource("nha_cung_cap",DmNhaCungCapController::class);
Route::apiResource("phuong_xa",DmPhuongXaController::class);
Route::apiResource("pt_thanh_toan",DmPTThanhToanController::class);
Route::apiResource("quan_huyen",DmQuanHuyenController::class);
Route::apiResource("to_quan_ly",DmToQuanLyController::class);
Route::apiResource("tuyen_doc",DmTuyenDocController::class);
Route::apiResource("nguoi_dung",QlNguoiDungController::class);
Route::apiResource("quyen",QlQuyenController::class);
Route::apiResource("phan_quyen",QlPhanQuyenController::class);
Route::get('/nguoi_dung', [QlNguoiDungController::class, 'show']);
Route::get('/phan_quyen', [QlPhanQuyenController::class, 'show']);