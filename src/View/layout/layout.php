
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Derek Sivers</title>
    <meta name="description" content="Derek Sivers: Writer, entrepreneur, avid student of life. I make useful things, and share what I learn.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{max-width:40em;margin:0 auto;padding:5px;font-family:Georgia, serif;font-size:18px;line-height:1.6em;color:#222}h1,h2,h3,h4,h5,small,.small,p.postdate,footer,input[type="submit"],label,dl#tweetlist dt{font-family:"Trebuchet MS", sans-serif;line-height:1em}small,.small{font-size:0.8em;font-weight:normal}.spacer{clear:both}input[type="text"],input[type="password"],input[type="email"],select,textarea{padding:0.5em 0.6em;display:block;border:1px solid #ccc;box-shadow:inset 0 1px 3px #ddd;border-radius:4px;vertical-align:middle;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}input[type="text"]:focus,input[type="password"]:focus,input[type="email"]:focus,select,textarea{outline:0;border-color:#129FEA}input[type="submit"]{padding:5px;font-size:1em;display:block;background:#800;color:#fff;font-weight:bold}select{height:2.25em;border:1px solid #ccc;background-color:#fff}label{margin:0.5em 0 0.2em}@media screen and (max-width: 400px){section#masthead h1{font-size:2em}}@media screen and (min-width: 400px){section#masthead h1{font-size:3em}}section#masthead h1{margin:0}section#masthead h1 a{text-decoration:none;color:#800}section#masthead h1 a img{margin-right:5px}section#masthead small{display:block;line-height:1em}div#content h1,div#content h2,div#content h3{color:#800}div#content li,div#content dd{margin-bottom:1em}div#content pre{color:#fff;background-color:#333;padding:0.25em;line-height:1}div#content code{font-size:0.8em}div#content article img{max-width:100%;height:auto;display:block}body#home section{margin-bottom:4em}body#home section#masthead{margin-bottom:1em}body#home div#content h2 small{font-size:70%;font-weight:normal;margin-left:2em}body#home div#content ul{padding-left:0}body#home div#content ul li{list-style-type:none}body#oneblog div#content article header h1 a{text-decoration:none}body#oneblog div#content article header p{margin-top:-1em}body#oneblog div#content article h2,body#oneblog div#content article h3{margin-top:2em}div#comments ol{padding-left:1em}div#comments li{margin-bottom:2em}div#comments span.response{display:block;margin-left:1em;background-color:#cfc;font-weight:bold;padding:4px}body#booklist figure img,body#onebook figure img{float:left;margin-right:2em}body#booklist figure{margin:0 0 8em 0}body#onebook figure{margin:0}body#interview blockquote{margin:0}body#home dt,body#code dt,body#music dt{font-weight:bold}dl#tweetlist dt{font-weight:normal}div.presentation_summary{margin-bottom:6em}@media screen and (max-width: 400px){div.presentation_summary img{display:block}}@media screen and (min-width: 400px){div.presentation_summary img{float:right}}p.postdate,footer,dl#tweetlist dt{font-size:80%;color:#666}
    </style>
</head>
<body id="home">

<section id="masthead">
    <h1><a href="/" title="Derek Sivers"><img src="/assets/img/me.jpeg">金马的 Blog</a></h1>
    <small>一匹程序员</small>
</section>

<div id="content">
    <?= $yield ?>
</div>
<script type="text/javascript">
    /* <![CDATA[ */
    (function(){try{var s,a,i,j,r,c,l=document.getElementsByTagName("a"),t=document.createElement("textarea");for(i=0;l.length-i;i++){try{a=l[i].getAttribute("href");if(a&&a.indexOf("/cdn-cgi/l/email-protection") > -1  && (a.length > 28)){s='';j=27+ 1 + a.indexOf("/cdn-cgi/l/email-protection");if (a.length > j) {r=parseInt(a.substr(j,2),16);for(j+=2;a.length>j&&a.substr(j,1)!='X';j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}j+=1;s+=a.substr(j,a.length-j);}t.innerHTML=s.replace(/</g,"&lt;").replace(/>/g,"&gt;");l[i].setAttribute("href","mailto:"+t.value);}}catch(e){}}}catch(e){}})();
    /* ]]> */
</script>
</body>
</html>