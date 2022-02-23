<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404</title>
</head>
<body>
<div>是空的。</div>
</body>
<script src="{{asset('/js/url.js')}}"></script>
<script>
    window.onload  = ()=>{
        setTimeout(()=>{
            window.location.href = getUrl()
        },1500)
    }
</script>
</html>