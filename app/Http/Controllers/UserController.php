<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    /**
     * List User Details
     * @param Request $request
     * @return Application|Factory|View|JsonResponse
     */
    public function listUserDetails(Request $request)
    {
        if ($request->ajax()) {
            $query = DB::table('user_details');

            return DataTables::of($query)
                ->editColumn('status', function ($data) {
                    return $data->status == 1 ? 'Active' : 'Inactive';
                })->make(true);
        }

        return view('user_details');
    }
}
