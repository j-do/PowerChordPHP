<?php if ( ! defined('THISBESTBEDEFINED')) exit('No direct script access allowed');

/* 
 * The MIT License
 *
 * Copyright 2014 Jason "J-Do" Hittle .
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

/**
 * This is the base Controller class all controllers will inherit from. 
 * Making it an abstract class ensures that it cannot be instantiated on it's own.
 * @author Jason Hittle
 */
abstract class Controller
{

    /**
     * This one dimensional array will hold all the views the child controller 
     * class will send the page at load time.
     * @access public
     * @var array
     */
    private $views = array();

    /**
     * This multidimensional array will hold all the content that will be used by
     * the view templates.
     * @access protected
     * @var array
     */
    protected $vars = array();

    /**
     * The constructor will check to see which child of the child controller class
     * methods will be called then shows the views added be the child class
     */
    public function __construct()
    {
        //This bit uses the ?action=methodName format so that the user has them
        //some working bookmarks
        if (isset($_GET['action']) and ! is_numeric($_GET['action'])) {
            $this->$_GET['action']();
        } else {
            //if there isn't a $_GET['action'] we just call the child's index() method
            $this->index();
        }
        $this->showViews();
    }

    /**
     * This bit forces extending classes to define an index() method
     */
    abstract protected function index();

    /**
     * This is just a setter for the $vars property
     * @param string $var_name
     * @param mixed $var
     */
    protected function setVar($var_name, $var)
    {
        $this->vars[$var_name] = $var;
    }

    /**
     * This adds a view to the $viewsfield
     * @param string $view
     */
    protected function addView($view)
    {
        $this->views[] = $view;
    }

    /**
     * This method loops through the $views property and requires them on the
     * page.
     * error message if it there is a mistake in the child controller.
     */
    private function showViews()
    {
        foreach ($this->views as $view) {
            include VIEW_DIR . $view . '.php';
        }
    }

}
