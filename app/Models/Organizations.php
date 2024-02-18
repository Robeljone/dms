<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizations extends Model
{
    use HasFactory;
    protected $fillable =[
        "main_off_id",
        "name",
        "status",
        "cuid",
        "uuid"
    ];
}
