<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait UploadMedia
{
    function uploadSingleMedia($media, $title = null,  $dir = 'others', $old = null, $disk = 'public') {
        if ($old) {
            Storage::disk($disk)->delete($old);
        }
        if ($media) {
            $mediaName = ($title ?? uniqid()) . '.' . $media->extension();
            $upload =  $media->storeAs($dir, $mediaName, $disk);
            return $upload;
        }
        else{
            return null;
        }
    }
}
