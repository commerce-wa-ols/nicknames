<?php

namespace CommerceWA\Nicknames;

use PHPUnit_Framework_TestCase;
use CommerceWA\Nicknames\Nicknames;

class ClassTest extends PHPUnit_Framework_TestCase
{

    /**
     * Verify basic behavior of getName().
     *
     * @test
     * @covers ::__construct
     * @covers ::getName
     * @uses \CommerceWA\Nicknames\Nicknames
     *
     * @return void
     */
    public function testJSONFile()
    {
        $json = json_decode(file_get_contents(realpath(__DIR__ . '/../src/names.json')), true);
        $this->assertTrue(json_last_error() === 0);
    }
    /**
     * Verify basic behavior of getName().
     *
     * @test
     * @covers ::__construct
     * @covers ::getName
     * @uses \CommerceWA\Nicknames\Nicknames
     *
     * @return void
     */

    public function testGetName()
    {
        $nicknames = new Nicknames();
        $result = $nicknames->givenTo("William");
        $this->assertContains('willie', $result);
    }
    // /**
    //  * Finds nicknames for a given name.
    //  *
    //  * @api
    //  * @param string $name Name used as key to find possible nicknames.
    //  * @return array Array of potential nicknames.
    //  */
    // public function givenTo($name)
    // {
    //     if (isset($this->names[strtolower($name)])) {
    //         return $this->names[strtolower($name)];
    //     }
    //     return false;
    // }
}
