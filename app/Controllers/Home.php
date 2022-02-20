<?php
namespace App\Controllers;
use App\Models\BookModel;

class Home extends BaseController
{
    public function index()
    {
        $bookdb=new BooKModel();
        $data['user']=$bookdb->findAll();
        //return view('welcome_message');
       return view('homeView',$data);
    }
    public function search()
    {
        $bookdb=new Bookmodel();
        if($this->request->getPost('search')){
        $name = $this->request->getPost('search');
        echo $name;
        $data[0]['book'] = $bookdb->like('title',$name) ;

        }
        else{
          $data['book']=$bookdb->findAll();
          echo "marufa";
        }
         
        echo "<pre>";
       print_r($data);

    }
}
