$(document).ready(function() {

document.querySelector(".body-tarifs").addEventListener("click", function () {
  if(event.target.id === "get-tarifs") {
  $.ajax({
    method: "POST",
    url: "controllers/tarifs.php",
    data: {
      dataJSON: dataJSON
    },
    success: function ( msg ) {
      $('.body-tarifs').html(msg);
      }
  });
}
  if(event.target.id === "get-month") {
  $.ajax({
    method: "POST",
    url: "controllers/month.php",
    data: {
      keyTarif: event.target.dataset.key,
      dataJSON: dataJSON
    },
    success: function ( msg ) {
      $('.body-tarifs').html(msg);
      }
  });
}
if(event.target.id === "get-item") {
  $.ajax({
    method: "POST",
    url: "controllers/item.php",
    data: {
      keyTarif: event.target.dataset.key,
      idTarif: event.target.dataset.id,
      dataJSON: dataJSON
    },
    success: function ( msg ) {
      $('.body-tarifs').html(msg);
      }
  });
}
});

});
