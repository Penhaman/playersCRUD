<form class="mt-5" method="POST" action="{{ url('players/' . $player->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <h4>Name</h4>
        <input
            type="text"
            id="name"
            name="name"
            class="form-control"
            value="{{$player -> name}}"
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
            >
    </div>
    <div class="form-group">
        <h4>Description</h4>
        <textarea 
            class="form-control" 
            id="description" 
            name="description"
            rows="5"
            wrap="hard"
            >
            {{$player -> description}}
        </textarea>
    </div>
    <h4 class="mt-3">Retired?</h4>
    <div class="form-check" required>
        <input class="form-check-input" type="radio" name="retired" id="retired" value="0" {{ $player->retired=="0" ? "checked":"" }}>
        <label class="form-check-label" for="retired">
          Yes
        </label>
        <br>
        <input class="form-check-input" type="radio" name="retired" id="retired" value="1" {{ $player->retired=="1" ? "checked":"" }}>
        <label class="form-check-label" for="retired">
          No
        </label>
    </div>  
    <button type="submit" class="btn btn-primary mt-4">Submit</button>
</form>