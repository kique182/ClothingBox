<?php

/**
 * This is the model class for table "facturas".
 *
 * The followings are the available columns in table 'facturas':
 * @property integer $id_factura
 * @property string $Usuarios_username
 * @property integer $Productos_id_producto
 * @property integer $cantidad
 *
 * The followings are the available model relations:
 * @property Usuarios $usuariosUsername
 * @property Productos $productosIdProducto
 */
class Facturas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'facturas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Usuarios_username, Productos_id_producto, cantidad', 'required'),
			array('Productos_id_producto, cantidad', 'numerical', 'integerOnly'=>true),
			array('Usuarios_username', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_factura, Usuarios_username, Productos_id_producto, cantidad', 'safe', 'on'=>'search'),
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
			'usuariosUsername' => array(self::BELONGS_TO, 'Usuarios', 'Usuarios_username'),
			'productosIdProducto' => array(self::BELONGS_TO, 'Productos', 'Productos_id_producto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_factura' => 'Id Factura',
			'Usuarios_username' => 'Usuarios Username',
			'Productos_id_producto' => 'Productos Id Producto',
			'cantidad' => 'Cantidad',
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

		$criteria->compare('id_factura',$this->id_factura);
		$criteria->compare('Usuarios_username',$this->Usuarios_username,true);
		$criteria->compare('Productos_id_producto',$this->Productos_id_producto);
		$criteria->compare('cantidad',$this->cantidad);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Facturas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
