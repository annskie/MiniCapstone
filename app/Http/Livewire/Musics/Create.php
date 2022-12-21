<?php

namespace App\Http\Livewire\Musics;

use App\Events\UserLog;
use Livewire\Component;
use App\Models\Music;

class Create extends Component
{
    public $music_song, $music_artist, $music_genre, $music_published;

    public function addMusic() {
        $this->validate([
            'music_song'             =>          ['required', 'string', 'max:255'],
            'music_artist'            =>          ['required', 'string', 'max:255'],
            'music_genre'                =>          ['required', 'string', 'max:255'],
            'music_published'                =>          ['required', 'string', 'max:255'],
        ]);

        Music::create([
            'music_song'             =>      $this->music_song,
            'music_artist'            =>      $this->music_artist,
            'music_genre'                =>      $this->music_genre,
            'music_published'                =>      $this->music_published,
        ]);

        $log_entry = 'Added Music ' .$this->music_song;
        event(new UserLog($log_entry));

        return redirect('/music')->with('music', 'Added Successfully!');
    }




    public function render()
    {
        return view('livewire.musics.create');
    }
}
