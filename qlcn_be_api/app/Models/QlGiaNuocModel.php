<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QlGiaNuocModel extends Model
{
    use HasFactory;
    protected $table = 'ql_gianuoc';
    public $incrementing = true;
    protected $primaryKey = 'ma_nhom_gia';
    protected $keytype = 'int';
    public $timestamps = false;
}
