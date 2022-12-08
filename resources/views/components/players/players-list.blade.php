<tr>
    <th scope="row">{{$player -> id}}</th>
    <td>{{$player -> name}}</td>
    <td>{{$player -> address}}</td>
    <td class="text-center">
        @if ($player->retired === 1)
            <i class="bi bi-emoji-smile-fill" style="color: green"></i>
        @else
            <i class="bi bi-emoji-frown-fill" style="color: red"></i> 
        @endif
    </td>
    <td>
        <button type="button" class="btn btn-success btn-sm" href="{{ url('players/show/{$player->id}') }}">Show</button>
        <button type="button" class="btn btn-primary btn-sm" href="{{ url('players/edit/{$player->id}') }}">Edit</button>
        <button type="button" class="btn btn-danger btn-sm" href="{{ url('players/delete/{$player->id}') }}">Delete</button>
    </td>
</tr>