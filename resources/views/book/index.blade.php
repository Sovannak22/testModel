@extends('template.app')

@section('content')
    <h1>
        Books
    </h1>

    @if (count($books)>0)
    <div class="row">
        @foreach ($books as $book)
                <div class="card col-md-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$book->title}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$book->author}}</h6>
                    <p class="card-text">{{$book->description}}</p>
                    </div>
                </div>
        @endforeach
    </div>
    @else
        <h1>
            Doesn't have book
        </h1>
    @endif
@endsection