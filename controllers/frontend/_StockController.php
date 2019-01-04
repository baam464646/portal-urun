<?php
namespace kouosl\Urun\controllers\frontend;
/**
 * Default controller for the `Urun` module
 */
class StockController extends \kouosl\base\controllers\frontend\BaseController
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