<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directories extends Model
{
    use HasFactory;
    protected $table = "directories";
    protected $fillable = [
        "main_off_id",
        "parent",
        "name",
        "status",
        "cuid",
        "uuid"
    ];
}
