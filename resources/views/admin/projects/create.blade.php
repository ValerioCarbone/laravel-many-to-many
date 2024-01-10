@extends('layout.app')

@section('content')
    <section>
        <div class="container">
            <h2>Create new project</h2>
            <form action="{{ route('admin.projects.store') }}">

                @csrf

                <div class="container">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Title"
                            value="{{ old('title') }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Content</label>
                        <textarea class="form-control" id="content" rows="3">{{ old('content') }}</textarea>
                    </div>
                </div>
            </form>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </section>
@endsection
