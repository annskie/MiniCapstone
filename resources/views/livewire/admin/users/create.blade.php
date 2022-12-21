<div>
        <div class="card border border-light">
            <div class="card-header border-light bg-info bg-opacity-50">
                <strong><h3 class="text-center mt-2 text-white">Add User</h3></strong> <br>
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
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="recipient-name" wire:model.defer="password" required="">
                        <label for="password">Password</label>
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                </div>
                <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="recipient-name" wire:model.defer="password_confirmation" required="">
                        <label for="password_confirmation">Confirm Password</label>
                        @error('password_confirmation')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                </div>

                <div class="form-floating mb-3">
                    <select name="gender" class="form-select" wire:model.defer="gender">
                        <option disabled>Gender</option>
                        <option selected hidden="true">Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <label for="gender">Gender</label>
                    @error('gender')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-floating mb-2 d-grip gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-primary bg-opacity-50" wire:click="addUser()">
                        <img src="https://cdn-icons-png.flaticon.com/512/2344/2344287.png" width="20" height="20" class="rounded"></a>Add user
                    </button>
                    <button class="btn btn-info mx-2" wire:click="back()">
                        <img src="https://cdn-icons-png.flaticon.com/512/7945/7945195.png" width="20" height="20" class="rounded"></a>Back
                    </button>
                </div>
            </div>
        </div>
</div>
