<?php

class SiteController extends Controller
{

	public $layout='//layouts/main';
	/**
	 * Declares class-based actions.
	 */


	public function filters()
	{
		return array('accessControl',);
	}

	public function accessRules()
	{
		
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('create'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','view','update','admin', 'delete'),
				'users'=>array('@'),
			),
			/*array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),*/
			
			array('deny',  // deny all users
				'actions'=>array('index'),
				'roles'=>array('Administrador'),
			),
		);
	}

	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'

               /* $auth = Yii::app()->authManager;
		$auth->createRole('Administrador','Rol de Administrador');
		$auth->assign('Administrador','javio');

		$auth->createRole('Usuario', 'Rol de Usuario');
		$auth->assign('Usuario','fernando');*/
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
			{
				//$model1 = Yii::app()->db->createCommand('select id from usuarios where username = "'.Yii::app()->user->id.'"')->queryScalar();
				if(Yii::app()->authManager->checkAccess('Administrador',Yii::app()->user->id))
				{
					$this->redirect(Yii::app()->user->returnUrl.'/administrador/index');
				}
				else if(Yii::app()->authManager->checkAccess('Cliente',Yii::app()->user->id))
				{
					$this->redirect(Yii::app()->user->returnUrl.'/cliente/index');
				}
				else if(Yii::app()->authManager->checkAccess('Usuario',Yii::app()->user->id))
				{
					$this->redirect(Yii::app()->user->returnUrl.'/usuarios/index');
				}
			}
			Yii::app()->user->setFlash('error', 'Usuario o Password Incorrecto.!!');	
				//
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
        
        
    public function actionRegistro()
	{
        $model = new Usuarios;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Usuarios']))
		{
			$model->attributes=$_POST['Usuarios'];
			$var1 = $model->password;
			$var2 = $model->repetirpassword;
			if($model->password != '' && $model->repetirpassword != '')
			{
				$model->password = md5($model->password);
				$model->repetirpassword = md5($model->repetirpassword);
			}
			$model->Estado_idestado = 1;
			$model->Rol_idrol = 2;
			$model->fecha_registro = new CDbExpression('NOW()');
			if($model->Sexo_idsexo == 1)
				$model->foto = "silueta.png";
			else
				$model->foto = "silueta.jpg";
			if($model->save())
			{
				$auth = Yii::app()->authManager;
				$auth->assign('Cliente',$model->username);
				Yii::app()->user->setFlash('success', 'Usuario Creado Satisfactoriamente.');
				$this->redirect(array('login'));
			}
			$model->password = $var1;
			$model->repetirpassword = $var2;
			Yii::app()->user->setFlash('error', CHtml::errorSummary($model));	
		}

		$this->render('registro',array(
			'model'=>$model,
		));
	}

	public function actionPerfil()
	{
		$this->render('perfil');
	}

	public function actionProductos()
	{
		$dataProvider = new CActiveDataProvider('Productos');
		$this->render('productos',array(
			'dataProvider'=>$dataProvider,
		));
	}
}