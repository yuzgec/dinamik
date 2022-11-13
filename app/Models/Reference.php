<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Reference extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'references';

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->width(500)->nonOptimized();
        $this->addMediaConversion('small')->width(250)->nonOptimized();
        $this->addMediaConversion('small')->width(100)->nonOptimized();
    }

}
