<?php 
 
namespace App\Http\Controllers; 
 
use App\Models\Tag; 
use App\Http\Requests\StoreTagRequest; 
use App\Http\Requests\UpdateTagRequest; 
use Illuminate\Http\Request; 
 
class TagController extends Controller 
{ 
    /** 
     * Display a listing of the resource. 
     */ 
    public function index() 
    { 
        $tags = Tag::all(); // Retrieve all tags 
        return response()->json($tags); // Return as JSON 
    } 
 
    /** 
     * Show the form for creating a new resource. 
     */ 
    public function create() 
    { 
        return view('tags.create'); // Return a view for creating a tag 
    } 
 
    /** 
     * Store a newly created resource in storage. 
     */ 
    public function store(StoreTagRequest $request) 
    { 
        $validated = $request->validated(); // Validate the request 
        $tag = Tag::create($validated); // Create a new tag 
        return redirect()->route('tags.index') 
                         ->with('success', 'Tag created successfully.'); 
    } 
 
    /** 
     * Display the specified resource. 
     */ 
    public function show(Tag $tag) 
    { 
        return view('tags.show', compact('tag')); // Return a view to show the tag 
    } 
 
    /** 
     * Show the form for editing the specified resource. 
     */ 
    public function edit(Tag $tag) 
    { 
        return view('tags.edit', compact('tag')); // Return a view for editing the tag 
    } 
 
    /** 
     * Update the specified resource in storage. 
     */ 
    public function update(UpdateTagRequest $request, Tag $tag) 
    { 
        $validated = $request->validated(); // Validate the request 
        $tag->update($validated); // Update the tag 
        return redirect()->route('tags.index') 
                         ->with('success', 'Tag updated successfully.'); 
    } 
 
    /** 
     * Remove the specified resource from storage. 
     */ 
    public function destroy(Tag $tag) 
    { 
        $tag->delete(); // Delete the tag 
        return redirect()->route('tags.index') 
                         ->with('success', 'Tag deleted successfully.'); 
    } 
}