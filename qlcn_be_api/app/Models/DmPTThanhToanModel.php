<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DmPTThanhToanModel extends Model
{
    use HasFactory;
    protected $table = 'dm_phuongthucthanhtoan';
    public $incrementing = true;
    protected $primaryKey = 'ma_phuong_thuc_thanh_toan';
    protected $keytype = 'int';
    public $timestamps = false;
}
