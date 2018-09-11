<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrinhDoDay extends Model
{
    public    $timestamps   = false;

    protected $table        = 'trinhdoday';
    protected $fillable     = ['tdd_ten', 'tdd_taomoi'];
    protected $guarded      = ['tdd_ma'];

    protected $primaryKey   = 'tdd_ma';

    protected $dates        = ['tdd_taomoi'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
