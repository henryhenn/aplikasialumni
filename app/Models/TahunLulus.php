<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunLulus extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'tahun_lulus';

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
