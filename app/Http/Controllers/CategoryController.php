<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categories;


class CategoryController extends Controller
{

    public function fetchAll() {
        $categories = Categories::all();
        return view('pages.category.category', [
            'categories' => $categories
        ]);
    }

    public function create(Request $request) {
        $request->validate([
            'category_name' => 'required',
            'description' => 'required',
        ]);
        Categories::create($request->all());
        $categories = Categories::all();
        return redirect('/category');
    }

    public function update(Request $request) {
        $request->validate([
            'id' => 'required',
            'category_name' => 'required',
            'description' => 'required',
        ]);
        // TODO. Find out why $request->all() can't return a true output
        Categories::whereId($request->input('id'))->update([
            'category_name' => $request->input('category_name'),
            'description' => $request->input('description'),
        ]);
        return redirect('/category');
    }

    public function delete($id) {
        Categories::find($id)->delete();
        return redirect('/category');
    }
}
