<div>
    <div class="card border border-light">
        <div class="card-header bg-danger bg-opacity-50">
            <h3 class="mt-2">Add Music</h3>
        </div>
        <div class="card-body bg-warning bg-opacity-25 shadow">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="music_song">
                <label for="music_song">Music Title</label>
                @error('music_song')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="music_artist">
                <label for="music_artist">Song Artist</label>
                @error('music_artist')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="music_genre">
                <label for="music_genre">Genre</label>
                @error('music_genre')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
</div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="music_published">
                    <label for="music_published">Published</label>
                    @error('music_published')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
            </div>
            <div class="form-group mb-2 d-grip gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary btn-sm" wire:click="addMusic()">
                    <img src="https://cdn-icons-png.flaticon.com/512/1828/1828819.png" width="20" height="20" class="rounded"> Add music
                </button>
            </div>
        </div>
    </div>
</div>
