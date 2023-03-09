<?php

namespace App\Http\Controllers;

use App\Models\OrderList;
use Illuminate\Http\Request;

class OrderListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('order_lists.index')->with([
            'orderLists' => OrderList::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('order_lists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['title' => 'required']);

        $orderList = new OrderList;
        $orderList->name = $request['title'];
        $orderList->created_by = $request->user()->name;
        // $orderList->active = 1;
        $orderList->save();
        
        return redirect('/order-lists/' . $orderList->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderList $orderList)
    {
        // Hier hoort nog data opgehaald te worden van orders tabel, joined on order_lists.id=orders.orderlist_id, om te zien welke orders bij de list horen
        return view('order_lists.show')->with([
            'orderList' => $orderList,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderList $orderList)
    {
        // Hier afrond logica. Zet veld active van orderlists op 0 indien 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrderList $orderList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderList $orderList)
    {
        //
    }
}
