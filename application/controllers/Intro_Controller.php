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
 * Extends Controller Class shows the home page
 *
 * @author Jason "J-Do" Hittle 
 */
class Intro_Controller extends Controller
{

    function index()
    {
        //The old MVC paradigm is still possible in PowerChordPHP
        $model = new Jumbotron_Model();
        $this->vars['jumbotron']['heading'] = $model->getHeading();
        $this->vars['jumbotron']['tagline'] = $model->getTagline();
        $this->vars['jumbotron']['imageUrl'] = $model->getImageUrl();
        $this->vars['jumbotron']['downloadLink'] = 'https://github.com/j-do/PowerChordPHP/archive/master.zip';
        $this->addView('jumbotron');
        
        //But you can enjoy the rapid and flexible development of the PowerChordPHP
        //way as well. Take a look at ../views/marketingJibbaJabba.php to see what I'm
        //talking about. . Data is available in any view at any time. Is it the most OOP
        //way to be? Psshhhh PowerChordPHP don't care.
    }

}
