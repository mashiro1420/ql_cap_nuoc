<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QlNguoiDungModel extends Model
{
    use HasFactory;
    protected $table = 'ql_nguoidung';
    public $incrementing = false;
    protected $primaryKey = 'ma_nhan_vien';
    protected $keytype = 'int';
    public $timestamps = false;
}
