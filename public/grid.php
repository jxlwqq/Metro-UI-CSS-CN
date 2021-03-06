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
    <link href="js/google-code-prettify/prettify.css" rel="stylesheet" type="text/css">

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
                <h1>栅格<small>系统</small></h1>
                <a href="index.php" class="back-button big page-back"></a>
            </div>
        </div>

        <div class="page-region">
            <div class="page-region-content">
                <div class="span10">
                    <h2>默认栅格系统</h2>
<pre class="prettyprint linenums">
    &lt;div class="grid"&gt;
        &lt;div class="row"&gt;
            &lt;div class="spanN"&gt;...&lt;/div&gt;
            ...
            &lt;div class="spanN"&gt;...&lt;/div&gt;
        &lt/div&gt;
    &lt/div&gt;
</pre>
                    <p>
                        栅格没有设定最大宽度值，而是100%填充父级容器。 一个基本的布局由N个“列”组成，栅格系统由一系列横跨12等分的"span*"组成。. ".span*"类 拥有 margin left 20px 与 margin bottom 5px 的属性.
                  </p>
                    <h2>列的宽度</h2>
                    <table class="stripped bordered">
                        <thead>
                            <tr>
                                <th class="text-center">N</th>
                                <th>列类属性</th>
                                <th class="right">对应列宽</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td class="span1 center">1</td><td>span1</td><td class="right span2">60px</td></tr>
                            <tr><td class="span1 center">2</td><td>span2</td><td class="right">140px</td></tr>
                            <tr><td class="span1 center">3</td><td>span3</td><td class="right">220px</td></tr>
                            <tr><td class="span1 center">4</td><td>span4</td><td class="right">300px</td></tr>
                            <tr><td class="span1 center">5</td><td>span5</td><td class="right">380px</td></tr>
                            <tr><td class="span1 center">6</td><td>span6</td><td class="right">460px</td></tr>
                            <tr><td class="span1 center">7</td><td>span7</td><td class="right">540px</td></tr>
                            <tr><td class="span1 center">8</td><td>span8</td><td class="right">620px</td></tr>
                            <tr><td class="span1 center">9</td><td>span9</td><td class="right">700px</td></tr>
                            <tr><td class="span1 center">10</td><td>span10</td><td class="right">780px</td></tr>
                            <tr><td class="span1 center">11</td><td>span11</td><td class="right">860px</td></tr>
                            <tr><td class="span1 center">12</td><td>span12</td><td class="right">940px</td></tr>
                        </tbody>
                    </table>
                    <p>spanN类 can be used on any tags for setting width.</p>
                </div>
                <h3>例子</h3>
                <div class="grid element-border">
                    <div class="row">
                        <div class="span1">span1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                    </div>
                    <div class="row">
                        <div class="span2">span2</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                    </div>
                    <div class="row">
                        <div class="span3">span3</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                    </div>
                    <div class="row">
                        <div class="span4">span4</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                    </div>
                    <div class="row">
                        <div class="span5">span5</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                    </div>
                    <div class="row">
                        <div class="span6">span6</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                    </div>
                    <div class="row">
                        <div class="span7">span7</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                    </div>
                    <div class="row">
                        <div class="span8">span8</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                    </div>
                    <div class="row">
                        <div class="span9">span9</div>
                        <div class="span1">1</div>
                    </div>
                    <div class="row">
                        <div class="span10">span10</div>
                    </div>
                </div>

                <h2>列的内嵌</h2>
                <p>You can create grid in grid</p>
<pre class="prettyprint linenums span10">
    &lt;div class="grid"&gt;
        &lt;div class="row"&gt;
            &lt;div class="spanN"&gt;
                &lt;div class="row"&gt;
                    &lt;div class="spanN"&gt;
                        ...
                    &lt;/div&gt;
                &lt/div&gt;
            &lt;/div&gt;
        &lt/div&gt;
    &lt/div&gt;
</pre>
                <h3>例子</h3>
                <div class="grid span10">
                    <div class="row">
                        <div class="span10 bg-color-pink">Main grid</div>
                    </div>

                    <div class="row">
                        <div class="span5">
                            <div class="row bg-color-green">
                                <div class="span2">Sub</div>
                                <div class="span2">grid</div>
                                <div class="span1">1</div>
                            </div>
                        </div>
                        <div class="span5">
                            <div class="row bg-color-yellow">
                                <div class="span3">Sub grid</div>
                                <div class="span2">2</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="span10 bg-color-pink">Main grid</div>
                    </div>
                </div>

                <h2>列的偏移</h2>
                <div class="grid element-border">
                    <div class="row">
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                        <div class="span1">1</div>
                    </div>
                    <div class="row">
                        <div class="span9 offset1">offset1</div>
                    </div>
                    <div class="row">
                        <div class="span8 offset2">offset2</div>
                    </div>
                    <div class="row">
                        <div class="span7 offset3">offset3</div>
                    </div>
                    <div class="row">
                        <div class="span6 offset4">offset4</div>
                    </div>
                    <div class="row">
                        <div class="span5 offset5">offset5</div>
                    </div>
                    <div class="row">
                        <div class="span4 offset6">offset6</div>
                    </div>
                    <div class="row">
                        <div class="span3 offset7">offset7</div>
                    </div>
                    <div class="row">
                        <div class="span2 offset8">offset8</div>
                    </div>
                    <div class="row">
                        <div class="span1 offset9">offs9</div>
                    </div>
                </div>
                <h2>Offsets dimention</h2>
                <div class="span10">
                    <table class="stripped bordered">
                        <thead>
                        <tr>
                            <th class="text-center">N</th>
                            <th>Cell class</th>
                            <th class="right">Cell width</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr><td class="span1 center">1</td><td>offset1</td><td class="right span2">80px</td></tr>
                        <tr><td class="span1 center">2</td><td>offset2</td><td class="right">160px</td></tr>
                        <tr><td class="span1 center">3</td><td>offset3</td><td class="right">240px</td></tr>
                        <tr><td class="span1 center">4</td><td>offset4</td><td class="right">320px</td></tr>
                        <tr><td class="span1 center">5</td><td>offset5</td><td class="right">400px</td></tr>
                        <tr><td class="span1 center">6</td><td>offset6</td><td class="right">480px</td></tr>
                        <tr><td class="span1 center">7</td><td>offset7</td><td class="right">560px</td></tr>
                        <tr><td class="span1 center">8</td><td>offset8</td><td class="right">640px</td></tr>
                        <tr><td class="span1 center">9</td><td>offset9</td><td class="right">720px</td></tr>
                        <tr><td class="span1 center">10</td><td>offset10</td><td class="right">800px</td></tr>
                        <tr><td class="span1 center">11</td><td>offset11</td><td class="right">880px</td></tr>
                        <tr><td class="span1 center">12</td><td>offset12</td><td class="right">960px</td></tr>
                        </tbody>
                    </table>
                    <p>Class offsetN can be used on any tags for margin left.</p>
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