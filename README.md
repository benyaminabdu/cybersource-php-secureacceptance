# cybersource-php-secureacceptance
Cybersource Secure Acceptance - PHP Starter Code 


## How to
You should first obtain the keys from the cybersource admin panel. You should have the following 3 keys, Profile ID, Access Key and Security Key.

After obtaining the keys, replace the constants on **Cybersoure.php** file, After filling up the keys you can start transactions.


## Fields Explained

**Transaction Type** - Sale or Authorization. Sale does Authorization and Capture simultaneously while Authorization does Authoriation only.

**Reference Number** - Unique Reference number for the Transaction. gets returned with the callback for matching.

**Amount** - Amount to be charged. 

**Currency** - 3 Digit code of the Currency (USD, GBP)

**Transaction UUID** - has to be unique everytime

**Date and Time** - Standard time formatted. Example  2023-08-14T12:31:47Z 

**Locale** - Language of the redirected Page.