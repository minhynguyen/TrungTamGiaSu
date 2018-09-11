<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinhVuc extends Model
{
    public    $timestamps   = false;

    protected $table        = 'linhvuc';
    protected $fillable     = ['lv_ten', 'lv_taomoi'];
    protected $guarded      = ['lv_ma'];

    protected $primaryKey   = 'lv_ma';

    protected $dates        = ['lv_taomoi'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
