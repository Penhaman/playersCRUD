@extends ('master.main')

@section('styles')
@stop

@section('scripts')
@stop

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-9 ml-5">
                <h1>Add player</h1>
                @component('components.players.player-form-create')
                @endcomponent
               
            </div>
        </div>
    </div>
@stop