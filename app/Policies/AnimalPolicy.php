<?php

namespace App\Policies;

use App\Models\Animal;
use App\Models\User;

class AnimalPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Allow user to view the animal if it's theirs, or if admin.
     */
    public function view(User $user, Animal $animal): bool
    {
        return $user->id === $animal->user_id || $user->is_admin;
    }

    /**
     * Allow all users to create animals.
     */
    public function create(User $user): bool
    {
        return true; // All users can create animals
    }

    /**
     * Allow user to update the animal if it's theirs, or if admin.
     */
    public function update(User $user, Animal $animal): bool
    {
        return $user->id === $animal->user_id || $user->is_admin;
    }

    /**
     * Allow user to delete the animal if it's theirs, or if admin.
     */
    public function delete(User $user, Animal $animal): bool
    {
        return $user->id === $animal->user_id || $user->is_admin;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Animal $animal): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Animal $animal): bool
    {
        return $user->id === $animal->user_id || $user->is_admin;
    }
}
