<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QlQuyenModel extends Model
{
    use HasFactory;
    protected $table = 'ql_quyen';
    public $incrementing = true;
    protected $primaryKey = 'ma_quyen';
    protected $keytype = 'int';
    public $timestamps = false;
}
