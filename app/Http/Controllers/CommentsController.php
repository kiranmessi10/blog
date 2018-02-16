<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;
use App\Comment;

class CommentsController extends Controller {

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $post_id) {
        $this->validate($request, array(
            'name' => 'required|min:3',
            'email' => 'required|email',
            'comment' => 'required|min:5|max:1000',
                )
        );
        $post = Post::find($post_id);

        $comment = new Comment;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->comment = $request->comment;
        $comment->approved = true;
        $comment->post()->associate($post);


        $comment->save();
        Session::flash('success', 'The Comment was saved successfully!');

        return redirect()->route('blog.single', [$post->slug]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $comment = Comment::find($id);
        return view('comments.edit')->withComment($comment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $comment = Comment::find($id);

        $this->validate($request, array(
            'comment' => 'required|min:2',
        ));
        $comment->comment = $request->comment;
        $comment->save();

        Session::flash('success', 'The comment was successfully updated!');

        return redirect()->route('posts.show', $comment->post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id) {
        $comment = Comment::find($id);
        return view('comments.delete')->withComment($comment);
    }

    public function destroy($id) {
        $comment = Comment::find($id);
        $post_id = $comment->post->id;
        $comment->delete();
        Session::flash('success', 'Deleted Comment');
        return redirect()->route('posts.show', $post_id);
    }

}
