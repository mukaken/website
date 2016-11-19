@extends('layouts.master')

@section('content')
<!-- header -->
<header id="header" role="header">
    <div class="boxed">
        <!-- tagline -->
        <div id="tagline" class="animated bounceInUp">
            <h1>ウェブ職人のためのPHPフレームワーク。</h1>
            <h2>PHPに支障はありません。楽しくコーディングし、新しい息吹を楽しんでください。</h2>
        </div>
        <!-- /tagline -->

        <!-- callto action -->
        <div id="callto" class="animated bounceInLeft">
            <a href="//readouble.com/laravel/4/2/0/ja/quick.html" class="button large animated shake">クイックスタート</a>
            <a class="button large animated shake" href='//laravel.doorkeeper.jp/events/24619'>Laravel Meetup Tokyo Vol.6</a>
        </div>
        <!-- /callto action -->

        <!-- ui -->
        <div class="animated fadeIn" id="header_image" style="background: url(assets/img/sublime.png) top center no-repeat;"></div>
        <!-- /ui -->
    </div>
</header>
<!-- /header -->

<!-- nav -->
<nav id="primary">
    <div class="boxed">
        <div id="logo-head">
           <a href="//laravel.jp"><img src="assets/img/logo-head.png" alt="Laravel" /></a>
        </div>
        <ul>
            <li class="current-item"><a href="#">ようこそ</a></li>
            <li><a href="//readouble.com/laravel/" title="ドキュメント">ドキュメント</a></li>
            <li><a href="//github.com/laravel/laravel" title="Github">Github</a></li>
            <li><a href="https://www.facebook.com/groups/laravel.jp/" title="日本語コミュニティ">コミュニティ</a></li>
            <li><a href="https://www.facebook.com/jp.laravel" title="Laravel 日本語コミュニティ">ニュース</a></li>
            <li><a href="//qiita.com/mukaken/items/2058a193ee0ce6fbfd30" title="書籍">書籍</a></li>
            <li><a href="//twitter.com/laraveljp" title="Laravel on Twitter(JP)">Twitter (JP)</a></li>
        </ul>
    </div>
</nav>
<!-- /nav -->

<!-- content -->
<div id="content">

    <!-- page -->
    <section id="page">
        <article class="boxed">
            <ul class="feature-box nolist">
                <li class="one_quarter">
                    <h2><i class="icon-random"></i> <a title="RESTful Routing" href="//laravel4.kore1server.com/docs/routing">RESTful ルーティング</a></h2>
                    <p>あなたの適用へのリクエストに応えるために簡単なクロージャーを使って下さい。　　　　　　　　　　　　　　　　　　</p>
                </li>
                <li class="one_quarter">
                    <h2><i class="icon-graph"></i> <a title="Command Your Data" href="//laravel4.kore1server.com/docs/eloquent">コマンド Your Data</a></h2>
                    <p>素晴らしい Eloquent ORM と 素晴らしいマイグレーションシステムを完備しています。　　　　　　　　　　　　　</p>
                </li>
                <li class="one_quarter">
                    <h2><i class="icon-pencil-alt"></i> <a title="Beautiful Templating" href="//laravel4.kore1server.com/docs/templates">美しいテンプレート</a></h2>
                    <p>在来の PHP 、もしくは軽量の Blade テンプレート・エンジンを使用してください。Blade を好きになるでしょう。</p>
                </li>
                <li class="one_quarter">
                    <h2><i class="icon-time"></i> <a title="Ready For Tomorrow" href="//laravel4.kore1server.com/docs/routing">明日の準備</a></h2>
                    <p>Laravel は、いろいろな規模のプロジェクトに対応します。　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　</p>
                </li>
                <li class="one_quarter">
                    <h2><i class="icon-cog"></i> <a title="Proven Foundation" href="//www.symfony.gr.jp">実績のある土台</a></h2>
                    <p>Laravel は Symfony コンポーネントの上に構築されます。　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　</p>
                </li>
                <li class="one_quarter">
                    <h2><i class="icon-star"></i> <a title="Composer Powered" href="//getcomposer.org">Composer で動く</a></h2>
                    <p>Composer はあなたの適用のサードパッケージを管理する、驚くべきツールです。　　　　　　　　　　　　　　　　　　　　</p>
                </li>
                <li class="one_quarter">
                    <h2><i class="icon-group"></i> <a title="Great Community" href="https://www.facebook.com/groups/laravel.jp/">最高のコミュニティ</a></h2>
                    <p>Laravel の事について日本語で議論できるコミュニティがあります。　　　　　　　　　　　　　　　　　　　　　　　　　　　　</p>
                </li>
                <li class="one_quarter">
                    <h2><i class="icon-wrench"></i> <a title="Red, Green, Refactor" href="//laravel4.kore1server.com/docs/testing">レッド,グリーン,リファクタ</a></h2>
                    <p>Laravel はIoCコンテナとPHPUnitを備えています。　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　</p>
                </li>
            </ul>
        </article>
    </section>
    <!-- /page -->

</div>
<!-- /content -->

<!-- sponsors -->
<section id="sponsors">
   <article class="boxed">
	   <ul id="sponsor" class="nolist textcenter aligncenter">
	       <li class="animated fadeInDown">
	       </li>
	   </ul>
   </article>
</section>
<!-- /sponsors -->

<!-- quotes -->
<section id="quotes">
   <article class="boxed">
       <ul id="quote" class="nolist textcenter aligncenter">
           <li class="animated flipInX">
               <div class="quote"><p>Laravelが人気なのは、楽しさ、調度良さ、そして知識を引き上げてくれる興味深さです。</p></div>
               <div class="person">Hirohisa Kawase</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>やりたいことが、シンプルにできるフレームワーク。</p></div>
               <div class="person">Masashi Shinbara</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>Laravelは、PHPを違う角度から見せてくれて楽しさを教えてくれた</p></div>
               <div class="person">Yuuki Takezawa</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>なんてPHPらしい仕事! なんてPHPらしくないコード!! 思わず嫉妬するフレームワーク</p></div>
               <div class="person">たなかひさてる</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>Laravel はオフィスに夜遅くまで残りたくない人のためのフレームワークです。</p></div>
               <div class="person">Jeff Madsen</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>Laravelを一度使うと、PHPを使う際にLaravel以外の選択肢が思いつかなくなる</p></div>
               <div class="person">Takaaki Mizuno</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>Laravel は私の人生を変えました。アイデアを素早く形にできる、最高のフレームワークです。</p></div>
               <div class="person">Maksim Surguy</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>Laravel は、私の MVC への理解を助け、私のプログラミングへの情熱を煽り、再び開発の楽しみを作った！</p></div>
               <div class="person">Jozef Maxted</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>Laravel は PHP を離れた私を引き止めた。</p></div>
               <div class="person">Michael Hasselbring</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>Laravel は、私が車輪の再発明をするのを止めた！</p></div>
               <div class="person">Ryan McDonough</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>Laravel は PHP 製にもかかわらず、Ruby のように美しい！</p></div>
               <div class="person">Kenichi Mukai</div>
           </li>
       </ul>
   </article>
</section>
<!-- /quotes -->

<!-- footer -->
<footer id="foot" class="textcenter">
    <div class="boxed">

        <!-- nav -->
        <nav id="secondary">
            <div id="logo-foot">
	           <a href="//laravel.jp"><img src="assets/img/logo-foot.png" alt="Laravel" /></a>
	        </div>
            <ul>
                <li class="current-item"><a href="#">ようこそ</a></li>
                <li><a href="//readouble.com/laravel/" title="ドキュメント">ドキュメント</a></li>
                <li><a href="//github.com/laravel/laravel" title="Github">Github</a></li>
                <li><a href="https://www.facebook.com/groups/laravel.jp/" title="Laravel 日本語コミュニティ">コミュニティ</a></li>
                <li><a href="https://www.facebook.com/jp.laravel" title="Laravel 日本語コミュニティ">ニュース</a></li>
                <li><a href="//qiita.com/mukaken/items/2058a193ee0ce6fbfd30" title="書籍">書籍</a></li>
                <li><a href="//twitter.com/laraveljp" title="Laravel on Twitter (JP)">Twitter (JP)</a></li>
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
@endsection
