<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\Evsave;
class Home extends BaseController
{
    public function index()
    {
       $data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible'])
		];
		return view('login', $data);
    }
	public function registor()
    {
       $data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'pagetitle' => 'Minible'])
		];
		return view('registor', $data);
    }
	public function save()
    {
       $model = new UserModel();
            $data = [
                'username'     => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/');
    }
	 public function auth()
    {
        $session = session();
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'users_id'       => $data['users_id'],
                    'username'     => $data['username'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/panel');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/');
            }
        }else{
            $session->setFlashdata('msg', 'Username not Found');
            return redirect()->to('/');
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
	public function panel()
    {
$session = session();
$users_id = 0;
$users_id = $session->get('users_id');
if($users_id == 0)
{
	return redirect()->to('/');
}
else {
		return view('panel');
      }
    }
	public function addnew()
    {
$session = session();
$users_id = 0;
$users_id = $session->get('users_id');
if($users_id == 0)
{
	return redirect()->to('/');
}
else {
		return view('addnew');
      }
    }
    public function evsave()
    {
		$orgDate = $this->request->getVar('date');
		$newDate = date("d-m-Y", strtotime($orgDate));  
		$model = new Evsave();
		$data = [
       'date'     => $newDate,
       'bank'     => $this->request->getVar('bank'),
       'price'     => $this->request->getVar('price'),
       'car_maker'     => $this->request->getVar('car_maker'),
       'model'     => $this->request->getVar('model'),
       'year'     => $this->request->getVar('year'),
       'color'     => $this->request->getVar('color'),
       'interior'     => $this->request->getVar('interior'),
       'transmission'     => $this->request->getVar('transmission'),
       'chassis_no'     => $this->request->getVar('chassis_no'),
       'engine_no'     => $this->request->getVar('engine_no'),
       'specification'     => $this->request->getVar('specification'),
       'odometer'     => $this->request->getVar('odometer'),
       'department'     => $this->request->getVar('department'),
       'users_id'     => $this->request->getVar('users_id'),
       'conditions'     => $this->request->getVar('conditions')
            ];
            $model->save($data);
			return view('viewcertificarte');
    }
	public function viewpcertificarte($id = null)
    {
$session = session();
$users_id = 0;
$users_id = $session->get('users_id');
if($users_id == 0)
{
	return redirect()->to('/');
}
else {
	 $model = new Evsave();
 
        $data['certificates'] = $model->where('certificate_id', $id)->first();
 
        return view('viewpcertificarte', $data);
      }
    }
	public function editcertificarte($id = null)
    {
$session = session();
$users_id = 0;
$users_id = $session->get('users_id');
if($users_id == 0)
{
	return redirect()->to('/');
}
else {
	 $model = new Evsave();
 
        $data['certificates'] = $model->where('certificate_id', $id)->first();
 
        return view('editcertificarte', $data);
      }
    }
	 public function updatecertificate($certificate_id = null)
    {
		$orgDate = $this->request->getPost('date');
		$newDate = date("d-m-Y", strtotime($orgDate));  
		$model = new Evsave();
		$data = [
       'date'     => $newDate,
       'bank'     => $this->request->getPost('bank'),
       'price'     => $this->request->getPost('price'),
       'car_maker'     => $this->request->getPost('car_maker'),
       'model'     => $this->request->getPost('model'),
       'year'     => $this->request->getPost('year'),
       'color'     => $this->request->getPost('color'),
       'interior'     => $this->request->getPost('interior'),
       'transmission'     => $this->request->getPost('transmission'),
       'chassis_no'     => $this->request->getPost('chassis_no'),
       'engine_no'     => $this->request->getPost('engine_no'),
       'specification'     => $this->request->getPost('specification'),
       'odometer'     => $this->request->getPost('odometer'),
       'department'     => $this->request->getPost('department'),
       'users_id'     => $this->request->getPost('users_id'),
       'conditions'     => $this->request->getPost('conditions')
            ];
        $model->update($certificate_id,$data);
		return view('panel');
    }
}
