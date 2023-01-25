<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $taskList = [
        'first' => 'Eat',
        'second' => 'Work',
        'third' => 'play'
    ];

    public function index() {
        if (request()->search) {
            return $this -> taskList[request()->search];
        } else {
        return $this -> taskList;
        }
    }

    public function show($param) {
        return $this -> taskList;
    }

    public function store(Request $request) {
    $this -> taskList[request()->key] = request()->task;
    return $this -> taskList;
    }

    public function update(Request $request, $key){
        $this -> taskList[request()->key] = request()->task;
        return $this -> taskList;
    }

    public function delete($key) {
        unset($this -> taskList[$key]);
        return $this -> taskList;
    }
}
