<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhuHuynh extends Model
{
    public    $timestamps   = false;

    protected $table        = 'phuhuynh';
    protected $fillable     = ['ph_ten', 'ph_sdt', 'ph_diachi', 'ph_taomoi', 'id'];
    protected $guarded      = ['ph_ma'];

    protected $primaryKey   = 'ph_ma';

    protected $dates        = ['ph_taomoi'];
    protected $dateFormat   = 'Y-m-d H:i:s';
}
