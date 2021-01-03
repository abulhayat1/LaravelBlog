@extends('layout')

        
@section('head')
<script src="/plugins/tinymce/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector:'textarea#body',
                width: 900,
                height: 300
            });
        </script>
@endsection


@section('content')
    <div id="wrapper ">
        <div id="page" class="container">
            <div class="jumbotron jumbotron-fluid">
                <h1 class="display-4">Post Article</h1>
            </div>
            <form method="post" action="/articles">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input id="title" class="form-control" type="title" name="title" required>
                </div>
            <div class="form-group">
                <label for="excerpt">Excerpt</label>
                <textarea id="excerpt" class="form-control" name="excerpt" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="body" class="form-control" name="body" rows="3"></textarea>
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
            </form>
            </br>
            
        </div>
    </div>
    
  
@endsection