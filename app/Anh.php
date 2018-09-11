<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anh extends Model
{
    public    $timestamps   = false;

    protected $table        = 'anh';
    protected $fillable     = ['ha_ten', 'id'];
    protected $guarded      = ['ha_ma'];

    protected $primaryKey   = 'ha_ma';
}
