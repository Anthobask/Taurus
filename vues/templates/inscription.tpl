{extends file="layout.tpl"}

{block name="corps"}
    
{if $messageTop ne ''}
    <p>
        {$messageTop}
    </p>    
{/if}
    
{if $displayForm eq 1}
    <div id="form_subscribe">
        <form method="POST" action="">
            <div class="row-fluid">
                <div class="span4"><label for="nom">Nom :</label></div>
                <div class="span2"><input type="text" name="nom" id="nom"/></div>
            </div>
            <div class="row-fluid">
                <div class="span4"><label for="prenom">Prénom :</label></div>
                <div class="span2"><input type="text" name="prenom" id="prenom" value=""/></div>
            </div>	
            <div class="row-fluid">
                <div class="span4"><label for="login">Login </label></div>
                <div class="span2"><input type="text" name="login" id="login"/></div>
            </div>
            <div class="row-fluid">
                <div class="span4"><label for="pass1">Password :</label></div>
                <div class="span2"><input type="password" name="pass1" id="pass1"/></div>
            </div>
            <div class="row-fluid">
                <div class="span4"><label for="pass2">Confirmation du mot de passe :</label></div>
                <div class="span2"><input type="password" name="pass2" id="pass2" onBlur="compareFields('pass1', 'pass2')"/></div>
            </div>
            <div class="row-fluid">
                <div class="span4"><label for="mail1">Adresse email :</label></div>
                <div class="span2"><input type="text" name="mail1" id="mail1" onBlur="validateEmail('mail1')"/></div>
            </div>
            <div class="row-fluid">
                <div class="span4"><label for="mail2">Confirmation de l'adresse email :</label></div>
                <div class="span2"><input type="text" name="mail2" id="mail2" onBlur="compareFields('mail1', 'mail2')"/></div>
            </div>
            <div class="row-fluid">
                <div class="span2 offset4"><input type="submit" name="bt_inscription" id="bt_inscription"/></div>
            </div>	

        </form>
    </div>
{/if}

{/block}