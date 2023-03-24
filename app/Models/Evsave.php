<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class Evsave extends Model{
    protected $table = 'certificates';
	protected $primaryKey = 'certificate_id';
    protected $allowedFields = ['certificate_id','date','bank','price','car_maker',
	'model','year','color','interior','transmission','chassis_no','engine_no',
	'specification','odometer','conditions','department','users_id'];
}