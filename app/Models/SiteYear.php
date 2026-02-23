<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteYear extends Model
{
    protected $guarded = [];

    public function site()
    {
        return $this->belongsTo(Site::class);
    }

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function validationReport()
    {
        return $this->hasOne(ValidationReport::class);
    }

    public function testReports()
    {
        return $this->hasMany(TestReport::class);
    }

    public function siteImages()
    {
        return $this->hasMany(SiteImage::class);
    }
}
