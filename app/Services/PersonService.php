<?php


namespace App\Services;


use App\Http\Requests\PersonRequest;
use App\Models\Person;
use App\Models\User;
use App\Repositories\PersonRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PersonService
{
    protected $personRepository;
    public function __construct(PersonRepository $personRepository)
    {
        $this->personRepository = $personRepository;
    }

    public function all()
    {
        return $this->personRepository->find();
    }

    public function update($person, $oldPerson){
        return $this->personRepository->update($person, $oldPerson);
    }

    public function store(PersonRequest $personRequest)
    {


            $email = $personRequest->email;
            $password = Hash::make($personRequest->password);
            $name = $personRequest->name;


            $user = new User();
            $user->name = $name;
            $user->email = $email;
            $user->password=$password;
            $user->save();


            $user->person()->create($personRequest->only([
                'name',
                'born_date',
                'state',
                'salary',
                'bi',
                'permission_id'
            ]));

            Auth::login($user);

            return $user->person();
    }

    public function delete(Person $person)
    {

        $this->personRepository->delete($person);

    }
}
