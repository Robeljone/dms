<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadersProfiles extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "gender",
        "age",
        "city",
        "zone",
        "nationality",
        "edu_level",
        "field_of_study",
        "prev_role",
        "curr_role",
        "woreda",
        "org_id",
        "img",
        "extension",
        "cuid",
        "uuid"
    ];
}
