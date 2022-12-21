<div>
        <div class="card border border-light">
            <div class="card-header" style="background-color: rgba(127, 169, 199, 0.527)">
                <h3 class="text-center mt-2">Edit Music</h3>
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
                    <button class="btn btn-primary" wire:click="editMusic()">
                        Save Changes
                    </button>
                    <button class="btn btn-info mx-2" wire:click="back()">
                        back
                    </button>
                </div>
            </div>
        </div>
</div>
