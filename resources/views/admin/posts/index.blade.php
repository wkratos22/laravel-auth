@extends('layouts.app')

@section('content')

        @forelse ($posts as $post)
           <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-title">{{ $posts->name }}</p>
                    <p class="card-text">{{ $posts->email }}</p>
                </div>
        </div> 
        @empty
            <p>non ci sono elementi</p>
        @endforelse

    
@endsection