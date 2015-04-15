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
    
    public function actionProductos($tipo)
    {
    	if($tipo == 0)
    	{
	    	$dataProvider = new CActiveDataProvider('Productos');
			$this->render('productos',array('dataProvider'=>$dataProvider));
		}
		else if($tipo == 1)
		{
			$model=Productos::model()->findAll('Categoria_idcategoria=1');
    		$this->render('productos_mujer',array('data'=>$model,'tipo'=>$tipo));
		}
		else if($tipo == 2)
		{
			$model=Productos::model()->findAll('Categoria_idcategoria=2');
    		$this->render('productos_hombre',array('data'=>$model,'tipo'=>$tipo));
		}
    }

    public function actionDetalle_producto($id, $tipo)
    {
    	$model_facturas=new Facturas;

		if(isset($_POST['Facturas']))
		{
			$model_facturas->attributes=$_POST['Facturas'];
			if($model_facturas->save())
			{
				if($tipo == 0)
		    	{
			    	$dataProvider = new CActiveDataProvider('Productos');
					$this->render('productos',array('dataProvider'=>$dataProvider));
				}
				else if($tipo == 1)
				{
					$model=Productos::model()->findAll('Categoria_idcategoria=1');
		    		$this->render('productos_mujer',array('data'=>$model,'tipo'=>$tipo));
				}
				else if($tipo == 2)
				{
					$model=Productos::model()->findAll('Categoria_idcategoria=2');
		    		$this->render('productos_hombre',array('data'=>$model,'tipo'=>$tipo));
				}
		    }
		    Yii::app()->user->setFlash('error', 'Debe ingresar un valor en Cantidad');
		}

    	if($tipo==0)
    	{
    		$model=Productos::model()->findAll();
    		$this->render('detalle_producto',array('data'=>$this->loadModel($id),'dataProvider'=>$model,'tipo'=>$tipo, 'model_factura'=>$model_facturas));
    	}
    	else
    	{
    		$model=Productos::model()->findAll('Categoria_idcategoria='.$tipo);
    		$this->render('detalle_producto',array('data'=>$this->loadModel($id),'dataProvider'=>$model,'tipo'=>$tipo, 'model_factura'=>$model_facturas));
    	}
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

    public function actionFactura()
    {
    	$model=Facturas::model()->findAll('Usuarios_username="'.Yii::app()->user->id.'"');
    	$this->render('factura',array('data'=>$model,));
    }

    public function actionDelete($id)
	{
		$this->loadModelFactura($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		$model=Facturas::model()->findAll('Usuarios_username="'.Yii::app()->user->id.'"');
		if($model == null)
			$this->render('index');
		else
			$this->render('factura',array('data'=>$model,));
	}

	public function loadModelFactura($id)
	{
		$model=Facturas::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function actionVaciar()
	{
		$sql = 'DELETE FROM Facturas WHERE Usuarios_username="'.Yii::app()->user->id.'"';
		$comando = Yii::app() -> db -> createCommand($sql);
		$comando -> execute();
		$this->render('index');
	}

	public function actionSeleccionar_metodos()
	{
		$model = new Pedido;

		if(isset($_POST['Pedido']))
		{
			$model->attributes=$_POST['Pedido'];
			$model->status = 'en espera';
			$model->Usuario_idusuario = $this->cargarId();
			$model->cantidad = $_SESSION['Cantidad_Productos'];
			$model->fecha = new CDbExpression('NOW()');
			if($model->save())
			{
				
				//Guardar en la tabla ProductoPedido//
				$consulta=Facturas::model()->findAll('Usuarios_username="'.Yii::app()->user->id.'"');
				foreach ($consulta as $value)
				{
					$model_pp = new ProductoPedido;
					$model_pp->Precio_Compra = $this->cargarPrecio($value->Productos_id_producto);
					$model_pp->Pedido_idpedido = $model->idpedido;
					$model_pp->Producto_idproducto = $value->Productos_id_producto;
					$model_pp->cantidad_producto = $value->cantidad;
					if($model_pp->save())
					{
						Yii::app()->user->setFlash('success', 'Pedido Realizado con Exito.');
					}
				}
				$this->actionVaciar();
			}
			Yii::app()->user->setFlash('error', CHtml::errorSummary($model));	
		}

		$this->render('seleccionar_metodos', array('model'=>$model));
	}

	public function cargarId()
	{
		$sql = 'Select idusuario FROM Usuarios WHERE username="'.Yii::app()->user->id.'"';
		$comando = Yii::app() -> db;
		$comand = $comando -> createCommand($sql);
		$dataReader = $comand->queryScalar();
		return $dataReader;

	}

	public function cargarPrecio($id)
	{
		$sql = 'Select precio FROM Productos WHERE idproducto='.$id;
		$comando = Yii::app() -> db;
		$comand = $comando -> createCommand($sql);
		$dataReader = $comand->queryScalar();
		return $dataReader;
	}

	public function actionPedidos()
	{
		$idusuario = $this->cargarId();
		$model=Pedido::model()->findAll('Usuario_idusuario='.$idusuario);
    	$this->render('pedidos',array('data'=>$model,));
	}

	public function actionDetalle_pedido($id)
	{
		$model=ProductoPedido::model()->findAll('Pedido_idpedido='.$id);
		$this->render('detalle_pedido',array('data'=>$model,));
	}
}
