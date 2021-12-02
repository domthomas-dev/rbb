<?php
use App\Enums\ThrowingHand;
use App\Enums\BatingPosition;
use App\Enums\Gender;

return [

    ThrowingHand::class => [
        ThrowingHand::RIGHT => 'Droitier',
        ThrowingHand::LEFT => 'Gaucher',
    ],
    BatingPosition::class => [
        BatingPosition::RIGHT => 'Droite',
        BatingPosition::LEFT => 'Gauche',
    ],
    Gender::class => [
        Gender::NR => 'Non renseigné',
        Gender::MALE => 'Homme',
        Gender::FEMALE => 'Femme',
    ],

];
