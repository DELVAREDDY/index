<?php
//hii
?>

<html>
    <head>

    </head>
    <body>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '284169987627585',
      cookie     : true,
      xfbml      : true,
      version    : 'v17.0'
    });
    FB.AppEvents.logPageView();   
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

   function fbLogin(){
    FB.getLoginStatus(function(response) {
        if (response.status==='connected'){
    FB.api('/me', function(response) {
      console.log(response);
    });
}
});
   }
</script>
<a href="javascript:void(0)" onclick="fbLogin()">Login with Facebook</a>
    </body>
</html>