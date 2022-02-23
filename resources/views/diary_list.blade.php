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

    <link href='{{asset('/css/index.css')}}' rel="stylesheet">
    <link href='{{asset('/css/article.css')}}' rel="stylesheet">
    <link href='{{asset('/css/article-post.css')}}' rel="stylesheet">
    <link href='{{asset('/css/normal.css')}}' rel="stylesheet">
</head>
<body>
<div>
    <div class="hd logodiv">
        <img src="" class="logopng">
        <p class="logot">
            <span class="logo_1">&lt;</span>
            <span class="logo_2">/</span>
            <span class="logo_3">#</span>
            <a class="site-name ruby-title" href="/" title="Index">
                <ruby>
                    Bluebolo
                </ruby>
            </a>
            <span class="logo_3">#</span>
            <span class="logo_2">/</span>
            <span class="logo_1">&gt;</span>
        </p>
    </div>
    <div class="hd">
        <ol class="breadcrumb">
            <li><a class="ba" href="/archives" style="">归档</a></li>
            <li><a class="ba" href="/links" style="">友链</a></li>
            <li><a class="ba" href="/about" style="">关于</a></li>
            <li><a class="ba" href="/diary/list" style="">杂谈</a></li>
        </ol>
    </div>
    <div class="line"></div>
    <div class="hd index-body">
        <div id="holder"></div>
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
    function getLocalTime(nS) {
        return new Date(parseInt(nS) * 1000).toLocaleString().replace(/:\d{1,2}$/,' ');
    }

    axios.get(getUrl() + '/api/get/menu').then(res=>{
        console.log(res.data)
        for(let i in res.data){
            console.log(getLocalTime(res.data[i][1]))

            let html = document.createElement('div')
            let _url = '/diary/' + res.data[i][0]
            html.innerHTML = `<a class="flink" href="/diary/${res.data[i][0]}" style="color: #51525d;">
                <div class="list">
                    <div class="postname">
                        ${res.data[i][0]}
                    </div>
                    <div class="posttime">
                        ${getLocalTime(res.data[i][1]).slice(5, 11)}
                    </div>
                </div>
            </a>`
            document.body.querySelector('#holder').appendChild(html)
        }
    })
</script>
</html>