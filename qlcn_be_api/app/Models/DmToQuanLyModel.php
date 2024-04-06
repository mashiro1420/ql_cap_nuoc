<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DmToQuanLyModel extends Model
{
    use HasFactory;
    protected $table = 'dm_toquanly';
    public $incrementing = true;
    protected $primaryKey = 'ma_to_quan_ly';
    protected $keytype = 'int';
    public $timestamps = false;
}
