<?php

namespace CommerceWA\Utilities\Nicknames\Tests;

use CommerceWA\Utilities\Nicknames;
use PHPUnit_Framework_TestCase;

class ClassTest extends PHPUnit_Framework_TestCase
{
    /**
     * Verify basic behavior of Nicknames::givenTo().
     *
     * @test
     * @covers ::givenTo
     * @uses \CommerceWA\Utilities\Nicknames
     *
     * @return void
     */
    public function testGivenToFunction()
    {
        $this->assertContains('willie', Nicknames::givenTo('William'));
    }

    /**
     * Verify basic behavior of Nicknames::find().
     *
     * @test
     * @covers ::find
     * @uses \CommerceWA\Utilities\Nicknames
     *
     * @return void
     */
    public function testFindFunction()
    {
        $this->assertContains(
          'william',
          Nicknames::find('Willie')
        );
    }
}
