<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Facades\Seo;

class BlogController extends Controller
{
    /**
     * Display a listing of the posts.
     *
     * @return Factory|View|Application|object
     */
    public function index()
    {
        $posts = Post::with('author')
            ->published()
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        $seo = Seo::setTitle('Blog')
            ->setDescription('Read the latest insights, tips, and strategies about productivity and team collaboration.')
            ->setKeywords('blog, productivity tips, team collaboration, project management, streamline')
            ->render();

        return view('blog.index', compact('posts', 'seo'));
    }

    /**
     * Show the form for creating a new post.
     *
     * @return Application|Factory|object|View
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created post in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'main_heading' => 'nullable|string|max:255',
            'main_content' => 'nullable|string',
            'content' => 'nullable|string',
            'final_content' => 'nullable|string',
            
            // Subheadings validation
            'subheading_1' => 'nullable|string|max:255',
            'subcontent_1' => 'nullable|string',
            'subheading_2' => 'nullable|string|max:255',
            'subcontent_2' => 'nullable|string',
            'subheading_3' => 'nullable|string|max:255',
            'subcontent_3' => 'nullable|string',
            'subheading_4' => 'nullable|string|max:255',
            'subcontent_4' => 'nullable|string',
            'subheading_5' => 'nullable|string|max:255',
            'subcontent_5' => 'nullable|string',
            'subheading_6' => 'nullable|string|max:255',
            'subcontent_6' => 'nullable|string',
            'subheading_7' => 'nullable|string|max:255',
            'subcontent_7' => 'nullable|string',
            
            // Images
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'featured_image_md' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            
            // Categorization
            'category' => 'required|string|max:50',
            'tags' => 'nullable|string',
            
            // Publishing
            'is_published' => 'boolean',
        ]);
    
        // Handle image uploads
        if ($request->hasFile('featured_image')) {
            $imagePath = $request->file('featured_image')->store('featured_images', 'public');
            $validated['featured_image'] = $imagePath;
        }
        
        if ($request->hasFile('featured_image_md')) {
            $imageMdPath = $request->file('featured_image_md')->store('featured_images_md', 'public');
            $validated['featured_image_md'] = $imageMdPath;
        }
    
        // Convert tags string to array
        $validated['tags'] = isset($validated['tags']) ? 
            array_map('trim', explode(',', $validated['tags'])) : [];
    
        // Generate slug and set author
        $validated['slug'] = Str::slug($validated['title']) . '-' . Str::random(5);
        $validated['author_id'] = Auth::id();
    
        // Set published_at if publishing
        if ($validated['is_published'] ?? false) {
            $validated['published_at'] = now();
        }
    
        Post::create($validated);
    
        return redirect()->route('blog.index')->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified post.
     *
     * @param  string  $id
     * @return Application|Factory|object|View
     */
    public function show($id)
    {
        $post = Post::with(['author', 'comments.user', 'comments.replies.user'])
            ->where('id', $id)
            ->firstOrFail();

        // Increment view count
        $viewed = session()->get('viewed_posts', []);

        if (!in_array($post->id, $viewed)) {
            $post->increment('views');
            session()->push('viewed_posts', $post->id);
        }

        // Get related posts
        $relatedPosts = Post::published()
            ->where('id', '!=', $post->id)
            ->where('category', $post->category)
            ->orderBy('published_at', 'desc')
            ->limit(3)
            ->get();

        // Generate meta description from content
        $metaDescription = Str::limit(strip_tags($post->content), 160);

        // Set SEO meta data
        $seo = Seo::setTitle($post->title)
            ->setDescription($metaDescription)
            ->setKeywords($post->tags ? implode(', ', $post->tags) : $post->category)
            ->setType('article')
            ->setImage($post->featured_image ? asset('storage/' . $post->featured_image) : asset('og-image.png'))
            ->render();

        return view('blog.show', compact('post', 'relatedPosts', 'seo'));
    }

    /**
     * Show the form for editing the specified post.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        // Authorization check
        if ($post->author_id !== Auth::id() && !Auth::user()->is_admin) {
            return redirect()->route('blog.index')
                ->with('error', 'You are not authorized to edit this post.');
        }

        return view('blog.edit', compact('post'));
    }

    /**
     * Update the specified post in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
{
    $post = Post::findOrFail($id);

    // Authorization check
    if ($post->author_id !== Auth::id() && !Auth::user()->is_admin) {
        return redirect()->route('blog.index')
            ->with('error', 'You are not authorized to update this post.');
    }

    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'main_heading' => 'nullable|string|max:255',
        'main_content' => 'nullable|string',
        // 'content' => 'required|string',
        'final_content' => 'nullable|string',
        
        // Subheadings validation
        'subheading_1' => 'nullable|string|max:255',
        'subcontent_1' => 'nullable|string',
        'subheading_2' => 'nullable|string|max:255',
        'subcontent_2' => 'nullable|string',
        'subheading_3' => 'nullable|string|max:255',
        'subcontent_3' => 'nullable|string',
        'subheading_4' => 'nullable|string|max:255',
        'subcontent_4' => 'nullable|string',
        'subheading_5' => 'nullable|string|max:255',
        'subcontent_5' => 'nullable|string',
        'subheading_6' => 'nullable|string|max:255',
        'subcontent_6' => 'nullable|string',
        'subheading_7' => 'nullable|string|max:255',
        'subcontent_7' => 'nullable|string',
        
        // Images
        'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'featured_image_md' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        
        // Categorization
        'category' => 'required|string|max:50',
        'tags' => 'nullable|string',
        
        // Publishing
        'is_published' => 'boolean',
    ]);

    // Handle image uploads and deletions
    if ($request->hasFile('featured_image')) {
        // Delete old image if exists
        if ($post->featured_image) {
            Storage::disk('public')->delete($post->featured_image);
        }
        
        $imagePath = $request->file('featured_image')->store('featured_images', 'public');
        $validated['featured_image'] = $imagePath;
    }
    
    if ($request->hasFile('featured_image_md')) {
        // Delete old image if exists
        if ($post->featured_image_md) {
            Storage::disk('public')->delete($post->featured_image_md);
        }
        
        $imageMdPath = $request->file('featured_image_md')->store('featured_images_md', 'public');
        $validated['featured_image_md'] = $imageMdPath;
    }

    // Convert tags string to array
    $validated['tags'] = isset($validated['tags']) ? 
        array_map('trim', explode(',', $validated['tags'])) : $post->tags;

    // Set published_at if publishing for the first time
    if (($validated['is_published'] ?? false) && !$post->is_published) {
        $validated['published_at'] = now();
    }

    $post->update($validated);

    return redirect()->route('blog.show', $post->id)
        ->with('success', 'Post updated successfully!');
}

    /**
     * Remove the specified post from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        // Authorization check
        if ($post->author_id !== Auth::id() && !Auth::user()->is_admin) {
            return redirect()->route('blog.index')
                ->with('error', 'You are not authorized to delete this post.');
        }

        // Delete featured image if it exists
        if ($post->featured_image) {
            Storage::disk('public')->delete($post->featured_image);
        }

        $post->delete();

        return redirect()->route('blog.index')
            ->with('success', 'Post deleted successfully!');
    }

    /**
     * Store a newly created comment in storage.
     *
     * @param Request $request
     * @param  int  $postId
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeComment(Request $request, $postId)
    {
        $post = Post::findOrFail($postId);

        $validated = $request->validate([
            'content' => 'required|string|max:2000',
            'parent_id' => 'nullable|exists:comments,id',
        ]);

        try {
            $comment = new Comment([
                'content' => strip_tags($validated['content']),
                'user_id' => Auth::id(),
                'parent_id' => $validated['parent_id'] ?? null,
                'post_id' => $post->id,
            ]);

            $comment->save();

            // Ensure user details are always available
            $user = Auth::user();
            $userData = [
                'username' => $user ? $user->name : 'Unknown User',
                'user_profile_picture' => $user && $user->profile_picture
                    ? asset('storage/' . $user->profile_picture)
                    : null,
                'user_initial' => $user ? strtoupper(substr($user->name, 0, 1)) : 'U',
            ];

            // Response data
            $responseData = [
                'success' => true,
                'message' => 'Comment added successfully',
                'comment' => [
                    'id' => $comment->id,
                    'content' => $comment->content,
                    'created_at' => $comment->created_at ? $comment->created_at->diffForHumans() : now()->diffForHumans(),
                    'parent_id' => $comment->parent_id,
                ],
                'user' => $userData,
                'comment_count' => $post->comments()->count(),
            ];

            return response()->json($responseData);
        } catch (\Exception $e) {
            \Log::error('Comment creation failed: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Failed to add comment. Please try again.',
                'error' => config('app.debug') ? $e->getMessage() : null,
            ], 500);
        }
    }

    /**
     * Update the like count for a post.
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse|RedirectResponse
     */
    public function like(Request $request, $id)
{
    $post = Post::findOrFail($id);
    $sessionKey = 'post_liked_' . $id;

    if (session()->has($sessionKey)) {
        // User already liked/disliked this post, remove the reaction
        if (session($sessionKey) === 'like') {
            $post->decrement('likes');
        } elseif (session($sessionKey) === 'dislike') {
            $post->decrement('dislikes');
        }
        session()->forget($sessionKey);
    } else {
        // Add like or dislike
        if ($request->input('action') === 'like') {
            $post->increment('likes');
            session([$sessionKey => 'like']);
        } elseif ($request->input('action') === 'dislike') {
            $post->increment('dislikes');
            session([$sessionKey => 'dislike']);
        }
    }

    return response()->json([
        'success' => true,
        'likes' => $post->likes,
        'dislikes' => $post->dislikes
    ]);
}



    /**
     * Update the dislike count for a post.
     *
     * @param Request $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function dislike(Request $request, $id)
    {
        $post = Post::where('id', $id)->first();
        $post->increment('dislikes');

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'likes' => $post->likes,
                'dislikes' => $post->dislikes
            ]);
        }

        return back();
    }
}