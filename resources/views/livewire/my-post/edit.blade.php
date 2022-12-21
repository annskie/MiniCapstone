
<div>
    <strong><h1 class="text-center text-white">Edit Post</h1></strong> <br>
    <div class="card offset-4 border-light" id="post-edit">

    @if (session('message'))
        <div class="alert alert-success text-center">{{ session('message') }}</div>
    @endif
        <div class="card-header border-light bg-info bg-opacity-50">
            <h5 class="text-center mt-2">Select Category</h5>
            <select name="category" id="select-cat" class="text-center" wire:model.defer="category">
                <option hidden="true">Category</option>
                <option selected disabled>Category</option>
                {{-- <option value="all">--All Category--</option> --}}
                <option value="drama">Drama</option>
                <option value="action">Action</option>
                <option value="sweet">Sweet</option>
                <option value="comedy">Comedy</option>
                <option value="horror">Horror</option>
            </select>
                @error('category')
                    <p class="text-danger text-center">{{ $message }}</p>
                @enderror
        </div>
        <div class="card-body bg-secondary bg-opacity-75">
            <textarea name="remarks" id="" cols="46" rows="10" wire:model.defer="remarks" style="background-color: #fff1f3"></textarea>
        </div>

            @error('remarks')
                <p class="text-danger text-center">{{ $message }}</p>
            @enderror
        <button class="btn btn-primary btn-sm" wire:click="editPost()">Update</button>
        <button class="btn btn-danger btn-sm" wire:click="back()">
            Cancel
        </button>
    </div>
</div>


<style>
    #post-edit {
        width: 470px;
    }
    #select-cat {
        width: 120px;
        height: 50px;
        margin-left: 37%;
    }
</style>


