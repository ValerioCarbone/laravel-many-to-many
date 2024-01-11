@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h2 class="text-center mb-3">Your Projects</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th>
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.projects.create') }}">Nuovo</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $project)
                        <tr>
                            <td>
                                {{ $project->id }}
                            </td>
                            <td>
                                {{ $project->title }}
                            </td>
                            <td>
                                {{ $project->content }}
                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>There are no projects.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection
