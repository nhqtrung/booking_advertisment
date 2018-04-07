<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ContractType;
use App\Client;
use App\Contract;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $contracts = Contract::all();
        if ($request->wantsJson()) {
            return response()->json($contracts, 201);
        } else {
            return view('Admin.Contract.list', ['contracts' => $contracts]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        $staffManagements = User::all();
        $contractTypes = ContractType::all();
        return view('Admin.Contract.add', ['clients' => $clients, 'staffManagements' => $staffManagements, 'contractTypes' => $contractTypes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newContract = Contract::create($request->all());
        if ($request->wantsJson()) {
            return response()->json($newContract, 201);
        } else {
            return back()->with('success', 'Thêm thành công hợp đồng');
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
        $contract = Contract::find($id);
        $clients = Client::all();
        $staffManagements = User::all();
        $contractTypes = ContractType::all();
        return view('Admin.Contract.edit', ['contract' => $contract, 'clients' => $clients, 'staffManagements' => $staffManagements, 'contractTypes' => $contractTypes]);
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
        $contract = Contract::find($id);
        $contract->update($request->all());
        if ($request->wantsJson()) {
            return response()->json($contract, 201);
        } else {
            return back()->with('success', 'Sửa thành công hợp đồng');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Contract::destroy($id);
        if ($request->wantsJson()) {
            return response()->json(201);
        } else {
            return back()->with('success', 'Xóa thành công hợp đồng');
        }
    }
}
