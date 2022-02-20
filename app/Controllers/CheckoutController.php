<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\BookModel;
use App\Models\CheckoutModel;

class CheckoutController extends BaseController
{
    public function index()
    {

        // 
    }
    function checkout($bookid)
    {

        $book = new BookModel();
        $getBook = $book->where('bookid', $bookid)->find();
        $checkoutInfo['book'] = $getBook;

        $user = new UserModel();
        $getUser = $user->where('uid', $getBook[0]['uid'])->find();
        $checkoutInfo['owner'] = $getUser;

        // echo "<pre>";
        // print_r($checkoutInfo);

        return view('CheckoutView', $checkoutInfo);
    }
    public function saveCheckout()
    {
        session_start();
        $bookid = $this->request->getPost('bookid');
        $check = new CheckoutModel();


        $checkout = array(
            'bookid' => $bookid,
            'borrowerid' => $_SESSION['uid'],
            'checkoutdate' => date('yy/m/d'),
            'returndate' => date('yy/m/d', time() + (14 * 86400)),
            'status' => 'borrowed'
        );
        // echo "<pre>";
        // print_r($checkout);
        $check->insert($checkout); 
        $book = new BookModel();
        $bookup = array('status' => 'not available');
        $book->update($bookid, $bookup);
        return redirect()->to(base_url('/UserInfoController'));
    }
    public function returnBook($bookid){
        session_start();
       
        $bookModel = new BookModel();
        $checkoutModel = new CheckoutModel();
 
        $data = $checkoutModel->where('bookid', $bookid)->find();
 
        $bookup = array('status' => 'available');
 
        $bookModel->update($bookid, $bookup);
        $checkoutModel->delete($data[0]['checkoutid']);
        return redirect()->to(base_url('/UserInfoController'));
    }

}
