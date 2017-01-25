 /*  Tabs widget
/* ------------------------------------ */  
  (function() {
    var $tabsNav       = $('.alx-tabs-nav'),
      $tabsNavLis    = $tabsNav.children('li'),
      $tabsContainer = $('.alx-tabs-container');

    $tabsNav.each(function() {
      var $this = $(this);
      $this.next().children('.alx-tab').stop(true,true).hide()
      .siblings( $this.find('a').attr('href') ).show();
      $this.children('li').first().addClass('active').stop(true,true).show();
    });

    $tabsNavLis.on('click', function(e) {
      var $this = $(this);

      $this.siblings().removeClass('active').end()
      .addClass('active');
      
      $this.parent().next().children('.alx-tab').stop(true,true).hide()
      .siblings( $this.find('a').attr('href') ).fadeIn();
      e.preventDefault();
    }).children( window.location.hash ? 'a[href=' + window.location.hash + ']' : 'a:first' ).trigger('click');

  })();
  
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));




!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.async=true;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
 

  window.___gcfg = {lang: 'ja'};
 
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();

//Twitterのシェア数を取得
function get_social_count_twitter(url, selcter) {
  jQuery.ajax({
  url:'http://urls.api.twitter.com/1/urls/count.json',
  dataType:'jsonp',
  data:{
    url:url
  },
  success:function(res){
    jQuery( selcter ).text( res.count || 0 );
  },
  error:function(){
    jQuery( selcter ).text('0');
  }
  });
}

//Facebookのシェア数を取得
function get_social_count_facebook(url, selcter) {
  jQuery.ajax({
    url:'https://graph.facebook.com/',
    dataType:'jsonp',
    data:{
      id:url
    },
    success:function(res){
      jQuery( selcter ).text( res.shares || 0 );
    },
    error:function(){
      jQuery( selcter ).text('0');
    }
  });
}

//Google＋のシェア数を取得
function get_social_count_googleplus(url, selcter) {
  jQuery.ajax({
    type: "get", dataType: "xml",
    url: "http://query.yahooapis.com/v1/public/yql",
    data: {
      q: "SELECT content FROM data.headers WHERE url='https://plusone.google.com/_/+1/fastbutton?hl=ja&url=" + url + "' and ua='#Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36'",
      format: "xml",
      env: "http://datatables.org/alltables.env"
    },
    success: function (data) {
      var content = jQuery(data).find("content").text();
      var match = content.match(/window\.__SSR[\s*]=[\s*]{c:[\s*](\d+)/i);
      var count = (match != null) ? match[1] : 0;

      jQuery( selcter ).text(count);
    }
  });
}

//はてなブックマークではてブ勝を取得
function get_social_count_hatebu(url, selcter) {
  jQuery.ajax({
    url:'http://api.b.st-hatena.com/entry.count?callback=?',
    dataType:'jsonp',
    data:{
      url:url
    },
    success:function(res){
      jQuery( selcter ).text( res || 0 );
    },
    error:function(){
      jQuery( selcter ).text('0');
    }
  });
}


