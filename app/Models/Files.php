<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    use HasFactory;
    protected $fillable = [
        "dir_id",
        "name",
        "base",
        "extension",
        "cuid",
        "uuid"
    ];

    public function directory()
    {
        return $this->hasOne(Directories::class,'id','dir_id');
    }
}
