@if (Auth::check())
    @if (Auth::user()->is_favoriting($micropost->id))
        {{-- アンフォローボタンのフォーム --}}
        {!! Form::open(['route' => ['micropost.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-warning btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {{-- フォローボタンのフォーム --}}
        {!! Form::open(['route' => ['micropost.favorite', $micropost->id]]) !!}
            {!! Form::submit('favorite', ['class' => "btn btn-success btn-sm"]) !!}
        {!! Form::close() !!}
    @endif
@endif