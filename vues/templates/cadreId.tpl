<fieldset>
    <legend class="row1">Identification</legend>
    <form method="POST" action="index.php?p=identification">
        {if isset($cadreId)}
            <p style="color:red">{$cadreId}</p>
        {/if}
        <input class="row1" type="text" name="login" value="Login" onclick="this.value = ''"/>
        <input class="row1" type="password" name="password" />
        <div class="row1 offset3"><input type="submit" name="validerIdentification" value="Valider" />
            <a class="bt" href="index.php?p=inscription">S'inscrire</a>
        </div>
    </form>
</fieldset>