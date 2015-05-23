<?php namespace App\Http\Controllers;

use App\ProjectFile;
use App\Http\Controllers\Controller;

use App\Http\Requests\StoreProjectFileRequest;

class ProjectFileController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(StoreProjectFileRequest $request)
    {
        return ProjectFile::create($request->only(
            'name',
            'path',
            'content',
            'project_id'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(ProjectFile $file, StoreProjectFileRequest $request)
    {
        $file->update($request->only(
            'name',
            'path',
            'content'
        ));

        return $file;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(ProjectFile $file)
    {
        $file->delete();

        return [
            'success' => true
        ];
    }
}
