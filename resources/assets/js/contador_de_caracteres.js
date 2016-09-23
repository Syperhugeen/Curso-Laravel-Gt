

init_contadorTa("name","name_id_contador", 60);

init_contadorTa("description","description_id_contador", 160);

init_contadorTa("HomeDescription","HomeDescription_id_contador", 40);

init_contadorTa("Seo_Frase","Seo_Frase_id_contador", 30);

init_contadorTa("Seo_Description","Seo_Description_id_contador", 50);

init_contadorTa("Seo_KeyWord","Seo_KeyWord_id_contador", 30);





function init_contadorTa(idtextarea, idcontador,max)
{
    $("#"+idtextarea).keyup(function()
            {
                updateContadorTa(idtextarea, idcontador,max);
            });
    
    $("#"+idtextarea).change(function()
    {
            updateContadorTa(idtextarea, idcontador,max);
    });
    
}

function updateContadorTa(idtextarea, idcontador,max)
{
    var contador = $("#"+idcontador);
    var ta =     $("#"+idtextarea);
    contador.html("0/"+max);
    
    contador.html(ta.val().length+"/"+max);
    if(parseInt(ta.val().length)>max)
    {
        ta.val(ta.val().substring(0,max-1));
        contador.html(max+"/"+max);
    }

}




