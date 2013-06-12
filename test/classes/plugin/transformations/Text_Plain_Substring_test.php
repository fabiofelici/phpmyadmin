<?php
/**
 * Tests for Text_Plain_Substring class
 *
 * @package PhpMyAdmin-test
 */

/*
 * Include to test.
 */

/* Each PluginObserver instance contains a PluginManager instance */
require_once 'libraries/plugins/PluginManager.class.php';
require_once 'libraries/plugins/transformations/Text_Plain_Substring.class.php';

/**
 * Tests for Text_Plain_Substring class
 *
 * @package PhpMyAdmin-test
 */
class Text_Plain_Substring_Test extends PHPUnit_Framework_TestCase
{
    /**
     * @access protected
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     *
     * @access protected
     * @return void
     */
    protected function setUp()
    {
        $this->object = new Text_Plain_Substring(new PluginManager()); 
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     *
     * @access protected
     * @return void
     */
    protected function tearDown()
    {
        unset($this->object);
    }

    /**
     * Test for getName
     *
     * @return void
     *
     * @group medium
     */
    public function testGetName()
    {       
        $this->assertEquals(
            "Substring",
            Text_Plain_Substring::getName()
        );    
    }

    /**
     * Test for getMIMEType
     *
     * @return void
     *
     * @group medium
     */
    public function testGetMIMEType()
    {       
        $this->assertEquals(
            "Text",
            Text_Plain_Substring::getMIMEType()
        );    
    }

    /**
     * Test for getMIMESubtype
     *
     * @return void
     *
     * @group medium
     */
    public function testGetMIMESubtype()
    {       
        $this->assertEquals(
            "Plain",
            Text_Plain_Substring::getMIMESubtype()
        );    
    }

    /**
     * Test for applyTransformation
     *
     * @return void
     *
     * @group medium
     */
    public function testApplyTransformation()
    {
        $buffer = "PMA_BUFFER";
        $this->assertEquals(
            "PMA_BUFFER",
            $this->object->applyTransformation($buffer)
        );    
    }
}
