$(document).ready(function(){
  var editorAgregar = new FroalaEditor('#editorAgregar');
  var editorEditar = new FroalaEditor('#editorEditar');

  $("#descarga").click(function(){
    if ($(".seleccionar:checked").length > 0) {
      var selecteditems = [];

        $(".seleccionar").find("input:checked").each(function (i, ob) {
            selecteditems.push($(ob).val());
        });
        console.log(selecteditems);
    }
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
