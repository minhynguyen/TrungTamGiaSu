<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mon extends Model
{
    public    $timestamps   = false;

    protected $table        = 'mon';
    protected $fillable     = ['m_ten', 'm_taomoi'];
    protected $guarded      = ['m_ma'];

    protected $primaryKey   = 'm_ma';

    protected $dates        = ['m_taomoi'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
