<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlaylistsVideos extends Model
{
    public $timestamps = false;
    public function videos(){
        return $this->belongsToMany(Video::class , 'playlists_videos');
    }
}
