<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Study;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studies = Study::all();
        return response()->json(['status' => 'ok', 'data' => $studies], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "code" => 'required|numeric',
            "name" => 'required',
            "abreviation" => 'required'
        ]);

        //fallo
        if ($validator->fails()) {
            return response()->json([
                'status' => 'nok',
                "data" => $validator->errors()
            ], 422);
        }
        $newStudy = Study::create($request->all());

        return response()->json([
            'status' => "ok",
            "data" => $newStudy
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $study = Study::find($id);

        if (!$study) {
            return response()->json(['errors' => (['code' => 404, 'message' => 'Study Not Fouund'])], 404);
        }
        return response()->json(['status' => 'correcto', 'data' =>  $study], 200);
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
        $study = Study::find($id);
        if (!$study) {
            return response()->json(['errors' => (['code' => 404, 'message' => 'Study Not Fouund'])], 404);
        }
        $validator = Validator::make($request->all(), [
            "code" => 'required',
            "name" => 'required',
            "abreviation" => 'required'
        ]);

        //fallo
        if ($validator->fails()) {
            return response()->json([
                'status' => 'nok',
                "data" => $validator->errors()
            ], 422);
        }

        $study->fill($request->all());
        $study->save();
        return response()->json(['status' => 'ok', 'data' => $study], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $study = Study::find($id);

        if (!$study) {
            return response()->json(['status' => 'nok', 'data' => 'Study Not Fouund'], 404);
        }

       try {
        $study->delete();
        return response()->json(['status' => 'ok'],204);
       } catch (\Throwable $th) {
            return response()->json(['status' => 'nok',
             'data' => $th->getMessage()],404);
       }
    }
}
