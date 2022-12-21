<?php

namespace App\Http\Livewire\Musics;

use App\Events\UserLog;
use Livewire\Component;
use App\Models\Music;
class Delete extends Component
{

    public $musicId;
    public function getMusicProperty() {
        return Music::select('id', 'music_song', 'music_artist', 'music_genre', 'music_published')
            ->find($this->musicId);
    }

    public function delete() {
        $this->music->delete();

        $log_entry = 'Delete Music: "' .$this->music->music_song . '" with and ID: ' . $this->music->id;
        event(new UserLog($log_entry));

        return redirect('/music')->with('message', 'Deleted Successfully!');
    }

    public function back() {
        return redirect('/music');
    }
    public function render()
    {
        return view('livewire.musics.delete');
    }
}
