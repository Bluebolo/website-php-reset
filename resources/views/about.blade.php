<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+SC:wght@200&display=swap" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RT0G89D1C0"></script>


    <link href='{{asset('/css/article.css')}}' rel="stylesheet">
    <link href='{{asset('/css/article-post.css')}}' rel="stylesheet">
    <link href='{{asset('/css/normal.css')}}' rel="stylesheet">
    <script src="https://cdn.bootcdn.net/ajax/libs/timeago.js/4.0.2/timeago.min.js"></script>
</head>
<style>
    i{
        color: #66BAB7;
    }
</style>
<body>
<div>
    <div class="hd posts">
        <h1 class="post-title">关于</h1>
        <div class="post-content">

            <div class="line" style="width: 100%;margin: 24px auto"></div>
            <blockquote>
                Across the universe
                <br>
                Let the stars align
            </blockquote>
            <h3>关于Blog</h3>
            <div>
                <p>Blog从2020.1.30运行至今</p>
                <p>前后端均使用Laravel</p>
                <p>服务器，数据库均托管至腾讯云</p>
                <p>这次已经是几不可察的第四次UI大改，参考主题<a href="https://github.com/journey-ad/hexo-theme-geek">Geek</a>。<del>前几次不要找了</del></p>
            </div>
            <h3>关于我</h3>
            <div>
                <p>九九年，上世纪产物</p>
                <p>可能类似是他人口中的二次元，ACGN领域均有涉猎</p>
                <p>如果你在其它的地方看到了Bluebolo应该也是我</p>
                <p><del>四川大学在读</del></p>
            </div>
            <h4>联系方式</h4>
            <ul>
                <li>邮件：zbwumi@gmail.com <i>/*我肯定是看的见的*/</i></li>
                <li>gitgub：https://github.com/Bluebolo <i>/*空空如也*/</i></li>
                <li>bilibili：https://space.bilibili.com/6560556 <i>/*作为大龄二次元必看的地方*/</i></li>

            </ul>
            <p>and... another Bluebolo?</p>
            <h3>版权声明</h3>
            <div>
                <p>博客内的所有原创内容（包括但不限于文章、图像等）除特别声明外均采用<a href="http://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank" rel="noopener">知识共享署名-非商业性使用-相同方式共享 4.0 国际许可协议</a>，任何人都可以自由传播，但不得用于商用且必须署名并以相同方式分享。</p>
                <p>本站部分内容转载于网络，有出处的已在文中署名作者并附加原文链接，出处已不可寻的皆已标注来源于网络。若您认为本博客有部分内容侵犯了您的权益，请在评论区留言或电邮告知，我将认真处理。</p>
            </div>
            <div class="line" style="width: 100%;margin: 24px auto"></div>
        </div>
    </div>
    <div class="footer" id="footer" style="color: #51525d;">
        <p>
            Copyright © 2021 <a class="flink" href="https://nocilol.me" style="color: #51525d;">Bluebolo</a><br>
        </p>
    </div>
</div>
</body>
<script>
    window.onload = () => {
        document.querySelector('body').style.fontFamily = '"Noto Serif SC", serif !important';
        timeago.render(document.querySelectorAll('.need_to_be_rendered'));
    }
</script>
</html>