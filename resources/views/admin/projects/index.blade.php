@extends('layouts.app')


@section('content')
    <section>
        <div class="container">
            <h1>Projects</h1>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Content</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>{{ $project->title}}</td>
                            <td>{{ $project->slug}}</td>
                            <td>{{ $project->content}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td>Not Found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{$projects->links()}}
        </div>

    </section>

@endsection