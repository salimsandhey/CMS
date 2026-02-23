<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteImage extends Model
{
    protected $guarded = [];

    protected $casts = [
        'file_path' => 'array',
    ];

    public function siteYear()
    {
        return $this->belongsTo(SiteYear::class);
    }
}
