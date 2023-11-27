@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Todos Not Done</h1>
        <a href='/todos/done'>Выполнено</a>
        <a href='/todos/not-done'>Не выполнено</a>
        <ul class="list-group mt-4">
            @foreach($todos as $todo)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                    {{ $todo -> title }}
                    <p style = "font-size: 12px; color: #909090;">{{ $todo->note }}</p>
                    </div>
                    @if($todo->status === 1)
                        <span class="badge bg-success rounded-pill">Выполнено</span>
                    @else
                        <span class="badge bg-danger rounded-pill">Не выполнено</span>
                    @endif
                  </li>
            @endforeach
        </ul>
    </div>
@endsection
