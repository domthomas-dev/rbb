<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static POSTER()
 * @method static static BACKDROP()
 * @method static static MALE_PROFILE()
 * @method static static FEMALE_PROFILE()
 */
final class AnonymousPictures extends Enum
{
    const POSTER =   '/images/anonymous-images/no-poster.jpg';
    const BACKDROP =   '/images/anonymous-images/no-backdrops.jpg';
    const MALE_PROFILE =  '/images/anonymous-images/no-picture-man-rect.jpg';
    const FEMALE_PROFILE = '/images/anonymous-images/no-picture-women-rect.jpg';
}
