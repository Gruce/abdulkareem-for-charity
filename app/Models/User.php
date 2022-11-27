<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;


class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
        'phone_number',
        'telegram_username',
        'gender',
        'type',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];




    // SCOPES
    public function scopeAdmins($query){
        return $query->where('is_admin', true);
    }

    ### Start Relationships ###

    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function shares()
    {
        return $this->hasMany(Share::class);
    }

    public function admin()
    {
        return $this->hasOne(Admin::class);
    }

    ### End Relationships ###

    public function edit($data)    {
        $this->fill($data);
        $this->save();
    }

    public function addProfile($file , $type = null){

        $type = $type ?? 'student';
        $ext = $file->extension();
        $name=\Str::random(10).'.'.$ext;
        $file->storeAs('public/'. $type . '/profile/'. $this->id .'/' ,$name);
        $this->profile_photo_path = 'storage/' . $type . '/profile/'.$this->id.'/'.$name;
        $this->save();
    }
    public function add($data){
        $this->fill($data);
        $this->save();
    }
    public function getShare() {
        return $this->shares()->where('state', true)->sum('share');

    }
    public function pay(){
        return $this->shares()->where('state', false)->get();
    }

    public function getProfilePhotoUrlAttribute()
    {
        return $this->profile_photo_path ?? 'https://www.gravatar.com/avatar/'.md5($this->email).'?s=200&d=mm';
    }



    protected function getShares(): Attribute
    {
        return Attribute::make(
            get: function () {
                $shares = Share:: where('admin_id',$this->id)->where('state', true)->sum('share');
                return $shares;
            }
        );
    }

}
