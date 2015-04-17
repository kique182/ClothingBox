<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class EncargadoController extends Controller
{
    public $layout='//layouts/layou_encar';

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
				'roles'=>array('Usuario'),
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
    
    public function actionPedidos()
    {
        $model=Pedido::model()->findAll();
        $this->render('pedidos',array('data'=>$model,));
    }

    public function actionDetalle_pedido($id)
    {
    	$model_p=Pedido::model()->findByPk($id);
        $model=ProductoPedido::model()->findAll('Pedido_idpedido='.$id);
        $this->render('detalle_pedido',array('data'=>$model, 'model'=>$model_p));
    }

    public function actionGuardar()
    {	
    	$model = new Pedido;

		$model->attributes=$_POST['Pedido'];
    	$sql = 'UPDATE Pedido SET status = '.$model->status.' WHERE idpedido = '.$model->idpedido;
		$comando = Yii::app() -> db -> createCommand($sql);
		$comando -> execute();
        Yii::app()->user->setFlash('success', 'El Status ha sido cambiado exitosamente.');
		$model=Pedido::model()->findAll();
        $this->render('pedidos',array('data'=>$model,));		
    }

    public function actionMas_vendido()
    {
        $sql = 'SELECT Producto_idproducto, COUNT(Producto_idproducto) AS total FROM Producto_Pedido GROUP BY Producto_idproducto ORDER BY total DESC LIMIT 1';
        $comando = Yii::app() -> db -> createCommand($sql);
        $comando -> execute();
        $id = $comando -> queryScalar();

        $this->render('mas_vendido',array('data'=>$this->loadModelProducto($id),
        ));
    }

    public function loadModelProducto($id)
    {
        $model=Productos::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.'.$id);
        return $model;
    }
}
