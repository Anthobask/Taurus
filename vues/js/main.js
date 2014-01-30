//recupere le champs d'un email, et applique du rouge si c'est pas bon, ou du vert si c'est 
//
function validateEmail(email) {
    var contenu = $('#' + email).val();
    var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');
    if (reg.test(contenu))
    {
        $('#' + email).css("background-color", "white");
    }
    else
    {
        $('#' + email).css("background-color", "red");
    }
}


function compareFields(champs1, champs2)
{
    var contenu1 = $('#' + champs1).val();
    var contenu2 = $('#' + champs2).val();    
    if(contenu1 == contenu2)
    {
        $('#' + champs2).css("background-color", "white");
    }
    else
    {
        $('#' + champs2).css("background-color", "red");
    }
    
    
}