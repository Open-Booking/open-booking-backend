<?php

namespace App\Modules\MobileModule\Http\Controllers;

use App\Modules\MobileModule\Features\GetOptionFeature;
use App\Next\Core\Controller;

class OptionController extends Controller
{
    public function get($key)
    {
        return $this->serve(new GetOptionFeature($key));
    }
}
