    <form method="POST" action="{{ url('players') }}">
        @csrf
        <div class="form-group">
            <h4>Name</h4>
            <input
                type="text"
                id="name"
                name="name"
                autocomplete="name"
                placeholder="Type your name.."
                class="form-control"
                @error('name') is-invalid @enderror
                value="{{old('name')}}"
                required
                aria-describedby="nameHelp">
            <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
            @error('name')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <h4>Address</h4>
            <input 
                type="text" 
                id="address"
                name="address"
                autocomplete="address"
                placeholder="Type your address.."
                class="form-control"
                @error('address') is-invalid @enderror
                value="{{old('address')}}"
                required
                >
                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="form-group">
            <h4>Description</h4>
            <textarea 
                class="form-control" 
                id="description" 
                name="description"
                rows="5" 
                value="{{old('description')}}"
                placeholder="Type your description..">
            </textarea>
        </div>
        <h4 class="mt-3">Retired?</h4>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="retired" id="retired" value="0">
            <label class="form-check-label" for="retired">
              Yes
            </label>
            <br>  
            <input class="form-check-input" type="radio" name="retired" id="retired" value="1">
            <label class="form-check-label" for="retired">
              No
            </label>
        </div>  
        <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
