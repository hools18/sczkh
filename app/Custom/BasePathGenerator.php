<?php

namespace App\Custom;

use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\PathGenerator\PathGenerator;

class BasePathGenerator implements PathGenerator
{
    public function get_media_path($media_id)
    {
        $return = '';
        $path_array = str_split($media_id);

        foreach ($path_array as $path) {
            $return .= $path.'/';
        }

        return $return;
    }

    public function getPath(Media $media = null): string
    {
        return $this->get_media_path($media->getKey()).$media->name.'/';
    }

    public function getPathForConversions(Media $media): string
    {
        return $this->get_media_path($media->getKey()).$media->name.'/';
    }

    public function getPathForResponsiveImages(Media $media): string
    {
        return $this->get_media_path($media->getKey()).$media->name.'/';
    }
}
