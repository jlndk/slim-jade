<?php
/**
 * Slim Framework (http://slimframework.com)
 *
 * @link      https://github.com/codeguy/Slim
 * @copyright Copyright (c) 2011-2015 Josh Lockhart
 * @license   https://github.com/codeguy/Slim/blob/master/LICENSE (MIT License)
 */
namespace Jlndk\SlimJade\Tests;

use Jlndk\SlimJade\Jade;
use \Jade\Jade as Engine;
use \Slim\Slim;

require dirname(__DIR__) . '/vendor/autoload.php';

class JadeTest extends \PHPUnit_Framework_TestCase
{
    protected $app;
    /**
     * @var Jade
     */
    protected $view;

    public function setUp()
    {
        $this->app = new Slim([
            'view' => new Jade(),
            'templates.path' => dirname(__FILE__) . DIRECTORY_SEPARATOR .'templates'
        ]);
    }

    public function testFetch()
    {   
        $output = $this->app->view->fetch('example.jade', [
            'name' => 'Jeff'
        ]);

        $this->assertEquals(trim("<p>Hi, my name is Jeff.</p>\n"), trim($output));
    }
    
    public function testEngineInstance(){
        $this->assertInstanceOf('\\Jade\\Jade', $this->app->view->getInstance());
    }
}