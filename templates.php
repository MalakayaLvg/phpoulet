<?php
$loginForm = "    <form action=''  method='post'>
        <div>
            <input type='text' placeholder='username' name='username' id='' class='form-control'>
        </div>
        <div>
            <input type='text' placeholder='password' name='password' id='' class='form-control'>
        </div>
        <div>
            <button type='submit' class='btn btn-success'>log in</button>
        </div>

    </form>";


function afficheUnPlat(array $plat)
{
    $platDansUnTemplate = "
    <div class='card' style='width: 18rem;'>
        <img src='...' class='card-img-top' alt='...'>
        <div class='card-body'>
            <h5 class='card-title'>Card title</h5>
            <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href='#' class='btn btn-primary'>Go somewhere</a>
        </div>
    </div>
    ";

    return $platDansUnTemplate;
}

