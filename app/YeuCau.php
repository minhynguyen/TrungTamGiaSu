<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YeuCau extends Model
{
    public    $timestamps   = false;

    protected $table        = 'yeucau';
    protected $fillable     = ['yc_diachi', 'yc_gioitinh', 'yc_hocvi'];
    protected $guarded      = ['tdd_ma', 'ph_ma', 'm_ma'];

    protected $primaryKey   = ['tdd_ma', 'ph_ma', 'm_ma'];
    public    $incrementing = false;
}
