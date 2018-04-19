<?php

require_once dirname(__FILE__) . "/../src/Mollie/API/Autoloader.php";

/*
 * Initialize the Mollie API library with your API key.
 *
 * See: https://www.mollie.com/dashboard/settings/profiles
 */
$mollie = new Mollie_API_Client;
$mollie->setApiKey("test_n763ESPFbVjM2k928DG7x3pqw9JKj9");
