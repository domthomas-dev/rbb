<?php

namespace App\Models;

use App\Dtos\PictureDTO;
use App\Enums\AnonymousPictures;
use App\Enums\MediaCollectionName;
use App\Models\Traits\DisplayableOnWebsite;
use Carbon\Carbon;
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
    use DisplayableOnWebsite;

    protected $guarded = [];

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection(MediaCollectionName::PLAYER_PROFILE)
            ->singleFile()
            ->useFallbackUrl(AnonymousPictures::MALE_PROFILE)
            ->useFallbackPath(public_path(AnonymousPictures::MALE_PROFILE));
        $this
            ->addMediaCollection(MediaCollectionName::PLAYER_BACK)
            ->useFallbackUrl(AnonymousPictures::BACKDROP)
            ->useFallbackPath(public_path(AnonymousPictures::BACKDROP));
    }

    public function registerMediaConversions(Media|\Spatie\MediaLibrary\MediaCollections\Models\Media $media = null): void
    {
        $this->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued()
            ->performOnCollections(MediaCollectionName::PLAYER_PROFILE, MediaCollectionName::PLAYER_BACK);
    }

    public function clubs(): BelongsToMany
    {
        return $this->belongsToMany(Club::class);
    }

    public function getFirstPictureAttribute()
    {
        return $this->getFirstMediaUrl(MediaCollectionName::PLAYER_BACK);
    }

    public function getProfilePictureAttribute()
    {
        return $this->getFirstMediaUrl(MediaCollectionName::PLAYER_PROFILE);
    }

    public function getBornAtFrAttribute(): ?string
    {
        $date = Carbon::createFromFormat('Y-m-d', $this->born_at)?->locale('fr_FR');
        return $date?->isoFormat('LL');
    }

    public function getPictureUrls()
    {
        return $this->getMedia(MediaCollectionName::PLAYER_BACK)->map(function (Media $media) {
            return $media->getFullUrl();
        }
        );
    }
}
