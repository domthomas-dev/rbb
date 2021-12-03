<?php

namespace App\Dtos;

class PictureDTO extends \Spatie\DataTransferObject\DataTransferObject
{

    public ?int $height;
    public ?int $width;
    public string $url;
    public string $key;
    public ?string $source;
    public ?string $copyright;
    public ?string $caption;


}
