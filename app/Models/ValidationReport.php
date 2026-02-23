<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ValidationReport extends Model
{
    protected $guarded = [];

    public function siteYear()
    {
        return $this->belongsTo(SiteYear::class);
    }
}
