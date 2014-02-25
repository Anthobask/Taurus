{extends file="layout.tpl"}

{block name="corps"}

    <div class="">

       {if isset($infoClient)}
       
		<form method="POST" action="">

            <div class="row-fluid">
                <div class="span4"><label for="login">Login </label></div>
                <div class="span2"><input disabled type="text" name="login" id="login" value="{$infoClient.login}"/></div>
            </div>
            <div class="row-fluid">
                <div class="span4"><label for="nom">Nom :</label></div>
                <div class="span2"><input type="text" name="nom" id="nom" value="{$infoClient.nom}"/></div>
            </div>
            <div class="row-fluid">
                <div class="span4"><label for="prenom">Prénom :</label></div>
                <div class="span2"><input type="text" name="prenom" id="prenom" value="{$infoClient.prenom}"/></div>
            </div>	
            <div class="row-fluid">
                <div class="span4"><label for="mail1">Adresse email :</label></div>
                <div class="span2"><input type="text" name="mail1" id="mail1" value="{$infoClient.email}" onBlur="validateEmail('mail1')"/></div>
            </div>
            <div class="row-fluid">
                <div class="span2 offset4"><input class="btn" type="submit" name="bt_modifProfil"/></div>
            </div>	

        </form>
        {/if}
    </div>
    
    
{/block}