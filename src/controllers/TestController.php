<?php

namespace Plugins\Content\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CoreController;
use App\Http\Controllers\PluginCoreController;

class TestController extends PluginCoreController
{
    public $pluginName = 'haos_content';
    
    public function index()
    {
        return view('index');
    }
}
