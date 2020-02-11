<?php
  
  namespace App;
  
  use Illuminate\Foundation\Auth\User as Authenticatable;
  use Illuminate\Notifications\Notifiable;
  
  class User extends Authenticatable
  {
    use Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'name', 'email', 'password', 'team_id'
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
      'password', 'remember_token',
    ];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
      'email_verified_at' => 'datetime',
    ];
    
    public function categories()
    {
      return $this->hasMany(Category::class);
    }
  
    public function goals()
    {
      return $this->hasMany(Goal::class);
    }
  
    public function team()
    {
      return $this->belongsTo(Team::class);
    }
  }
