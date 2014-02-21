<?php

use JasonLewis\EnhancedRouter\Router;
use Symfony\Component\HttpFoundation\Request;

class RoutingTest extends PHPUnit_Framework_TestCase {


	public function testNestedGroupsInheritAttributes()
	{
		$router = new Router;
		$router->group(array('before' => 'foo'), function() use ($router)
		{
			$router->get('first', function() {});

			$router->group(array('before' => 'bar'), function() use ($router)
			{
				$router->get('second', function() {});

				$router->group(array('before' => 'baz'), function() use ($router)
				{
					$router->get('third', function() {});
				});
			});
		});
		$routes = array_values($router->getRoutes()->getIterator()->getArrayCopy());

		$this->assertEquals(array('foo'), $routes[0]->getOption('_before'));
		$this->assertEquals(array('foo', 'bar'), $routes[1]->getOption('_before'));
		$this->assertEquals(array('foo', 'bar', 'baz'), $routes[2]->getOption('_before'));
	}


	public function testFiltersAreAppliedToGroups()
	{
		$router = new Router;
		$router->group(array('prefix' => 'foo'), function() use ($router)
		{
			$router->get('bar', function() {});
		})->before('qux');
		$routes = array_values($router->getRoutes()->getIterator()->getArrayCopy());

		$this->assertEquals(array('qux'), $routes[0]->getOption('_before'));
	}


	public function testOuterFiltersOnGroupsAreAppliedFirst()
	{
		$router = new Router;
		$router->group(array('prefix' => 'foo'), function() use ($router)
		{
			$router->group(array('prefix' => 'bar'), function() use ($router)
			{
				$router->get('qux', function() {});
			})->before('inner');
		})->before('outer');
		$routes = array_values($router->getRoutes()->getIterator()->getArrayCopy());

		$this->assertEquals(array('outer', 'inner'), $routes[0]->getOption('_before'));
	}


	public function testRequirementsAreSetOnGroups()
	{
		$router = new Router;
		$router->group(array('prefix' => '{foo}'), function() use ($router)
		{
			$router->get('qux', function() {});
		})->where('foo', 'bar');
		$routes = array_values($router->getRoutes()->getIterator()->getArrayCopy());

		$this->assertEquals('/{foo}/qux', $routes[0]->getPath());

		$compiled = $routes[0]->compile();

		$this->assertEquals('#^/(?P<foo>bar)/qux$#s', $compiled->getRegex());
	}


	public function testHostRequirementsAreSetOnGroups()
	{
		$router = new Router;
		$router->group(array('domain' => '{host}.test'), function() use ($router)
		{
			$router->get('foo', function() {});
		})->where('host', 'bar');
		$routes = array_values($router->getRoutes()->getIterator()->getArrayCopy());

		$this->assertEquals('bar', $routes[0]->getRequirement('host'));
	}


	public function testArrayOfRequirementsAreTransformedIntoRegex()
	{
		$router = new Router;
		$router->group(array('prefix' => '{foo}'), function() use ($router)
		{
			$router->get('qux', function() {});
		})->where('foo', array('bar', 'baz'));
		$routes = array_values($router->getRoutes()->getIterator()->getArrayCopy());

		$compiled = $routes[0]->compile();

		$this->assertEquals('#^/(?P<foo>(bar|baz))/qux$#s', $compiled->getRegex());
	}


	public function testFiltersAreSetOnSpecificHttpVerbs()
	{
		$router = new Router;
		$router->get('baz', function() { return 'qux'; });
		$router->filter('foo', function() { return 'bar'; });
		$router->on('get', 'foo');
		$this->assertEquals('bar', $router->dispatch(Request::create('/baz', 'GET'))->getContent());
	}


	public function testArrayOfVerbsWorkCorrectly()
	{
		$router = new Router;
		$router->get('baz', function() { return 'qux'; });
		$router->post('san', function() { return 'tan'; });
		$router->filter('foo', function() { return 'bar'; });
		$router->on(array('get', 'post'), 'foo');
		$this->assertEquals('bar', $router->dispatch(Request::create('/baz', 'GET'))->getContent());
		$this->assertEquals('bar', $router->dispatch(Request::create('/san', 'POST'))->getContent());
	}


	public function testOrderOfRoutesIsMaintainted()
	{
		$router = new Router;
		$router->group(array('prefix' => 'foo'), function() use ($router)
		{
			$router->get('bar', function() {});
		});
		$router->get('baz', function() {});
		$routes = array_keys($router->getRoutes()->all());

		$this->assertEquals(array('get foo/bar', 'get baz'), $routes);
	}


}