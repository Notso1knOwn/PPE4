$('#submitPanier').click(function(event){

  var accepted = true;
  var data = [];
  event.preventDefault();
  $('input[type=number]').each(function() {
      if($(this).parent().find('p')){
        $(this).parent().find('p').remove();
      }
      if(parseInt($(this).val(),10) > parseInt($(this).attr('max'),10)){
        accepted = false;
        $('<p class="text-danger text-center">Stock excédé</p>').insertAfter($(this));
        return false;
      }
  });

  if(accepted){
    $('#formPanier').submit();
    // $.post($('#formPanier').attr('href'), JSON.stringify({data : data}), 'json');
  }
});



