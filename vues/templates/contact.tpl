<!-- file d'arianne -->
{extends file="layout.tpl"}

{block name="corps"}
    <h4>Catégorie de produit</h4>
    <fieldset>
        <legend>Nous contactez</legend>
        <p>Petit texte explicatif sur les modalités de contact</>
    </fieldset>
    <fieldset>
        <div id="form_contact">
            <form>
                <div class="row-fluid">
                    <div class="span4"><label for="nom">Nom :</label></div>
                    <div class="span2"><input type="text" name="nom" id="nom"/></div>
                </div>
                <div class="row-fluid">
                    <div class="span4"><label for="mail">Mail :</label></div>
                    <div class="span2"><input type="text" name="mail" id="mail"/></div>
                </div>	
                <div class="row-fluid">
                    <div class="span4"><label for="motif">Motif </label></div>
                    <div class="span2">
                        <select name="motif" id="motif">
                            <option name="0" value=" " />
                        </select>                    
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span2"><input type="submit" name="ok" id="ok"/></div>
                </div>	

            </form>
        </div>
    </fieldset

{/block}