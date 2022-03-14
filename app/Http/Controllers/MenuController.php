<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Category;
use App\Http\Requests\MenuRequest;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();

        return view('menu.menu', compact('menus'));
    }

    public function edit($id)
    {
        $categories = Category::all();
        $menu = Menu::find($id);

        return view('menu.edit', compact('menu', 'categories'));
    }

    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();

        return redirect()->route('menu.index');
    }

    public function create(){
        $categories = Category::all();
        return view('menu.create', compact('categories'));
    }

    public function store(MenuRequest $request)
    {
        $menu = new Menu;
        $menu->order = $request->order;
        $menu->category_id = $request->category_id;
        $menu->name = $request->name;
        $menu->price = $request->price;
        $menu->pickup = $request->pickup;
        $menu->stock = $request->stock;
        if ($request->image) {
            $new_file = $request->file('image');
            $new_fileName = $new_file->getClientOriginalName();
            $new_file->storeAs('public/menu_image/', $new_fileName);
            $menu->image = $new_fileName;
        }
        $menu->save();

        $validated = $request->validated();
        return redirect()->route('menu.index')->with($validated);
    }

    public function update(MenuRequest $request, $id)
    {
        if ($request->image) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $file->storeAs('public/menu_image/', $fileName);
            Menu::where('id', $id)->update([
                'image' => $fileName,
            ]);
        }
        $menu = Menu::find($id);
        $menu->fill($request->all())->save();

        $validated = $request->validated();
        return redirect()->route('menu.index')->with($validated);
    }
}
