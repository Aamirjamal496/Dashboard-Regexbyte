<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\LoginModel;
use CodeIgniter\Exceptions\AlertError;

use function PHPUnit\Framework\returnSelf;

class LoginController extends Controller
{
    // SignUP Page:

    public function SignUp()
    {
        return view('SignUp.php');
    }

    public function savedata()
    {
        $request = service('request');
        $image = $request->GetFile('img');
        $saveimage = $image->getName();
        $image->move(FCPATH . 'uploads', $saveimage);

        $fname = $request->getPost('fname');
        $lname = $request->getPost('lname');
        $email = $request->getPost('email');
        $password = $request->getPost('pass');
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        $phone = $request->getPost('phone');
        $status = $request->getPost('status');
        $date = $request->getPost('createdat');

        $Data = [
            'firstname' => $fname,
            'lastname' => $lname,
            'email' => $email,
            'Password' => $hashed,
            'phone' => $phone,
            'image' => $saveimage,
            'status' => $status,
            'created-at' => $date,
        ];
        $model = new LoginModel();
        $added = $model->savedata($Data);
        if ($added) {
            echo ('data inserted');
            return redirect('SignIn');
        }
    }

    // Login Page
    public function SignIn()
    {
        return view('SignIn.php');
    }

    public function checkUser()
    {
        $request = service('request');
        $email = $request->getPost('email');
        $password = $request->getPost('pass');

        // Load the LoginModel
        $model = new LoginModel();
        $user = $model->getUser($email);

        if ($user) {
            // Verify the password
            if (password_verify($password, $user['Password'])) {
                // Authentication successful
                // Set session data or redirect as needed
                $session = service('session');
                $session->set('id', $user['id']);
                $session->set('email', $user['email']);
                return view('dashboard.php');
                // Redirect to a secure page after login
            } else {
                // Password is incorrect
                return redirect()->back()->with('error', 'Wrong Password');
            }
        } else {
            // No user found with this email
            return redirect()->back()->with('error', 'No user with this email');
        }
    }

    public function dashboard()
    {
        $session = service('session');
        $id = $session->get('id');
        if ($id) {
            return view('dashboard.php');
        } else {
            return view('SignIn.php');
        }
    }

    public function categories()
    {
        $session = service('session');
        $sessionId = $session->get('id');
        if ($sessionId) {
            return view('Categories.php');
        } else {
            return view('SignIn.php');
        }
    }
    // Add Categories Logic:
    public function saveCat()
    {
        $request = service('request');
        $Name = $request->getPost('name');
        $Status = $request->getPost('status');
        $Description = $request->getPost('description');
        $AddCat = [
            'name' => $Name,
            'status' => $Status,
            'description' => $Description
        ];
        $model = new LoginModel();
        $added = $model->saveCat($AddCat);
        return redirect()->to(base_url('/category'));
    
    }
    // Get Categories Data from db
    public function getCat()
    {
        $session = service('session');
        $S_ID = $session->Get('id');
        if($S_ID){
        $model = new LoginModel();
        $data['Test'] = $model->getCatData();        
        return view('Categories.php', $data);
        }else{
            return redirect()->to(base_url('SignIn'));
        }
    }
    public function deleteCat($id)
    {
        // print_r($id);
        // die();
        $model = new LoginModel();
        $delete = $model->delCat($id);
        if($delete){
            return redirect()->to(base_url('/category'));
        }else{
            echo('Failed to delete a category');
        }
    }
    
    public function UpdateCategory()
    {
        $request = service('request');
        $id = $request->getPost('id');
        $name = $request->getPost('name');
        $status = $request->getPost('status');
        $desc = $request->getPost('description');

        $CData =[
            'name'=>$name,
            'status'=>$status,
            'description'=>$desc,
        ];
        $model = new LoginModel();
        $model->updateCategory($id,$CData);
        return redirect()->to(base_url('/category'));
        // $cupdate = $model->updateCategory($id, $CData);
        // if($cupdate)
        // {
        //     // echo('updated');
        //     return redirect()->to(base_url('categories'));
        // }else{
        //     echo'failed to update a category';
        // }
    }

    // Slider functions:

    public function saveSlider()
    {
        $request = service('request');        
        $image = $request->GetFile('img');
        $saveimage = $image->getName();
        $image->move(FCPATH .'uploads', $saveimage);
        $Id = $request->getPost('id');
        $Title =$request->getPost('title');
        $Status= $request->getPost('status');
        $Desc =$request->getPost('description');
        $SData=[
            'profile'=>$saveimage,
            'id'=>$Id,
            'title'=>$Title,
            'status'=>$Status,
            'description'=>$Desc,
        ];
        $model = new LoginModel();
        $AddSlider = $model->saveSlide($SData);
        if( $AddSlider ){
            return redirect()->to(base_url('getSlider'));
        }
        
    }
    // Slider show oon display function:
    public function getSlider()
    {
        $session = service('session');
        $S_ID = $session->Get('id');
        if($S_ID){
            $model=new LoginModel();
            $data['slider'] = $model->getSlider();
           
            return view('Slider.php', $data);
        }else{
            return redirect()->to(base_url('SignIn'));
        }
        
    }
    // Update Slider:
    public function UpdateSlider()
    {
        $request = service('request');
        // $image = $request->GetFile('img');
        // $saveimage = $image->getName();
        // $image->move(FCPATH .'uploads', $saveimage);

        $id = $request->getPost('id');
        $image =$request->GetFile('img');
        $profile = $image->getName();
        $image->move(FCPATH .'uploads', $profile);
        $title = $request->getPost('title');
        $status = $request->getPost('status');
        $desc = $request->getPost('description');

        $SData =[
            'profile'=>$profile,
            'title'=>$title,
            'status'=>$status,
            'description'=>$desc,
        ];
        $model = new LoginModel();
        $model->updateSlider($id,$SData);
        return redirect()->to(base_url('getSlider'));
    }
    // delete Slide:
    public function deleteSlide($id)
    {
        // print_r($id);
        // die();
        $model = new LoginModel();
        $delete = $model->delslide($id);
        return redirect()->to(base_url('getSlider'));
    }

    // Logout:

    public function logout()
    {
        $session = service('session');
        $session->destroy();
        return redirect()->to(base_url('SignIn'));
    }
}
