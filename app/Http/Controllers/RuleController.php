<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rule;
use App\Contract;
use App\RuleType;

class RuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rules = Rule::all();
        if ($request->wantsJson()) {
            return response()->json($rules, 201);
        } else {
            return view('Admin.Rule.list', ['rules' => $rules]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contracts = Contract::all();
        $ruleTypes = RuleType::all();
        return view('Admin.Rule.add', ['contracts' => $contracts, 'ruleTypes' => $ruleTypes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newRule = Rule::create($request->all());
        if ($request->wantsJson()) {
            return response()->json($newRule, 201);
        } else {
            return back()->with('success', 'Thêm thành công điều khoản');
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
    public function destroy(Request $request, $id)
    {
        Rule::destroy($id);
        if ($request->wantsJson()) {
            return response()->json(201);
        } else {
            return back()->with('success', 'Xóa thành công điều khoản');
        }
    }
}
