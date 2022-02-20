<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookModel;

class BookEntryController extends BaseController
{
    public function index()
    {
        return view("BookEntryView");
    }
    public function  book_save()
    {

        $bookdb = new BookModel();
        $title = $this->request->getPost('title');
        $genre = $this->request->getPost('genre');
        $language = $this->request->getPost('language');
        $author = $this->request->getPost('author');
        $edition = $this->request->getPost('edition');
        $publicaiton = $this->request->getPost('publication');
        $shortdetails = $this->request->getPost('shortdetails');


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
        session_start();
        $data = array(
            'uid' => $_SESSION['uid'],
            'title' => $title,
            'genre' => $genre,
            'language' => $language,
            'author' => $author,
            'editon' => $edition,
            'publication' => $publicaiton,
            'shortdetails' => $shortdetails,
            'photo' => $imgname,
            'status'=>'available'
        );
        //echo "<pre>";
        //print_r($data);
        $bookdb->insert($data);


    }
}
