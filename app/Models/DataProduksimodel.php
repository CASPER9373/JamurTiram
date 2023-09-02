<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataProduksimodel extends Model
{
    use HasFactory;
    protected $table = 'data_produksi';
protected $guarded = ['id'];
}
