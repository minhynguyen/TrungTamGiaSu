<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quan extends Model
{
    public    $timestamps   = false;

    protected $table        = 'quan';
    protected $fillable     = ['q_ten', 't_ma', 'q_taomoi'];
    protected $guarded      = ['q_ma'];

    protected $primaryKey   = 'q_ma';

    protected $dates        = ['q_taomoi'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
