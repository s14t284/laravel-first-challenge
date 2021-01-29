<?php

namespace App\Models;

use App\Scopes\ScopePerson;
use Closure;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:10|max:150'
    );

    public function getData(): string
    {
        return $this->id . '.' . $this->name . ' (' . $this->age . ')';
    }

    public function scopeNameEqual($query, $str)
    {
        return $query->where('name', $str);
    }

    public function scopeAgeLessThan($query, $n)
    {
        return $query->where('age', '<=', $n);
    }

    public function scopeAgeGreaterThan($query, $n)
    {
        return $query->where('age', '>=', $n);
    }

    protected static function boot()
    {
        parent::boot();

        // クロージャを使った場合
        // static::addGlobalScope('age_scope', function (Builder $builder) {
        //     $builder->where('age', '>', 20);
        // });

        // スコープクラスを使った場合
        static::addGlobalScope(new ScopePerson);
    }

}
