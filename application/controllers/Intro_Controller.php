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
        $this->vars['jumbotron']['heading'] = "PowerChordPHP";
        $this->vars['jumbotron']['tagline'] = "...for coders who just wanna plug in and rock.";
        $this->vars['jumbotron']['imageUrl'] = './img/powerChordLogoSqr.svg';
        $this->vars['jumbotron']['downloadLink'] = 'https://github.com/j-do/PowerChordPHP/archive/master.zip';
        $this->addView('jumbotron');
        
        $intro = new Intro_Model();
        $this->vars['marketingJibbaJabba'] = $intro->getMarketingJibbaJabba();
        $this->addView('marketingJibbaJabba');
    }

}
