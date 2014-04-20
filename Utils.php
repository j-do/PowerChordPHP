<?php if ( ! defined('THISBESTBEDEFINED')) exit('No direct script access allowed');

/*
 * Copyright 2014 Jason "J-Do" Hittle .
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Utility class chock full of random utility static method goodess that keeps me
 * DRY
 * @author Jason "J-Do" Hittle 
 */
class Utils
{

    /**
     * Method returns true is $filename ends in '.php' false otherwise
     * @param string $filename
     * @return boolean
     */
    static function isPHPFile($filename)
    {
        if (substr($filename, -4) == '.php') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Returns true if $filename is not '.' or '..' false otherwise
     * @param string $filename
     * @return boolean
     */
    static function isRealFileOrDir($filename)
    {
        $bs_names = array('.', '..');
        if (!in_array($filename, $bs_names)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Calls require_once on all the files in $directory that end in '.php'
     * @param string $directory path to directory (must end in a directory separator)
     */
    static function requirePHPFilesOnce($directory)
    {
        foreach (scandir($directory) as $file) {
            if (self::isRealFileOrDir($file) and self::isPHPFile($file)) {
                require_once $directory . $file;
            }
        }
    }

    /**
     * When you're just too damn Rock n Roll for a unit testing framework just like PHP
     * @param object $object
     */
    static function varDumpAndDie($object)
    {
        var_dump($object);
        die();
    }

    /**
     * Treat the array like a deck of cards cut it right before the card you want
     * on top, and then stick the rest underneath. Linked List? Pssssshhhh...that's right
     * ...PHP just gave you four flat tires, strictly typed languages.
     * @param string $card
     * @param array $stack
     * @return array
     */
    static function pushToTop($card, $deck)
    {
        if ($card == $deck[0]) {
            return $deck;
        } else {
            $chunkB = array_slice($deck, 0, array_search($card, $deck));
            $chunkA = array_diff($deck, $chunkB);
            return array_merge($chunkA, $chunkB);
        }
    }

    /**
     * Gets that one column for you that you want out of your PDO result sets
     * @param array $results
     * @param string $column the key of the column
     */
    static function columnToArray($results, $column)
    {
        $oneDArray = array();
        foreach ($results as $r) {
            $oneDArray[] = $r[$column];
        }
        return $oneDArray;
    }

}