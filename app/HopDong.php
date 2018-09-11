<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HopDong extends Model
{
    public    $timestamps   = false;

    protected $table        = 'hopdong';
    protected $fillable     = ['hd_noidung', 'hd_ngaybatdau'];
    protected $guarded      = ['gs_ma', 'ph_ma'];

    protected $primaryKey   = ['gs_ma', 'ph_ma'];
    public    $incrementing = false;


    protected $dates        = ['hd_ngaybatdau'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
