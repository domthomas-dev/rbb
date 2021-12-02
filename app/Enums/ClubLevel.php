<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static ELITE()
 * @method static static NATIONAL()
 * @method static static REGIONAL()
 */
final class ClubLevel extends Enum
{
    const ELITE =   "elite";
    const NATIONAL =   "national";
    const REGIONAL =   "regional";
}
