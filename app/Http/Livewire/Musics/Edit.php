<?php

namespace App\Http\Livewire\Musics;

use App\Events\UserLog;
use App\Models\Music;
use Livewire\Component;

class Edit extends Component
{

    public $musicId;
    public $music_song, $music_artist, $music_genre, $music_published;
    public function mount() {
        $this->music_song = $this->music->music_song;
        $this->music_artist = $this->music->music_artist;
        $this->music_genre = $this->music->music_genre;
        $this->music_published = $this->music->music_published;

    }

    public function editMusic() {
        $this->validate([
            'music_song'             =>          ['required', 'string', 'max:255'],
            'music_artist'            =>          ['required', 'string', 'max:255'],
            'music_genre'                =>          ['required', 'string', 'max:255'],
            'music_published'                =>          ['required', 'string', 'max:255'],
        ]);

        $this->music->update([
            'music_song'             =>      $this->music_song,
            'music_artist'            =>      $this->music_artist,
            'music_genre'                =>      $this->music_genre,
            'music_published'                =>      $this->music_published,
        ]);

        $log_entry = 'Update music: "' .$this->music->music_song . '" with and ID: ' . $this->music->id;
        event(new UserLog($log_entry));

        return redirect('/music')->with('music', 'Updated Successfully');
    }

    public function back() {
        return redirect('/music');
    }
    public function getMusicProperty() {
        return Music::find($this->musicId);
    }

    public function render()
    {
        return view('livewire.musics.edit');
    }
}
