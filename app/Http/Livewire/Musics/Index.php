<?php

namespace App\Http\Livewire\Musics;

use Livewire\Component;
use App\Models\Music;
use Livewire\WithPagination;

class Index extends Component
{
    public $search, $music_song ='all';
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function loadMusics()
     {
        $query = Music::orderBy('music_song')
            ->search($this->search);

        if ($this->music_song != 'all') {
            $query->where('music_song', $this->music_song);
        }

        $musics = $query->paginate(5);

        return compact('musics');
    }

    public function render()
    {
        return view('livewire.musics.index', $this->loadMusics());
    }
}
