<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DangKi extends Model
{
    public    $timestamps   = false;

    protected $table        = 'dangki';
    protected $fillable     = ['tdd_ma', 'gs_ma', 'm_ma','dk_hocphi', 'dk_taomoi'];

    protected $primaryKey   = ['dk_ma'];

    protected $guarded      = ['dk_ma'];


    protected $dates        = ['dk_taomoi'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
