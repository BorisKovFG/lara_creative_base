<?php


namespace App\Services\Post;


use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

class Service
{
    public function store($data)
    {
        $dataTag = $data['tags'];
        unset($data['tags']);
        $post = new Post($data);
        $post->save();
        $post->tags()->attach($dataTag);
        return $post;
    }

    public function update($post, $data)
    {
        $dataTag = $data['tags'];
        unset($data['tags']);
        $post->fill($data);
        $post->save();
        if (!$post->tags) {
            $post->tags()->attach($dataTag);
        }
        $post->tags()->sync($dataTag);
    }

    public function destroy($post)
    {
        if ($post->tags) {
            $post->tags()->sync([]);
        }
        $post->delete();
    }
}
