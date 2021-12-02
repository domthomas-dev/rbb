<?php

namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

/**
 * @method static static RIGHT()
 * @method static static LEFT()
 */
final class ThrowingHand extends Enum implements LocalizedEnum
{
    const RIGHT =   'right';
    const LEFT =   'left';
}
