<?php

namespace Spatie\Skeleton\Test;

use Spatie\OrElse\Test\TestClass;


class OrElseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var TestClass
     */
    protected $testClass;

    public function setUp()
    {
        $this->testClass = new TestClass();
    }

    /**
     * @test
     */
    public function it_will_return_the_value_if_the_original_method_returns_a_value()
    {
        $this->assertEquals('value', $this->testClass->willReturnOrElse('value', 'otherValue'));
    }

    /**
     * @test
     */
    public function it_will_return_the_other_value_if_the_original_method_returns_null()
    {
        $this->assertEquals('otherValue', $this->testClass->willReturnOrElse(null, 'otherValue'));
    }

    /**
     * @test
     */
    public function it_will_return_the_result_of_the_closure_if_the_original_method_returns_null()
    {
        $this->assertEquals('closureValue', $this->testClass->willReturnOrElse(null, function() { return 'closureValue'; }));
    }

    /**
     * @test
     */
    public function it_can_handle_functions_with_multiple_arguments()
    {
        $this->assertEquals('value1value2value3', $this->testClass->willReturnOrElse('value1', 'value2', 'value3', 'otherValue'));
    }
}
