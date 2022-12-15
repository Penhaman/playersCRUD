<tr>
    <th scope="row">{{$player -> id}}</th>
    <td>
        @if ($player->image)
            <a><img class="w-25 h-25 img-responsive" src="{{ asset('storage/'.$player->image) }}" alt="" title=""></a>
        @else
            <p>
                No Image
            </p>
        @endif
    </td>
    <td>{{$player -> name}}</td>
    <td>{{$player -> address}}</td>
    <td class="text-center">
        @if ($player->retired === 1)
            <i class="bi bi-emoji-smile-fill" style="color: green"></i>
        @else
            <i class="bi bi-emoji-frown-fill" style="color: red"></i> 
        @endif
    </td>
    <td class="form-inline">
            <!-- Button para mostrar player com ID -->
            <div class="pr-1">
                <a href="{{url('players/' . $player->id)}}" type="button"
                class="btn btn-success btn-sm">Show</a>
            </div>
            <!-- Button para editar player com ID -->
            <div class="pr-1">
                <a href="{{url('players/' . $player->id . '/edit')}}" type="button"
                class="btn btn-primary btn-sm">Edit</a>
            </div>
            <!-- Button para apagar o player -->
            <form action="{{url('players/' . $player->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form> 
    </td>
</tr>