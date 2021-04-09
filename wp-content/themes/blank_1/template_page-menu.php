<?php
/* Template Name: page-menu */


$salades = array(
    array(
        'plat' => 'L\'italienne',
        'contenu' => 'tomates, mozzaella, jambon fumé',
        'prix' => 10
    ),
    array(
        'plat' => 'la segin',
        'contenu' => 'salade de chèvre chaud, lardons',
        'prix' => 10
    ),
    array(
        'plat' => 'la campagnarde',
        'contenu' => 'salade, tomates, oeufs durs, lardons, fromage et croûtons',
        'prix' => 10
    ),
    array(
        'plat' => 'la césar',
        'contenu' => 'salade romaine, poulet, tomates, parmesan, sauce césar, croûtons',
        'prix' => 10
    ),
    array(
        'plat' => 'la niçoise',
        'contenu' => 'tomates, thon, anchois, olives noires, radis, basilic, poivrons',
        'prix' => 10
    ),
    array(
        'plat' => 'la salade du chef',
        'contenu' => 'sur demande...',
        'prix' => 10
    )
);
$croques = array(
    array(
        'plat' => 'le parisien',
        'contenu' => 'jambon, fromage',
        'prix' => 11
    ),
    array(
        'plat' => 'le bonbay',
        'contenu' => 'poulet curry',
        'prix' => 11
    ),
    array(
        'plat' => 'le nîmois',
        'contenu' => 'fromage de chèvre, miel',
        'prix' => 11
    ),
    array(
        'plat' => 'le chamonix',
        'contenu' => 'reblochon, jambon blanc, oignons',
        'prix' => 11
    ),
    array(
        'plat' => 'le cormeillais',
        'contenu' => 'camembert, pommes',
        'prix' => 11
    )
    
);
$omelettes = array(
    array(
        'plat' => 'nature',
        'contenu' => '',
        'prix' => 10
    ),
    array(
        'plat' => 'champignons',
        'contenu' => '',
        'prix' => 10
    ),
    array(
        'plat' => 'jambon',
        'contenu' => '',
        'prix' => 10
    ),
    array(
        'plat' => 'fromage',
        'contenu' => '',
        'prix' => 10
    ),
    array(
        'plat' => 'complète',
        'contenu' => 'jambon, fromage',
        'prix' => 10
    )
    
);
$planches = array(
    array(
        'plat' => 'la plache du charcutier',
        'contenu' => '',
        'prix' => 15
    ), 
    array(
        'plat' => 'la plache du fromager',
        'contenu' => '',
        'prix' => 15
    ),
    array(
        'plat' => 'la plache du pêcheur',
        'contenu' => 'selon marée',
        'prix' => 17
    ), 
    array(
        'plat' => 'la planche mixte',
        'contenu' => 'charcuterie & fromage',
        'prix' => 15
    ), 
    array(
        'plat' => 'le duo <p>(servie avec deux boissons au choix*)</p>',
        'contenu' => 'charcuterie / fromage ou mixte',
        'prix' => 25
    ), 
    array(
        'plat' => 'camenbert roti',
        'contenu' => 'frites, salade, jambon fumé',
        'prix' => 15
    )
);
$desserts = array(
    array(
        'plat' => 'mousse au chocolat',
        'prix' => 4
    ), 
    array(
        'plat' => 'crumble',
        'prix' => 4
    ), 
    array(
        'plat' => 'fromage blanc',
        'prix' => 4
    ), 
    array(
        'plat' => 'crème caramel',
        'prix' => 4
    ), 
    array(
        'plat' => 'dessert du jour',
        'prix' => 4
    )
);
$aperitifs = array(
    array(
        'boisson' => 'américano maison',
        'contenu' => 8,
        'prix' => 6.00
    ), 
    array(
        'boisson' => 'cidre',
        'contenu' => 12,
        'prix' => 2.80
    ), 
    array(
        'boisson' => 'coupe de champagne',
        'contenu' => 12,
        'prix' => 7.00
    ), 
    array(
        'boisson' => 'gin tonic',
        'contenu' => 4,
        'prix' => 5.00
    ), 
    array(
        'boisson' => 'jager bomb',
        'contenu' => 4,
        'prix' => 6.00
    ), 
    array(
        'boisson' => 'kir normand',
        'contenu' => 12,
        'prix' => 3.50
    ), 
    array(
        'boisson' => 'kir petillant',
        'contenu' => 12,
        'prix' => 3.50
    ), 
    array(
        'boisson' => 'kir vin blanc ou cidre',
        'contenu' => 12,
        'prix' => 3.50
    ), 
    array(
        'boisson' => 'martini',
        'contenu' => 4,
        'prix' => 3.50
    ), 
    array(
        'boisson' => 'pommeau',
        'contenu' => 4,
        'prix' => 3.50
    ), 
    array(
        'boisson' => 'porto',
        'contenu' => 4,
        'prix' => 3.50
    ), 
    array(
        'boisson' => 'ricard / pastis',
        'contenu' => 2,
        'prix' => 3.00
    ), 
    array(
        'boisson' => 'suze',
        'contenu' => 4,
        'prix' => 3.00
    ), 
    array(
        'boisson' => 'vodka',
        'contenu' => 4,
        'prix' => 4.00
    ), 
    array(
        'boisson' => 'whisky (supérieur)',
        'contenu' => 2,
        'prix' => 4.00
    ), 
    array(
        'boisson' => 'whisky (supérieur)',
        'contenu' => 4,
        'prix' => 6.00
    ), 
    array(
        'boisson' => 'whisky',
        'contenu' => 2,
        'prix' => 3.00
    ), 
    array(
        'boisson' => 'whisky',
        'contenu' => 4,
        'prix' => 4.50
    )
);
$digestifs = array(
    array(
        'boisson' => '',
        'contenu' => ,
        'prix' => 15
    ), 
    array(
        'boisson' => '',
        'contenu' => ,
        'prix' => 15
    )
);
$bieres = array(
    array(
        'boisson' => '',
        'contenu' => ,
        'prix' => 15
    ), 
    array(
        'boisson' => '',
        'contenu' => ,
        'prix' => 15
    )
);
$softs = array(
    array(
        'boisson' => '',
        'contenu' => ,
        'prix' => 15
    ), 
    array(
        'boisson' => '',
        'contenu' => ,
        'prix' => 15
    )
);
$boissons_chaudes = array(
    array(
        'boisson' => '',
        'contenu' => ,
        'prix' => 15
    ), 
    array(
        'boisson' => '',
        'contenu' => ,
        'prix' => 15
    )
);
debug($salades);
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
                        <?php foreach ($salades as $salade) { ?>
                            <div class="menu">
                                <div class="text">
                                    <h4><?= $salade['plat'] ?></h4>
                                    <p><?= $salade['contenu'] ?></p>
                                </div>
                                <div class="price"><?= $salade['prix'] ?>€</div>
                            </div> 
                       <?php } ?>
                    </div>
                    <div class="section section2">
                        <div class="titres_plats1">
                            <h3>Croques</h3>
                        </div>
                        <div class="note note1">servies avec frites maison et salade vert</div>
                        <?php foreach ($croques as $croque) { ?>
                            <div class="menu">
                                <div class="text">
                                    <h4><?= $croque['plat'] ?></h4>
                                    <p><?= $croque['contenu'] ?></p>
                                </div>
                                <div class="price"><?= $croque['prix'] ?>€</div>
                            </div> 
                       <?php } ?>
                    </div>                  
                    <div class="section section3">
                        <div class="titres_plats1">
                            <h3>Omelettes</h3>
                        </div>
                        <div class="note note1">servies avec frites maison et salade vert</div>
                        <?php foreach ($omelettes as $omelette) { ?>
                            <div class="menu">
                                <div class="text">
                                    <h4>omelette <?= $omelette['plat'] ?></h4>
                                    <p><?= $omelette['contenu'] ?></p>
                                </div>
                                <div class="price"><?= $omelette['prix'] ?>€</div>
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
                    <div class="plats">
                    
                    </div>
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
                                <p>Une boisson au choix*</p>
                                <p>Un dessert et un café</p>
                            </div>
                            <div class="price">18,00€</div>
                        </div>  
                        <div class="notes_supl">*(hors apéritifs et digestifs)</div>
                    </div>
                    <div class="section section4">
                        <div class="titres_plats2">
                            <h3>Planches</h3>
                        </div>
                        <div class="note note1">servies avec une boisson au choix *</div>
                        <?php foreach ($planches as $planche) { ?>
                            <div class="menu">
                                <div class="text">
                                    <h4><?= $planche['plat'] ?></h4>
                                    <p><?= $planche['contenu'] ?></p>
                                </div>
                                <div class="price"><?= $planche['prix'] ?>€</div>
                            </div> 
                       <?php } ?>
                       <div class="notes_sup">*(hors apéritifs et digestifs)</div>  
                    </div>
                    <div class="section section5">
                        <div class="titres_plats2">
                            <h3>Desserts</h3>
                        </div>
                        <div class="note note1">faits maison</div>
                        <?php foreach ($desserts as $dessert) { ?>
                            <div class="menu">
                                <div class="text">
                                    <h4><?= $dessert['plat'] ?></h4>
                                </div>
                                <div class="price"><?= $dessert['prix'] ?>€</div>
                            </div> 
                       <?php } ?>
                       <div class="note note1" style="text-align: left; color: #FFF;">liste des allergènes sur demande</div>
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
                        <?php foreach ($aperitifs as $aperitif) { ?>
                            <div class="menu">
                                <div class="text">
                                    <h4><?= $aperitif['boisson'] ?></h4>
                                </div>
                                <div class="contenus"><?= $aperitif['contenu'] ?>cl</div>
                                <div class="price"><?= $aperitif['prix'] ?>€</div>
                            </div> 
                       <?php } ?>
                        <div class="menu menu_solo">
                            <div class="text">
                                <h4>supplèment coca-cola</h4>
                            </div>
                            <div class="price">0.50€</div>
                        </div>
                        <div class="menu menu_solo">
                            <div class="text">
                                <h4>supplèment sirop</h4>
                            </div>
                            <div class="price">0.50€</div>
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