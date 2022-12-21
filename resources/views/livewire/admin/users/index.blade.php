<div>
    <div class="container">
        <div class="row mt-5 mb-3">
            <div class="col">
                <select class="form-control bg-warning bg-opacity-50" value="form-select" wire:model.lazy="gender">
                    <option hidden="true">Gender</option>
                        <option selected disabled>Gender</option>
                        <option value="all">All</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                </select>
            </div>
            <div class="col">
                <input type="text" class="form-control bg-warning bg-opacity-50" placeholder="Search" wire:model.lazy="search">
            </div>
            <div class="col">
                <a class="btn btn-primary btn-sm float-end" href="/create-user">Add User<img src="https://cdn-icons-png.flaticon.com/512/681/681392.png" width="20" height="20" class="rounded"></a>
            </div>

        </div>

    </div>
    <table class="table table-striped shadow border border-light mt-1">
        <thead class="bg-info">
            <tr>
                <th>ID No.</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td class="gender">{{ $user->gender }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ url('editUser', ['user' => $user->id]) }}" class="" id="ic" title="Edit"><img src="https://cdn-icons-png.flaticon.com/512/1828/1828270.png" width="25" height="25" class="rounded"></a>
                        <a href="{{ url('deleteUser', ['user' => $user->id]) }}" class="" id="ic" title="Delete"><img src="https://cdn-icons-png.flaticon.com/512/6861/6861362.png" width="25" height="25" class="rounded"></a>
                    </td>
                </tr>
            @endforeach
            @if($users->count() == 0)
                        <td colspan="5" class="text-center text-white">
                            No users found in this table.
                        </td>
            @endif
        </tbody>
    </table>
    {{$users->links()}}
</div>

<style>
    .gender:first-letter {
        text-transform: uppercase;
    }
</style>
