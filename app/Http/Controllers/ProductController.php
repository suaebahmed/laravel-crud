<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use Illuminate\Http\UploadedFile;

use App\Product; // model in app But i didn't use this
use DB; // class 

class ProductController extends Controller
{
    function index(){

        // $product = DB::table('products')->get();
        $product = DB::table('products')->paginate(2);
        return \view('product.index',["x"=>$product]);
    }
    function getCreatePage(){
        return \view('product.create');
    }
    function getEditPage($id){
        $product = DB::table('products')->where('id',$id)->first();
        return \view('product/edit',compact('product'));
    }

    function createProduct(Request $req){
        $data = array();

        $data['product_name'] = $req->input()['product_name'];
        $data['product_code'] = $req->input()['product_code'];
        $data['details'] = $req->details;
        
            // \print_r($req->input());
            // \print_r($req->product_code);
    
        $img = $req->file('logo');
        if($img){
            $img_name = date('dmy_h_i_s');
            $ext = $img->getClientOriginalExtension();
            $img_full_name = $img_name.".".$ext;
        }
        $data['logo'] = 'media/'.$img_full_name;
        $result = DB::table('products')->insert($data);
        if($result){
            // $img->move('public/media',$img_full_name);
            $img->move('media',$img_full_name);
            return \redirect('/products')->with('success',' successfully new product added');
        }else
            return redirect('/products');
    }

    function editProduct(Request $req){
        $data = array();
        $data['product_name'] = $req->input()['product_name'];
        $data['product_code'] = $req->input()['product_code'];
        $data['details'] = $req->details;

        $id = $req->id;
        $old_logo = $req->old_logo;
        $data['logo'] = $old_logo;

        $img = $req->file('logo');
        if($img){
            if($old_logo)
                unlink($old_logo);
            $img_name = date('dmy_h_i_s');
            $ext = $img->getClientOriginalExtension();
            $img_full_name = $img_name.".".$ext;
            $data['logo'] = 'media/'.$img_full_name;
        }
        $result = DB::table('products')->where('id',$id)->update($data); // parameters;
        if($result){
            if($img)
                $img->move('media',$img_full_name);
            return \redirect('/products')->with('success',' successfully the product updated');
        }else
            return redirect('/products');
    }

    function deleteProduct($id){

        $product = DB::table('products')->where('id',$id)->first();
        
        if($product->logo)
            unlink($product->logo);
        $result = DB::table('products')->where('id',$id)->delete();
        if($result){
            return \redirect('/products')->with('success',' successfully the product is deleted');
        }else
            return redirect('/products');
    }
    function  showPost($id){
        // return array object;
        $product = DB::table('products')->where('id',$id)->get();
        return view('product.show',compact('product'));
    }
}
