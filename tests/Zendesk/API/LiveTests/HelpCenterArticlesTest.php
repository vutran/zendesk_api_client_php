<?php

namespace Zendesk\API\LiveTests;

use Zendesk\API\Client;

/**
 * Help Center Articles test class
 */
class HelpCenterArticlesTest extends BasicTest {

    public function testCredentials() {
        parent::credentialsTest();
    }

    public function testAuthToken() {
        parent::authTokenTest();
    }
}
