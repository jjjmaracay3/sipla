<?php

class SolicitudController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','SelectD1','SelectD2'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model  = new Solicitud;
		$modelb = new DetalleSolicitud;//incorporamos los dos modelos a xx

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['DetalleSolicitud']))
		{
                    $model->nu_funcionario          = Yii::app()->user->nu_funcionario;
                    $model->nu_numero_departamento  = Yii::app()->user->nu_numero_departamento;
                    $model->al_estado_solicitud     = '1';
                    $model->fe_solicitud            = date("Y-m-d");

                    if ($model->save()){
                        $nu_solicitud = $model->ObtenerNumero();
                        $nu_solicitud = $nu_solicitud[0]['nu_solicitud'];//asignamos del arreglo, el pos "0" dentro de XX

                        $cant = $_POST['cant'];
			
			for ($i=1; $i<=$cant; $i++)
			{
				$nu_clasificacion_articulo  = $_POST['DetalleSolicitud']['nu_clasificacion_articulo-'.$i];
				$nu_tipo_articulo           = $_POST['DetalleSolicitud']['nu_tipo_articulo-'.$i];
				$nu_articulo                = $_POST['DetalleSolicitud']['nu_articulo-'.$i];
				$nu_cantidad_solicitada     = $_POST['DetalleSolicitud']['nu_cantidad_solicitada-'.$i];
				$al_justificacion           = $_POST['DetalleSolicitud']['al_justificacion-'.$i];
								
				$sql="INSERT INTO detalle_solicitud (nu_solicitud,nu_clasificacion_articulo,nu_tipo_articulo,nu_articulo,nu_cantidad_solicitada,al_justificacion) VALUES (".$nu_solicitud.",".$nu_clasificacion_articulo.",".$nu_tipo_articulo.",".$nu_articulo.",".$nu_cantidad_solicitada.",'".$al_justificacion."')";
				$sql=Yii::app()->db->createCommand($sql)->execute();
			}
                            
                        $this->redirect(array('view','id'=>$model->nu_solicitud));
                    }
		}

		$this->render('create',array(
			'model'=>$model,'modelb'=>$modelb,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=new Solicitud;
		$modelb=new DetalleSolicitud;//incorporamos los dos modelos a xx
		$model=$this->loadModel($id);



			// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Solicitud'],$_POST['DetalleSolicitud']))
			{
				$modelb->attributes=$_POST['DetalleSolicitud'];
				$modelb->setIsNewRecord(false);
				$modelb->scenario='update';
				$modelb->nu_solicitud=$model->nu_solicitud;
				$modelb->save($modelb,'update');

				/*
				$model->attributes=$_POST['Solicitud'];
				$modelb->attributes=$_POST['DetalleSolicitud'];
				$modelb->nu_solicitud=$model->nu_solicitud;
				$modelb->setIsNewRecord(false);

				if($model->save() && $modelb->update())
						$this->redirect(array('view','id'=>$model->nu_solicitud));*/
		}

		$this->render('update',array('model'=>$model,'modelb'=>$modelb,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Solicitud');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Solicitud('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Solicitud']))
			$model->attributes=$_GET['Solicitud'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Solicitud the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Solicitud::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Solicitud $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='solicitud-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

        public function actionSelectD1(){

            $SQL="SELECT * FROM tipo_articulo WHERE nu_clasificacion_articulo = '".$_GET['opcion']."' ORDER BY al_nombre_tipo";
            $SQL=Yii::app()->db->createCommand($SQL)->queryAll();
            $cant = count($SQL);

            $idSelectDestino = $_GET['idSelectDestino'];

            $nrovar = explode("-", $idSelectDestino);

            $nombrevar = explode("DetalleSolicitud_", $idSelectDestino);
            $nombrevar = "DetalleSolicitud[".$nombrevar[1]."]";

            $sel = '<select name="'.$nombrevar.'" id="'.$idSelectDestino.'" onChange="cargaContenido(2,this.id,';
            $sel.= "'DetalleSolicitud_nu_articulo-".$nrovar[1]."'";
            $sel.= ')">';

            echo $sel;
            echo "<option value=''>[ Seleccione ]</option>";
            for ($k=0; $k<$cant; $k++){
                $des = $SQL[$k]["al_nombre_tipo"];
                $value = $SQL[$k]["nu_tipo_articulo"];
                echo "<option value=".$value.">".$des."</option>";
            }
            echo "</select>";
        }

        public function actionSelectD2(){

            $SQL="SELECT * FROM articulo_tecnologico WHERE nu_tipo_articulo = '".$_GET['opcion']."' ORDER BY al_nombre_articulo";
            $SQL=Yii::app()->db->createCommand($SQL)->queryAll();
            $cant = count($SQL);

            $idSelectDestino = $_GET['idSelectDestino'];

            $nombrevar = explode("DetalleSolicitud_", $idSelectDestino);
            $nombrevar = "DetalleSolicitud[".$nombrevar[1]."]";

            echo '<select name="'.$nombrevar.'" id="'.$idSelectDestino.'">';
            echo "<option value=''>[ Seleccione ]</option>";
            for ($k=0; $k<$cant; $k++){
                $des = $SQL[$k]["al_nombre_articulo"];
                $value = $SQL[$k]["nu_articulo"];
                echo "<option value=".$value.">".$des."</option>";
            }
            echo "</select>";
        }        
}
