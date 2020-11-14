<?php

namespace App\Http\Controllers;

use App\Models\FileStructure;
use Illuminate\Http\Request;

class FileStructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($search=null, $dir = null,$column = null, $length=null, $draw=null, $page=null)
    {
        // $scan = scandir(public_path().'/files/');
            // foreach($scan as $file) {
                // if (!is_dir("myFolder/$file")) {
                //     echo $file.'\n';
            // }
        // }
        // $folder = FileStructure::where('file', $search)->paginate($length);
        $folder = FileStructure::paginate(10);
        return $folder;

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
        try {
            $fileStructure = new FileStructure;
            $input = $request->all();
            $fileStructure->file = $input['file'][0]->file;
            return response()->json($fileStructure, 201);
        } catch (Throwable $e) {
            report($e);
            return false;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FileStructure  $fileStructure
     * @return \Illuminate\Http\Response
     */
    public function show(FileStructure $fileStructure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FileStructure  $fileStructure
     * @return \Illuminate\Http\Response
     */
    public function edit(FileStructure $fileStructure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FileStructure  $fileStructure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FileStructure $fileStructure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FileStructure  $fileStructure
     * @return \Illuminate\Http\Response
     */
    public function destroy(FileStructure $fileStructure)
    {
        //
    }

    public function searchResult(Request $request) {
        dd($request->all());
    }
}
