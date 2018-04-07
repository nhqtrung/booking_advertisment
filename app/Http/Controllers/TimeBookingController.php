<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TimeBooking;
use App\ProductBooking;

class TimeBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $timeBooking = TimeBooking::all();
        if ($request->wantsJson()) {
            return response()->json($timeBooking, 201);
        } else {
            return view('Admin.TimeBooking.list', ['timeBooking' => $timeBooking]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productsBooking = ProductBooking::all();
        return view('Admin.TimeBooking.add', ['productsBooking' => $productsBooking]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newTimeBooking = TimeBooking::create($request->all());
        if ($request->wantsJson()) {
            return response()->json($newTimeBooking, 201);
        } else {
            return back()->with('success', 'Thêm thành công lịch book');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
