<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class VendaPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function list (User $user) {
        return \Auth::user()->tipo == 'funcionario';
    }

    public function create(User $user) {
        return \Auth::user()->tipo == 'cliente';
    }
}
