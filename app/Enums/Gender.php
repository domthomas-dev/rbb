<?php

namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

/**
 * @method static static NR()
 * @method static static MALE()
 * @method static static FEMALE()
 */
final class Gender extends Enum implements LocalizedEnum
{
    const NR =   'nr';
    const MALE =   'male';
    const FEMALE = 'female';
}
