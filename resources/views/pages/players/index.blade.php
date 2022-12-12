@extends ('master.main')

@section('styles')
@stop

@section('scripts')
@stop

@section('content')
<div class="container">
  <h1 class="mt-5">Players List</h1>
  @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
      {{ session('status') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif
        <table class="table table-striped table-bordered mt-3">
            <thead>
              <tr>
                <th scope="col-sm-1">#</th>
                <th scope="col-sm-2">Name</th>
                <th scope="col-sm-4">Address</th>
                <th scope="col-sm-1">Retired</th>
                <th scope="col-sm-3">Actions </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($players as $player)
                    @component('components.players.player-list', ['player' => $player])
                    @endcomponent
                @endforeach    
            </tbody>
          </table>
</div>
@stop