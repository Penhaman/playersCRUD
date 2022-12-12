@extends('master.main')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-9 ml-5">
            <h1>Edit player</h1>
            @component('components.players.players-form-edit', ['player' => $player])
            @endcomponent
        </div>
    </div>
</div>
@endsection