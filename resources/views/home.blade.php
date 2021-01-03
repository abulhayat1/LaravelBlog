@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="list-group">
                <a href="/home" class="list-group-item list-group-item-action"><i class="fas fa-newspaper"></i> Articles</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-cogs"></i> Site Settings</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-user-cog"></i> User Settings</a>
            </div>
        </div>
        <div class="col-md-8">
            <i class="fas fa-bars"></i> Articles
            <a href="/articles/create " class="btn btn-success btn-sm float-right"><i class="far fa-plus-square"></i> Post New Article</a>
            <hr>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $articles as $article)
                    <tr>
                        <td>{{$article->id}}</td>
                        <td><a href="articles/{{$article->id}}">{{$article->title}}</a></td>
                        <td><a href="articles/{{$article->id}}/edit" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a></td>
                        <td><a href="articles/{{$article->id}}/delete" class="btn btn-danger"> <i class="fas fa-trash-alt"></i> Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$articles->links()}}
        </div>
    </div>
</div>
@endsection