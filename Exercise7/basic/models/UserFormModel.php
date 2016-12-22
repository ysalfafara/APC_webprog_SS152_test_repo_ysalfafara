<?php 
namespace app\models;
use yii\base\Model;
class UserFormModel extends Model
{
	public $firstName;
	public $lastName;
	public $midddleName;
	public $email;
	public $gender;
	public $nickname;
	public $homeAddress;
	public $cellphoneNo;
	
	public function rules()
	{
		return 
		[
		[['firstName','lastName','email','gender','cellphoneNo'],'required'],
		['email','email'],
		[['cellphoneNo'], 'integer'],
		];
	}
	
}