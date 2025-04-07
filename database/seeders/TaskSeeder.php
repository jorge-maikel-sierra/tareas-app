<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $task = new Task();
        $task->title = 'Sample Task';
        $task->description = 'This is a sample task description.';
        $task->user_id = User::find(1)->id;
        $task->save();

    }
}
