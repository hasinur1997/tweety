<?php 

namespace App;

use Illuminate\Database\Eloquent\Builder;

trait Likeable {

    public function scopeWithLikes(Builder $query)
    {
        $query->leftJoinSub(
            'select tweet_id, sum(liked) as likes, sum(!liked) as dislikes from likes group by tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id'
        );
    }

    public function like( $user = null, $liked = true )
    {
        $this->likes()->updateOrCreate([
            'user_id'   => $user ? $user->id : auth()->id(),
        ], [
            'liked'     =>  $liked
        ]);
    }

    public function dislike($user = null)
    {
        return $this->like($user, false);
    }

    public function isLikedBy(User $user)
    {
        return (bool) $user->likes
            ->where( 'tweet_id', $this->id )
            ->where('liked', true)
            ->count();
    }

    public function isDisLikedBy(User $user)
    {
        return (bool) $user->likes
            ->where( 'tweet_id', $this->id )
            ->where('liked', false)
            ->count();
    }
}