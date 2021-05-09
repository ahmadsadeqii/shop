<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {

        return view('admin.categories.index' ,

            ['categories'=>Category::all()]) ;
    }

    public function create()
    {
        return view('admin.categories.create', [

            'categories' => Category::all(),
        ]);

    }


    public function store(NewCategoryRequest $request)
    {
        Category::query()->create([

            'title' => $request->get('title'),

            'category_id' => $request->get('category_id')

        ]);

        return redirect(route('categories.index'));
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {

        return view('admin.categories.edit' , [

        'category' => $category ,

        'categories' =>Category::all()

        ] );
    }


    public function update(NewCategoryRequest $request, Category $category)
    {

        $category->update([

            'category_id' => $request->get('category_id'),

            'title' => $request->get('title')

        ]);

            return redirect(route('categories.index')) ;

    }

    public function destroy(Category $category)
    {

        $category->delete() ;

        return redirect(route('categories.index')) ;

    }
}
