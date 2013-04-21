$(document).ready(function(){
    var id;
    var baseurl = $('#baseurl').val();

    $('.deleteActors').click(function(e){
       id = $(this).attr('href');
       $('.deleteActorsConfirm').dialog('open');
       
       e.preventDefault();
    })
    $('.deleteActorsConfirm').dialog({
        autoOpen : false,
        modal : true,
        buttons : {
            'Yes' : function(){
               $.ajax({
                   url : baseurl + 'index.php/about/delete/' + id,
                   success : function(){
                       // i must remove the div
                       $('.deleteActorsConfirm').dialog('close');
                       $('#actors' + id).slideUp('slow');
                   }
               })
            },
            'No' : function(){
                $(this).dialog('close');
            }
        }
    })
})