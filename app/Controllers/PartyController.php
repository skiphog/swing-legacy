<?php

namespace Swing\Controllers;

use Swing\System\Controller;

/**
 * Class PartyController
 *
 * @package Swing\Controllers
 */
class PartyController extends Controller
{
    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->view('party/all');
    }
}
