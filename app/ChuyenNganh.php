<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChuyenNganh extends Model
{
    public    $timestamps   = false;

    protected $table        = 'chuyennganh';
    protected $fillable     = ['lv_ma', 'cn_ten', 'cn_taomoi'];
    protected $guarded      = ['cn_ma'];

    protected $primaryKey   = 'cn_ma';

    protected $dates        = ['cn_taomoi'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
