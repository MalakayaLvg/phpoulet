<?php
$platsPoulet = [
     [  "nom"=>"poulet basquaise",
        "type"=>"traditionnel",
        "cuisson"=> "four",
        "accompagnement"=> "legumes",
        "sauce"=> "sauce basquaise",
        "image"=> "https://www.macuisinesante.com/wp-content/uploads/2019/07/poulet_basquaise.jpg",
        "id"=>"PouletBasquaise"
    ],

    [  "nom"=>"poulet frites",
        "type"=>"traditionnel",
        "cuisson"=> "four",
        "accompagnement"=> "frites",
        "sauce"=> "ketchup",
        "image"=> "https://www.hachette-vins.com//uploads/media/recettes/0001/09/6b6ba9e618a230e9bc30971078ec4bae082e973a.jpeg",
        "id"=>"PouletFrites"
    ],

    [
        "nom"=>"poulet curry",
        "type"=>"traditionnel",
        "cuisson"=>"wok",
        "accompagnement"=>"légumes",
        "sauce"=>"coco curry",
        "image"=>"https://static.750g.com/images/1200-630/91ab938d758f762c1f3f84286b121e53/adobestock-307737508.jpeg",
        "id"=>"PouletCurry"
    ]
];


// ??? afficheUnPlat();

function platTemplate($plat){
    $template = "
                    <div class='card mx-4' style='width: 18rem;'>
                        <img src='$plat[image]' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <h5 class='card-title'>$plat[nom]</h5>
                            <p class='card-text'>Type : $plat[type]</p>
                            <p class='card-text'>Cuisson : $plat[cuisson] </p>
                            <p class='card-text'>Accompagnement : $plat[accompagnement]</p>
                            <p class='card-text'>Sauce : $plat[sauce]</p>                          
                            <form action='' method='post'>
                                <input type='button' value='GO' name='$plat[id]'>
                            </form>
                        </div>
                    </div>
                    
                ";

    return $template;
}



 // $content = ???;
foreach ($platsPoulet as $plat){
//    $content2 = var_dump($plat);
    $content2 .= platTemplate($plat);
//    afficheUnPlat($plat);
}
//$content2 =


// ** DEVOIR **

// faire un tuto pour installer nativement "mySQL" et installer "php myAdmin"
// avec my admin creer une base de donnée (aller dans privilge et créer utilisateur) et une table sql avec une clé primaire, c'est une clé primaire auto incrémenté, qui s'apelle id.
// Puis tuto php sur PDO, pour se connecter a une base de donnée et reussir à recuperer les infos.
