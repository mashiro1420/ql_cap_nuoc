<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DmQuanHuyenModel extends Model
{
    use HasFactory;
    protected $table = 'dm_quanhuyen';
    public $incrementing = true;
    protected $primaryKey = 'ma_quan_huyen';
    protected $keytype = 'int';
    public $timestamps = false;
}
