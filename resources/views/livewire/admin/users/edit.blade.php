<div>
        <div class="card offset-1 border border-light ">
            <div class="card-header bg-info bg-opacity-50">
                <strong><h1 class="text-center text-white">Edit Post</h1></strong> <br>
            </div>
            <div class="card-body bg-secondary bg-opacity-75 shadow">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="name">
                    <label for="name">Name</label>
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="email">
                    <label for="email">Email</label>
                    @error('brand')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <select name="gender" class="form-select" wire:model.defer="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <label for="gender">Gender</label>
                    @error('gender')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group mb-2 d-grip gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-primary bg-opacity-50" wire:click="editUser()">
                        <img src="https://cdn-icons-png.flaticon.com/512/2344/2344287.png" width="20" height="20" class="rounded"></a>Save Changes
                    </button>
                    <button class="btn btn-info mx-2" wire:click="back()">
                        <img src="https://cdn-icons-png.flaticon.com/512/7945/7945195.png" width="20" height="20" class="rounded"></a>Back
                    </button>
                </div>
            </div>
        </div>
</div>
