<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Metro UI CSS">
<meta name="author" content="Sergey Pimenov">
<meta name="keywords" content="windows 8, modern style, Metro UI, style, modern, css, framework">
<link href="css/modern.css" rel="stylesheet">
<link href="css/modern-responsive.css" rel="stylesheet">
<link href="css/site.css" rel="stylesheet" type="text/css">
<script src="js/jquery-1.8.2.min.js"></script>
<script src="js/google-analytics.js"></script>
<script src="js/github.info.js"></script>
<title>Metro UI CSS</title>
</head>
<body class="modern-ui">
<div class="page">
  <div class="page-region">
    <div class="page-region-content">
      <p class="place-right tertiary-info-secondary-text" style="margin-top: 10px;">创建者 <a class="fg-color-blue" href="http://www.jetbrains.com/phpstorm/">JetBrains PhpStorm</a></p>
      <h2>欢迎来到 Metro UI CSS <sup class="fg-color-red"> v 0.1.1</sup></h2>
      <div class="horizontal-menu">
        <ul>
          <li><a href="/">关于</a></li>
          <li class="sub-menu"> <a href="#">框架</a>
            <ul class="dropdown-menu">
              <li><a href="global.php">全局样式</a></li>
              <li><a href="layout.php">布局模板</a></li>
              <li><a href="grid.php">栅格系统</a></li>
              <li class="divider"></li>
              <li><a href="responsive.php">相应式设计</a></li>
            </ul>
          </li>
          <li class="sub-menu"> <a href="#">基础CSS</a>
            <ul class="dropdown-menu">
              <li><a href="typography.php">排版</a></li>
              <li><a href="tables.php">表格</a></li>
              <li><a href="forms.php">表格</a></li>
              <li><a href="buttons.php">按钮</a></li>
              <li><a href="images.php">图片</a></li>
            </ul>
          </li>
          <li class="sub-menu"> <a href="#">组件</a>
            <ul class="dropdown-menu">
              <li><a href="tiles.php">磁贴</a></li>
              <li><a href="menus.php">菜单</a></li>
              <li><a href="pagecontrol.php">标签页</a></li>
              <li><a href="accordion.php">折叠</a></li>
              <li class="divider"></li>
              <li><a href="notices.php">通知</a></li>
              <li class="divider"></li>
              <li><a href="cards.php">卡片装饰</a></li>
              <!--
                                <li><a href="listview.php">List view</a></li>
                                <li><a href="pagecontrol.php">Page control</a></li>
                                <li><a href="tabcontrol.php">Tab control</a></li>
                                <li><a href="menus.php">Menus</a></li>
                                <li><a href="progress.php">Progress bars</a></li>
                                <li class="divider"></li>
                                <li><a href="messages.php">Messages</a></li>
                                <li class="divider"></li>
                                <li><a href="misc.php">Misc</a></li>
                                -->
            </ul>
          </li>
          <li><a href="javascript.php">Javascript插件</a></li>
        </ul>
      </div>
      <div class="hero-unit"> <img src="images/windows-8-metro.jpg" class="place-left" style="margin-right: 40px;"/>
        <h1 class="fg-color-blueLight">Metro UI CSS</h1>
        <h2>创建一个具有win8风格的网页！</h2>
        <br />
        <p>Metro UI CSS 可以让你快速创建一个具有Windows 8 风格的网页。</p>
        <h3>只需添加： modern.css</h3>
        <p class="tertiary-info-text"> &lt;link href="modern.css" rel="stylesheet"&gt; </p>
        <br />
        <p class="tertiary-info-secondary-text"> <span class="bg-color-greenDark fg-color-white" style="padding: 10px;">本页面应用了 Metro UI CSS.</span> </p>
         </div>
      <div class="grid">
        <div class="row">
          <div class="span4 bg-color-blue"> <img src="images/simple.png" class="place-right" style="margin: 10px;"/>
            <h2 class="fg-color-white">&nbsp;简洁</h2>
          </div>
          <div class="span4 bg-color-pink"> <img src="images/grid.png" class="place-right" style="margin: 10px;"/>
            <h2 class="fg-color-white">&nbsp;充足</h2>
          </div>
          <div class="span4 bg-color-yellow"> <img src="images/responsive.png" class="place-right" style="margin: 10px;"/>
            <h2 class="fg-color-white">&nbsp;响应式设计</h2>
          </div>
        </div>
      </div>
      <div class="grid">
        <div class="row">
          <div class="span4"> <img src="images/author.jpg"/>
            <p class="tertiary-info-secondary-text bg-color-grayDark" style="padding: 10px; color: #fff;">嗨! 我是<span class="tertiary-info-secondary-text bg-color-grayDark" style="padding: 10px; color: #fff;">Metro UI CSS</span>的作者 Sergey Pimenov，来自<abbr title="位于欧洲中部">乌克兰</abbr> <abbr title="乌克兰首都">基辅</abbr>,.</p>
          </div>
          <div class="span4">
            <p> Metro UI CSS 是一种可创建类似于Win8界面风格页面的CSS框架，现已发展为一个独立解决方案。</p>
            <br />
            <p class="tertiary-info-text"> Metro UI CSS用LESS构建。 <a href="http://lesscss.org">LESS</a>是由<a href="http://cloudhead.io/">Alexis Sellier</a>创造的一种动态样本表语言。 它让系统底层的CSS开发变得更快捷高效，更有生趣。</p>
            <h3>支持所有高级浏览器:</h3>
            <div class="browsers-icons clearfix"> <img src="images/ie.png" title="Internet Explorer 9+"/> <img src="images/chrome.png" title="Google Chrome"/> <img src="images/firefox.png" title="Firefox"/> <img src="images/opera.png" title="Opera"/> </div>
            <br />
            <p class="tertiary-info-secondary-text">* Internet Explorer 版本须为 9+</p>
          </div>
          <div class="span4">
            <h2 style="margin-top: 0;">目标:</h2>
            <ol>
              <li>响应式设计</li>
              <li>图块动画效果</li>
              <li>额外的组件</li>
              <li>整合 Visual Studio</li>
              <li>更多...</li>
            </ol>
            <h2 style="margin-top: 0;">类似项目:</h2>
            <ul>
              <li><a href="https://github.com/sagarsane/abetterportfolio">Portfolio for Developers</a></li>
              <li><a href="http://oazabir.github.com/Droptiles/">Droptiles</a></li>
              <li><a href="http://aozora.github.com/bootmetro/">BootMetro</a></li>
            </ul>
            
            
            <!--
                            <br />
                            <div class="">
                                <form style="display:inline" method=POST action="https://liqpay.com/?do=clickNbuy">
                                    <input type="hidden" name="preorder" value="c27a4aa9211f4e6735b739850e99d568422af6e7">
                                    <button type="submit" class="span3 command-button default">Donate 10 USD<small>for Metro UI CSS [LiqPay]</small></button>
                                </form>
                            </div>
                            --> 
          </div>
        </div>
        <div class="row">
          <? include("adsense.php")?>
        </div>
      </div>
    </div>
  </div>
  <? include("footer.php")?>
</div>
<?php include("counter.php");?>
</body>
</html>