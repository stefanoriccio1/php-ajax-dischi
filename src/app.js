const $ = require('jquery');
const Handlebars = require('handlebars');

$(document).ready(function(){
  alert('ciao');

  $.ajax({
    url: "http://localhost:8888/php-ajax-dischi/server.php",
    method: "GET",

    success: function (data) {
    console.log(data); },

    error: function (richiesta, stato, errori) { alert("E' avvenuto un errore. " + errore);
    }
  });
});
