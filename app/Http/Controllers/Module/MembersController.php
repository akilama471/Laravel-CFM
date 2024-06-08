<?php

namespace App\Http\Controllers\Module;

use App\Http\Controllers\Controller;
use App\Http\Requests\Module\MembersRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Module\MembersModel;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MembersRequest $request, MembersModel $members)
    {
        $request->validated();
        $uid = $request->uid;
        $data = [
            "name" => $request->member_name,
            "contact" => $request->member_contact,
            "address" => $request->member_contact,
            "dob" => $request->member_dob,
        ];

        $currentTIMESTAMP = DB::raw('CURRENT_TIMESTAMP');

        if ($uid != 0) {

            $data = array_merge(['updated_at' => $currentTIMESTAMP], $data);
            $members->where('id', $uid)->update($data);
            $response['status'] = 1;
        } else {
            $data = array_merge(['created_at' => $currentTIMESTAMP], $data);
            $members->insert($data);
            $response['status'] = 1;
        }
        return response()->json($response);
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
