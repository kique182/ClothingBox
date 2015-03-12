<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class ClientesController extends Controller
{
    public $layout='//layouts/layou_clien';

    public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	public function accessRules()
	{
	    return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'roles'=>array('Cliente'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
    }
    public function actionIndex()
    {
            $this->render('index');
    }
    
    public function actionPerfil()
    {
    	$this->render('perfil',array('data'=>$this->loadModelCliente(Yii::app()->user->id),));
    }
    
    public function actionProductos()
    {
    	$dataProvider = new CActiveDataProvider('Productos');
		$this->render('productos',array(
			'dataProvider'=>$dataProvider,
		));
    }

    public function actionDetalle_producto($id)
    {
    	$dataProvider = new CActiveDataProvider('Productos');
    	$this->render('detalle_producto',array('data'=>$this->loadModel($id),'dataProvider'=>$dataProvider,));
    }

    public function loadModel($id)
	{
		$model=Productos::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function loadModelCliente($id)
	{
		$model=Usuarios::model()->find('username="'.$id.'"');
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
    
    public function actionUpdate_perfil()
    {
    	$model=$this->loadModelCliente(Yii::app()->user->id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Usuarios']))
		{
			$model->attributes=$_POST['Usuarios'];
			$model->repetirpassword = $model->password;
			if($model->save())
			{
				Yii::app()->user->setFlash('success', 'El Usuario ha sido modificado satisfactoriamente..!!');
				$this->redirect(array('update_perfil', 'id'=>$model->idusuario));
			}
			Yii::app()->user->setFlash('error', 'Se ha producido un Error.!!');
		}

		$this->render('update_perfil',array(
			'model'=>$model,
		));
    }

    public function actionProductos_hombre()
    {
    	$model=Productos::model()->find('Categoria_idcategoria=2');
    	$this->render('productos_hombre',array('data'=>$model));
    }

    public function actionProductos_mujer()
    {
    	$model=Productos::model()->find('Categoria_idcategoria=1');
    	$this->render('productos_mujer',array('data'=>$model));
    }
}