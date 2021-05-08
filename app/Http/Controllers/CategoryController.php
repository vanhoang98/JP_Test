<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CategoryPostRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        if (session('success_title')) {
            toast(session('success_title'), 'success');
        }

        $categoriesTest = Category::latest()->where('type', config('const.test'))->get();
        $categoriesPost = Category::latest()->where('type', config('const.post'))->get();

        return view('admin.categories.test.index', compact(['categoriesTest', 'categoriesPost']));
    }

    public function store(CategoryRequest $request)
    {
        $data= [
            'name' => $request->name,
            'description' => $request->description,
            'type' => config('const.test'),
        ];

        Category::create($data);

        return redirect()->route('categories.index')->withSuccessTitle(trans('home.create_category_test'));
    }

    public function storePost(CategoryPostRequest $request)
    {
        $data_post = [
            'name' => $request->name_post,
            'slag' => Str::slug($request->name_post),
            'description' => $request->description_post,
            'type' => config('const.post'),
        ];

        Category::create($data_post);

        return redirect()->route('categories.index')->withSuccessTitle(trans('home.create_category_post'));
    }

    public function update(Request $request)
    {
        try {
            $category = Category::findOrFail($request->id);
        } catch (ModelNotFoundException $exception) {

            return view('404');
        }

        $category->update($request->all());

        return redirect()->route('categories.index')->withSuccessTitle(trans('home.edit_category'));
    }

    public function updatePost(Request $request)
    {
        try {
            $category = Category::findOrFail($request->id);
        } catch (ModelNotFoundException $exception) {

            return view('404');
        }

        $category->name = $request->name_post;
        $category->slag = Str::slug($request->name_post);
        $category->description = $request->description_post;

        $category->save();

        return redirect()->route('categories.index')->withSuccessTitle(trans('home.edit_category'));
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->withSuccessTitle(trans('home.delete_category'));
    }
}
