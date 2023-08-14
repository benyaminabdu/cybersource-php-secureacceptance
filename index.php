<?php 

    require('Cybersource.php');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cybersouce - PHP Secure Acceptance Starter Code</title>
    </head>
    <body>
        
        <h2>Cybersource - Secure Acceptance</h2>

        <form method="post" action="redirect.php">

            <br />
            <br />

            <h3>Transaction Data</h3>

            Transaction Type - <input type="text" name="transaction_type" value="sale"> (Either Sale or Authorization)

            <br /><br />
            Reference Number - <input type="text" name="reference_number" value="<?php echo bin2hex(openssl_random_pseudo_bytes(24)) ?>"> (You can Generate Your own)

            <br /><br />
            Amount - <input type="text" name="amount" value="100">

            <br /><br />
            Currency - <input type="text" name="currency" value="USD">

            <br />
            <br />
            <br />
            <br />

            <h3>Additional Data</h3>

            Profile ID - <input type="text" name="profile_id" value="<?php echo PROFILE_ID; ?>">
            <br /><br />
            Access Key - <input type="text" name="access_key" value="<?php echo ACCESS_KEY; ?>">
            <br /><br />
            Transaction UUID - <input type="text" name="transaction_uuid" value="<?php echo uniqid() ?>">
            <br /><br />
            Signed Field Names - <input type="text" name="signed_field_names" value="access_key,profile_id,transaction_uuid,signed_field_names,unsigned_field_names,signed_date_time,locale,transaction_type,reference_number,amount,currency"> (Other fields are added after form request)
            <br /><br />
            <input type="hidden" name="unsigned_field_names">
            Date and Time - <input type="text" name="signed_date_time" value="<?php echo gmdate("Y-m-d\TH:i:s\Z"); ?>">
            <br /><br />
            Locale - <input type="text" name="locale" value="en">



            <br />
            <br />
            <br />
            <br />

            <input type="submit" name="submit" value="Submit"/>

        </form>

    </body>
</html>