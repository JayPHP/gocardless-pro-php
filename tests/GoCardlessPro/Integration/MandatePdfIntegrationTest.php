<?php
//
// WARNING: Do not edit by hand, this file was generated by Crank:
// https://github.com/gocardless/crank
//

namespace GoCardlessPro\Integration;

class MandatePdfsTest extends IntegrationTestBase
{
    public function setUp()
    {
        $this->clientAndFixtureSetup('mandate_pdfs');
    }

    public function testResourceExists()
    {
        $obj = new \GoCardlessPro\Resources\MandatePdf(null);
        $this->assertNotNull($obj);
    }
}