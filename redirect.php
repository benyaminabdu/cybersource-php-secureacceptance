<?php

    require('Cybersource.php');

    $cybersource = new Cybersource();

    foreach($_REQUEST as $name => $value) {
        $params[$name] = $value;
    }
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cybersouce - PHP Secure Acceptance Starter Code</title>
    </head>
    <body>

        <form id="payment_confirmation" action="https://testsecureacceptance.cybersource.com/pay" method="post"/>
            <?php
                foreach($params as $name => $value) {
                    echo "<input type=\"hidden\" id=\"" . $name . "\" name=\"" . $name . "\" value=\"" . $value . "\"/>\n";
                }
                echo "<input type=\"hidden\" id=\"signature\" name=\"signature\" value=\"" . $cybersource->sign($params) . "\"/>\n";
            ?>

            <h3>Signature Generated - <?php echo $cybersource->sign($params); ?></h3>

            <input type="submit" id="submit" value="Confirm"/>
        </form>

    </body>
</html>