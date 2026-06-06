<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Assessment;
use App\Models\Question;
use App\Models\Option;
use App\Models\UserAttempt;
use App\Models\Answer;
use App\Models\ResultMapping;
use App\Models\VerificationCode;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Users
        |--------------------------------------------------------------------------
        */

        $user1 = User::create([
            'name' => 'Ahmad',
            'email' => 'ahmad@test.com',
            'phone' => '0999999991',
            'password' => Hash::make('password'),
            'type' => 'student',
        ]);

        $user2 = User::create([
            'name' => 'Sara',
            'email' => 'test@test.com',
            'phone' => '0999999992',
            'password' => Hash::make('password'),
            'type' => 'student',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Assessments
        |--------------------------------------------------------------------------
        */

        $assessment1 = Assessment::create([
            'title' => 'Personality Test',
            'description' => 'Basic personality assessment',
            'status' => 'active',
        ]);

        $assessment2 = Assessment::create([
            'title' => 'Career Test',
            'description' => 'Career orientation test',
            'status' => 'active',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Questions
        |--------------------------------------------------------------------------
        */

        $question1 = Question::create([
            'assessment_id' => $assessment1->id,
            'question_text' => 'Do you enjoy teamwork?',
            'category' => 'social',
            'weight' => 1,
        ]);

        $question2 = Question::create([
            'assessment_id' => $assessment1->id,
            'question_text' => 'Do you prefer planning?',
            'category' => 'behavior',
            'weight' => 1,
        ]);

        /*
        |--------------------------------------------------------------------------
        | Options
        |--------------------------------------------------------------------------
        */

        $option1 = Option::create([
            'question_id' => $question1->id,
            'option_text' => 'Yes',
            'score_value' => 10,
            'tag' => 'extrovert',
        ]);

        $option2 = Option::create([
            'question_id' => $question1->id,
            'option_text' => 'No',
            'score_value' => 5,
            'tag' => 'introvert',
        ]);

        $option3 = Option::create([
            'question_id' => $question2->id,
            'option_text' => 'Always',
            'score_value' => 10,
            'tag' => 'organized',
        ]);

        $option4 = Option::create([
            'question_id' => $question2->id,
            'option_text' => 'Sometimes',
            'score_value' => 5,
            'tag' => 'flexible',
        ]);

        /*
        |--------------------------------------------------------------------------
        | User Attempts
        |--------------------------------------------------------------------------
        */

        $attempt1 = UserAttempt::create([
            'user_id' => $user1->id,
            'assessment_id' => $assessment1->id,
            'total_score' => 20,
            'started_at' => now(),
            'completed_at' => now(),
        ]);

        $attempt2 = UserAttempt::create([
            'user_id' => $user2->id,
            'assessment_id' => $assessment1->id,
            'total_score' => 10,
            'started_at' => now(),
            'completed_at' => now(),
        ]);

        /*
        |--------------------------------------------------------------------------
        | Answers
        |--------------------------------------------------------------------------
        */

        Answer::create([
            'attempt_id' => $attempt1->id,
            'question_id' => $question1->id,
            'option_id' => $option1->id,
        ]);

        Answer::create([
            'attempt_id' => $attempt1->id,
            'question_id' => $question2->id,
            'option_id' => $option3->id,
        ]);

        /*
        |--------------------------------------------------------------------------
        | Result Mapping
        |--------------------------------------------------------------------------
        */

        ResultMapping::create([
            'tag' => 'extrovert',
            'min_score' => 15,
            'max_score' => 30,
            'recommendation' => 'You are suitable for leadership roles.',
        ]);

        ResultMapping::create([
            'tag' => 'introvert',
            'min_score' => 0,
            'max_score' => 14,
            'recommendation' => 'You are suitable for analytical roles.',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Verification Codes
        |--------------------------------------------------------------------------
        */

        VerificationCode::create([
            'user_id' => $user1->id,
            'code' => '1234',
            'type' => 'reset_password',
            'expires_at' => now()->addMinutes(15),
            'used_at' => null,
        ]);

        VerificationCode::create([
            'user_id' => $user2->id,
            'code' => '5678',
            'type' => 'verify_email',
            'expires_at' => now()->addMinutes(15),
            'used_at' => null,
        ]);
    }
}