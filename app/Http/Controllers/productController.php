<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productController extends Controller
{
	public function index()
    {
        $product = product::all();
        return view ('product.index')->with('product', $product);
    }
    
    public function create()
    {
        return view('product.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
   
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
     
        Product::create($input);
      
        return redirect('product')->with('flash_message', 'product Addedd!'); 
   }
    
    public function show($id)
    {
        $product = product::find($id);
        return view('product.show')->with('product', $product);
    }
    
    public function edit($id)
    {
        $product = product::find($id);
        return view('product.edit')->with('product', $product);
    }
  
    public function update(Request $request, $id)
    {
        $product = product::find($id);
        $input = $request->all();
		
		if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          		
        $product->update($input);
        return redirect('product')->with('flash_message', 'product Updated!');  
    }
  
    public function destroy($id)
    {
        product::destroy($id);
        return redirect('product')->with('flash_message', 'product deleted!');  
    }
}
