<!doctype html>

<html lang="ja">

<head>
    <title>Laravel - ウェブ職人のためのPHPフレームワーク</title>

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9,chrome=1">
    <meta name="author" content="iKreativ">
    <meta name="description" content="Laravel - ウェブ職人のためのPHPフレームワーク">
    <meta name="keywords" content="laravel, php, framework, web, artisans, taylor otwell">

    <!-- favicon -->
    <link rel="shortcut icon" href="/favicon.png?v=2">

    <!-- we're minifying and combining all our css -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- grab jquery from google cdn. fall back to local if offline -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery.js"><\/script>')</script>

    <!-- prettyprint -->
    <script src="http://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

    <!-- load up our js -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/application.js"></script>

    <!-- fonts -->
    <script src="http://use.edgefonts.net/source-sans-pro:n3,i3,n4,i4,n6,i6,n7,i7.js"></script>
    <script src="http://use.edgefonts.net/source-code-pro.js"></script>

    <!-- some conditionals for ie -->
    <!--[if IE]><link href="assets/css/ie.css" rel="stylesheet" type="text/css" /><![endif]-->

    <!-- HTML5 elements in less than IE9, yes please! -->
    <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

    <!-- If less than IE8 add some JS for the webfont icons -->
    <!--[if lt IE 8]><script src="assets/js/ie_font.js"></script><![endif]-->

    <!-- asynchronous google analytics. change UA-XXXXX-X to your site's ID -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2725037-8', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body id="index" class="page home">

    <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6 -->
	<!--[if lt IE 7]>
		<p>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p>
	<![endif]-->

	<!-- wrapper -->
    <div id="wrapper">

    @yield('content')

    </div>
    <!-- /wrapper -->

    <!-- copyright -->
    <section id="copyright" class="textcenter">
        <div class="boxed">
            <div class="animated slideInLeft">Laravel is a trademark of Taylor Otwell. Copyright &copy; <a href="http://twitter.com/taylorotwell" title="Taylor Otwell" target="_blank">Taylor Otwell</a>. Website built with &hearts; <a href="//ikreativ.com" title="iKreativ" target="_blank">iKreativ</a>.</div>
        </div>
    </section>
    <!-- /copyright -->

</body>
</html>