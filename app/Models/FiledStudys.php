<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiledStudys extends Model
{
    use HasFactory;
    protected $table="field_studys";
    protected $fillable = [
        "name",
        "status",
        "cuid",
        "uuid"
    ];
}
