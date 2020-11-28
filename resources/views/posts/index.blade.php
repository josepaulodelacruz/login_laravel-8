@extends('layouts.app')

@section('content')

    <div class="flex justify-center">
        <div class="bg-white rounded-lg p-4 w-4/12">
            <form action="{{ route('posts') }}" method="post">
                @csrf
                <label for="body" class="sr-only">Body</label>
                <textarea placeholder="Your content" name="body" id="body" cols="30" rows="10" class="bg-gray-200 @error('body') border-red-500 @enderror w-full p-2 "></textarea>
                @error('body')
                <div class="text-red-500 p-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
                <button type="submit" class="bg-blue-500 w-full text-white text-center p-3 rounded-font-medium rounded-lg" >Post</button>

                @if($posts->count())
                    @foreach($posts as $post)
                    <div class="mb-4">
                        <a href="" class="font-bold">{{ $post->user->name }}</a>
                        <span class="text-gray-600 text-sm">{{ $post->created_at->diffForHumans() }}</span>
                        <p class="mb-2">{{ $post->body }}</p>
                    </div>
                    @endforeach
                @else
                    <p>No posts</p>
                @endif

            </form>
        </div>
    </div>


@endsection

