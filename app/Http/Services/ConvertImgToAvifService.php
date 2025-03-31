<?php
namespace App\Http\Services;

use Spatie\Image\Image;
use Spatie\Image\Exceptions\InvalidManipulation;

class ConvertImgToAvifService
{
    public static function convert(string $inputImagePath, string $outputImagePath): void
    {
        try {
            // Load the image and encode it to AVIF
            Image::load($inputImagePath)
                ->format('avif') // Convert to AVIF format
                ->quality(80)    // Set quality
                ->save($outputImagePath); // Save the new image
        } catch (InvalidManipulation $exception) {
            throw new \Exception("Failed to convert image: " . $exception->getMessage());
        }
    }
}


