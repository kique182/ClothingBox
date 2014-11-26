<?php

/**
 * This is the model class for table "Usuarios".
 *
 * The followings are the available columns in table 'Usuarios':
 * @property integer $idusuario
 * @property string $nombre
 * @property string $apellido
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $telefono
 * @property string $estado
 * @property integer $Rol_idrol
 * @property string $fecha_registro
 *
 * The followings are the available model relations:
 * @property Pedido[] $pedidos
 * @property Reclamo[] $reclamos
 * @property Rol $rolIdrol
 */
class Usuarios extends CActiveRecord
{
	public $repetirpassword;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, apellido, email, username, password, repetirpassword, telefono', 'required'),
			array('Rol_idrol', 'numerical', 'integerOnly'=>true),
			array('nombre, apellido', 'length', 'max'=>80),
			array('email, username, estado', 'length', 'max'=>50),
			array('password', 'length', 'max'=>150),
			array('telefono', 'length', 'max'=>25),
			array('fecha_registro', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idusuario, nombre, apellido, email, username, password, telefono, estado, Rol_idrol, fecha_registro', 'safe', 'on'=>'search'),

			array(
				'email',
				'email',
				'message' =>'el formato del email es malo',
			),
			array(
				'repetirpassword',
				'compare',
				'compareAttribute' => 'password',
				'message' => 'La Clave no coincide'
			),

			array('username', 'unique', 'attributeName' => 'username', 'className' =>'Usuarios', 'allowEmpty' => false),
			array('email', 'unique', 'attributeName' => 'email', 'className' =>'Usuarios', 'allowEmpty' => false),
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
			'pedidos' => array(self::HAS_MANY, 'Pedido', 'Usuario_idusuario'),
			'reclamos' => array(self::HAS_MANY, 'Reclamo', 'Usuario_idusuario'),
			'rolIdrol' => array(self::BELONGS_TO, 'Rol', 'Rol_idrol'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idusuario' => 'Idusuario',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'email' => 'Email',
			'username' => 'Username',
			'password' => 'Password',
			'telefono' => 'Telefono',
			'estado' => 'Estado',
			'Rol_idrol' => 'Rol Idrol',
			'fecha_registro' => 'Fecha Registro',
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

		$criteria->compare('idusuario',$this->idusuario);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('Rol_idrol',$this->Rol_idrol);
		$criteria->compare('fecha_registro',$this->fecha_registro,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
