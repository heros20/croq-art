<?php
/* Template Name: page-menu */


$salades = array("L'italienne","la segin","la campagnarde","la césar","la niçoise","la salade du chef");
$salades_description = array("tomates, mozzaella, jambon fumé","salade de chèvre chaud, lardons","salade, tomates, oeufs durs, lardons, fromage et croûtons","salade romaine, poulet, tomates, parmesan, sauce césar, croûtons","tomates, thon, anchois, olives noires, radis, basilic, poivrons","sur demande...");
$croques = array("le parisien","le bonbay","le nîmois","le chamonix","le cormeillais");
$croques_description = array("jambon, fromage","poulet curry","fromage de chèvre, miel","reblochon, jambon blanc, oignons","camembert, pommes");
$omelettes = array("nature","champignons","jambon","fromage","complète");
$omelettes_description = array("","","","","jambon, fromage");

// debug($salades);
// debug($salades_description);
get_header();
?>
<div class="B">
    <div class="page_menu">
        <div class="section_menus blanc blanc1">
            <div class="marge_grullo marge_grullo1">
                <div class="logo">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Plan_de_travail.png" alt="">
                </div>  
                <div class="menus">
                    <div class="section section1">
                        <div class="titres_plats1">
                            <h3>Salades</h3>
                        </div>
                        <?php for ($i=0; $i < count($salades); $i++) { ?>
                            <div class="menu menu<?= $i ?>">
                                <div class="text">
                                    <h4><?= $salades[$i] ?></h4>
                                    <p><?= $salades_description[$i] ?></p>
                                </div>
                                <div class="price">10€</div>
                            </div> 
                       <?php } ?>
                    </div>
                    <div class="section section2">
                        <div class="titres_plats1">
                            <h3>Croques</h3>
                        </div>
                        <div class="note note1">servies avec frites maison et salade vert</div>
                        <?php for ($i=0; $i < count($croques); $i++) { ?>
                            <div class="menu menu<?= $i ?>">
                                <div class="text">
                                    <h4><?= $croques[$i] ?></h4>
                                    <p><?= $croques_description[$i] ?></p>
                                </div>
                                <div class="price">11€</div>
                            </div> 
                       <?php } ?>
                    </div>                  
                    <div class="section section3">
                        <div class="titres_plats1">
                            <h3>Omelettes</h3>
                        </div>
                        <div class="note note1">servies avec frites maison et salade vert</div>
                        <?php for ($i=0; $i < count($omelettes); $i++) { ?>
                            <div class="menu menu<?= $i ?>">
                                <div class="text">
                                    <h4>Omelettes<?= $omelettes[$i] ?></h4>
                                    <p><?= $omelettes_description[$i] ?></p>
                                </div>
                                <div class="price">10€</div>
                            </div> 
                       <?php } ?> 
                       <div class="note note2">prix nets TTC ,service compris.</div>

                    </div>
                </div>
            </div>
        </div>
        <div class="section_menus grullo grullo1">
            <div class="marge_blanc marge_blanc1">
                <div class="menus">
                    <div class="formules">
                        <h3>Formules...</h3>
                        <div class="separateur separateur_simple"></div>
                        <div class="text formule1">
                            <p>Salade,Croque,Omelette ou Plat du jour</p>
                            <p>Une boisson au choix*</p>
                            <p>un dessert & un café</p>
                            <p>15€</p>
                        </div>
                        <div class="separateurs">
                            <div class="separateur"></div>
                            <div class="icon_couverts">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <div class="separateur"> </div>
                        </div>
                        <div class="text formule2">
                            <p>Salade,Croque,Omelette ou Plat du jour</p>
                            <p>Une boisson au choix* et un café</p>
                            <p>12,50€</p>
                        </div>
                        <div class="note note3">*(hors apéritifs et digestifs)</div>
                    </div>
                    <div class="section_special special1">
                        <div class="title">
                            <h5>Formule viande ou poisson</h5>
                        </div>
                        <div class="separateurs">
                            <div class="separateur"></div>
                            <div class="icon_couverts">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <div class="separateur"> </div>
                        </div>
                        <div class="menu menu1">
                            <div class="text">
                                <p>Descripton</p>
                            </div>
                            <div class="price">Prix</div>
                        </div>  
                        <div class="notes_supl">note</div>
                    </div>
                    <div class="section section4">
                        <div class="titres_plats2">
                            <h3>Planches</h3>
                        </div>
                        <div class="menu menu1">
                            <div class="text">
                                <h4>Plat</h4>
                                <p>Descripton</p>
                            </div>
                            <div class="price">Prix</div>
                        </div>   
                    </div>

                    <div class="section section5">
                        <div class="titres_plats2">
                            <h3>Desserts</h3>
                        </div>
                        <div class="menu menu1">
                            <div class="text">
                                <h4>Plat</h4>
                                <p>Descripton</p>
                            </div>
                            <div class="price">Prix</div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
        <div class="section_menus grullo grullo2">
            <div class="marge_blanc marge_blanc2">
                <div class="menus">
                    <div class="section section6">
                        <div class="titres_plats2">
                            <h3>Aperitifs</h3>
                        </div>
                        <div class="menu menu1">
                            <div class="text">
                                <h4>Plat</h4>
                                <p>Descripton</p>
                            </div>
                            <div class="price">Prix</div>
                        </div>   
                    </div>

                    <div class="section section7">
                        <div class="titres_plats2">
                            <h3>Digestifs</h3>
                        </div>
                        <div class="menu menu1">
                            <div class="text">
                                <h4>Plat</h4>
                                <p>Descripton</p>
                            </div>
                            <div class="price">Prix</div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
        <div class="section_menus blanc blanc2">
            <div class="marge_grullo marge_grullo2">

                <div class="menus">
                    <div class="section section8">
                        <div class="titres_plats1">
                            <h3>Divers</h3>
                        </div>
                        <div class="menu menu1">
                            <div class="text">
                                <h4>Plat</h4>
                                <p>Descripton</p>
                            </div>
                            <div class="price">Prix</div>
                        </div>   
                    </div>

                    <div class="section section9">
                        <div class="titres_plats1">
                            <h3>Softs</h3>
                        </div>
                        <div class="menu menu1">
                            <div class="text">
                                <h4>Plat</h4>
                                <p>Descripton</p>
                            </div>
                            <div class="price">Prix</div>
                        </div>   
                    </div>
                    <div class="boisson_chaudes">
                        <h3>Boisson chaudes</h3>
                        <div class="separateurs">
                            <div class="separateur"></div>
                            <div class="icon_couverts">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <div class="separateur"> </div>
                        </div>
                        <div class="menu menu1">
                            <div class="text">
                                <h4>Plat</h4>
                                <p>Descripton</p>
                            </div>
                            <div class="price">Prix</div>
                        </div> 
                    </div>

                    <div class="section_special special2">
                        <h3>Vins</h3>
                        <div class="content">
                            <div class="icon_vin">
                                <i class="fas fa-wine-glass-alt"></i>
                            </div>
                            <div class="text">Demandez la carte des vins</div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>


<?php
get_footer();