<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner; //Eloquent　エロクアント
use Illuminate\Support\Facades\DB; //QueryBuilder クエリビルダ
use Carbon\Carbon;


class OwnersController extends Controller
{
     /**
     * 新しいUserControllerインスタンスの生成
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
        // $date_now = Carbon::now();
        // $date_pase = Carbon::parse(now());
        // echo $date_now->year;
        // echo $date_pase;

        // $e_all = Owner::all();
        
        // $q_get = DB::table('owners')->select('name', 'created_at')->get();
        // $q_first = DB::table('owners')->select('name')->first();

        // $c_test = collect([
        //     'name' => 'てすと'
        // ]);

        // var_dump($q_first);

        // dd($e_all, $q_get, $q_first, $c_test);

        $owners = Owner::select('name', 'email', 'created_at')->get();
        return view('admin.owners.index', compact('owners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.owners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
