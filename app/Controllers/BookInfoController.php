<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookModel;

class BookInfoController extends BaseController
{
    public function index()
    {
        $bookdb = new BooKModel();
        $data['user'] = $bookdb->findAll();
        // echo "<pre>";
        // print_r($data);
        return view('BookInfoView', $data);
    }

    function BookInfo($u)
    {

        $bookdb = new BooKModel();
        //$bid = $this->request->getGet('bookid');
        //$data['bookid']=$bookdb->findAll();
        $data['books'] = $bookdb->where('bookid', $u)->find();
        // echo "<pre>";
        // print_r($data);
        return view('BookInfoView', $data);
    }

    public function delete($bookid)
    {

        $bookdb = new Bookmodel();
        $data['user'] = $bookdb->find($bookid);
        // echo "<pre>";
        // print_r($data);
        $bookdb->delete($bookid);
        return redirect()->to('/UserInfoController');
    }

    public function updateBook($bookid)
    {
        $bookdb = new BookModel();
        $data['book'] = $bookdb->find($bookid);
        // echo "<pre>";
        // print_r($data);
        return view('BookUpdateView', $data);
    }
    public function saveUpdateBook()
    {

        $bookdb = new BookModel();
        $title = $this->request->getPost('title');
        $bookid=$this->request->getPost('bookid');
        $genre = $this->request->getPost('genre');
        $language = $this->request->getPost('language');
        $author = $this->request->getPost('author');
        $edition = $this->request->getPost('edition');
        $publicaiton = $this->request->getPost('publication');
        $shortdetails = $this->request->getPost('shortdetails');



        session_start();
        $data = array(
            'title' => $title,
            'genre' => $genre,
            'language' => $language,
            'author' => $author,
            'edition' => $edition,
            'publication' => $publicaiton,
            'shortdetails' => $shortdetails
        );
        // echo "<pre>";
        // print_r($data);
        $bookdb->update($bookid,$data);
        return redirect()->to(base_url('/BookInfoController/BookInfo/'.$bookid));


    }

    public function search()
    {
        // echo  "klehflf";
        $bookdb = new Bookmodel();
        $name = $this->request->getPost('search');
        //echo $name;
        $data['books'] = $bookdb->where('title', $name)->find();

        //return redirect()->to('/BookInfoController');
        return view('BookInfoView', $data);
    }
}
