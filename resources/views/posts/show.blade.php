<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="device-width,initial-scale=1.0">
        <title>Blog</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,600" type="text/css" />
    </head>
    <body>
        <h1>Blog1</h1>
        <div class="posts">
                <div class="post">
                    <h1>{{$post->title}}</h1>
                    <p>{{$post->body}}</p>
                </div>
        </div>
        <a href="/">戻る</a>
    </body>
</html>