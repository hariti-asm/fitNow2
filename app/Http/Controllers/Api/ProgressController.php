<?php 
namespace App\Http\Controllers\Api;
 
use App\Http\Controllers\Controller;
use App\Http\Requests\ProgressRequest;
use App\Http\Resources\ProgressResource;
use App\Models\Progress;
 
class ProgressController extends Controller
{
    public function index()
    {
        return ProgressResource::collection(Progress::all());
    }
 
    public function store(ProgressRequest $request)
    {
        $Progress = Progress::create($request->validated());
    
        return new ProgressResource($Progress);
    }
 
    public function show(Progress $Progress)
    {
        return new ProgressResource($Progress);
    }
 
    public function update(ProgressRequest $request, Progress $Progress)
    {
        $Progress->update($request->validated());
 
        return new ProgressResource($Progress);
    }
 
    public function destroy(Progress $Progress)
    {
        $Progress->delete();
 
        return response()->noContent();
    }
}