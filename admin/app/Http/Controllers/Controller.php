<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    private array $variables = [];

    public function with($key, $value)
    {
        $this->variables[$key] = $value;
    }

    public function view($view)
    {
        $config = Config::firstOrCreate();
        $this->with('config', $config);
        return view($view)->with($this->variables);
    }
}
