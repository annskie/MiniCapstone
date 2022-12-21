<div>
    <strong><h1 class="text-white text-center">Recent Posts</h1></strong> <br>
    <div class="row offset-1">
            <div class="cs border-light">
                <select class="select bg-warning bg-opacity-75" value="form-select" wire:model.lazy="category">
                    <option hidden="true">Category</option>
                    {{-- <option selected disabled>Category</option> --}}
                    <option value="all">--All Category--</option>
                    <option value="drama">Drama</option>
                    <option value="action">Action</option>
                    <option value="sweet">Sweet</option>
                    <option value="comedy">Comedy</option>
                    <option value="horror">Horror</option>
                </select>
                <input class="search bg-warning bg-opacity-75" type="text" placeholder="Search" wire:model.lazy="search">
            </div>
            @if (session('message'))
                <div class="alert alert-success mt-5 text-center">{{ session('message') }}</div>
            @endif
    @foreach ($recentPosts as $rp)
        <div class="col-sm-4 mt-5">
            <div class="card rounded shadow-lg" id="card">
                <div class="card-header bg-danger bg-opacity-25"><h4 class="mt-2 categ"><strong>{{$rp->category}}</strong></h4></div>
                <div class="card-body {{($rp->user->gender === 'male') ? 'male' : 'female'}}" id="card-body"><p style="font-size: 20px;">{{$rp->remarks}} <br><br><br>
                <h6 class="mt-5" style="font-family: sans-serif">From: {{ $rp->user->name }}</h6></p></div>
                <div class="card-footer bg-danger bg-opacity-25">
                <span class="time">posted at: {{ $rp->created_at->format('g:i A') }}</span><br>
                <div class="mt-3">
                    @role('admin')
                    <a class="" href="{{ url('editRecentPost', ['recentPost' => $rp->id]) }}"><img src="https://cdn-icons-png.flaticon.com/512/1828/1828270.png" width="25" height="25" class="rounded"></a>
                    <a class="" href="{{ url('deleteRecentPost', ['recentPost' => $rp->id]) }}"><img src="https://cdn-icons-png.flaticon.com/512/6861/6861362.png" width="25" height="25" class="rounded"></a>
                    @endrole
                </div>
                </div>
            </div>
        </div>
    @endforeach
            @if($recentPosts->count() == 0)
                <h1 class="mt-5 text-center text-danger">
                    No Post.
                </h1>
            @endif
    </div>
    {{$recentPosts->links()}}
</div>


<style>
    .row {
        text-align: center;
    }
    #card {
        min-height: 350px;
    }
    .male {
        background-color: blue;
        color: white;
        transition: all .2s ease-in-out;
    }
    .male:hover {
        background-color: #11338a;
        transform: scale(1.02);
    }
    .female {
        background-color: #b80e9e;
        color: white;
        transition: all .2s ease-in-out;
    }
    .female:hover {
        background-color: #c0315a;
        transform: scale(1.02);
    }
    .underline {
        border-bottom: 1px solid white;
        border-top: 1px solid white;
        text-align: left;
    }
    .categ:first-letter{
        text-transform: uppercase;
    }

    .select {
        background-color: #e4f0f0;
        color: black;
        height: 40px;
        border-radius: 10px;
    }
    .search {
        background-color: #e4f0f0;
        color: black;
        height: 40px;
        border-radius: 10px;
    }
</style>
