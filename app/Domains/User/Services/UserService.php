<?php

namespace Mehnat\User\Services;

class UserService
{
    public function filter($query)
    {
        $user_name = request()->get('user_name', false);

        if ($user_name){
            $query = $query->where('username', '=', $user_name);
        }
        
        return $query;
    }

    public function sort($query)
    {
        $key = request()->get('sort_key','username');
        $order = request()->get('sort_order', 'asc');

        return $query->orderBy($key, $order);
       
    }

    public function notify($user, string $type)
    {
        $strategy = (new NotificationStrategy)->getStrategy($type);
        $strategy->send();
    }
}