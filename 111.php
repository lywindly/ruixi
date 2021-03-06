﻿
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        快速开始 - Web Uploader
    </title>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="/webuploader/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="http://fex.baidu.com/webuploader/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://fex.baidu.com/webuploader/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="http://fex.baidu.com/webuploader/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://fex.baidu.com/webuploader/css/syntax.css">
    <link rel="stylesheet" type="text/css" href="http://fex.baidu.com/webuploader/css/style.css">

    <link rel="stylesheet" type="text/css" href="http://fex.baidu.com/webuploader/css/webuploader.css">

</head>

<body>
<div id="wrapper">
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="/webuploader/">
                    <span class="fa fa-cloud-upload"></span>WebUploader</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">      <li class="active"><a href="/webuploader/getting-started.html" class="active">Getting started</a></li>      <li><a href="/webuploader/document.html">Document</a></li>           <li><a href="/webuploader/doc/index.html">API</a></li>    <li><a href="/webuploader/demo.html">Demo</a></li>          <li><a href="/webuploader/download.html">Download</a></li>
                    <li><a target="_blank" href="https://github.com/fex-team/webuploader/issues?labels=faq&amp;page=1&amp;state=open">FAQ</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a target="_blank" href="https://github.com/fex-team/webuploader">Github</a></li>
                </ul>
            </div>
            <!-- /.nav-collapse -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.navbar --> <div class="page-body">
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1>Getting Started</h1>

                <p>结合简单例子，快速掌握使用方法。</p>

            </div>
        </div>


        <div id="post-container" class="container">




            <div class="row">
                <div class="col-md-3">
                    <div class="post-toc"><ul class="nav">
                            <li>
                                <a href="#引入资源">引入资源</a>
                            </li>
                            <li>
                                <a href="#文件上传">文件上传</a>
                                <ul class="nav">
                                    <li>
                                        <a href="#html部分">Html部分</a>
                                    </li>
                                    <li>
                                        <a href="#初始化web-uploader">初始化Web Uploader</a>
                                    </li>
                                    <li>
                                        <a href="#显示用户选择">显示用户选择</a>
                                    </li>
                                    <li>
                                        <a href="#文件上传进度">文件上传进度</a>
                                    </li>
                                    <li>
                                        <a href="#文件成功、失败处理">文件成功、失败处理</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#图片上传">图片上传</a>
                                <ul class="nav">
                                    <li>
                                        <a href="#html">Html</a>
                                    </li>
                                    <li>
                                        <a href="#javascript">Javascript</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">



                    <div class="page-container">
                        <h2 id="引入资源">引入资源</h2>

                        <p>使用Web Uploader文件上传需要引入三种资源：JS, CSS, SWF。</p>
                        <div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!--引入CSS--&gt;</span>
<span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">&quot;stylesheet&quot;</span> <span class="na">type=</span><span class="s">&quot;text/css&quot;</span> <span class="na">href=</span><span class="s">&quot;webuploader文件夹/webuploader.css&quot;</span><span class="nt">&gt;</span>

<span class="c">&lt;!--引入JS--&gt;</span>
<span class="nt">&lt;script </span><span class="na">type=</span><span class="s">&quot;text/javascript&quot;</span> <span class="na">src=</span><span class="s">&quot;webuploader文件夹/webuploader.js&quot;</span><span class="nt">&gt;&lt;/script&gt;</span>

<span class="c">&lt;!--SWF在初始化的时候指定，在后面将展示--&gt;</span>
</code></pre></div>
                        <h2 id="文件上传">文件上传</h2>

                        <p>WebUploader只包含文件上传的底层实现，不包括UI部分。所以交互方面可以自由发挥，以下将演示如何去实现一个简单的版本。</p>

                        <p>请点击下面的<code>选择文件</code>按钮，然后点击<code>开始上传</code>体验此Demo。</p>

                        <div id="uploader" class="wu-example">
                            <div id="thelist" class="uploader-list"></div>
                            <div class="btns">
                                <div id="picker">选择文件</div>
                                <button id="ctlBtn" class="btn btn-default">开始上传</button>
                            </div>
                        </div>

                        <h3 id="html部分">Html部分</h3>

                        <p>首先准备dom结构，包含存放文件信息的容器、选择按钮和上传按钮三个部分。</p>
                        <div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">&quot;uploader&quot;</span> <span class="na">class=</span><span class="s">&quot;wu-example&quot;</span><span class="nt">&gt;</span>
    <span class="c">&lt;!--用来存放文件信息--&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">&quot;thelist&quot;</span> <span class="na">class=</span><span class="s">&quot;uploader-list&quot;</span><span class="nt">&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">&quot;btns&quot;</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">&quot;picker&quot;</span><span class="nt">&gt;</span>选择文件<span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">id=</span><span class="s">&quot;ctlBtn&quot;</span> <span class="na">class=</span><span class="s">&quot;btn btn-default&quot;</span><span class="nt">&gt;</span>开始上传<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>
                        <h3 id="初始化web-uploader">初始化Web Uploader</h3>

                        <p>具体说明，请看一下代码中的注释部分。</p>
                        <div class="highlight"><pre><code class="language-javascript" data-lang="javascript"><span class="kd">var</span> <span class="nx">uploader</span> <span class="o">=</span> <span class="nx">WebUploader</span><span class="p">.</span><span class="nx">create</span><span class="p">({</span>

    <span class="c1">// swf文件路径</span>
    <span class="nx">swf</span><span class="o">:</span> <span class="nx">BASE_URL</span> <span class="o">+</span> <span class="s1">&#39;/js/Uploader.swf&#39;</span><span class="p">,</span>

    <span class="c1">// 文件接收服务端。</span>
    <span class="nx">server</span><span class="o">:</span> <span class="s1">&#39;http://webuploader.duapp.com/server/fileupload.php&#39;</span><span class="p">,</span>

    <span class="c1">// 选择文件的按钮。可选。</span>
    <span class="c1">// 内部根据当前运行是创建，可能是input元素，也可能是flash.</span>
    <span class="nx">pick</span><span class="o">:</span> <span class="s1">&#39;#picker&#39;</span><span class="p">,</span>

    <span class="c1">// 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！</span>
    <span class="nx">resize</span><span class="o">:</span> <span class="kc">false</span>
<span class="p">});</span>
</code></pre></div>
                        <h3 id="显示用户选择">显示用户选择</h3>

                        <p>由于webuploader不处理UI逻辑，所以需要去监听<code>fileQueued</code>事件来实现。</p>
                        <div class="highlight"><pre><code class="language-javascript" data-lang="javascript"><span class="c1">// 当有文件被添加进队列的时候</span>
<span class="nx">uploader</span><span class="p">.</span><span class="nx">on</span><span class="p">(</span> <span class="s1">&#39;fileQueued&#39;</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span> <span class="nx">file</span> <span class="p">)</span> <span class="p">{</span>
    <span class="nx">$list</span><span class="p">.</span><span class="nx">append</span><span class="p">(</span> <span class="s1">&#39;&lt;div id=&quot;&#39;</span> <span class="o">+</span> <span class="nx">file</span><span class="p">.</span><span class="nx">id</span> <span class="o">+</span> <span class="s1">&#39;&quot; class=&quot;item&quot;&gt;&#39;</span> <span class="o">+</span>
        <span class="s1">&#39;&lt;h4 class=&quot;info&quot;&gt;&#39;</span> <span class="o">+</span> <span class="nx">file</span><span class="p">.</span><span class="nx">name</span> <span class="o">+</span> <span class="s1">&#39;&lt;/h4&gt;&#39;</span> <span class="o">+</span>
        <span class="s1">&#39;&lt;p class=&quot;state&quot;&gt;等待上传...&lt;/p&gt;&#39;</span> <span class="o">+</span>
    <span class="s1">&#39;&lt;/div&gt;&#39;</span> <span class="p">);</span>
<span class="p">});</span>
</code></pre></div>
                        <h3 id="文件上传进度">文件上传进度</h3>

                        <p>文件上传中，Web Uploader会对外派送<code>uploadProgress</code>事件，其中包含文件对象和该文件当前上传进度。</p>
                        <div class="highlight"><pre><code class="language-javascript" data-lang="javascript"><span class="c1">// 文件上传过程中创建进度条实时显示。</span>
<span class="nx">uploader</span><span class="p">.</span><span class="nx">on</span><span class="p">(</span> <span class="s1">&#39;uploadProgress&#39;</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span> <span class="nx">file</span><span class="p">,</span> <span class="nx">percentage</span> <span class="p">)</span> <span class="p">{</span>
    <span class="kd">var</span> <span class="nx">$li</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span> <span class="s1">&#39;#&#39;</span><span class="o">+</span><span class="nx">file</span><span class="p">.</span><span class="nx">id</span> <span class="p">),</span>
        <span class="nx">$percent</span> <span class="o">=</span> <span class="nx">$li</span><span class="p">.</span><span class="nx">find</span><span class="p">(</span><span class="s1">&#39;.progress .progress-bar&#39;</span><span class="p">);</span>

    <span class="c1">// 避免重复创建</span>
    <span class="k">if</span> <span class="p">(</span> <span class="o">!</span><span class="nx">$percent</span><span class="p">.</span><span class="nx">length</span> <span class="p">)</span> <span class="p">{</span>
        <span class="nx">$percent</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span><span class="s1">&#39;&lt;div class=&quot;progress progress-striped active&quot;&gt;&#39;</span> <span class="o">+</span>
          <span class="s1">&#39;&lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 0%&quot;&gt;&#39;</span> <span class="o">+</span>
          <span class="s1">&#39;&lt;/div&gt;&#39;</span> <span class="o">+</span>
        <span class="s1">&#39;&lt;/div&gt;&#39;</span><span class="p">).</span><span class="nx">appendTo</span><span class="p">(</span> <span class="nx">$li</span> <span class="p">).</span><span class="nx">find</span><span class="p">(</span><span class="s1">&#39;.progress-bar&#39;</span><span class="p">);</span>
    <span class="p">}</span>

    <span class="nx">$li</span><span class="p">.</span><span class="nx">find</span><span class="p">(</span><span class="s1">&#39;p.state&#39;</span><span class="p">).</span><span class="nx">text</span><span class="p">(</span><span class="s1">&#39;上传中&#39;</span><span class="p">);</span>

    <span class="nx">$percent</span><span class="p">.</span><span class="nx">css</span><span class="p">(</span> <span class="s1">&#39;width&#39;</span><span class="p">,</span> <span class="nx">percentage</span> <span class="o">*</span> <span class="mi">100</span> <span class="o">+</span> <span class="s1">&#39;%&#39;</span> <span class="p">);</span>
<span class="p">});</span>
</code></pre></div>
                        <h3 id="文件成功、失败处理">文件成功、失败处理</h3>

                        <p>文件上传失败会派送<code>uploadError</code>事件，成功则派送<code>uploadSuccess</code>事件。不管成功或者失败，在文件上传完后都会触发<code>uploadComplete</code>事件。</p>
                        <div class="highlight"><pre><code class="language-javascript" data-lang="javascript"><span class="nx">uploader</span><span class="p">.</span><span class="nx">on</span><span class="p">(</span> <span class="s1">&#39;uploadSuccess&#39;</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span> <span class="nx">file</span> <span class="p">)</span> <span class="p">{</span>
    <span class="nx">$</span><span class="p">(</span> <span class="s1">&#39;#&#39;</span><span class="o">+</span><span class="nx">file</span><span class="p">.</span><span class="nx">id</span> <span class="p">).</span><span class="nx">find</span><span class="p">(</span><span class="s1">&#39;p.state&#39;</span><span class="p">).</span><span class="nx">text</span><span class="p">(</span><span class="s1">&#39;已上传&#39;</span><span class="p">);</span>
<span class="p">});</span>

<span class="nx">uploader</span><span class="p">.</span><span class="nx">on</span><span class="p">(</span> <span class="s1">&#39;uploadError&#39;</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span> <span class="nx">file</span> <span class="p">)</span> <span class="p">{</span>
    <span class="nx">$</span><span class="p">(</span> <span class="s1">&#39;#&#39;</span><span class="o">+</span><span class="nx">file</span><span class="p">.</span><span class="nx">id</span> <span class="p">).</span><span class="nx">find</span><span class="p">(</span><span class="s1">&#39;p.state&#39;</span><span class="p">).</span><span class="nx">text</span><span class="p">(</span><span class="s1">&#39;上传出错&#39;</span><span class="p">);</span>
<span class="p">});</span>

<span class="nx">uploader</span><span class="p">.</span><span class="nx">on</span><span class="p">(</span> <span class="s1">&#39;uploadComplete&#39;</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span> <span class="nx">file</span> <span class="p">)</span> <span class="p">{</span>
    <span class="nx">$</span><span class="p">(</span> <span class="s1">&#39;#&#39;</span><span class="o">+</span><span class="nx">file</span><span class="p">.</span><span class="nx">id</span> <span class="p">).</span><span class="nx">find</span><span class="p">(</span><span class="s1">&#39;.progress&#39;</span><span class="p">).</span><span class="nx">fadeOut</span><span class="p">();</span>
<span class="p">});</span>
</code></pre></div>
                        <h2 id="图片上传">图片上传</h2>

                        <p>与普通文件上传相比，此demo演示了：文件过滤，图片预览，图片压缩上传等功能。</p>

                        <div id="uploader-demo" class="wu-example">
                            <div id="fileList" class="uploader-list">
                            </div>
                            <div id="filePicker">选择图片</div>
                        </div>

                        <h3 id="html">Html</h3>

                        <p>要实现如上demo，首先需要准备一个按钮，和一个用来存放添加的文件信息列表的容器。</p>
                        <div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!--dom结构部分--&gt;</span>
<span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">&quot;uploader-demo&quot;</span><span class="nt">&gt;</span>
    <span class="c">&lt;!--用来存放item--&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">&quot;fileList&quot;</span> <span class="na">class=</span><span class="s">&quot;uploader-list&quot;</span><span class="nt">&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">&quot;filePicker&quot;</span><span class="nt">&gt;</span>选择图片<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>
                        <h3 id="javascript">Javascript</h3>

                        <p>创建Web Uploader实例</p>
                        <div class="highlight"><pre><code class="language-javascript" data-lang="javascript"><span class="c1">// 初始化Web Uploader</span>
<span class="kd">var</span> <span class="nx">uploader</span> <span class="o">=</span> <span class="nx">WebUploader</span><span class="p">.</span><span class="nx">create</span><span class="p">({</span>

    <span class="c1">// 选完文件后，是否自动上传。</span>
    <span class="nx">auto</span><span class="o">:</span> <span class="kc">true</span><span class="p">,</span>

    <span class="c1">// swf文件路径</span>
    <span class="nx">swf</span><span class="o">:</span> <span class="nx">BASE_URL</span> <span class="o">+</span> <span class="s1">&#39;/js/Uploader.swf&#39;</span><span class="p">,</span>

    <span class="c1">// 文件接收服务端。</span>
    <span class="nx">server</span><span class="o">:</span> <span class="s1">&#39;http://webuploader.duapp.com/server/fileupload.php&#39;</span><span class="p">,</span>

    <span class="c1">// 选择文件的按钮。可选。</span>
    <span class="c1">// 内部根据当前运行是创建，可能是input元素，也可能是flash.</span>
    <span class="nx">pick</span><span class="o">:</span> <span class="s1">&#39;#filePicker&#39;</span><span class="p">,</span>

    <span class="c1">// 只允许选择图片文件。</span>
    <span class="nx">accept</span><span class="o">:</span> <span class="p">{</span>
        <span class="nx">title</span><span class="o">:</span> <span class="s1">&#39;Images&#39;</span><span class="p">,</span>
        <span class="nx">extensions</span><span class="o">:</span> <span class="s1">&#39;gif,jpg,jpeg,bmp,png&#39;</span><span class="p">,</span>
        <span class="nx">mimeTypes</span><span class="o">:</span> <span class="s1">&#39;image/*&#39;</span>
    <span class="p">}</span>
<span class="p">});</span>
</code></pre></div>
                        <p>监听<code>fileQueued</code>事件，通过<code>uploader.makeThumb</code>来创建图片预览图。<br />
                            PS: 这里得到的是<a href="http://en.wikipedia.org/wiki/Data_URI_scheme">Data URL</a>数据，IE6、IE7不支持直接预览。可以借助FLASH或者服务端来完成预览。</p>
                        <div class="highlight"><pre><code class="language-javascript" data-lang="javascript"><span class="c1">// 当有文件添加进来的时候</span>
<span class="nx">uploader</span><span class="p">.</span><span class="nx">on</span><span class="p">(</span> <span class="s1">&#39;fileQueued&#39;</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span> <span class="nx">file</span> <span class="p">)</span> <span class="p">{</span>
    <span class="kd">var</span> <span class="nx">$li</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span>
            <span class="s1">&#39;&lt;div id=&quot;&#39;</span> <span class="o">+</span> <span class="nx">file</span><span class="p">.</span><span class="nx">id</span> <span class="o">+</span> <span class="s1">&#39;&quot; class=&quot;file-item thumbnail&quot;&gt;&#39;</span> <span class="o">+</span>
                <span class="s1">&#39;&lt;img&gt;&#39;</span> <span class="o">+</span>
                <span class="s1">&#39;&lt;div class=&quot;info&quot;&gt;&#39;</span> <span class="o">+</span> <span class="nx">file</span><span class="p">.</span><span class="nx">name</span> <span class="o">+</span> <span class="s1">&#39;&lt;/div&gt;&#39;</span> <span class="o">+</span>
            <span class="s1">&#39;&lt;/div&gt;&#39;</span>
            <span class="p">),</span>
        <span class="nx">$img</span> <span class="o">=</span> <span class="nx">$li</span><span class="p">.</span><span class="nx">find</span><span class="p">(</span><span class="s1">&#39;img&#39;</span><span class="p">);</span>


    <span class="c1">// $list为容器jQuery实例</span>
    <span class="nx">$list</span><span class="p">.</span><span class="nx">append</span><span class="p">(</span> <span class="nx">$li</span> <span class="p">);</span>

    <span class="c1">// 创建缩略图</span>
    <span class="c1">// 如果为非图片文件，可以不用调用此方法。</span>
    <span class="c1">// thumbnailWidth x thumbnailHeight 为 100 x 100</span>
    <span class="nx">uploader</span><span class="p">.</span><span class="nx">makeThumb</span><span class="p">(</span> <span class="nx">file</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span> <span class="nx">error</span><span class="p">,</span> <span class="nx">src</span> <span class="p">)</span> <span class="p">{</span>
        <span class="k">if</span> <span class="p">(</span> <span class="nx">error</span> <span class="p">)</span> <span class="p">{</span>
            <span class="nx">$img</span><span class="p">.</span><span class="nx">replaceWith</span><span class="p">(</span><span class="s1">&#39;&lt;span&gt;不能预览&lt;/span&gt;&#39;</span><span class="p">);</span>
            <span class="k">return</span><span class="p">;</span>
        <span class="p">}</span>

        <span class="nx">$img</span><span class="p">.</span><span class="nx">attr</span><span class="p">(</span> <span class="s1">&#39;src&#39;</span><span class="p">,</span> <span class="nx">src</span> <span class="p">);</span>
    <span class="p">},</span> <span class="nx">thumbnailWidth</span><span class="p">,</span> <span class="nx">thumbnailHeight</span> <span class="p">);</span>
<span class="p">});</span>
</code></pre></div>
                        <p>然后剩下的就是上传状态提示了，当文件上传过程中, 上传成功，上传失败，上传完成都分别对应<code>uploadProgress</code>,
                            <code>uploadSuccess</code>, <code>uploadError</code>, <code>uploadComplete</code>事件。</p>
                        <div class="highlight"><pre><code class="language-javascript" data-lang="javascript"><span class="c1">// 文件上传过程中创建进度条实时显示。</span>
<span class="nx">uploader</span><span class="p">.</span><span class="nx">on</span><span class="p">(</span> <span class="s1">&#39;uploadProgress&#39;</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span> <span class="nx">file</span><span class="p">,</span> <span class="nx">percentage</span> <span class="p">)</span> <span class="p">{</span>
    <span class="kd">var</span> <span class="nx">$li</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span> <span class="s1">&#39;#&#39;</span><span class="o">+</span><span class="nx">file</span><span class="p">.</span><span class="nx">id</span> <span class="p">),</span>
        <span class="nx">$percent</span> <span class="o">=</span> <span class="nx">$li</span><span class="p">.</span><span class="nx">find</span><span class="p">(</span><span class="s1">&#39;.progress span&#39;</span><span class="p">);</span>

    <span class="c1">// 避免重复创建</span>
    <span class="k">if</span> <span class="p">(</span> <span class="o">!</span><span class="nx">$percent</span><span class="p">.</span><span class="nx">length</span> <span class="p">)</span> <span class="p">{</span>
        <span class="nx">$percent</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span><span class="s1">&#39;&lt;p class=&quot;progress&quot;&gt;&lt;span&gt;&lt;/span&gt;&lt;/p&gt;&#39;</span><span class="p">)</span>
                <span class="p">.</span><span class="nx">appendTo</span><span class="p">(</span> <span class="nx">$li</span> <span class="p">)</span>
                <span class="p">.</span><span class="nx">find</span><span class="p">(</span><span class="s1">&#39;span&#39;</span><span class="p">);</span>
    <span class="p">}</span>

    <span class="nx">$percent</span><span class="p">.</span><span class="nx">css</span><span class="p">(</span> <span class="s1">&#39;width&#39;</span><span class="p">,</span> <span class="nx">percentage</span> <span class="o">*</span> <span class="mi">100</span> <span class="o">+</span> <span class="s1">&#39;%&#39;</span> <span class="p">);</span>
<span class="p">});</span>

<span class="c1">// 文件上传成功，给item添加成功class, 用样式标记上传成功。</span>
<span class="nx">uploader</span><span class="p">.</span><span class="nx">on</span><span class="p">(</span> <span class="s1">&#39;uploadSuccess&#39;</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span> <span class="nx">file</span> <span class="p">)</span> <span class="p">{</span>
    <span class="nx">$</span><span class="p">(</span> <span class="s1">&#39;#&#39;</span><span class="o">+</span><span class="nx">file</span><span class="p">.</span><span class="nx">id</span> <span class="p">).</span><span class="nx">addClass</span><span class="p">(</span><span class="s1">&#39;upload-state-done&#39;</span><span class="p">);</span>
<span class="p">});</span>

<span class="c1">// 文件上传失败，显示上传出错。</span>
<span class="nx">uploader</span><span class="p">.</span><span class="nx">on</span><span class="p">(</span> <span class="s1">&#39;uploadError&#39;</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span> <span class="nx">file</span> <span class="p">)</span> <span class="p">{</span>
    <span class="kd">var</span> <span class="nx">$li</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span> <span class="s1">&#39;#&#39;</span><span class="o">+</span><span class="nx">file</span><span class="p">.</span><span class="nx">id</span> <span class="p">),</span>
        <span class="nx">$error</span> <span class="o">=</span> <span class="nx">$li</span><span class="p">.</span><span class="nx">find</span><span class="p">(</span><span class="s1">&#39;div.error&#39;</span><span class="p">);</span>

    <span class="c1">// 避免重复创建</span>
    <span class="k">if</span> <span class="p">(</span> <span class="o">!</span><span class="nx">$error</span><span class="p">.</span><span class="nx">length</span> <span class="p">)</span> <span class="p">{</span>
        <span class="nx">$error</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span><span class="s1">&#39;&lt;div class=&quot;error&quot;&gt;&lt;/div&gt;&#39;</span><span class="p">).</span><span class="nx">appendTo</span><span class="p">(</span> <span class="nx">$li</span> <span class="p">);</span>
    <span class="p">}</span>

    <span class="nx">$error</span><span class="p">.</span><span class="nx">text</span><span class="p">(</span><span class="s1">&#39;上传失败&#39;</span><span class="p">);</span>
<span class="p">});</span>

<span class="c1">// 完成上传完了，成功或者失败，先删除进度条。</span>
<span class="nx">uploader</span><span class="p">.</span><span class="nx">on</span><span class="p">(</span> <span class="s1">&#39;uploadComplete&#39;</span><span class="p">,</span> <span class="kd">function</span><span class="p">(</span> <span class="nx">file</span> <span class="p">)</span> <span class="p">{</span>
    <span class="nx">$</span><span class="p">(</span> <span class="s1">&#39;#&#39;</span><span class="o">+</span><span class="nx">file</span><span class="p">.</span><span class="nx">id</span> <span class="p">).</span><span class="nx">find</span><span class="p">(</span><span class="s1">&#39;.progress&#39;</span><span class="p">).</span><span class="nx">remove</span><span class="p">();</span>
<span class="p">});</span>
</code></pre></div>
                        <p>更多细节，请查看<a href="/webuploader/js/getting-started.js">js源码</a>。</p>

                    </div>



                    <div id="ghComments" class="comments" data-issue-id="71">
                        <h2>评论</h2>
                        <div id="header">想要留下评论，请在<a href="https://github.com/fex-team/webuploader/issues/71">此Github issue</a> 页面完成操作，谢谢！</div>

                        <div class="alert alert-warning">
                            <p>如果是讨论技术问题或者报告bug，请最好还是新建一个issue展开讨论，以免你提出的问题石沉大海。</p>
                            <p>点此进入<a href="https://github.com/fex-team/webuploader/issues">issues列表页</a>。</p></div>
                    </div>


                </div>
            </div>


        </div></div> <div id="footer" class="footer">
        <div class="footer-inner container">
            <div class="row">
                <div class="col-md-4">
                    <p class="copyright">Webuploader由<a href="https://github.com/fex-team">fex-team</a>团队负责维护</p>
                    <p>&copy;2013-2018 Baidu Fex Team</p>
                </div>
                <div class="col-md-4">
                    <!-- <p>友情链接</p> -->
                    <ul class="friends-links">
                        <li><a href="http://fis.baidu.com/" title="前端集成解决方案">Fis</a></li>
                        <li><a href="http://gmu.baidu.com" title="基于zepto的mobile UI组件库">GMU</a></li>
                        <li><a href="http://ueditor.baidu.com/website/" title="UEditor是由百度web前端研发部开发所见即所得富文本web编辑器，具有轻量，可定制，注重用户体验等特点，开源基于MIT协议，允许自由使用和修改代码...">Ueditor</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="weixin">
                        <img src="/webuploader/images/qrcode.jpg" alt="..." class="img-rounded weixin-img" />
                        <p>微信公共帐号</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    // 添加全局站点信息
    var BASE_URL = '/webuploader';
</script>
<script type="text/javascript" src="/webuploader/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/webuploader/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/webuploader/js/global.js"></script>

<script type="text/javascript" src="/webuploader/js/webuploader.js"></script>

<script type="text/javascript" src="/webuploader/js/getting-started.js"></script>

<script type="text/javascript">
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F67c4841095cbee8275705e1f6224a3c7' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>
http://fex.baidu.com/
