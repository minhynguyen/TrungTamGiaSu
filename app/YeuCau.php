<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YeuCau extends Model
{
    public    $timestamps   = false;

    protected $table        = 'yeucau';
    protected $fillable     = ['ph_ma', 'm_ma','tdd_ma','yc_diachi', 'yc_gioitinh', 'yc_hocvi', 'yc_ngayhoc','yc_giobatdau', 'yc_gioketthuc'];
    protected $guarded      = ['yc_ma'];

    protected $primaryKey   = ['yc_ma'];
    public    $incrementing = false;
}
