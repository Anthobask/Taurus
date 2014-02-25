{extends file="layout.tpl"}

{block name="corps"}


    <div class="cadre_panier">
       {if isset($lesProduits)}
       <form method="POST" action="#">
            <table class="table table-striped table-bordered">
            	<thead>
    	            <tr class="">
    	                <th class="">Nom </th>
    	                <th class="">Description</th>
    	                <th class="">Prix</th>
    	                <th  class="">Nombre</th>
    	            </tr> 
                </thead>
                <tbody>
                {foreach name=outer item=unProduit from=$lesProduits}
                    <tr class="">
                        <td class="">{$unProduit.nom}</td>                    
                        <td class="">{$unProduit.description}</td>
                        <td class="">{$unProduit.prix}</td>
                        <td class="">
                            <input type="text" name="qte_{$unProduit.id}" value="{$unProduit.quantite}" class="input-mini" onKeyUp="modifPanier()"/>
                            <input type="hidden" value="{$unProduit.id}"/>
                        </td>
                    </tr>
                {/foreach}
                </tbody>
                <tfoot>
                    <tr class="">
                        <td colspan="2"></td>
                        <td class="">Total</td>
                        <td class="">{$sommePrixArticle} euros</td>
                    </tr>
                    <tr class="toDisplay" style="display: none;">
                        <td colspan="2"></td>                    
                        <td colspan="2"><input class="btn btn-large btn-warning" name="modif" type="submit" value="Modifier"</td>
                    </tr>
                    <tr class="toHide">
                        <td colspan="2"></td>                    
                        <td colspan="2"><input class="btn btn-large btn-success" name="buy" type="submit" value="Acheter"</td>
                    </tr>
                </tfoot>
            </table>
        </form>
    {else}
        <p>Votre panier est vide :(</p>
    {/if}
    </div>
{/block}