<div id="fb-root"></div>
  @if (Config::get('app.locale')=='es')
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v9.0&appId=263449115173815&autoLogAppEvents=1" nonce="6CQpzTM8"></script>    
  @else
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0&appId=263449115173815&autoLogAppEvents=1" nonce="6CQpzTM8"></script>
  @endif
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        xfbml            : true,
        version          : 'v9.0'
      });
    };

    (function(d, s, id) {
      var myurl;
      @if (Config::get('app.locale')=='es')
        myurl='https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
      @else
        myurl='https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js'
      @endif
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = myurl;
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your Chat Plugin code -->
  <div class="fb-customerchat"
    attribution="setup_tool"
    page_id="707887712735256"
    theme_color="#0084ff"
    logged_in_greeting=" {{ __('¡Hola! como podemos ayudarte?') }}"
    logged_out_greeting=" {{ __('¡Hola! como podemos ayudarte?') }}">
  </div>