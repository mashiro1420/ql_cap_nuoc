<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DmPhuongXaModel extends Model
{
    use HasFactory;
    protected $table = 'dm_phuongxa';
    public $incrementing = true;
    protected $primaryKey = 'ma_phuong_xa';
    protected $keytype = 'int';
    public $timestamps = false;
}
