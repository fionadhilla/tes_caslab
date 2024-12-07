<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tp extends Model
{
    use HasFactory;

    protected $table = 'table_tp';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'subJudul', 'kategori','tanggal','deadline', 'deskripsi'];
}
