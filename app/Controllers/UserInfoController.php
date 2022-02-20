<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\BookModel;
use App\Models\CheckoutModel;

class UserInfoController extends BaseController
{
    public function index()
    {
        session_start();
        $userdb = new UserModel();
        $bookdb = new BookModel();
        
        $data ['user']= $userdb->where('uid',$_SESSION['uid'])->find();
        $data ['books']= $bookdb->where('uid',$_SESSION['uid'])->find();

        $db = \Config\Database::connect();
        $checkoutdb = $db->table('checkout');
        $checkoutdb->select('*');
        $checkoutdb->where('borrowerid',$_SESSION['uid']);
        $checkoutdb->join('book', 'book.bookid=checkout.bookid');
        $queryu = $checkoutdb->get();
        $data['checkout'] = $queryu->getResult();

        //   echo "<pre>";
        //   print_r($data);
        return view('UserInfoView', $data);
        //return view('scrapView', $data);
    }
     function update()
    {    
         session_start();
         $userdb = new UserModel();
       
         $data ['user']= $userdb->where('uid',$_SESSION['uid'])->find();
         return view('UserUpdateView',$data);
       
    }function update_save($uid)
    {
        $userdb = new UserModel();
        $fname = $this->request->getPost('fname');
        $lname = $this->request->getPost('lname');
        $contact = $this->request->getPost('contact');
        $email = $this->request->getPost('email');
        $address = $this->request->getPost('address');
        $age = $this->request->getPost('age');
        $gender = $this->request->getPost('gender');
 
        $data = array(
            'fname' => $fname,
            'lname' => $lname,
            'contact' => $contact,
            'email' => $email,
            'address' => $address,
            'age' => $age,
            'gender' => $gender
        );
        $userdb->update($uid,$data);
        $data ['user']= $userdb->where('uid',$uid)->find();
        // return view("UserInfoView",$data);
        return redirect()->to('/UserInfoController');
    }

}
