<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static NR()
 * @method static static MALE()
 * @method static static FEMALE()
 */
final class Gender extends Enum
{
    const NR =   'nr';
    const MALE =   'male';
    const FEMALE = 'female';
}
