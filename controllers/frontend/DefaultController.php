<?php
namespace kouosl\Urun\controllers\frontend;
use kouosl\Urun\models\Stock;
/**
 * Default controller for the `Urun` module
 */
class DefaultController extends \kouosl\base\controllers\frontend\BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
    return $this->render('_index');
   
    }
	  public function actionDeneme()
    {
        return $this->render('deneme');
    }
	  public function actionDene()
    {
        return $this->render('dene');
    }
	 public function actionCreate()
    {
        return $this->render('create');
    } 
    
    
    public function actionStock() {     
      $stock=Stock::find()->all();
      foreach($stock as $key){
          echo $key->ID;
      }
    }
	
}