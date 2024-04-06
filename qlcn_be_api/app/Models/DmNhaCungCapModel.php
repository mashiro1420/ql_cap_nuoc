<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DmNhaCungCapModel extends Model
{
    use HasFactory;
    protected $table = 'dm_nhacungcapdongho';
    public $incrementing = true;
    protected $primaryKey = 'ma_nha_cung_cap';
    protected $keytype = 'int';
    public $timestamps = false;
}
