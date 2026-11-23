<?php

namespace App\Models;

use App\Models\Concerns\HasLocalizedName;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['slug', 'name_ar', 'name_en', 'icon', 'sort_order'])]
class Partner extends Model
{
    use HasLocalizedName;
}
