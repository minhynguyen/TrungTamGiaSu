<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tinh extends Model
{
    public    $timestamps   = false;

    protected $table        = 'tinh';
    protected $fillable     = ['t_ten', 't_taomoi'];
    protected $guarded      = ['t_ma'];

    protected $primaryKey   = 't_ma';

    protected $dates        = ['t_taomoi'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
