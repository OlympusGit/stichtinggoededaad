<?php

require_once dirname(__FILE__) . "/../src/Mollie/API/Autoloader.php";

/*
 * Initialize the Mollie API library with your API key.
 *
 * See: https://www.mollie.com/dashboard/settings/profiles
 */
$mollie = new Mollie_API_Client;
$mollie->setApiKey("live_mFvTqysR9H8FAAczv7UpzrU8JB6r8b");
