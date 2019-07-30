<?php

namespace App\Controllers\Website\Common;

use System\Controller as Controller;
use System\View\ViewInterface as ViewInterface;

class LayoutController extends Controller
{
    public function render($file, $context)
    {
        $data['content'] = $this->view->render($file, $context);
        $data['header'] = $this->load->controller('Website/Common/Header')->index();
        $data['footer'] = $this->load->controller('Website/Common/Footer')->index();
      
        return $this->view->render('common/layout', $data);
    }
}