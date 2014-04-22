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
require 'config.php';
require 'Utils.php';

Utils::requirePHPFilesOnce(CORE_DIR);
Utils::requirePHPFilesOnce(MODEL_DIR);
Utils::requirePHPFilesOnce(GATE_DIR);
Utils::requirePHPFilesOnce(CONTROLLER_DIR);