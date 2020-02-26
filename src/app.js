const $ = require('jquery');
const Handlebars = require('handlebars');

$(document).ready(function(){

 getData();

});


// FUNZIONI-------------------->

function printResults(results){
  var source = $("#disk-template").html();
  var template = Handlebars.compile(source);

  if(results.length <= 0){
      alert('Spiacenti, non ci sono dischi disponiili')
  }
  else{
    for (var i = 0; i < results.length; i++) {
      results[i]
      console.log(results[i].title);

      var context={
        title: results[i].title,
        author: results[i].author,
        year: results[i].year,
        poster: results[i].poster,
      };
      var html = template(context);
      $('.main_container').append(html);
    };
  };
};

function getData(){
  $.ajax({
    url: "http://localhost:8888/php-ajax-dischi/server.php",
    method: "GET",

    success: function (data) {
      printResults(data);
    },

    error: function (richiesta, stato, errori) {
      alert("E' avvenuto un errore. " + errore);
    }
  });
};

function getAuthor(){

};
