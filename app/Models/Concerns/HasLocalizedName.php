<?php

namespace App\Models\Concerns;

use Illuminate\Database\Eloquent\Casts\Attribute;

trait HasLocalizedName
{
    protected function name(): Attribute
    {
        return Attribute::get(fn () => $this->getAttribute('name_'.app()->getLocale()));
    }
}
