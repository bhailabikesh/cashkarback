
    <!-- fb login -->
    
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '168964334561635',
      cookie     : true,
      xfbml      : true,
      version    : 'v1.0'
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
       FB.login(function(response){
           if(response.authResponse){
               fb_login();
           }
       }, {scope: 'public_profile,email'});
   }
   function fb_login(){
       
FB.getLoginStatus(function(response) {
    if (response.status === 'connected') {
    FB.api('/me', function(response) {
    //   console.log(response);
    var name = response.name;
    var fid = response.id;
    var urlAjax = name + '&id='+fid;
    var fbLoginAjax = new XMLHttpRequest();
     fbLoginAjax.open(
        "GET",
        "https://cashkar.in/ajax/fb_login.php?name="+urlAjax,
        "TRUE"
    );
    fbLoginAjax.send();
    fbLoginAjax.onreadystatechange = function() {
        if (fbLoginAjax.readyState == 4 && fbLoginAjax.status == 200) {
            // console.log(response);
            // console.log(fbLoginAjax.responseText);
            window.location.href = 'https://cashkar.in/auth.php';
        }
    }
    });
    }
});
   }
</script>
