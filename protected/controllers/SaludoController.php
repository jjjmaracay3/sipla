<?php
class SaludoController extends Controller{

	public function actionIndex(){
		$saludo = 'hola como estas?';
		$this->render('index',array('saludo'=>$saludo));
	}
}
?>