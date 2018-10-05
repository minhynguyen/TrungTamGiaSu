<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiaSu_ChuyenNganh extends Model
{
    public    $timestamps   = false;

    protected $table        = 'giasu_chuyennganh';
    protected $fillable     = ['gs_ma', 'cn_ma'];

    protected $primaryKey   = ['gs_ma', 'cn_ma'];
    public    $incrementing = false;
}
