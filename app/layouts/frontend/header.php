<?
$JSE = WWW_ROOT."jse/";
define('LAY_ELEMS', LAYOUT_PATH.'elements'.DS);
?>
<!doctype html>  

<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>
    <? include(LAY_ELEMS."header/head.php");?>
</head>

<body>
<div id="container">
    <header>
        <? include(LAY_ELEMS."header/header.php");?>
    </header>
    
    <div id="main_wrap" class="container_16">
        <div id="top_wrap">
            <div id="top">
                <a href="#" id="main_hotspot" title="Cluj nights">Cluj nights</a>
		<div class="col1">
                    <h4>Cauta, descopera</h4>
                    <p>Bine ai venit pe <b>clujnights.ro!</b> Noi ne ocupam de indexarea localurilor si evenimentelor de prin Cluj cu tot cu recenzii si galerii foto. Cluburi, baruri, petreceri, oferte speciale.</p>
                    <div class="search_wrap">
			<form action="#" method="post" onsubmit="return mainSearchSubmit()">
                         <input type="text" name="search" value="Yume" id="search_input" onclick="this.select()"  />
                         <input type="submit" name="submit" value="Caută" id="search_btn" />
                        </form>
                    </div>
		</div>
		<div class="col2">
                    <h4>Povesteste si altora</h4>
                    <p>Stii de vreun local pe care noi nu il avem sau de vreun eveniment de care noi nu stim? Ajuta-ne pe noi si pe multi altii spunandu-ti povestea.</p>
                    <a href="#" class="contrib">Contribuie</a>
		</div>
            </div>
            <div class="clear"></div>
        </div>

        <div id="nav_wrap" class="no_left_margin no_right_margin">
            <ul id="nav">
    	        <li class="sel "><a href='#' class='home'><span></span>home</a></li>
                <li class=""><a href='#' class='localuri'><span></span>localuri</a></li>
                <li class=""><a href='#' class='evenimente'><span></span>evenimente</a></li>
            </ul>
            <div class="clear"></div>
        </div>

       <div id="content">
            <h1><span id="head_inner">Găseşte-ţi locul!</span></h1>
            <script type="text/javascript">
		Cufon.replace('h1 span');
            </script>

        
   

