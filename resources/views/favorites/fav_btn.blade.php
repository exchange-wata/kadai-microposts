@if (Auth::user()->is_favorites($micropost->id))
     {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
          {!! Form::submit('UnFavorite', ['class' => 'btn btn-success btn-sm']) !!}
     {!! Form::close() !!}
@else
     {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
          {!! Form::submit('Favorite', ['class' => 'btn btn-info btn-sm']) !!}
     {!! Form::close() !!}

@endif
