<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\Files\File;

class SignUpController extends BaseController
{
    public function index()
    {
        return view("signupView");
    }
    public function saveSignup()
    {
        $userdb = new UserModel();

        $fname = $this->request->getPost('fname');
        $lname = $this->request->getPost('lname');
        $contact = $this->request->getPost('contact');
        $email = $this->request->getPost('email');
        $address = $this->request->getPost('address');
        $age = $this->request->getPost('age');
        $gender = $this->request->getPost('gender');
        $pass = md5("" . $this->request->getPost('password'));

        $validationRule = [
            'photo' => [
                'label' => 'Image File',
                'rules' => 'uploaded[photo]'
                    . '|is_image[photo]'
                    . '|mime_in[photo,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                //. '|max_size[photo,100]'
                //. '|max_dims[photo,1024,768]',
            ],
        ];

        if (!$this->validate($validationRule)) {
            $data = ['errors' => $this->validator->getErrors()];
            print_r($data);

            return view('signupView');
        }

        $img = $this->request->getFile('photo');

        if (!$img->hasMoved()) {
            // $filepath = WRITEPATH . $img->store('image');
            $imgname = $img->getRandomName();
            $img->move('uploads/', $imgname);
        }

        $data = array(
            'fname' => $fname,
            'lname' => $lname,
            'contact' => $contact,
            'email' => $email,
            'address' => $address,
            'age' => $age,
            'gender' => $gender,
            'password' => $pass,
            'photo' => $imgname
        );
        echo "<pre>";
        print_r($data);
        $userdb->insert($data);
    }
}
