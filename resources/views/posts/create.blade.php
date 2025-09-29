@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>Title</label><br>
        <input type="text" name="title" value="{{ old('title') }}"><br><br>

        <label>Content</label><br>
        <textarea name="content">{{ old('content') }}</textarea><br><br>

        <button type="submit">Save</button>
    </form>
@endsection
