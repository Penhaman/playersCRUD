<form class="mt-4">
    
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
            readonly>
            {{$player -> description}}
        </textarea>
    </div>
    <h4 class="mt-3">Retired?</h4>
    <div class="form-check">
        <div class="custom-control custom-radio custom-control-inline">
            <input class="custom-control-input" type="radio" name="retired" id="retired" value="0" disabled {{ $player->retired=="0" ? "checked":"" }}>
            <label class="custom-control-label" for="retired">
            Yes
            </label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input class="custom-control-input" type="radio" name="retired" id="retired" value="1" disabled {{ $player->retired=="1" ? "checked":"" }}>
            <label class="custom-control-label" for="retired">
            No
            </label>
        </div>
    </div>
</form>
