<!-- file d'arianne -->
{extends file="layout.tpl"}

{block name="corps"}

    {if isset($lesProduits)}
        <table class="cadre">
            <tr class="row-fluid">
                <th class="">Nom </th>
                <th class="">Description</th>
                <th class="">Prix</th>
                <th  class=""></th>
            </tr>
            {foreach name=outer item=unProduit from=$lesProduits}
                <tr class="row-fluid">
                    <td class=" row2"><b>{$unProduit.nom}</b><br /><img src="{$unProduit.image}"></td>
                    <td class="">{$unProduit.description}</td>
                    <td class="">{$unProduit.prix}</td>
                    <td class="">
                        <label>Quantité</label>
                        <select id="qteProd" >
                            <!-- todo : a faire avec smarty -->
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        {if isset($userConnected) && $userConnected=='true'}
                            <input type="button" id="addPanier" value="Ajouter au panier" onClick="addPanier({$unProduit.id})"/>
                        {else} 
                            <input type="button" value="Ajouter au panier" disabled/>
                        {/if}
                    </td>
                </tr>
            {/foreach}
        </table>
    {/if}

{/block}