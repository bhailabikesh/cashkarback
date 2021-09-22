<html>
    <head>
        <meta name="google-signin-client_id" content="331381282671-vqtlc9u2ceh12vjb4sfqsec6ogvfq3gb.apps.googleusercontent.com"/>
        <script src="https://apis.google.com/js/platform.js"></script>
    </head>
    <body>
        <div class="g-signin2" data-onsuccess="g_login"></div>
        <script>
            function g_login(userInfo){
                var userProfile = userInfo.getBasicProfile();
                var id = userProfile.getId();
                var email = userProfile.getEmail();
                var name = userProfile.getName();
                var img = userProfile.getImageUrl();
                // console.log(img);
                var ajaxUrl = name+'&email='+email+'&id='+id+'&img='+img;
                var gLogin = new XMLHttpRequest()
                gLogin.open("GET","https://cashkar.in/ajax/google-login.php?name="+ajaxUrl, "TRUE");
                gLogin.send();
                gLogin.onreadystatechange = function() {
                  if (gLogin.readyState == 4 && gLogin.status == 200) {
                      console.log(gLogin.responseText);
                    //   window.location.href = 'https://cashkar.in/login/';
                   }
                }
            }
        </script>
    </body>
</html>