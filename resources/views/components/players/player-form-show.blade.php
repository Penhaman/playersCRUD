<form class="mt-4" action="GET">
    <div class="form-group">
        <h4>Image</h4>
        @if(is_null($player->image) )
            <p>There is no image for <b>{{ $player->name }}</b></p>
        @else
            <a><img class="img-thumbnail img-responsive" src="{{ asset('storage/'.$player->image) }}" alt="" title=""></a>
        @endif
    </div>
    <div class="form-group">
        <h4>Name</h4>
        <input
            type="text"
            id="name"
            name="name"
            class="form-control"
            value="{{$player -> name}}"
            readonly
            aria-describedby="nameHelp">
        <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
    </div>
    
    <div class="form-group">
        <h4>Address</h4>
        <input 
            type="text" 
            id="address"
            name="address"
            class="form-control"
            value="{{$player -> address}}"
            readonly>
    </div>
    <div class="form-group">
        <h4>Description</h4>
        <textarea 
            class="form-control" 
            id="description" 
            name="description"
            rows="5"
            wrap="hard"
            readonly>{{$player -> description}}</textarea>
    </div>
    <h4 class="mt-3">Retired?</h4>
    <div class="form-check">
            <input class="form-check-input" type="radio" name="retired" id="retired" value="0" disabled {{ $player->retired=="0" ? "checked":"" }}>
            <label class="form-check-label" for="retired">
            Yes
            </label>
            <br>
            <input class="form-check-input" type="radio" name="retired" id="retired" value="1" disabled {{ $player->retired=="1" ? "checked":"" }}>
            <label class="form-check-label" for="retired">
            No
            </label>
    </div>
    <div class="pr-1 mt-2">
        <a href="{{url('players/')}}" type="button"
        class="btn btn-primary btn-sm">Back</a>
    </div>
</form>
