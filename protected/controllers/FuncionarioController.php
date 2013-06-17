<?php
class FuncionarioController extends Controller{


	public function actionIndex(){
			$funcionario=Funcionario::model()->findAll();
			$this->render('index',array('funcionario'=>$funcionario));
	}
	public function actionView($nu_funcionario){
		$model = Funcionario::model()->findByPk($nu_funcionario);
		$this->render('view',array('model'=>$model));

	}
	public function actionEdit($nu_funcionario){
		$model=Funcionario::model()->findByPk($nu_funcionario);
		
		if(isset($_POST['Funcionario'])){  //validamos si trae algun valor en el formulario
		
		$model->attributes=$_POST['Funcionario'];//se asignan los valores del formulario a la 
		
		if($model->save()) //est es como hacer un update funcionario WUHERE nu_funcionario = el numero 
			$this->redirect(array('view','nu_funcionario'=>$model->nu_funcionario)); //esto es como hacer header

		}
		$this->render('edit',array('model'=>$model));
	}
}

?>