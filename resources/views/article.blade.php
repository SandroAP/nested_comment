<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Comments</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container col-md-6 comment-container">
            <div class="content">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-group">
                            @foreach ($errors->all() as $error)
                                <li class="list-group-item">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="articles" method="POST" id="article_form" name="article_form">
                    {{ csrf_field() }}
                    <div>
                        <h3>Write an article name</h3>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" placeholder="Article name" name="article_name" id="article_name" required>
                    </div>
                    <div class="form-group col-md-4">
                        <input type="submit" value="Add article" class="form-control btn btn-success" id="article_button">
                    </div>
                </form>


                @foreach($articles as $article)
                <div class="col-md-12 alert alert-success">
                    <h4>{{ $article->name }}</h4>
                    <a href="#" aid="{{ $article->id }}" name_a="{{ $article->name }}" token="{{ csrf_token() }}" class="alert-link reply">Comment</a>
                    <div class="reply-form">
                        <!-- Dynamic Reply form -->
                    </div>
                </div>
                @include('comments', ['comments' => $article->comments, 'parent' => 0])
                @endforeach
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
    <script src="/js/main.js"></script>
    <script>
        $(document).ready(function () {
        });
    </script>
</html>

