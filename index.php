<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Max-Age: 1000");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE");
?>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="author" content="colorlib.com">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet" />
  <link href="main.css" rel="stylesheet" />
</head>

<body>

  <div id="pre-loader" style="display:none;">
    <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
  </div>

  <div class="s129" id="databinding">
    <form v-on:submit="e.preventDefault()">
      <div class="inner-form">
        <div class="input-field">
          <input id="search" type="search" placeholder="Paste a link to shorten it" autofocus />
          <div class="button" v-on:click = "execute">
            <p>Shorten</p>
          </div>
        </div>
      </div>
    </form>
  </div>

  <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js" data-cf-settings="c62aa65ea582ab99dce65085-|49" defer=""></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.12.1/TweenMax.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="custom.js"></script>
</body>

</html>