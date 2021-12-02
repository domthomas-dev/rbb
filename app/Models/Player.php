<?php

namespace App\Models;

use App\Enums\AnonymousPictures;
use App\Enums\MediaCollectionName;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Player extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection(MediaCollectionName::PLAYER_PROFILE)
            ->singleFile()
            ->useFallbackUrl(AnonymousPictures::MALE_PROFILE)
            ->useFallbackPath(public_path(AnonymousPictures::MALE_PROFILE));
    }

    public function registerMediaConversions(Media|\Spatie\MediaLibrary\MediaCollections\Models\Media $media = null): void
    {
        $this->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued()
            ->performOnCollections(MediaCollectionName::PLAYER_PROFILE, MediaCollectionName::PLAYER_PROFILE);
    }

    public function clubs(): BelongsToMany
    {
        return $this->belongsToMany(Club::class);
    }
}
