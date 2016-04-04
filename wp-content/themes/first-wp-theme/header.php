 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="This is Movaway flat in the official Movaway Website." />
	<meta property="og:title" content="Movaway flat" />	
	<meta property="og:image" content="http://www.frenchmeetings.com/fr-london/wp-content/uploads/2013/02/lll3.png" />
    <title>Movaway</title>
    <link rel="icon" href="<?=get_template_directory_uri()?>/images/favicon.png">
    <?php wp_head() ?>
</head>
<body>
 <header>
        <a href="http://www.movaway.fr/"><div id="logo"></div></a>
        <?php wp_nav_menu(array('menu' => 'header')) ?>
        <div class="right">
            <div id="languages">
                <div id="fr">FR</div>
                <div class="split">|</div>
                <div id="en">EN</div>
            </div>
            <div id="social-media">
                <a href="https://www.facebook.com/Movaway" target="_blank"><div id="fb"></div></a>
                <a href="https://twitter.com/movaway" target="_blank"><div id="tw"></div></a>
            </div>
        </div>
    </header>
    <div class="clear"></div>
    
    <?php
    
    function makeItClass($string)
    {
        switch ($string) {
            case 'COMMERCE & VENTE': return 'commerce'; break;
            case 'ADMINISTRATION & SECRÉTARIAT':  return 'administration'; break;
            case 'LOGISTIQUE & SUPPLY CHAIN': return 'logistique'; break;
            case 'DROIT' : return  'droit'; break;
            case 'MANAGEMENT & RH': return 'management'; break;
            case 'FINANCE & COMPTABILITÉ': return 'finance'; break;
            case 'MARKETING & COMMUNICATION': return 'marketing'; break;
            case 'ARTS & DESIGN': return 'arts'; break;
        }
    }

    ?>