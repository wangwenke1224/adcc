$(document).ready(function(){
    var id;
    var baseurl = $('#baseurl').val();

    $('.deleteNews').click(function(e){
       id = $(this).attr('href');
       $('.deleteNewsConfirm').dialog('open');
       
       e.preventDefault();
    })
    $('.deleteNewsConfirm').dialog({
        autoOpen : false,
        modal : true,
        buttons : {
            'Yes' : function(){
               $.ajax({
                   url : baseurl + 'index.php/news/delete/' + id,
                   success : function(){
                       // i must remove the div
                       $('.deleteNewsConfirm').dialog('close');
                       $('#news' + id).slideUp('slow');
                   }
               })
            },
            'No' : function(){
                $(this).dialog('close');
            }
        }
    })
    $('.submitComment').submit(function(){
        id = $('#id').val();
        $.ajax({
            url : baseurl + 'index.php/news/insertcomments/'+id,
            data : $('form').serialize(),
            type: "POST",
            success : function(comment){
                $('#commentForm')[0].reset();
                $(comment).hide().insertBefore('#insertbeforMe').slideDown('slow');
            }
        })
        return false;
    })
})