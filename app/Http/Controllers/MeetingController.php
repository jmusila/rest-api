<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function _construct()
    {
        // $this => middleware('name');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $meeting = [
            'title'=> 'Title',
            'description'=>'Description',
            'time'=>'Time',
            'user_id'=>'User Id',
            'view_meeting'=> [
                'href'=>'v1/meeting/1',
                'method'=>'GET'
            ]
        ];
        $response = [
            'msg' => 'List of all meetings',
            'meetings'=> [
                $meeting
                ]
        ];
        return response()->json($response, 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $time = $request->input('time');
        $user_id = $request->input('user_id');

        $meeting = [
            'title'=> $title,
            'description'=>$description,
            'time'=>$time,
            'user_id'=>$user_id,
            'view_meeting'=> [
                'href'=>'v1/meeting/1',
                'method'=>'GET'
            ]
        ];
        $response = [
            'msg' => 'Meeting Created Successfully',
                'meeting'=> $meeting
        ];
        return response()->json($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $meeting = [
            'title'=> 'Title',
            'description'=>'Description',
            'time'=>'Time',
            'user_id'=>'User Id',
            'view_meeting'=> [
                'href'=>'v1/meeting/1',
                'method'=>'GET'
            ]
        ];
        $response = [
            'msg'=>'Meeting retrieved successfully',
            'meeting'=>$meeting
        ];
        return response()->json($response, 200);
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
        $title = $request->input('title');
        $description = $request->input('description');
        $time = $request->input('time');
        $user_id = $request->input('user_id');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = [
            'msg'=> 'Meeting deleted Successfully',
            'create'=> [
                'href'=>'v1/meeting',
                'method'=>'POST',
                'params'=>'title, description, time'
            ]
        ];
        return response()->json($response, 200);
    }
}
