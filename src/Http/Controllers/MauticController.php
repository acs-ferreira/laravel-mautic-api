<?php

namespace Princealikhan\Mautic\Http\Controllers;

use App\Http\Controllers\Controller;
use Princealikhan\Mautic\Models\MauticConsumer;
use Princealikhan\Mautic\Facades\Mautic;

class MauticController extends Controller
{

    /**
     * Setup Applicaion.
     */
    public function initiateApplication()
    {
        $consumer = MauticConsumer::count();

        if ($consumer == 0) {
            Mautic::connection('main');
        } else {
            echo '<h1>Mautic App Already Registered</h1>';
        }
    }

}
