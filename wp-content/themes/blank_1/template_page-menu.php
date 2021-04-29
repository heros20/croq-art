<?php
/* Template Name: page-menu */


$salades = array(
    array(
        'plat' => 'L\'italienne',
        'contenu' => 'tomates, mozzarella, jambon fumé',
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
        'plat' => 'la planche du charcutier',
        'contenu' => '',
        'prix' => 15
    ), 
    array(
        'plat' => 'la planche du fromager',
        'contenu' => '',
        'prix' => 15
    ),
    array(
        'plat' => 'la planche du pêcheur',
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
        'plat' => 'camembert roti',
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
        'boisson' => 'calvados',
        'contenu' => 4,
        'prix' => 5.00
    ), 
    array(
        'boisson' => 'get 27',
        'contenu' => 4,
        'prix' => 5.00
    ), 
    array(
        'boisson' => 'get 31',
        'contenu' => 4,
        'prix' => 5.00
    ), 
    array(
        'boisson' => 'cognac',
        'contenu' => 4,
        'prix' => 5.00
    ), 
    array(
        'boisson' => 'armagnac',
        'contenu' => 4,
        'prix' => 5.00
    ), 
    array(
        'boisson' => 'bailey\'s',
        'contenu' => 4,
        'prix' => 5.00
    ), 
    array(
        'boisson' => 'tequila',
        'contenu' => 4,
        'prix' => 5.00
    ), 
    array(
        'boisson' => 'rhum',
        'contenu' => 4,
        'prix' => 6.00
    )
);
$bieres = array(
    array(
        'boisson' => 'bière pression',
        25 => array(
            'prix' => '3.50€'
        ),
        33 => array(
            'prix' => ''
        ),
        50 => array(
            'prix' => '5.50€'
        )
    ), 
    array(
        'boisson' => 'monaco',
        25 => array(
            'prix' => '3.00€'
        ),
        33 => array(
            'prix' => ''
        ),
        50 => array(
            'prix' => ''
        )
    ), 
    array(
        'boisson' => 'panaché',
        25 => array(
            'prix' => '3.00€'
        ),
        33 => array(
            'prix' => ''
        ),
        50 => array(
            'prix' => ''
        )
    ), 
    array(
        'boisson' => 'desperados',
        25 => array(
            'prix' => ''
        ),
        33 => array(
            'prix' => '4.00€'
        ),
        50 => array(
            'prix' => ''
        )
    )
);
$softs = array(
    array(
        'boisson' => 'eau plate',
        25 => array(
            'prix' => ''
        ),
        33 => array(
            'prix' => ''
        ),
        50 => array(
            'prix' => '3.00€'
        ),
        1 => array(
            'prix' => '4.50€'
        )
    ), 
    array(
        'boisson' => 'eau gazeuse',
        25 => array(
            'prix' => ''
        ),
        33 => array(
            'prix' => ''
        ),
        50 => array(
            'prix' => '4.00€'
        ),
        1 => array(
            'prix' => '5.50€'
        )
    ), 
    array(
        'boisson' => 'perrier',
        25 => array(
            'prix' => ''
        ),
        33 => array(
            'prix' => '2.50€'
        ),
        50 => array(
            'prix' => ''
        ),
        1 => array(
            'prix' => ''
        )
    ), 
    array(
        'boisson' => 'sirop à l\'eau',
        25 => array(
            'prix' => '2.00€'
        ),
        33 => array(
            'prix' => ''
        ),
        50 => array(
            'prix' => ''
        ),
        1 => array(
            'prix' => ''
        )
    ), 
    array(
        'boisson' => 'diabolo',
        25 => array(
            'prix' => '2.50€'
        ),
        33 => array(
            'prix' => ''
        ),
        50 => array(
            'prix' => ''
        ),
        1 => array(
            'prix' => ''
        )
    ), 
    array(
        'boisson' => 'jus de fruit',
        25 => array(
            'prix' => '3.00€ (20cl)'
        ),
        33 => array(
            'prix' => ''
        ),
        50 => array(
            'prix' => ''
        ),
        1 => array(
            'prix' => ''
        )
    ), 
    array(
        'boisson' => 'soda (canette)',
        25 => array(
            'prix' => ''
        ),
        33 => array(
            'prix' => '2.50€'
        ),
        50 => array(
            'prix' => ''
        ),
        1 => array(
            'prix' => ''
        )
    ), 
    array(
        'boisson' => 'limonade',
        25 => array(
            'prix' => '2.50€'
        ),
        33 => array(
            'prix' => ''
        ),
        50 => array(
            'prix' => ''
        ),
        1 => array(
            'prix' => ''
        )
    )
);
$boissons_chaudes = array(
    array(
        'boisson' => 'café',
        'prix' => 1.50
    ), 
    array(
        'boisson' => 'café noisettes',
        'prix' => 1.60
    ), 
    array(
        'boisson' => 'café (décaféiné)',
        'prix' => 1.60
    ), 
    array(
        'boisson' => 'café crème',
        'prix' => 2.50
    ), 
    array(
        'boisson' => 'double expresso',
        'prix' => 2.80
    ), 
    array(
        'boisson' => 'thé',
        'prix' => 3.50
    ), 
    array(
        'boisson' => 'chocolat chaud maison',
        'prix' => 3.50
    ), 
    array(
        'boisson' => 'chocolat vennois',
        'prix' => 3.80
    )
);

$args = array(
    'post_type' => 'menu',
    'post_status' => 'publish',
    'posts_per_page' => 1,
    'orderby' => 'date',
    'order' => 'DESC'
);

$the_query = new WP_Query($args);

get_header();
?>
<div class="B">
    <div class="admin">
        <h3>Notre Menu</h3>
        <div class="menus_admin">
            <?php if ($the_query->have_posts()) { 
                while ($the_query->have_posts()) {
                    $the_query->the_post(); ?>
                    <div class="menu_admin plat">
                        <?= nl2br(get_the_content()) ?>
                    </div>
                <?php  } ?>
            <?php } ?>
        </div>
    </div>
    
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
                            <table>
                                <tr>
                                    <th></th>
                                    <th></th>
                                </tr>
                            <?php foreach ($salades as $salade) { ?>
                                <tr class="menu">
                                    <td class="text">
                                        <h4><?= $salade['plat'] ?></h4>
                                        <p><?= $salade['contenu'] ?></p>
                                    </td>
                                    <td class="price"><?= $salade['prix'] ?>€</td>
                                </tr> 
                        <?php } ?>
                            </table>
                        </div>
                        <div class="section section2">
                            <div class="titres_plats1">
                                <h3>Croques</h3>
                            </div>
                            <div class="note note1">servies avec frites maison et salade verte</div>
                            <table>
                                <tr>
                                    <th></th>
                                    <th></th>
                                </tr>
                            <?php foreach ($croques as $croque) { ?>
                                <tr class="menu">
                                    <td class="text">
                                        <h4><?= $croque['plat'] ?></h4>
                                        <p><?= $croque['contenu'] ?></p>
                                    </td>
                                    <td class="price"><?= $croque['prix'] ?>€</td>
                                </tr> 
                        <?php } ?>
                            </table>
                        </div>                  
                        <div class="section section3">
                            <div class="titres_plats1">
                                <h3>Omelettes</h3>
                            </div>
                            <div class="note note1">servies avec frites maison et salade verte</div>
                            <table>
                                <tr>
                                    <th></th>
                                    <th></th>
                                </tr>
                            <?php foreach ($omelettes as $omelette) { ?>
                                <tr class="menu">
                                    <td class="text">
                                        <h4>omelette <?= $omelette['plat'] ?></h4>
                                        <p><?= $omelette['contenu'] ?></p>
                                    </td>
                                    <td class="price"><?= $omelette['prix'] ?>€</td>
                                </tr> 
                        <?php } ?>
                            </table>
                        <div class="note note2">prix nets TTC, service compris.</div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="section_menus grullo grullo1">
                <div class="marge_blanc marge_blanc1">
                    <div class="menus">
                        <div class="plats">
                            <div class="titres_plats1">
                                <h3><img src="<?= get_template_directory_uri(); ?>/assets/images/banderole-removebg-preview.png" alt="<?= get_the_title(); ?>"></h3>
                            </div>
                            <table>
                                <tr>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr class="menu">
                                    <td class="text">
                                        <h4>l'inspiration du chef</h4>
                                        <p>tarte salée ou tartine</p>
                                    </td>
                                    <td class="price">11€</td>
                                </tr>
                                <tr class="menu">
                                    <td class="text">
                                        <h4>la pièce du boucher</h4>
                                    </td>
                                    <td class="price">15€</td>
                                </tr>
                                <tr class="menu">
                                    <td class="text">
                                        <h4>le poisson du jour</h4>
                                    </td>
                                    <td class="price">15€</td>
                                </tr>
                                <tr class="menu">
                                    <td class="text">
                                        <h4>le plat du jour</h4>
                                    </td>
                                    <td class="price">11€</td>
                                </tr>
                            </table>
                        </div>
                        <div class="formules">
                            <h3>Formules...</h3>
                            <div class="separateur separateur_simple"></div>
                            <div class="text formule1">
                                <p>Salade, Croque, Omelette ou Plat du jour</p>
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
                                <p>Salade, Croque, Omelette ou Plat du jour</p>
                                <p>Une boisson au choix* et un café</p>
                                <p>12,50€</p>
                            </div>
                            <div class="note note3">* (hors apéritifs et digestifs)</div>
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
                                    <p>Un dessert & un café</p>
                                </div>
                                <div class="price">18,00€</div>
                            </div>  
                            <div class="notes_supl">* (hors apéritifs et digestifs)</div>
                        </div>
                        <div class="section section4">
                            <div class="titres_plats2">
                                <h3>Planches</h3>
                            </div>
                            <div class="note note1">servies avec une boisson au choix *</div>
                            <table>
                                <tr>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <?php foreach ($planches as $planche) { ?>
                                    <tr class="menu">
                                        <td class="text">
                                            <h4><?= $planche['plat'] ?></h4>
                                            <p><?= $planche['contenu'] ?></p>
                                        </td>
                                        <td class="price"><?= $planche['prix'] ?>€</td>
                                    </tr> 
                            <?php } ?>
                            </table> 
                            <div class="notes_sup">* (hors apéritifs et digestifs)</div>  
                        </div>
                        <div class="section section5">
                            <div class="titres_plats2">
                                <h3>Desserts</h3>
                            </div>
                            <div class="note note1">faits maison</div>
                            <table>
                                <tr>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <?php foreach ($desserts as $dessert) { ?>
                                    <tr class="menu">
                                        <td class="text">
                                            <h4><?= $dessert['plat'] ?></h4>
                                        </td>
                                        <td class="price"><?= $dessert['prix'] ?>€</td>
                                    </tr> 
                            <?php } ?>
                        </table>  
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
                            <table>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <?php foreach ($aperitifs as $aperitif) { ?>
                                    <tr class="boisson">
                                        <td class="text">
                                            <h4><?= $aperitif['boisson'] ?></h4>
                                        </td>
                                        <td class="contenus"><?= $aperitif['contenu'] ?>cl</td>
                                        <td class="price"><?= $aperitif['prix'] ?>€</td>
                                    </tr> 
                                <?php } ?>                        
                                <tr class="boisson boisson_solo">
                                    <td class="text">
                                        <h4>supplément coca-cola</h4>
                                    </td>
                                    <td></td>
                                    <td class="price">0.50€</td>
                                </tr>
                                <tr class="boisson boisson_solo">
                                    <td class="text">
                                        <h4>supplément sirop</h4>
                                    </td>
                                    <td></td>
                                    <td class="price">0.50€</td>
                                </tr>
                            </table>
                        </div>

                        <div class="section section7">
                            <div class="titres_plats2">
                                <h3>Digestifs</h3>
                            </div>
                            <table>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <?php foreach ($digestifs as $digestif) { ?>
                                    <tr class="boisson">
                                        <td class="text">
                                            <h4><?= $digestif['boisson'] ?></h4>
                                        </td>
                                        <td class="contenus"><?= $digestif['contenu'] ?>cl</td>
                                        <td class="price"><?= $digestif['prix'] ?>€</td>
                                    </tr> 
                                <?php } ?>
                            </table>  
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
                            <table>
                                <tr>
                                    <th></th>
                                    <th>25cL</th>
                                    <th>33cL</th>
                                    <th>50cL</th>
                                </tr>
                                <?php foreach ($bieres as $biere) { ?>
                                    <tr class="boisson">
                                        <td class="text">
                                            <h4><?= $biere['boisson'] ?></h4>
                                        </td>
                                        <td class="price"><?= $biere[25]['prix'] ?></td>
                                        <td class="price"><?= $biere[33]['prix'] ?></td>
                                        <td class="price"><?= $biere[50]['prix'] ?></td>

                                    </tr> 
                                <?php } ?>
                            </table>     
                        </div>
                        <div class="section section9">
                            <div class="titres_plats1">
                                <h3>Softs</h3>
                            </div>
                            <table>
                                <tr>
                                    <th></th>
                                    <th>25cL</th>
                                    <th>33cL</th>
                                    <th>50cL</th>
                                    <th>1L</th>
                                </tr>
                                <?php foreach ($softs as $soft) { ?>
                                    <tr class="boisson">
                                        <td class="text">
                                            <h4><?= $soft['boisson'] ?></h4>
                                        </td>
                                        <td class="price"><?= $soft[25]['prix'] ?></td>
                                        <td class="price"><?= $soft[33]['prix'] ?></td>
                                        <td class="price"><?= $soft[50]['prix'] ?></td>
                                        <td class="price"><?= $soft[1]['prix'] ?></td>
                                    </tr> 
                                <?php } ?>
                            </table>   
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
                            <table>
                                <tr>
                                    <th></th>
                                    <th></th>
                                </tr>
                            <?php foreach ($boissons_chaudes as $boisson_chaude) { ?>
                                <tr class="menu">
                                    <td class="text">
                                        <h4><?= $boisson_chaude['boisson'] ?></h4>
                                    </td>
                                    <td class="price"><?= $boisson_chaude['prix'] ?>€</td>
                                </tr> 
                        <?php } ?>
                            </table>
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