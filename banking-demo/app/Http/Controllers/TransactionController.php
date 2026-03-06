<?php

namespace App\Http\Controllers;
use App\Models\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //显示所有的transactions
    //返回一个页面,compact('transactions') 的意思：把变量 $transactions 传给页面
    public function index()
    {
        $transactions = Transaction::all();
        return view('transactions', compact('transactions'));
    }

    //创建新的 transaction
    // request = 用户提交的数据
    public function store(Request $request)
    {
        Transaction::create([
            'description' => $request->description,
            'amount' => $request->amount,
        ]);

        return redirect('/transactions');
        //创建完数据以后
        //跳回 transactions 页面
    }
}
