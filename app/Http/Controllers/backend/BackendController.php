<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class BackendController extends Controller
{
    protected $limit = 25;

    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function notif($level, $message)
    {

        return   Session::flash('flash_notification', [
            'level'   => $level,
            'message' => $message,
        ]);
    }

    protected function bcrum($current, $urlSecond = null, $nameSecond = null)
    {
        return [
            'url-first' => route('home'),
            'name-first' => 'Home',
            'url-second' => $urlSecond,
            'name-second' => $nameSecond,
            'current' => $current
        ];
    }
}
