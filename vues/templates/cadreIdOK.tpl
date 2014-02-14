<fieldset>
    <legend class="row1">Mon Compte</legend>
    <div span="row-fluid">
        <b class="span12">Bienvenue {$nomUser|upper} {$prenomUser}</b>
        <a class="span8" href="index.php?p=client-profil">Voir mon profil</a>
        {if isset($sommeNbArticle) && isset($sommePrixArticle)}
            <a class="span10" href="index.php?p=client-panier">Voir mon panier <br />(<span id="nbArticle_cadreId">{$sommeNbArticle}</span> article(s), <span id="price_cadreId">{$sommePrixArticle}</span> €)</a>
        {else}
            <a class="span10" href="index.php?p=client-panier">Voir mon panier <br />(<span id="nbArticle_cadreId">0</span> article(s), <span id="price_cadreId">0</span> €)</a>
        {/if}
        <a class="span6 offset6 smallFont" href="index.php?p=deconnexion">Se déconnecter</a>
    </div>
</fieldset>