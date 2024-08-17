<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\LoginModel;
class LoginController extends Controller
{
    public function login(){
        return view('login.php');
    }
    public function SignUp(){
        return view('SignUp.php');
    }
    public function Edit(){
        return view('editForm.php');
    }
    public function Home(){
         $session = service('session');

         $myId = $session->get('id');

        if($myId){
                return view('Home.php');
            }else{
                return redirect()->to(base_url('login'));
            }


        
    }

    public function checkUser(){
        $request=service('request');
        $session = service('session');
        
        $email = $request->getPost('email');
        $Pass = $request->getPost('pass');

        $model = new LoginModel();
        $user =$model->getUser($email);


        if (password_verify($Pass, $user['password'])){
           
            echo('Login Successfull');
            return redirect()->to(base_url("/Home"));
        }

    }

//     public function checkUser(){
//         $request=service('request');
        
//         $email = $request->getPost('email');
//         $Pass = $request->getPost('pass');

//        $model = new LoginModel();
//        $user =$model->getUser($email);

//         $session = service('session');
//         $usedata = [
//             $name = $user['first'],
//             $email = $user['email'],
//             $Phone = $user['phone'],
//             $profile = base_url('/uploads' . $user['img']),

//         ];
//        $session->set($usedata);

//     $myId = $session->get('first');

//     //    print_r($user);
//     //    die();
//        if ($user){
//         if (password_verify($Pass, $user["password"])){
//             echo('Login Successfull');
//             return redirect()->to(base_url('Home'));
            
//         }else{
//             echo("password incorrect");
//         }
//        }else{
//         echo("No user Existed with this email");
//        }

      
// echo($myId);
//     }
    public function saveData(){
     $request = service('request');

     $image = $request->getFile('image');
     $saveImage =$image->getName();
     $image->move(FCPATH. 'uploads', $saveImage);
    
        

        
        // $URL = $request->getPost('image');
        $Name = $request->getPost('name');
        $Email =$request->getPost('email');
        $Password =$request->getPost('pass');
        $Phone = $request->getPost('phone');
        $Company = $request->getPost('company');
        $Subject = $request->getPost('subject');
        $Option =$request->getPost('Status');
        $hash = password_hash($request->getPost('pass'), PASSWORD_DEFAULT);

        $Data=[
            'img'=>$saveImage,
            'first'=>$Name,
            'last'=>"Last",
            'email'=>$Email,
            'password'=>$hash,
            'phone'=>$Phone,
            'company'=>$Company,
            'subject'=>$Subject,
            'option'=>$Option
        ];

       $model  = new LoginModel();
       $added = $model->savelogin($Data);

        // $session = service('session');
        // $session->set($Data);

        // $MyName= $session->get("first");

        // echo(`MY name is`);
        // echo $MyName;
        // die();

       if($added){
        echo('Data inserted');

        return redirect()->to(base_url('login'));
       }
    }
    public function logOut(){
        $session = service('session');
        $session->destroy();
        return redirect()->to(base_url('login'));
    }
}