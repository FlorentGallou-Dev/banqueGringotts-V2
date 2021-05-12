<?php
    $regexPatternLink = '/\s/';

    foreach(get_accounts() as $account) {
        echo "<div class='col-12 col-lg-4 my-3 mx-auto'>
                        <div class='card mx-1'>
                            <div class='card-body'>
                                <h5 class='card-title'>" . $account["type"] . "</h5>
                                <p class='card-text'> N° " . $account["Number"] . "</p>
                            </div>
                            <ul class='list-group list-group-flush'>
                                <li class='list-group-item owner'> Propriétaire : <strong>" . $account["Owner"] . "</strong></li>
                                <li class='list-group-item balance'> Solde : " . number_format($account["balance"], 0, ',', ' ') .  " Gallons </li>
                                <li class='list-group-item balance'> Dernière opération : <br/>  => -";
        foreach($account as $key => $value) {
            if($key == "operations"){
                    echo $value[0]["title"] . " : " . number_format($value[0]["amount"], 0, null, ' ') . " G</li>
                    </ul>
                    <div class='card-body text-center'>
                        <a href='". preg_replace($regexPatternLink, '_', strtolower($account["type"])) . ".php' class='btn btn-gold'>Consulter</a>
                    </div>
                </div>
            </div>";
            }
        }
    }
?>