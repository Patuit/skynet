$(document).ready(function() {
  $('.tarif-button').click(function() {
    $.ajax({
      method: "POST",
      url: "controllers/month.php",
      data: {
        keyTarif: $(this).attr('data-key'),
        dataJSON: dataJSON
      },
      success: function ( msg ) {
        $('.body-tarifs').html(msg);
	      }
    });
  });
  $('.tarif-item').click(function() {
    $.ajax({
      method: "POST",
      url: "controllers/item.php",
      data: {
        idTarif: $(this).attr('data-id'),
        dataJSON: dataJSON
      },
      success: function ( msg ) {
        $('.body-tarifs').html(msg);
	      }
    });
  });
});
