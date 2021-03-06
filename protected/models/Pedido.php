<?php

/**
 * This is the model class for table "pedido".
 *
 * The followings are the available columns in table 'pedido':
 * @property integer $idpedido
 * @property string $fecha
 * @property integer $cantidad
 * @property string $direccion
 * @property integer $status
 * @property integer $Usuario_idusuario
 * @property integer $metodoenvio_idmetodoenvio
 * @property integer $metodopago_idmetodopago
 * @property integer $Bancos_id_banco
 * @property integer $numero_trans
 *
 * The followings are the available model relations:
 * @property HistorialCompras[] $historialComprases
 * @property Status $status0
 * @property Metodoenvio $metodoenvioIdmetodoenvio
 * @property Metodopago $metodopagoIdmetodopago
 * @property Usuarios $usuarioIdusuario
 * @property Bancos $bancosIdBanco
 * @property ProductoPedido[] $productoPedidos
 * @property Reclamo[] $reclamos
 */
class Pedido extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pedido';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha, cantidad, direccion, Usuario_idusuario, metodoenvio_idmetodoenvio, metodopago_idmetodopago, Bancos_id_banco, numero_trans', 'required'),
			array('idpedido, cantidad, status, Usuario_idusuario, metodoenvio_idmetodoenvio, metodopago_idmetodopago, Bancos_id_banco, numero_trans', 'numerical', 'integerOnly'=>true),
			array('direccion', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idpedido, fecha, cantidad, direccion, status, Usuario_idusuario, metodoenvio_idmetodoenvio, metodopago_idmetodopago, Bancos_id_banco, numero_trans', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'historialComprases' => array(self::HAS_MANY, 'HistorialCompras', 'Pedido_idpedido'),
			'status0' => array(self::BELONGS_TO, 'Status', 'status'),
			'metodoenvioIdmetodoenvio' => array(self::BELONGS_TO, 'Metodoenvio', 'metodoenvio_idmetodoenvio'),
			'metodopagoIdmetodopago' => array(self::BELONGS_TO, 'Metodopago', 'metodopago_idmetodopago'),
			'usuarioIdusuario' => array(self::BELONGS_TO, 'Usuarios', 'Usuario_idusuario'),
			'bancosIdBanco' => array(self::BELONGS_TO, 'Bancos', 'Bancos_id_banco'),
			'productoPedidos' => array(self::HAS_MANY, 'ProductoPedido', 'Pedido_idpedido'),
			'reclamos' => array(self::HAS_MANY, 'Reclamo', 'Pedido_idpedido'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idpedido' => 'Idpedido',
			'fecha' => 'Fecha',
			'cantidad' => 'Cantidad',
			'direccion' => 'Direccion',
			'status' => 'Status',
			'Usuario_idusuario' => 'Usuario Idusuario',
			'metodoenvio_idmetodoenvio' => 'Metodoenvio Idmetodoenvio',
			'metodopago_idmetodopago' => 'Metodopago Idmetodopago',
			'Bancos_id_banco' => 'Bancos Id Banco',
			'numero_trans' => 'Numero Trans',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idpedido',$this->idpedido);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('Usuario_idusuario',$this->Usuario_idusuario);
		$criteria->compare('metodoenvio_idmetodoenvio',$this->metodoenvio_idmetodoenvio);
		$criteria->compare('metodopago_idmetodopago',$this->metodopago_idmetodopago);
		$criteria->compare('Bancos_id_banco',$this->Bancos_id_banco);
		$criteria->compare('numero_trans',$this->numero_trans);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pedido the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
