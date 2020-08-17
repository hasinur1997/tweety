<?php 

namespace App;

trait Followable {
    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    public function following(User $user)
    {   
        return $this->follows->contains($user);
    }

    public function toggleFollow(User $user)
    {
        $this->follows()->toggle($user);
    }

    public function follows()
    {   
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }
}