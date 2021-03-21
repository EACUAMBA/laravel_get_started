<?php


namespace App\Repositories;


use App\Models\Person;

class PersonRepository
{
    protected $people;

    public function __construct()
    {

        $this->people = Person::all();
    }

    public function find()
    {
        return Person::all();
    }

    public function update($person, $oldPerson){
        return $oldPerson->update($person);
    }

    public function save($person)
    {
        return Person::create($person);
    }

    public function delete(Person $person)
    {

        try {

            $person->delete();
            $person->user()->delete();
        } catch (\Exception $e) {

        }
    }
}
