<?php

namespace App\Traits;

use App\Models\User;

trait Following
{

    // Relasi belongs to many dengan tabel following with timestamps
    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id')->withTimestamps();
    }

    // menampilkan follower
    public function followers()
    {
        return $this->belongsToMany(User::class, 'follows', 'following_user_id', 'user_id')->withTimestamps();
    }

    // function follow untuk menambahkan user yang sedang login sebagai following
    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    // function unfollow
    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }


    // cek apakah kita sudah memfollow user tersebut atau belum
    public function hasFollow(User $user)
    {
        return $this->follows()->where('following_user_id', $user->id)->exists();
    }
}
