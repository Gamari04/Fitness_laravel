<?php

namespace App\Policies;

use App\Models\Expense;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ExpensePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        //
    }

    
    public function view(User $user, Expense $expense)
    {
        //
    }

   
    public function create(User $user)
    {
        //
    }

  
    public function update(User $user, Expense $expense): bool
    {
        return $user->id === $expense->user_id;
    }

  
    public function delete(User $user, Expense $expense)
    {
        //
    }

  
    public function restore(User $user, Expense $expense)
    {
        //
    }

   
    public function forceDelete(User $user, Expense $expense)
    {
        //
    }
}
