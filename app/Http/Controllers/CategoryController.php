<?php
  
  namespace App\Http\Controllers;
  
  use App\Category;
  use Illuminate\Http\Request;
  
  class CategoryController extends Controller
  {
    public function __construct()
    {
      $this->middleware('auth');
    }
    
    public function index()
    {
      $categories = Category::get();
      
      return view('category.index', compact('categories'));
    }
    
    public function create()
    {
      return view('category.create');
    }
    
    public function store(Request $request)
    {
      $category        = new Category();
      $category->title = $request->get('title');
      $category->user()->associate($request->user());
      
      $category->save();
      
      return 'Success';
    }
  }
