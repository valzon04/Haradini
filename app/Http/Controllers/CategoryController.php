<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCatagoryRequest;
//use App\Http\Requests\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use App\Http\Controllers\Movie;
use Illuminate\Http\Request;
use Spatie\LaravelIgnition\Http\Requests\UpdateConfigRequest;

class CategoryController extends Controller
{
    //
    public function store(StoreCategoryRequest $request){
        $category=new Category();

        $category->name=$request->name;
        $category->description=$request->description;
        

        return response()->json($category);
    }   
    public function index(){
        $categories=Category::all();
    return response()->json($categories);
    }
    public function show($id){
        
        $category=Category::findorFail($id);
        return response()->json($category);
    }
    public function destroy($id){
        
        $category=Category::findorFail($id);
        $category->delete();
        
        return response()->json([
            'message' => 'category is deleted successfully'
        ]);
    }
    public function update(UpdateConfigRequest $request,$id){
        $category=Category::findOrFail($id);
        $category->name=$request->name;
        $category->desctription=$request->desctription;

        $category->update();

        return response()->json([
            'message' => 'category is updated successfully'
        ]);
    }
    
    
}
