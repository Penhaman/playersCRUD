    <form method="POST" action="{{ url('players') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input
                type="text"
                id="name"
                name="name"
                autocomplete="name"
                placeholder="Type your name.."
                class="form-control
                @error('name') is-invalid @enderror"
                value="{{ old('name') }}"
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
            <label for="address">Address</label>
            <input 
                type="text" 
                id="address"
                autocomplete="address"
                placeholder="Type your address.."
                class="form-control"
                @error('address') is-invalid @enderror"
                value="{{ old('address') }}"
                required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea 
                class="form-control" 
                id="description" 
                rows="5" 
                required
                placeholder="Type your description.."></textarea>
        </div>
        <h4 class="mt-3">Retired?</h4>
        <div class="form-check" required>
            <input class="form-check-input" type="radio" name="retiredValue" id="retired" value="0">
            <label class="form-check-label" for="retired">
              Yes
            </label>
            <br>  
            <input class="form-check-input" type="radio" name="retiredValue" id="retired" value="1">
            <label class="form-check-label" for="retired">
              No
            </label>
        </div>  
        <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
