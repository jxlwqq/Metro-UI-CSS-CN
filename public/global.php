<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Modern UI CSS">
    <meta name="author" content="Sergey Pimenov">
    <meta name="keywords" content="windows 8, modern style, modern ui, style, modern, css, framework">

    <link href="css/modern.css" rel="stylesheet">
    <link href="css/modern-responsive.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet" type="text/css">
    <link href="js/google-code-prettify/prettify.css" rel="stylesheet">

    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/google-analytics.js"></script>
    <script src="js/github.info.js"></script>
    <script src="js/google-code-prettify/prettify.js"></script>

    <title>Modern UI CSS</title>

</head>
<body class="modern-ui" onload="prettyPrint()">
    <div class="page secondary">
        

        <div class="page-header">
            <div class="page-header-content">
                <h1>全局<small>样式</small></h1>
                <a href="index.php" class="back-button big page-back"></a>
            </div>
        </div>

        <div class="page-region">
            <div class="page-region-content">
                <div class="grid">
                    <div class="row">
                        <div class="span10">
                            <h2>要求 HTML5 doctype</h2>
                            <p>Metro UI CSS 用到的HTML元素和CSS属性需要HTML5 doctype。因此每个页面都应该包启HTML5声明。

</p>

<pre class="prettyprint linenums">
    &lt;!DOCTYPE html&gt;
    &lt;html lang="en"&gt;
      ...
    &lt;/html&gt;
</pre>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span10">
                            <h2>CSS 重置</h2>
                            <p>Metro UI CSS 使用 <a href="http://github.com/necolas/normalize.css">normalize.css</a> 对默认的CSS进行重置(reset)。 Normalize.css项目由 <a href="http://nicolasgallagher.com/">Nicolas Gallaher</a> 创建。
                             
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span3">
                            <h2>颜色</h2>
                            <ul class="unstyled">
                                <li style="height: 40px;"><span class="square bg-color-green"></span>*-color-green</li>
                                <li style="height: 40px;"><span class="square bg-color-greenDark"></span>*-color-greenDark</li>
                                <li style="height: 40px;"><span class="square bg-color-greenLight"></span>*-color-greenLight</li>
                                <li style="height: 40px;"><span class="square bg-color-pink"></span>*-color-pink</li>
                                <li style="height: 40px;"><span class="square bg-color-pinkDark"></span>*-color-pinkDark</li>
                            </ul>
                        </div>
                        <div class="span3">
                            <h2>&nbsp;</h2>
                            <ul class="unstyled">
                                <li style="height: 40px;"><span class="square bg-color-yellow"></span>*-color-yellow</li>
                                <li style="height: 40px;"><span class="square bg-color-darken"></span>*-color-darken</li>
                                <li style="height: 40px;"><span class="square bg-color-purple"></span>*-color-purple</li>
                                <li style="height: 40px;"><span class="square bg-color-blue"></span>*-color-blue</li>
                                <li style="height: 40px;"><span class="square bg-color-blueDark"></span>*-color-blueDark</li>
                            </ul>
                        </div>
                        <div class="span3">
                            <h2>&nbsp;</h2>
                            <ul class="unstyled">
                                <li style="height: 40px;"><span class="square bg-color-blueLight"></span>*-color-blueLight</li>
                                <li style="height: 40px;"><span class="square bg-color-orange"></span>*-color-orange</li>
                                <li style="height: 40px;"><span class="square bg-color-orangeDark"></span>*-color-orangeDark</li>
                                <li style="height: 40px;"><span class="square bg-color-red"></span>*-color-red</li>
                                <li style="height: 40px;"><span class="square bg-color-white"></span>*-color-white</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span10">
                            <p>设置背景颜色使用 <strong>.bg-</strong> 前缀，设置字体颜色使用 <strong>.fg-</strong> 前缀。</p>
<pre class="prettyprint linenums">
    &lt;div class="bg-color-red"&gt;...&lt;/div&gt;
    &lt;span class="fg-color-blue"&gt;...&lt;/span&gt;
</pre>
                        </div>
                    </div>

                    <div class="row">
                        <div class="span10">
                            <h2>字体</h2>
                            <p class="span10">
                                Metro UI CSS 使用 "Microsoft yahei", "微软雅黑" 字体 (根据微软公司相应推荐)。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="grid">
                    <div class="row">
                        </div>
                </div>

            </div>
        </div>
        

    </div>

    

</body>
</html>