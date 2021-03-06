<?php
/**
 * Created by PhpStorm.
 * User: pixco
 * Date: 08/05/2017
 * Time: 11:41 PM
 */

namespace App\Services;


use App\Repositories\Criterias\GroupOwnershipCriteria;
use App\Repositories\Criterias\NameCriteria;
use App\Repositories\Criterias\SortCriteria;
use App\Repositories\Criterias\UserOwnershipCriteria;
use App\Repositories\Criterias\UserOwnershipThroughGroupCriteria;
use App\Repositories\GroupRepository;
use App\Repositories\StudentRepository;
use App\Student;
use Illuminate\Http\Request;

class StudentService
{

    private $students;
    private $groups;

    function __construct(StudentRepository $studentRepository, GroupRepository $groupRepository)
    {
        $this->students = $studentRepository;
        $this->groups = $groupRepository;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function get(Request $request)
    {
        $this->students->pushCriteria(new UserOwnershipThroughGroupCriteria($request->user()->id));

        $this->students->pushCriteria(new SortCriteria('id'));

        if($request->has('name')){
            $this->students->pushCriteria(new NameCriteria($request->get('name'), 'students'));
        }

        if($request->has('group')){
            $this->students->pushCriteria(new GroupOwnershipCriteria($request->get('group')));
        }

        if($request->has('size')){
            return $this->students->paginate($request->get('size'));
        }

        if($request->has('page')){
            return $this->students->paginate();
        }

        return $this->students->all();
    }

    /**
     * @param Request $request
     * @return Student
     */
    public function save(Request $request)
    {
        $group = $this->groups->find($request->get('group'));
        $student = new Student();
        $student->fill($request->only(['name', 'age']));
        $student->group()->associate($group);
        $student->save();
        return $student;
    }

    public function update(Request $request, Student $student)
    {
        $group = $this->groups->find($request->get('group'));
        $student->fill($request->only(['name', 'age']));
        $student->group()->associate($group);
        $student->save();
        return $student;
    }

    public function delete(Student $student)
    {
        $student->delete();
    }
}