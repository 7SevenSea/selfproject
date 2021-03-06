<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\Category;
use App\Menu;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function order()
    {
        $tableList = Customer::where('status', 0)
            ->orderby('created_at', 'desc')
            ->get();

        $orders = Order::whereHas('Customer', function ($status) {
            $status->where('status', 0);
        })
            ->orderby('is_finished', 'asc')
            ->orderby('created_at', 'desc')
            ->get();

        return view('table.order', compact('tableList', 'orders'));
    }

    public function finishedOrder($id)
    {
        $order = Order::find($id);
        $order->increment('is_finished');
        return back()->withInput();
    }

    public function showTable()
    {
        $tableList = Customer::where('status', 0)
            ->orderby('created_at', 'desc')
            ->get();
        $tableOrders = Order::whereHas('Customer', function ($status) {
            $status->where('status', 0);
        })
            ->orderby('created_at', 'desc')
            ->get();

        return view('table.table', compact('tableList', 'tableOrders'));
    }

    public function index($table)
    {
        $tableList = Customer::where('status', 0)
            ->orderby('created_at', 'desc')
            ->get();
        $tableOrders = Order::where('id', $table)
            ->orderby('created_at', 'desc')
            ->get();

        return view('table.table', compact('tableList', 'tableOrders'));
    }

    public function billing()
    {
        $payers = Customer::where('status', 1)
            ->orderby('updated_at', 'desc')
            ->get();
        $tableList = Customer::where('status', 0)
            ->orWhere('status', 1)
            ->orderby('table', 'asc')
            ->get();
        return view('table.billing', compact('payers', 'tableList'));
    }

    public function billingShow($table)
    {
        $customer = Customer::find($table);
        return view('table.show', compact('customer', 'table'));
    }

    public function billingComplete($table)
    {
        $customer = Customer::find($table);
        $customer->status = 2;
        $customer->save();
        return redirect()->route('home');
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $customer = new Customer;
        $customer->fill($request->all())->save();
        $category = Category::first();
        return redirect()->route('customer.show', [$customer, $category]);
    }

    public function show($customer, $category)
    {
        $tableId = Customer::where('id', $customer)->first();
        $categories = Category::all();
        $menus = Menu::where('category_id', $category)->get();
        $pickupMenus = Menu::where('pickup', '1')->get();
        return view('customer.menu', compact('customer', 'category', 'categories', 'menus', 'tableId', 'pickupMenus'));
    }

    public function orderList($customer)
    {
        $customer = Customer::find($customer);
        return view('customer.orderlist', compact('customer'));
    }

    public function reorder(Request $request)
    {
        $order = new Order;
        $order->fill($request->all())->save();
        return back()->withInput();
    }

    public function payment($customer)
    {
        $customer = Customer::find($customer);
        $customer->status = 1;
        $customer->save();
        return redirect()->route('customer.order.complete');
    }

    public function orderComplete()
    {
        return view('customer.complete');
    }

    public function addCart(Request $request)
    {
        $order = new Order;
        $order->menu_id = $request->menuId;
        $order->customer_id = $request->customerId;
        $order->table = $request->table;
        $order->number = $request->number;
        $order->save();
        return back()->withInput();
    }

    public function pickupShow($customer)
    {
        $tableId = Customer::where('id', $customer)->first();
        $pickupMenus = Menu::where('pickup', '1')->get();
        return view('customer.pickup', compact('customer', 'pickupMenus', 'tableId'));
    }
}
