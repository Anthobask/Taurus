<div class="row-fluid" >
    <div class="logo span4 offset1 ">
        <h1>TAURUS INC.</h1>
        <h2>To Infinity and Beyond</h2>
    </div>
    <div class="zone_id span7 ">
        <!-- Zone d'identification -->
        {if isset($userConnected) && $userConnected=='true'}
            {include file="cadreIdOk.tpl"}
        {else}
            {include file="cadreId.tpl"}
        {/if}
        
    </div>
</div>