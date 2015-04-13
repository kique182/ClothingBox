<?php /* @var $this Controller */ 
        Yii::app()->clientScript->registerCoreScript('jquery');
        Yii::app()->clientScript->registerCoreScript('jquery.ui');
        

//session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="es" />

	<!-- blueprint CSS framework -->

    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/Imagenes/carrito.png" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/Estilos/estilos.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/Estilos/usuarios_admin.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/Estilos/estilo_menu.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/Estilos/estilo_login.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/Estilos/estilo_registro.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/css/style.css" />
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/js/modernizr.custom.63321.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
    <header>
        <div class="logo">
            <a href="index"><?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/Imagenes/logo2.png');?>
            <p><?php echo CHtml::encode(Yii::app()->name); ?></p></a>
        </div>
        <div class="carrito">
            <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/Imagenes/carrito.png');?>
            <div class="cantidad">
                <?php 
                    $canti = Yii::app()->db->createCommand()->select('*')->from('Facturas')->where('Usuarios_username=:username', array(':username'=>Yii::app()->user->id))->queryAll();
                    $cantidad = count($canti);
                    echo $cantidad;
                ?>
            </div>
            <div class="botoncito">
                <?php 
                    if($cantidad == 0)
                        echo CHtml::link(CHtml::encode('Pagar'), array('clientes/factura'), array('class'=>'boton_peque', 'onclick'=>'return false'));
                    else
                        echo CHtml::link(CHtml::encode('Pagar'), array('clientes/factura'), array('class'=>'boton_peque'));
                ?>
            </div>
        </div>
        <div id="menu">
        <?php $this->widget('zii.widgets.CMenu',array(
                'items'=>array(
                        array('label'=>'Inicio', 'url'=>array('clientes/index')),
                        array('label'=>'Productos', 'url'=>array('clientes/productos', 'tipo'=>'0'),
                            'items' => array(
                            array('label' => 'Mujer', 'url' => array('clientes/productos', 'tipo'=>'1')),
                            array('label' => 'Hombre', 'url' => array('clientes/productos', 'tipo'=>'2')))),
                        array('label'=>'Contácto', 'url'=>array('#')),
                        array('label'=>Yii::app()->user->name, 'url'=>array('#'), 
                            'items' => array(
                            array('label' => 'Perfil', 'url' => array('perfil')),
                            array('label' => 'Pedidos', 'url' => array('#')),
                            array('label' => 'Reclamos', 'url' => array('#')),
                            array('label' => 'Salir', 'url'=>array('/site/logout'))),'visible'=>!Yii::app()->user->isGuest)
                ),
        )); ?>
        </div><!-- mainmenu -->
        <?php if(isset($this->breadcrumbs)):?>
            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links'=>$this->breadcrumbs,
            )); ?><!-- breadcrumbs -->
        <?php endif?>
    </header><!-- header -->
    <div class="contenido_afuera">
        <?php echo $content; ?>
    </div>
    <div class="clear"></div>

    <div id="footer">
            Copyright &copy; <?php echo date('Y'); ?> por Clothing Box.<br/>
            Todos los Derechos Reservados.<br/>
            <?php echo Yii::powered(); ?>
    </div><!-- footer -->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/jcart/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/js/modernizr.custom.63321.js"></script>
</body>
</html>
