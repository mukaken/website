<!doctype html>

<html lang="en">

<head>
    <title>Laravel - The PHP Framework For Web Artisans.</title>

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9,chrome=1">
    <meta name="author" content="iKreativ">
    <meta name="description" content="Laravel - The PHP framework for web artisans.">
    <meta name="keywords" content="laravel, php, framework, web, artisans, taylor otwell">

    <!-- favicon -->
    <link rel="shortcut icon" href="/favicon.png?v=2">

    <!-- we're minifying and combining all our css -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- grab jquery from google cdn. fall back to local if offline -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/jquery.js"><\/script>')</script>

    <!-- prettyprint -->
    <script src="http://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

    <!-- load up our js -->
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/application.js"></script>

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
        var _gaq=[['_setAccount','UA-23865777-1'],['_trackPageview']];
        (function(d,t){
    		var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        	s.parentNode.insertBefore(g,s)
    	}(document,'script'));
    </script>
</head>

<body id="index" class="page docs">

	<!-- wrapper -->
    <div id="wrapper">

        <!-- header -->
        <header id="header" role="header">
            <div class="boxed">
                <!-- tagline -->
                <div id="tagline">
                    <h1>Documentation.</h1>
                </div>
                <!-- /tagline -->

                <!-- version -->
                <div id="version">
                    <ul class="nolist">
                        @if (DOCS_VERSION == 'master')
                            <li class="current"><a href="{{ url('docs/dev') }}" title="Dev">Dev</a></li>
                            <li><a href="{{ url('docs/4-1') }}" title="4.1">4.1</a></li>
                            <li><a href="{{ url('docs/4-0') }}" title="4.0">4.0</a></li>
                        @elseif (DOCS_VERSION == '4.1')
                            <li><a href="{{ url('docs/dev') }}" title="Dev">Dev</a></li>
                            <li class="current"><a href="{{ url('docs/4-1') }}" title="4.1">4.1</a></li>
                            <li><a href="{{ url('docs/4-0') }}" title="4.0">4.0</a></li>
                        @else
                            <li><a href="{{ url('docs/dev') }}" title="Dev">Dev</a></li>
                            <li><a href="{{ url('docs/4-1') }}" title="4.1">4.1</a></li>
                            <li class="current"><a href="{{ url('docs/4-0') }}" title="4.0">4.0</a></li>
                        @endif
                    </ul>
                </div>
                <!-- /version -->
            </div>
        </header>
        <!-- /header -->

        <!-- nav -->
    	<nav id="primary">
    	    <div class="boxed">
    	        <div id="logo-head">
    	           <a href="//laravel.com"><img src="../assets/img/logo-head.png" alt="Laravel" /></a>
    	        </div>
                <ul>
                    <li><a href="/">Welcome</a></li>
                    <li class="current-item"><a href="docs" title="Documentation">Documentation</a></li>
                    <li><a href="{{ url('api') }}/{{ DOCS_VERSION }}" title="Laravel Framework API">API</a></li>
                    <li><a href="https://github.com/laravel/laravel" title="Github">Github</a></li>
                    <li><a href="http://laravel.io/forum" title="Laravel Forums">Forums</a></li>
                    <li><a href="http://twitter.com/laravelphp" title="Laravel on Twitter">Twitter</a></li>
                </ul>
            </div>
        </nav>
        <!-- /nav -->

        <!-- content -->
        <div id="content">

            <!-- docs -->
            <section id="documentation">
                <article class="boxed">

                    <!-- docs nav -->
                    <nav id="docs">
                        <!-- Pull table of contents -->
                        {{ $index }}
                    </nav>
                    <!-- /docs nav -->

                    <!-- docs content -->
                    <div id="docs-content">
                        {{ $contents }}
                    </div>
                    <!-- /docs content -->

                </article>
    	    </section>
    	    <!-- /docs -->

        </div>
    	<!-- /content -->

        <!-- footer -->
        <footer id="foot" class="textcenter">
            <div class="boxed">

                <!-- nav -->
                <nav id="secondary">
                    <div id="logo-foot">
        	           <a href="//laravel.com"><img src="../assets/img/logo-foot.png" alt="Laravel" /></a>
        	        </div>
                    <ul>
                        <li><a href="/">Welcome</a></li>
                        <li class="current-item"><a href="docs" title="Documentation">Documentation</a></li>
                        <li><a href="api/{{ DOCS_VERSION }}" title="Laravel Framework API">API</a></li>
                        <li><a href="https://github.com/laravel/laravel" title="Github">Github</a></li>
                        <li><a href="http://laravel.io/forum" title="Laravel Forums">Forums</a></li>
                        <li><a href="http://twitter.com/laravelphp" title="Laravel on Twitter">Twitter</a></li>
                    </ul>
                </nav>
                <!-- /nav -->

            </div>
        </footer>
        <!-- /footer -->

        <!-- to the top -->
        <div id="top">
            <a href="#index" title="Back to the top">
                <i class="icon-chevron-up"></i>
            </a>
        </div>
        <!-- /to the top -->

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
