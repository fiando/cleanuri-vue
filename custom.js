
var vm = new Vue({
  el: '#databinding',
  data: {
    num1: 100,
    num2: 200,
    total: ''
  },
  methods: {
    execute: function (event) {
      document.querySelector("#pre-loader").style = "display:block";

      fetch('http://localhost/cleanuri-vue/cleanuri.php', {
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        credentials: 'same-origin',
        headers: {
          'Content-Type': 'application/json',
          "Access-Control-Origin": "*"
        },
        redirect: 'follow',
        referrer: 'no-referrer',
        body: JSON.stringify({
          url: document.querySelector("#search").value,
        }),
      })
        .then(response => response.json())
        .then(json => {
          if (json.error) {
            Swal.fire(
              'Failed!',
              json.error,
              'error'
            );
          }

          if (json.result_url) {
            Swal.fire(
              'Good job!',
              json.result_url,
              'success'
            );
          }
          document.querySelector("#pre-loader").style = "display:none";
        })
    }
  },
});


var $button = document.querySelector('.button');

$button.addEventListener('click', function () {
  var duration = 0.3,
    delay = 0.08;
  TweenMax.to($button, duration, {
    scaleY: 1.6,
    ease: Expo.easeOut
  });
  TweenMax.to($button, duration, {
    scaleX: 1.2,
    scaleY: 1,
    ease: Back.easeOut,
    easeParams: [3],
    delay: delay
  });
  TweenMax.to($button, duration * 1.25, {
    scaleX: 1,
    scaleY: 1,
    ease: Back.easeOut,
    easeParams: [6],
    delay: delay * 3
  });
});