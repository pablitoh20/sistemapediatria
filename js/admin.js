$(document).ready(function(){

  $('.seleccionar').click(function(){
    if ($(".seleccionar:checked").length > 0) {
      $("#descarga").attr("disabled", false);
    }else {
      $("#descarga").attr("disabled", true);
    }
    document.getElementById("seleccionadas").textContent=$(".seleccionar:checked").length
  });


  $("#descarga_aleatorea").click(function(){
    var data = 'cantidad=' + $('#cant_pregs').val() + "&curso="+$("#curso").val();
      $.ajax({type:'POST',data:data,url: './ajax/ajax_descarga_aleatorea.php',	success: function(result){
      }});
  });
  $(".eliminar_pregunta").click(function(){
    eliminarPregunta($(".eliminar_pregunta").data('value'));
  });
});
function eliminarPregunta(id){
  if (confirm("Desea eliminar la pregunta?")) {
      var data = 'id=' + id;
  			$.ajax({type:'POST',data:data,url: './ajax/ajax_delete.php',	success: function(result){
             $('.notification').slideDown('slow');
             window.setTimeout(close1,2500);
              $('tr[data-name='+id+']').remove();
  			}});
  }
};

function SubmitForm(){
  $('.notification').slideDown('slow');
  window.setTimeout(close1,2500);
}
function close1() {
  $('.notification').slideUp('fast');
}
