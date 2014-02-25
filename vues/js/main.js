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
    if (contenu1 == contenu2)
    {
        $('#' + champs2).css("background-color", "white");
    }
    else
    {
        $('#' + champs2).css("background-color", "red");
    }
}

//ajout en ajax du produit dans le panier, de l'utilisateur a la session courrante.
function addPanier(idProduit)
{
    var quantiteProduit = $('#qteProd option:selected').text();
    jQuery.ajax({
        type: 'POST', // Le type de ma requete
        url: 'controlleurs/ajax/addPanier.php', // L'url vers laquelle la requete sera envoyee
        data: {
            idProduit: idProduit,
            quantite: quantiteProduit
        },
        success: function(data, textStatus, jqXHR) {
            var tabData = data.split(';');
            if (tabData[0] == 'error')
            {
                alert(tabData[1]);
            } else {
                $('#price_cadreId').text(tabData[1]);
                $('#nbArticle_cadreId').text(tabData[0]);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert('Erreur : '.errorThrown);
        }
    });
}

function modifPanier()
{
    $('.toDisplay').show();
    $('.toHide').hide();
}