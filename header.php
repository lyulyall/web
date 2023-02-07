<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="shortcut icon" href="./pictures/icon.png" type="image/png">
    <title>Travel Info - Checking in | Eurostar </title>
</head>

<header>

    <div class="container">
        <div class="row justify-content-berween">
            <div class="col-4">
               <a href="trains.php"><img src="./pictures/logo.png" class="logo" type="button"> </a>
            </div>
            <div class="col"></div>
            <a class="col-md-auto linkhead" href="trainsTable.php">Table<svg class="iconhaeder" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                </svg> </a>

            <div class="col-md-auto linkhead" href="#">
                <?php if (isset($_SESSION['loggedUser'])) : ?>
                    <div type="button" data-toggle="dropdown" aria-expanded="true" aria-controls="collapseOne">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        </svg>
                        <span><?php echo $_SESSION['loggedUser']; ?></span></div>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div class="col linkhead">
                        <a href="logout.php" class="linkhead"><span">Exit</span></a>
                    </div></div>
                <?php else : ?>
                    <a class="linkhead" href="login.php">
                        <span>Login/Register</span>
                        <svg class="iconhaeder" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"  viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        </svg>
                    </a>
                <?php endif; ?>
            </div>

            <a class="col-md-auto linkhead" href="export_import.php">File</a>


            <?php if (isset($_SESSION['loggedUser'])):?>
              <a class="col-md-auto linkhead" href="secret.php">Cart <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg></a>
            <?php endif; ?>

            <a class="col-md-auto linkhead" href="#">Rest of the world  <svg class="iconhaeder" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"  viewBox="0 0 16 16">
                    <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
                </svg></a>
        </div>
    </div>

</header>

<body>

<div class="container-fluid darkblue">
    <div class="container">
        <div class="row justify-content-berween">
            <a class="col-md-auto rowtrain" href="#" type="button"> <strong>Train</strong> </a>
            <a class="col-md-auto rowtrain" href="#" type="button"><strong>Train + Hotel</strong></a>
            <a class="col-md-auto rowtrain" href="#" type="button"> <strong>Hotels</strong> </a>
            <div class="col"></div>
            <a class="col-md-auto rowtrain" id="but1" href="#" type="button"> Destinations</a>
            <a class="col-md-auto rowtrain" id="but2" href="#" type="button">Travel Info</a>
            <a class="col-md-auto rowtrain" href="#" type="button">Manade Booking</a>
            <a class="col-md-auto rowtrain" href="#" type="button">Club Eurostar</a>
        </div>
    </div>
</div>


<div class="container-fluid hidenblock" id="block1">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="list">
                    <li class="listlinespacing"><h5> <strong> Breaks </strong> </h5> </li>
                    <li><a" href="#" type="button"> <strong>Paris</strong></a></li>
                    <li class="listlinespacing"><a" href="#" type="button"> <strong>London</strong> </a></li>
                    <li class="listlinespacing"><a" href="#" type="button"> <strong>Brussels</strong> </a></li>
                    <li class="listlinespacing"><a" href="#" type="button"> <strong>Amsterdam</strong> </a></li>
                    <li class="listlinespacing"><a" href="#" type="button"> <strong>Lille</strong> </a></li>
                    <li class="listlinespacing"><a" href="#" type="button">  All our city breaks destinations </a></li>
                </ul>
            </div>

            <div class="col-md-3">
                <ul class="list">
                    <li class="listlinespacing"> <h5> <strong> Travel Extras </strong> </h5> </li>
                    <li><a" href="#" type="button"> <strong>Book activities all over Europe</strong></a></li>
                    <li class="listlinespacing"><a" href="#" type="button"> <strong>Eurostar Gift vouchers</strong> </a></li>
                    <li class="listlinespacing"><a" href="#" type="button"> <strong>Explore Paris with Tootbus</strong> </a></li>
                    <li class="listlinespacing"><a" href="#" type="button"> All our partner offers </a></li>
                </ul>
            </div>

            <div class="col-md-4">
                <ul class="list">
                    <li class="listlinespacing"><a" href="#"> <h5> <strong> Route Map </strong> </h5> </a></li>
                    <li><a" href="#" type="button"> <img src="./pictures/map.png" class="map"> </li>
                </ul>
            </div>

        </div>
    </div>
</div>


<div class="container-fluid hidenblock" id="block2">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="list">
                    <li class="listlinespacing"><h5> <strong> Travel Info </strong> </h5> </li>
                    <li><a" href="#" type="button"> <strong>Travel requirements</strong></a></li>
                    <li class="listlinespacing"><a" href="#" type="button"> <strong>Travel documents</strong> </a></li>
                    <li class="listlinespacing"><a" href="#" type="button"> <strong>Customs</strong> </a></li>
                    <li class="listlinespacing"><a" href="#" type="button"> <strong>Live trains</strong> </a></li>
                    <li class="listlinespacing"><a" href="#" type="button"> <strong>Eurostar travel news</strong> </a></li>
                    <li class="listlinespacing"><a" href="#" type="button"> View all travel info articles </a></li>
                </ul>
            </div>

            <div class="col-md-3">
                <ul class="list">
                    <li class="listlinespacing"> <h5> <strong> Before You Go </strong> </h5> </li>
                    <li><a" href="#" type="button"> <strong>When to arrive</strong></a></li>
                    <li class="listlinespacing"><a" href="#" type="button"> <strong>Special travel needs</strong> </a></li>
                    <li class="listlinespacing"><a" href="#" type="button"> <strong>Luggage and bikes</strong> </a></li>
                    <li class="listlinespacing"><a" href="#" type="button"> All travel preparation articles</a></li>
                </ul>
            </div>

            <div class="col-md-3">
                <ul class="list">
                    <li class="listlinespacing"><a" href="#"> <h5> <strong> On Board </strong> </h5> </a></li>
                    <li><a" href="#" type="button"> <strong>Travel classes</strong></a></li>
                    <li class="listlinespacing"><a" href="#" type="button"> <strong>Food on board</strong> </a></li>
                    <li class="listlinespacing"><a" href="#" type="button"> <strong>Family travel</strong> </a></li>
                    <li class="listlinespacing"><a" href="#" type="button"> All about our trains</a></li>
                </ul>
            </div>

            <div class="col-md-3">
                <ul class="list">
                    <li class="listlinespacing"><h5> <strong> Station Guides</strong> </h5> </li>
                    <li><a" href="#" type="button"> <strong>St Pancras International</strong></a></li>
                    <li class="listlinespacing"><a" href="#" type="button"> <strong>Paris Gare du Nord</strong> </a></li>
                    <li class="listlinespacing"><a" href="#" type="button"> <strong>Brussels Midi/Zuid</strong> </a></li>
                    <li class="listlinespacing"><a" href="#" type="button"> <strong>Amsterdam Centraal</strong> </a></li>
                    <li class="listlinespacing"><a" href="#" type="button"> View our stations </a></li>
                </ul>
            </div>
        </div>
    </div>
</div>