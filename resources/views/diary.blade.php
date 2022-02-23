<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daily</title>

    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+SC:wght@200&display=swap" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RT0G89D1C0"></script>

    <script src="https://cdn.bootcdn.net/ajax/libs/marked/2.1.3/marked.min.js"></script>

    <link href='{{asset('/css/article.css')}}' rel="stylesheet">
    <link href='{{asset('/css/article-post.css')}}' rel="stylesheet">
    <link href='{{asset('/css/normal.css')}}' rel="stylesheet">
</head>
<body>
<div>
    <div class="hd posts">
        <h1 class="post-title">{{$title}}</h1>
        <div class="line" style="width: 100%"></div>
        <div class="post-content" style="margin: 24px auto">
{{--            <blockquote style="display: block;">--}}
{{--                This article was published <span class="need_to_be_rendered" datetime="" id="time"></span>. The--}}
{{--                information described in this article may have changed or become outdated. Please pay attention to--}}
{{--                distinguish--}}
{{--            </blockquote>--}}
        </div>
        <div class="post-content" id="view">

        </div>
        <div class="line" style="width: 100%"></div>
    </div>
    <div class="footer" id="footer" style="color: #51525d;">
        <p>
            Copyright © 2021 <a class="flink" href="https://nocilol.me" style="color: #51525d;">Bluebolo</a><br>
        </p>
    </div>
</div>
</body>
<script src="https://cdn.bootcdn.net/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script src="{{asset('/js/url.js')}}"></script>
<script>
    let url = window.location.pathname
    axios.get(getUrl() + '/md/' + url.substr(url.lastIndexOf('/')+1)).then(res=>{
        console.log(res)
        document.getElementById("view").innerHTML = marked(res.data)
    })
</script>
</html>