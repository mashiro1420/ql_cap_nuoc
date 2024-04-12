<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QlDHKhoiModel extends Model
{
    use HasFactory;
    protected $table = 'ql_donghokhoi';
    public $incrementing = true;
    protected $primaryKey = 'ma_dong_ho_khoi';
    protected $keytype = 'int';
    public $timestamps = false;
}
