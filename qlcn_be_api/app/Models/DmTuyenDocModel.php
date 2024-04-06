<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DmTuyenDocModel extends Model
{
    use HasFactory;
    protected $table = 'dm_tuyendoc';
    public $incrementing = true;
    protected $primaryKey = 'ma_tuyen_doc';
    protected $keytype = 'int';
    public $timestamps = false;
}
