<?php
namespace App\Http\Controllers\Api;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Display a listing of the resource.
    public function index(Request $request)
    {
        $per_page = $request->query('per_page', 10);
        $per_page_default = 10;
        $per_page = $request->query('per_page', $per_page_default);
        if ($per_page < 1 || $per_page > 100) {
            return response()->json(['success' => false], 400);
            $per_page = $per_page_default;
            // return response()->json(['success' => false], 400);
        }

        $posts = Post::with('user')->with('category')->with('tags')->paginate($per_page);
        $posts = Post::with(['user', 'category', 'tags'])->paginate($per_page);

        return response()->json([
            'success'   => true,
            'response'  => $posts
        ]);
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
        //
    }
    // Restituisce 9 post random per la homepage in Vue
    public function random() {
        $sql = Post::with(['user', 'category', 'tags'])->limit(9)->inRandomOrder();
        $posts = $sql->get();

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        return response()->json([
            // 'sql'       => $sql->toSql(), // solo per debugging
            'success'   => true,
            'result'    => $posts,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    // Display the specified resource.
    public function show($slug)
    {
        //
        $post = Post::with(['user', 'category', 'tags'])->where('slug', $slug)->first();

        if ($post) {
            return response()->json([
                'success'   => true,
                'result'    => $post
            ]);
        } else {
            return response()->json([
                'success'   => false,
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
