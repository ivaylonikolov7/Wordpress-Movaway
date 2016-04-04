<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page list</title>
    <link href="stylesheets/style.css" rel="stylesheet" type="text/css">
    <link href="stylesheets/page-list.css" rel="stylesheet" type="text/css">
    <link href="stylesheets/selectordie.css" rel="stylesheet" type="text/css">
    <link href="stylesheets/select.css" rel="stylesheet" type="text/css">
    <link href="stylesheets/flats.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
        require('header.php');
    ?>
    <section id="big-picture">
        <h2>
            <div class="white">Découvrez</div>
            <div class="red">NOS LOGEMENTS</div>
        </h2>
    </section>
    <main>
        <div id="list-of-flats">
            <div id="filters">
                <div id="input-adress">
                    <label for="adress">quartier</label>
                    <input type="text" id="adress" placeholder="ENTREZ UN QUARTIER">
                </div>
                <div id="buttons">
                    <select>
                        <option selected="selected">DISPONIBILITE</option>
                        <option>DE SUITE</option>
                        <option>DANS 1 MOIS</option>
                        <option>DANS 2 MOIS</option>
                        <option>DANS 3 MOIS</option>
                    </select>
                    <div class="button"></div>
                    <div class="button"></div>
                </div>
            </div>
            <div class="clear"></div>
            <div id="apartments">
                <div class="row">
                    <div class="flat">
                        <img src="images/red/flat1.jpg">
                        <div class="info-pre-line">
                            <div class="date">10/01/16</div>
                            <div class="location">WESTMINSTER, WEST LONDON</div>
                        </div>
                        <hr />
                        <div class="legends first-column">
                            <div class="bed legend">CHAMBRE DOUBLE</div>
                            <div class="calendar legend">3 AVRIL</div>
                        </div>
                        <div class="legends second-column">
                            <div class="price legend">230 PAR SEMAINE</div>
                            <div class="time legend">MIN 3 MOIS</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="flat">
                        <img src="images/red/flat2.jpg">
                        <div class="info-pre-line">
                            <div class="date">10/01/16</div>
                            <div class="location">WESTMINSTER, WEST LONDON</div>
                        </div>
                        <hr />
                        <div class="legends first-column">
                            <div class="bed legend">CHAMBRE DOUBLE</div>
                            <div class="calendar legend">3 AVRIL</div>
                        </div>
                        <div class="legends second-column">
                            <div class="price legend">230 PAR SEMAINE</div>
                            <div class="time legend">MIN 3 MOIS</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="flat">
                        <img src="images/red/flat3.jpg">
                        <div class="info-pre-line">
                            <div class="date">10/01/16</div>
                            <div class="location">WESTMINSTER, WEST LONDON</div>
                        </div>
                        <hr />
                        <div class="legends first-column">
                            <div class="bed legend">CHAMBRE DOUBLE</div>
                            <div class="calendar legend">3 AVRIL</div>
                        </div>
                        <div class="legends second-column">
                            <div class="price legend">230 PAR SEMAINE</div>
                            <div class="time legend">MIN 3 MOIS</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="row">
                    <div class="flat">
                        <img src="images/red/flat1.jpg">
                        <div class="info-pre-line">
                            <div class="date">10/01/16</div>
                            <div class="location">WESTMINSTER, WEST LONDON</div>
                        </div>
                        <hr />
                        <div class="legends first-column">
                            <div class="bed legend">CHAMBRE DOUBLE</div>
                            <div class="calendar legend">3 AVRIL</div>
                        </div>
                        <div class="legends second-column">
                            <div class="price legend">230 PAR SEMAINE</div>
                            <div class="time legend">MIN 3 MOIS</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="flat">
                        <img src="images/red/flat2.jpg">
                        <div class="info-pre-line">
                            <div class="date">10/01/16</div>
                            <div class="location">WESTMINSTER, WEST LONDON</div>
                        </div>
                        <hr />
                        <div class="legends first-column">
                            <div class="bed legend">CHAMBRE DOUBLE</div>
                            <div class="calendar legend">3 AVRIL</div>
                        </div>
                        <div class="legends second-column">
                            <div class="price legend">230 PAR SEMAINE</div>
                            <div class="time legend">MIN 3 MOIS</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="flat">
                        <img src="images/red/flat3.jpg">
                        <div class="info-pre-line">
                            <div class="date">10/01/16</div>
                            <div class="location">WESTMINSTER, WEST LONDON</div>
                        </div>
                        <hr />
                        <div class="legends first-column">
                            <div class="bed legend">CHAMBRE DOUBLE</div>
                            <div class="calendar legend">3 AVRIL</div>
                        </div>
                        <div class="legends second-column">
                            <div class="price legend">230 PAR SEMAINE</div>
                            <div class="time legend">MIN 3 MOIS</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="row">
                    <div class="flat">
                        <img src="images/red/flat1.jpg">
                        <div class="info-pre-line">
                            <div class="date">10/01/16</div>
                            <div class="location">WESTMINSTER, WEST LONDON</div>
                        </div>
                        <hr />
                        <div class="legends first-column">
                            <div class="bed legend">CHAMBRE DOUBLE</div>
                            <div class="calendar legend">3 AVRIL</div>
                        </div>
                        <div class="legends second-column">
                            <div class="price legend">230 PAR SEMAINE</div>
                            <div class="time legend">MIN 3 MOIS</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="flat">
                        <img src="images/red/flat2.jpg">
                        <div class="info-pre-line">
                            <div class="date">10/01/16</div>
                            <div class="location">WESTMINSTER, WEST LONDON</div>
                        </div>
                        <hr />
                        <div class="legends first-column">
                            <div class="bed legend">CHAMBRE DOUBLE</div>
                            <div class="calendar legend">3 AVRIL</div>
                        </div>
                        <div class="legends second-column">
                            <div class="price legend">230 PAR SEMAINE</div>
                            <div class="time legend">MIN 3 MOIS</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="flat">
                        <img src="images/red/flat3.jpg">
                        <div class="info-pre-line">
                            <div class="date">10/01/16</div>
                            <div class="location">WESTMINSTER, WEST LONDON</div>
                        </div>
                        <hr />
                        <div class="legends first-column">
                            <div class="bed legend">CHAMBRE DOUBLE</div>
                            <div class="calendar legend">3 AVRIL</div>
                        </div>
                        <div class="legends second-column">
                            <div class="price legend">230 PAR SEMAINE</div>
                            <div class="time legend">MIN 3 MOIS</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </main>
    <div class="clear"></div>
    <?php require('red-footer.php') ?>