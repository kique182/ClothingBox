<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="es" />

    <link rel="icon" type="image/png" href="/images/Imagenes/icono.png" />
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/Estilos/estilos.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/Estilos/estilo_menu.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/Estilos/usuarios_admin.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/Estilos/estilo_registro.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
    <header>
        <div class="logo">
            <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/Imagenes/logo2.png');?>
            <p><?php echo CHtml::encode(Yii::app()->name); ?></p>
        </div>
        <div id="menu">
        <?php $this->widget('zii.widgets.CMenu',array(
                'items'=>array(
                        array('label'=>'Inicio', 'url'=>array('/administrador/index')),
                        array('label'=>'Pagos y Envios', 'url'=>array('#'),
                            'items' => array(
                            array('label' => 'Metodos de Pago', 'url' => '#'),
                            array('label' => 'Metodos de Envio', 'url' => '#'))),
                        array('label'=>'Productos', 'url'=>array('#'),
                            'items' => array(
                            array('label' => 'Mujer', 'url' => '#'),
                            array('label' => 'Hombre', 'url' => '#'),
                            array('label' => 'Administrar Productos', 'url' => array('/productos/index')))),
                        array('label'=>'Usuarios', 'url'=>array('/usuarios/index'),
                            'items' => array(
                            array('label' => 'Crear Usuario', 'url' => array('/usuarios/create')),
                            array('label' => 'Listar Usuarios', 'url' => array('/usuarios/index')))),	
                        array('label'=>'Salir', 'url'=>array('/site/logout'),  'visible'=>!Yii::app()->user->isGuest)
                ),
        )); ?>
        </div><!-- mainmenu -->
        <?php if(isset($this->breadcrumbs)):?>
            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links'=>$this->breadcrumbs,
            )); ?><!-- breadcrumbs -->
        <?php endif?>
        </header><!-- header -->
    <?php echo $content; ?>
    
    <div class="clear"></div>

    <div id="footer">
            Copyright &copy; <?php echo date('Y'); ?> por Clothing Box.<br/>
            Todos los Derechos Reservados.<br/>
            <?php echo Yii::powered(); ?>
    </div><!-- footer -->

</body>
</html>

<?php
    Yii::app()->clientScript->registerScript(
        'myHideEffect',
        '$("info").animate({opacity: 1.0}, 10000).slideUp("slow");',
        CClientScript::POS_READY
        );
?>