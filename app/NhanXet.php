<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhanXet extends Model
{
    public    $timestamps   = false;

    protected $table        = 'nhanxet';
    protected $fillable     = ['nx_noidung', 'nx_taomoi'];
    protected $guarded      = ['ph_ma', 'gs_ma'];

    protected $primaryKey   = ['ph_ma', 'gs_ma'];
    public    $incrementing = false;


    protected $dates        = ['nx_taomoi'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
