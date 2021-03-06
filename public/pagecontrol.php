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
    <script src="js/pagecontrol.js"></script>

    <title>Modern UI CSS</title>
</head>
<body class="modern-ui" onload="prettyPrint()">
    <div class="page secondary">
        

        <div class="page-header">
            <div class="page-header-content">
                <h1>PageControl<small>demo</small></h1>
                <a href="index.php" class="back-button big page-back"></a>
            </div>
        </div>

        <div class="page-region">
            <div class="page-region-content">

                <div class="page-control span10" data-role="page-control">
                    <ul>
                        <li class="active"><a href="#page1">Page 1</a></li>
                        <li><a href="#page2">Page 2</a></li>
                        <li><a href="#page3">Page 3</a></li>
                        <li><a href="#page4">Page 4</a></li>
                    </ul>

                    <div class="frames">
                        <div class="frame active" id="page1">
                            <h2>Page 1</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed erat urna, non pulvinar nisi. Aenean quis tellus non magna pharetra fringilla non id ipsum. Aliquam quis nisl et mi vulputate consequat vel id lectus. Phasellus a porttitor turpis. Vivamus sit amet accumsan ligula. In porttitor odio id orci consectetur bibendum. Vestibulum vehicula posuere risus ac porta. Curabitur risus libero, tristique vel dictum a, blandit vel augue. Morbi ultricies eros eget massa malesuada aliquam. Nam quis est nibh. Proin eleifend laoreet aliquam.</p>
                        </div>
                        <div class="frame" id="page2">
                            <h2>Page 2</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce blandit condimentum nibh, vitae lobortis velit laoreet non. Pellentesque feugiat turpis nec est gravida posuere scelerisque metus interdum. Morbi ante dui, luctus posuere tempus ut, convallis vitae velit. Aliquam auctor vehicula volutpat. Donec fermentum turpis nec nulla elementum pellentesque. Aenean tristique ullamcorper nisi et placerat. Pellentesque euismod sagittis tincidunt. Ut non augue tellus, eget fringilla tellus. Morbi sit amet leo a tortor dictum aliquet tempus nec arcu. Morbi iaculis nisi vitae libero tempus tristique. Vestibulum blandit, tortor rhoncus viverra ultrices, risus libero vulputate eros, nec aliquet nisl justo id elit. Ut facilisis, arcu vel lobortis ultricies, sapien dolor porttitor mi, vitae mollis lorem nunc vel leo. Nam iaculis justo at nibh eleifend scelerisque.</p>
                        </div>
                        <div class="frame" id="page3">
                            <h2>Page 3</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae nunc orci, sed convallis mi. Mauris et risus neque, id blandit libero. Integer vel justo enim. Suspendisse semper neque sit amet velit dapibus varius. Nunc laoreet, velit et gravida feugiat, arcu dui dictum lacus, at aliquet libero lectus sed risus. In hac habitasse platea dictumst. Aenean mattis pulvinar tristique. Curabitur dolor lacus, convallis vitae lacinia ut, fermentum ut metus. Proin eu elementum nisi.</p>
                        </div>
                        <div class="frame" id="page4">
                            <h2>Page 4</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porta condimentum sem sed commodo. Praesent vestibulum, libero eget lacinia pretium, metus augue dapibus odio, nec placerat mauris justo non ante. Maecenas adipiscing nulla sed sem molestie quis pulvinar lectus convallis. Nam tortor arcu, gravida nec tristique sit amet, pretium sagittis eros. Curabitur at nisi ut ligula ornare euismod. Ut vitae tortor eget elit dictum dictum. Ut porttitor, ante non blandit gravida, felis risus feugiat neque, eu tincidunt neque ante at urna. Maecenas nec felis nulla. Praesent volutpat ligula vel diam venenatis feugiat. Praesent quis nunc quis nisl condimentum dapibus in sed ipsum. Aenean nulla sapien, consequat id aliquam ac, sollicitudin sed nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis vitae risus erat.</p>
                        </div>
                    </div>
                </div>

                <h2>Component definition</h2>
<pre class="prettyprint linenums span10">
    &lt;div class="page-control" data-role="page-control"&gt;
        === Tabs ===
        &lt;ul&gt;
            &lt;li class="active"&gt;&lt;a href="#frame1"&gt;Frame1&lt;/a&gt;&lt;/li&gt;
            ...
            &lt;li&gt;&lt;a href="#frameN"&gt;FrameN&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
        === Tabs content ===
        &lt;div class="frames"&gt;
            &lt;div class="frame active" id="frame1"&gt; ...frame content... &lt;/div&gt;
            ...
            &lt;div class="frame" id="frameN"&gt; ...frame content... &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
</pre>
                <h2>Javascript</h2>
                <p>Include in head <code>pagecontrol.js</code></p>

                <br />
                <div class="grid">
                    <div class="row">
                        </div>
                </div>

            </div>
        </div>
        

    </div>
    

</body>
</html>