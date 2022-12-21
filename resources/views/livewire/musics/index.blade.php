<div>
    <div class="container">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control bg-warning bg-opacity-50 mb-3" placeholder="Search" wire:model.lazy="search">
            </div>

        </div>

    </div>
    <table class="table table-striped shadow border border-light bg-warning bg-opacity-25">
        <thead class="bg-danger bg-opacity-75">
            <tr>
                <th>ID No</th>
                <th>Song Title</th>
                <th>Song Artist</th>
                <th>Genre</th>
                <th>Published</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($musics as $music)
                <tr>
                    <td class="text-white">{{ $music->id }}</td>
                    <td class="text-white">{{ $music->music_song }}</td>
                    <td class="text-white">{{ $music->music_artist }}</td>
                    <td class="text-white">{{ $music->music_genre }}</td>
                    <td class="text-white">{{ $music->music_published }}</td>
                    <td></td>
                    <td>
                        <a href="{{ url('edit', ['music' => $music->id]) }}" class="" id="ic" title="Edit"><img src="https://cdn-icons-png.flaticon.com/512/1828/1828270.png" width="25" height="25" class="rounded"></a>
                        <a href="{{ url('delete', ['music' => $music->id]) }}" class="" id="ic" title="Delete"><img src="https://cdn-icons-png.flaticon.com/512/6861/6861362.png" width="25" height="25" class="rounded"></a>
                    </td>

                </tr>
            @endforeach
            @if($musics->count() == 0)
                        <td colspan="7" class="text-center text-white">
                            No musics found in this table.
                        </td>
                    @endif
        </tbody>
    </table>
    {{$musics->links()}}
</div>
