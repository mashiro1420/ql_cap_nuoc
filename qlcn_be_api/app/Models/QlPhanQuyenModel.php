<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QlPhanQuyenModel extends Model
{
    use HasFactory;
    protected $table = 'ql_phanquyen';
    public $incrementing = false;
    protected $primaryKey = ['ma_quyen','ma_nhan_vien'];
    protected $keytype = 'int';
    public $timestamps = false;
}
