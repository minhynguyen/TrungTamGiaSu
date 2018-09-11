<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiaSu extends Model
{
    public    $timestamps   = false;

    protected $table        = 'giasu';
    protected $fillable     = ['gs_ten', 'gs_gioitinh', 'gs_sdt', 'gs_cmnd', 'gs_diachi', 'gs_hocvi', 'gs_gioithieu', 'gs_taomoi', 'id'];
    protected $guarded      = ['gs_ma'];

    protected $primaryKey   = 'gs_ma';

    protected $dates        = ['gs_taomoi'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
