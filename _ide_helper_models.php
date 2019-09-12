<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\UserEmail
 *
 * @property int $id
 * @property string $email
 * @property int $user_id
 * @property int $primary
 * @property \Illuminate\Support\Carbon|null $verified_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserEmail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserEmail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserEmail query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserEmail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserEmail whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserEmail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserEmail wherePrimary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserEmail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserEmail whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserEmail whereVerifiedAt($value)
 */
	class UserEmail extends \Eloquent {}
}

