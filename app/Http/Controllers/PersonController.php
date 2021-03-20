<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Models\Person;
use App\Services\PersonService;
use Illuminate\Support\Facades\Auth;

class PersonController extends Controller
{
    protected $personService;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(PersonService $personService)
    {
        $this->personService = $personService;
    }

    public function index()
    {
        return view('person.index', [
            'people'=>$this->personService->all(),
            'user'=>Auth::user()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('person.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PersonRequest $personRequest
     * @return \Illuminate\Http\Response
     */
    public function store(PersonRequest $personRequest)
    {
        $result = $this->personService->store($personRequest);

        return redirect(route('person.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {

        return view('person.edit', [
            'person'=>$person,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PersonRequest $personRequest
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(PersonRequest $personRequest, Person $person)
    {

        $savedPerson = $this->personService->update($personRequest->all(), $person);
        return redirect(route('person.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        $this->personService->delete($person);

        return redirect(route('person.index'));
    }
}
