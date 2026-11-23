<?php

namespace App\Models;

use App\Models\Concerns\HasLocalizedName;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['slug', 'name_ar', 'name_en', 'icon', 'color', 'color_end', 'sort_order'])]
class Service extends Model
{
    use HasLocalizedName;
}
