<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BackendController extends Controller
{
    protected $limit = 25;

    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function notif($level, $message, $icon = 'info-circle')
    {

        return   Session::flash('flash_notification', [
            'level'   => $level,
            'message' => $message,
            'icon'    => $icon
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
