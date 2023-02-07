<?php
require_once 'logic.php';
?>
<?php include 'header.php' ?>



<div class="container-fluid blue">
    <div class="container">
        <p class="texth1"> WHEN TO ARRIVE AT <br> THE STATION </p>

        <p class="texth2" >There’s no need to check in for Eurostar, just scan your ticket at the ticket gate.</p>
    </div>
</div>


<div class="container info">

    <p class="infolinespacing">With Eurostar, border and luggage checks take place before departure, so we ask our passengers to arrive
        at the station early enough to complete them. Use the drop-down menu below to check the recommended arrival
        and gate closure times for each station.
    </p>

    <p class="infolinespacing">These timings are just for guidance and can sometimes change.
        <strong>
            It’s a good idea to <a href="#" class="green"> download your ticket </a>to check the most-up-to-date recommended arrival time. </a>
        </strong>
    </p>

    <p class="infolinespacing">  <strong>IMPORTANT:</strong> Please come to the station early and not just before the ticket gates close.
        This will ensure that you have enough time to go through all checks before your train departs.
    </p>

    <p class="infolinespacing"> <strong>Select a station below to view the recommended arrival times:</strong></p>


    <div class="dropdownbutton" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
        <div class="row justify-content-berween" role="button">
            <div class="col-md-auto title">Select... </div>
            <div class="col"></div>
            <div class="col-md-auto"><svg class="down" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                </svg>
            </div>
        </div>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a id="btn0" class="dropdown-item" href="#">Select...</a></li>
            <li><a id="btn1" class="dropdown-item" href="#">London St Pancras International</a></li>
            <li><a id="btn2" class="dropdown-item" href="#">Paris Gare du Nord</a></li>
            <li><a id="btn3" class="dropdown-item" href="#">Brussels Midi/Zuid</a></li>
            <li><a id="btn4" class="dropdown-item" href="#">Amsterdam Centraal</a></li>
            <li><a id="btn5" class="dropdown-item" href="#">Disneyland® Paris(Chessy/Marne-la-Vallée)</a></li>
            <li><a id="btn6" class="dropdown-item" href="#">Rotterdam Centraal</a></li>
            <li><a id="btn7" class="dropdown-item" href="#">Lille Europe</a></li>
        </ul>
    </div>
</div>



<div class="containertable hidenblock" id="loc1">
    <div class="htable" type="button"">London St Pancras International</div>
<table class="table table-bordered ">
    <thead>
    <tr>
        <th scope="col" class="table-info"></th>
        <th scope="col" class="table-info headertable">Standard & Standard Premier</th>
        <th scope="col" class="table-info headertable">Business Premier</th>
        <th scope="col" class="table-info headertable">Carte Blanche members</th>
        <th scope="col" class="table-info headertable">Classique & Avantage members</th>
        <th scope="col" class="table-info headertable">Special Assist</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row"class="table-info headertable">How long before departure should I arrive? (mins)</th>
        <td class="eltable">90</td>
        <td class="eltable">45-60</td>
        <td class="eltable">45-60</td>
        <td class="eltable">90</td>
        <td class="eltable">60-75</td>
    </tr>
    <tr>
        <th scope="row"class="table-info headertable">How long before departure does the gate close? (mins)<</th>
        <td class="eltable">30</td>
        <td class="eltable">15</td>
        <td class="eltable">30</td>
        <td class="eltable">30</td>
        <td class="eltable">30</td>

    </tr>
    </tbody>
</table>

    <div class="info"><strong>Ticket gates</strong>
    <br> <strong>Everybody needs to scan their ticket</strong> so we know who’s coming on board. When you arrive at the ticket gates, simply scan the
    barcode on your paper ticket or on your mobile. You need to scan each ticket individually – even the kids’. If you don’t scan your ticket,
    there’s a chance your seat will be given to someone else.
    <p>If you don't have a seat number on your ticket, speak to a member of our team and we’ll let you know how and when you'll be given a seat. If you have any problems, just ask one of our team for help. </p>
    <p><strong>Tickets issued by other carriers may not have a barcode so you'll need to speak to a member of our team.</strong></p></div>

</div>


<div class="containertable hidenblock" id="loc2">
    <div class="htable">Paris Gare du Nord</div>
    <table class="table table-bordered ">
        <thead>
        <tr>
            <th scope="col" class="table-info"></th>
            <th scope="col" class="table-info headertable">Standard & Standard Premier</th>
            <th scope="col" class="table-info headertable">Business Premier</th>
            <th scope="col" class="table-info headertable">Carte Blanche members</th>
            <th scope="col" class="table-info headertable">Classique & Avantage members</th>
            <th scope="col" class="table-info headertable">Special Assist</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row"class="table-info headertable">How long before departure should I arrive? (mins)</th>
            <td class="eltable">90-120</td>
            <td class="eltable">45-60</td>
            <td class="eltable">90-120</td>
            <td class="eltable">90-120</td>
            <td class="eltable">60-75</td>
        </tr>
        <tr>
            <th scope="row"class="table-info headertable">How long before departure does the gate close? (mins)<</th>
            <td class="eltable">45</td>
            <td class="eltable">15</td>
            <td class="eltable">30</td>
            <td class="eltable">45</td>
            <td class="eltable">45</td>

        </tr>
        </tbody>
    </table>


    <div class="info"><strong>Ticket gates</strong>
        <br> <strong>Everybody needs to scan their ticket</strong> so we know who’s coming on board. When you arrive at the ticket gates, simply scan the
        barcode on your paper ticket or on your mobile. You need to scan each ticket individually – even the kids’. If you don’t scan your ticket,
        there’s a chance your seat will be given to someone else.
        <p>If you don't have a seat number on your ticket, speak to a member of our team and we’ll let you know how and when you'll be given a seat.
            If you have any problems, just ask one of our team for help. </p>
        <p><strong>Tickets issued by other carriers may not have a barcode so you'll need to speak to a member of our team.</strong></p></div>

</div>



<div class="containertable hidenblock" id="loc3">
    <div class="htable">Brussels Midi/Zuid</div>
    <table class="table table-bordered ">
        <thead>
        <tr>
            <th scope="col" class="table-info"></th>
            <th scope="col" class="table-info headertable">Standard & Standard Premier</th>
            <th scope="col" class="table-info headertable">Business Premier</th>
            <th scope="col" class="table-info headertable">Carte Blanche members</th>
            <th scope="col" class="table-info headertable">Classique & Avantage members</th>
            <th scope="col" class="table-info headertable">Special Assist</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row"class="table-info headertable">How long before departure should I arrive? (mins)</th>
            <td class="eltable">90-120</td>
            <td class="eltable">45-60</td>
            <td class="eltable">90-120</td>
            <td class="eltable">90-120</td>
            <td class="eltable">60-75</td>
        </tr>
        <tr>
            <th scope="row"class="table-info headertable">How long before departure does the gate close? (mins)<</th>
            <td class="eltable">45</td>
            <td class="eltable">15</td>
            <td class="eltable">30</td>
            <td class="eltable">45</td>
            <td class="eltable">45</td>

        </tr>
        </tbody>
    </table>


    <div class="info"><strong>Ticket gates</strong>
        <br> <strong>Everybody needs to scan their ticket</strong> so we know who’s coming on board. When you arrive at the ticket gates, simply scan the
        barcode on your paper ticket or on your mobile. You need to scan each ticket individually – even the kids’. If you don’t scan your ticket,
        there’s a chance your seat will be given to someone else.
        <p>If you don't have a seat number on your ticket, speak to a member of our team and we’ll let you know how and when you'll be given a seat.
            If you have any problems, just ask one of our team for help. </p>
        <p><strong>Tickets issued by other carriers may not have a barcode so you'll need to speak to a member of our team.</strong></p></div>

</div>


<div class="containertable hidenblock" id="loc4">
    <div class="htable">Amsterdam Centraal</div>
    <table class="table table-bordered ">
        <thead>
        <tr>
            <th scope="col" class="table-info"></th>
            <th scope="col" class="table-info headertable">Standard & Standard Premier</th>
            <th scope="col" class="table-info headertable">Business Premier</th>
            <th scope="col" class="table-info headertable">Carte Blanche members</th>
            <th scope="col" class="table-info headertable">Classique & Avantage members</th>
            <th scope="col" class="table-info headertable">Special Assist</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row"class="table-info headertable">How long before departure should I arrive? (mins)</th>
            <td class="eltable">90</td>
            <td class="eltable">45-60</td>
            <td class="eltable">45-60</td>
            <td class="eltable">90</td>
            <td class="eltable">60-75</td>
        </tr>
        <tr>
            <th scope="row"class="table-info headertable">How long before departure does the gate close? (mins)<</th>
            <td class="eltable">45</td>
            <td class="eltable">30</td>
            <td class="eltable">30</td>
            <td class="eltable">30</td>
            <td class="eltable">45</td>

        </tr>
        </tbody>
    </table>


    <div class="info"><strong>Ticket gates</strong> <p> If you’re <strong>ravelling from Amsterdam Centraal</strong> , please scan the barcode on your
            ticket at the <strong>NS ticket gates</strong> and head to the Eurostar departure building on <strong>platform 15b</strong> . Our team will check your tickets there.</p>
        <br><strong>Everybody needs to scan their ticket</strong> so we know who’s coming on board. When you arrive at the ticket gates, simply scan the
        barcode on your paper ticket or on your mobile. You need to scan each ticket individually – even the kids’. If you don’t scan your ticket,
        there’s a chance your seat will be given to someone else.
        <p>If you don't have a seat number on your ticket, speak to a member of our team and we’ll let you know how and when you'll be given a seat.
            If you have any problems, just ask one of our team for help. </p>
        <p><strong>Tickets issued by other carriers may not have a barcode so you'll need to speak to a member of our team.</strong></p></div>

</div>

<div class="containertable hidenblock" id="loc5">
    <div class="htable">Marne-la-Vallée (for Disneyland® Paris)</div>
    <table class="table table-bordered ">
        <thead>
        <tr>
            <th scope="col" class="table-info"></th>
            <th scope="col" class="table-info headertable">Standard & Standard Premier</th>
            <th scope="col" class="table-info headertable">Business Premier</th>
            <th scope="col" class="table-info headertable">Carte Blanche members</th>
            <th scope="col" class="table-info headertable">Classique & Avantage members</th>
            <th scope="col" class="table-info headertable">Special Assist</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row"class="table-info headertable">How long before departure should I arrive? (mins)</th>
            <td class="eltable">90-120</td>
            <td class="eltable">45-60</td>
            <td class="eltable">60-75</td>
            <td class="eltable">90-120</td>
            <td class="eltable">90-120</td>
        </tr>
        <tr>
            <th scope="row"class="table-info headertable">How long before departure does the gate close? (mins)<</th>
            <td class="eltable">30</td>
            <td class="eltable">20</td>
            <td class="eltable">15</td>
            <td class="eltable">30</td>
            <td class="eltable">30</td>

        </tr>
        </tbody>
    </table>


    <div class="info"><p> Your ticket will be manually checked by a member of staff at Marne-la-Vallée. Remember to <strong>download or print your tickets</strong>
            before you arrive at the station.</p>
        <p>If you’re travelling with a <strong>group or require special assistance</strong>, please arrive early to give yourself plenty of time.</p>
        <p>There are no ePassport gates at Marne-la-Vallée.</p>
    </div>

</div>


<div class="containertable hidenblock" id="loc6">
    <div class="htable">Rotterdam Centraal</div>
    <table class="table table-bordered ">
        <thead>
        <tr>
            <th scope="col" class="table-info"></th>
            <th scope="col" class="table-info headertable">Standard & Standard Premier</th>
            <th scope="col" class="table-info headertable">Business Premier</th>
            <th scope="col" class="table-info headertable">Carte Blanche members</th>
            <th scope="col" class="table-info headertable">Classique & Avantage members</th>
            <th scope="col" class="table-info headertable">Special Assist</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row"class="table-info headertable">How long before departure should I arrive? (mins)</th>
            <td class="eltable">60*90</td>
            <td class="eltable">30-45</td>
            <td class="eltable">30-45</td>
            <td class="eltable">60-90</td>
            <td class="eltable">60-75</td>
        </tr>
        <tr>
            <th scope="row"class="table-info headertable">How long before departure does the gate close? (mins)<</th>
            <td class="eltable">45</td>
            <td class="eltable">30</td>
            <td class="eltable">30</td>
            <td class="eltable">30</td>
            <td class="eltable">45</td>

        </tr>
        </tbody>
    </table>


    <div class="info"><strong>Ticket gates</strong> <p> If you’re <strong>ravelling from Rotterdam Centraal</strong> , please scan the barcode on your
            ticket at the <strong>NS ticket gates</strong> and head to the Eurostar departure building on <strong>platform 15b</strong> . Our team will check your tickets there.</p>
        <br><strong>Everybody needs to scan their ticket</strong> so we know who’s coming on board. When you arrive at the ticket gates, simply scan the
        barcode on your paper ticket or on your mobile. You need to scan each ticket individually – even the kids’. If you don’t scan your ticket,
        there’s a chance your seat will be given to someone else.
        <p>If you don't have a seat number on your ticket, speak to a member of our team and we’ll let you know how and when you'll be given a seat.
            If you have any problems, just ask one of our team for help. </p>
        <p><strong>Tickets issued by other carriers may not have a barcode so you'll need to speak to a member of our team.</strong></p></div>

</div>


<div class="containertable hidenblock" id="loc7">
    <div class="htable">London St Pancras International</div>
    <table class="table table-bordered ">
        <thead>
        <tr>
            <th scope="col" class="table-info"></th>
            <th scope="col" class="table-info headertable">Standard & Standard Premier</th>
            <th scope="col" class="table-info headertable">Business Premier</th>
            <th scope="col" class="table-info headertable">Carte Blanche members</th>
            <th scope="col" class="table-info headertable">Classique & Avantage members</th>
            <th scope="col" class="table-info headertable">Special Assist</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row"class="table-info headertable">How long before departure should I arrive? (mins)</th>
            <td class="eltable">90</td>
            <td class="eltable">45-60</td>
            <td class="eltable">60-75</td>
            <td class="eltable">90</td>
            <td class="eltable">75-90</td>
        </tr>
        <tr>
            <th scope="row"class="table-info headertable">How long before departure does the gate close? (mins)<</th>
            <td class="eltable">30</td>
            <td class="eltable">20</td>
            <td class="eltable">30</td>
            <td class="eltable">30</td>
            <td class="eltable">30</td>

        </tr>
        </tbody>
    </table>


    <div class="info"><strong>Ticket gates</strong>
        <br> <strong>Everybody needs to scan their ticket</strong> so we know who’s coming on board. When you arrive at the ticket gates, simply scan the
        barcode on your paper ticket or on your mobile. You need to scan each ticket individually – even the kids’. If you don’t scan your ticket,
        there’s a chance your seat will be given to someone else.
        <p>If you don't have a seat number on your ticket, speak to a member of our team and we’ll let you know how and when you'll be given a seat.
            If you have any problems, just ask one of our team for help. </p>
        <p><strong>Tickets issued by other carriers may not have a barcode so you'll need to speak to a member of our team.</strong></p></div>

</div>


<div class="headeraccordion">ePassport gates at our stations
    <hr class="hr-line">
</div>
<p class="infoaccordion"> If your European passport has an electronic chip in it, you can scan it at the <br> ePassport gate, rather than using the passport control booth </p>


<div class="accordion ">
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">
                <button class="btn btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <strong>Who they're for</strong>
                </button>
            </h2>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" aria-expanded ="true">
            <div class="card-body el">
                These are for EU and EEA citizens who are over 18 and have a valid electronic passport. Look for the symbol below on the front of your European passport.
                <div> <img src="./pictures/eGateLogo.png" class="eGateLogo" href="#"  type="button"> </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">
                <button class="btn btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <strong>How they work</strong>
                </button>
            </h2>
        </div>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo">
            <div class="card-body el">
                <strong>French & Belgian Border Control</strong>
                <ol>
                    <li>Put the photo page of your passport face down on the glass and wait for the gate to read the chip. When the green light shows on the screen, the first gates will open so you can step forward.</li>
                    <li>Stand on the footprints, look at the camera and wait for the facial recognition camera to scan you.</li>
                    <li>If the scan matches your passport photo, the second gate will open and you can walk right into our departure lounge.</li>
                </ol>

                <strong>UK border control</strong>
                <ol>
                    <li>Walk through the first gate.</li>
                    <li>Put the photo page of your passport face down on the glass, look at the camera and wait for the gate to read your passport and the facial recognition camera to scan you.</li>
                    <li>If the scan matches your passport photo, the second gate will open and you can walk right into our departure lounge.</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php' ?>


