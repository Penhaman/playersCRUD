@extends ('master.main')

@section('styles')
@stop

@section('scripts')
@stop

@section('content')
<div class="container">
        <table class="table table-striped table-bordered mt-3">
            <thead>
              <tr>
                <th scope="col-1">#</th>
                <th scope="col-2">Name</th>
                <th scope="col-4">Address</th>
                <th scope="col-1">Retired</th>
                <th scope="col-3">Actions </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($players as $player)
                    @component('components.players.players-list', ['player' => $player])
                    @endcomponent
                @endforeach    
            </tbody>
          </table>
</div>
@stop