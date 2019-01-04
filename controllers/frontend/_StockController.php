<?php

namespace kouosl\Urun\controllers\frontend;

class _StockController extends \BaseController
{
     /**
     * Renders the index view for the module
     * @return string
     */
    public function actionDene()
    {
        return $this->render('dene');
    }
    public function actionYeni()
    {
       echo"aasdasd";
    }
}