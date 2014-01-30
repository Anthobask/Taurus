<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Taurus Incorporation (c)</title>
        <!--fichier css-->
        <link rel="stylesheet" type="text/css" href="vues/css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="vues/css/base.css">
        <!--fichier javascript-->
        <script type="text/javascript" src="vues/js/jquery.js"></script>
        <script type="text/javascript" src="vues/js/main.js"></script>        
    </head>
    <body>
        {block name="body"}

        <!-- ici, on met le header -->
        <div id="header">
        {include file="header.tpl"}
        </div>

        <!-- ici, on met le menu -->
        <div id="menu">
        {include file="menu.tpl"}
        </div>

        <!-- ici, on met le menu -->
        <div id="corps">
        {block name="corps"}{$smarty.block.child}{/block}
        </div>
        <!-- ici, on met le footer -->
        <div id="footer">
        {include file="footer.tpl"}
        </div>


        {/block}


    </body>
</html>
