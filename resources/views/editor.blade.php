<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.bootcdn.net/ajax/libs/react-markdown-editor-lite/1.3.0/index.min.css" rel="stylesheet">
    <script src="https://cdn.bootcdn.net/ajax/libs/react-markdown-editor-lite/1.3.0/index.min.js"></script>
</head>
<body>
<div>
    <form method="post" id="formMd">
        <input type="hidden" name="_token" value="9b32R4AWeH8XWkEpmi5Kpf6uzIsYFjUwcSLTZpqD">    <div class="article-ue-title">
            <p>文章标题</p>
            <input class="f-input" type="text" id="title" name="artTitle" placeholder="输入标题">
            <p>文章来源</p>
            <div class="radio">
                <label for="ck1">原创</label><input type="radio" name="orir" value="原创" id="ck1">
                <label for="ck2">转载</label><input type="radio" name="orir" value="转载" id="ck2">
            </div>
        </div>
        <div id="editor">
            <textarea style="display: none">Editor-Md！</textarea>
        </div>
        <input type="hidden" name="artHtml" id="artHtml">
        <input type="hidden" name="artContent" id="artConent">
    </form>
</div>
</body>
<script src="https://cdn.bootcdn.net/ajax/libs/editor-md/1.5.0/editormd.min.js"></script>
<script>
    window.onload = function (){

        var editor = editormd("editor", {
            width: "100%",
            height: 650,
            saveHTMLToTextarea: true,
            // markdown: "xxxx",     // dynamic set Markdown text
            path : "/plugs/editor-md/lib/"  // Autoload modules mode, codemirror, marked... dependents libs path
        });

        $('#submit').click(function (){
            submitMd();
        })

        function submitMd(){
            $('#formMd').submit();
        }
    }
</script>
</html>