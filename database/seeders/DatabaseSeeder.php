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
            'password' => Hash::make('password'),
            'type' => 'student',
        ]);

        $user2 = User::create([
            'name' => 'Sara',
            'email' => 'test@test.com',
            'password' => Hash::make('password'),
            'type' => 'student',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Assessments
        |--------------------------------------------------------------------------
        */

        $assessment1 = Assessment::create([
            'titleAr' => 'الهندسة والتكنولوجيا',
            'title' => "Engineering & Technology",
            'description' => 'Basic personality assessment',
            'status' => 'active',
        ]);


        $assessment2 = Assessment::create([
            'titleAr' => 'العلوم الطبية والصحية',
            'title' => "Medical & Health Sciences",
            'description' => 'Career orientation test',
            'status' => 'active',
        ]);
        $assessment3 = Assessment::create([
            'titleAr' => 'العلوم الإدارية والاقتصادية',
            'title' => "Business & Economics",
            'description' => 'Basic personality assessment',
            'status' => 'active',
        ]);


        $assessment4 = Assessment::create([
            'titleAr' => 'الفنون والتصميم',
            'title' => "Arts & Design",
            'description' => 'Career orientation test',
            'status' => 'active',
        ]);
        $assessment5 = Assessment::create([
            'titleAr' => 'العلوم الإنسانية والاجتماعية',
            'title' => "Humanities & Social Sciences",
            'description' => 'Basic personality assessment',
            'status' => 'active',
        ]);



        /*
        |--------------------------------------------------------------------------
        | Questions
        |--------------------------------------------------------------------------
        */
        // 1. العلوم الطبية والصحية - Medical & Health Sciences
        $question2 = Question::create([
            'assessment_id' => $assessment2->id,
            'text' => 'Are you interested in understanding how the human body works?',
            'textAr' => 'هل أنت مهتم بفهم كيفية عمل جسم الإنسان؟',
            'track' => 'Scientific',
            'weight' => 1,
        ]);

        // 2. العلوم الإدارية والاقتصادية - Business & Economics
        $question3 = Question::create([
            'assessment_id' => $assessment3->id,
            'text' => 'Do you enjoy organizing tasks and leading group projects?',
            'textAr' => 'هل تستمتع بتنظيم المهام وقيادة المشاريع الجماعية؟',
            'track' => 'Scientific',
            'weight' => 1,
        ]);

        // 3. الفنون والتصميم - Arts & Design
        $question4 = Question::create([
            'assessment_id' => $assessment4->id,
            'text' => 'Do you prefer expressing your ideas through visuals and drawings?',
            'textAr' => 'هل تفضل التعبير عن أفكارك من خلال الرسومات والمرئيات؟',
            'track' => 'Scientific',
            'weight' => 1,
        ]);

        // 4. العلوم الإنسانية والاجتماعية - Humanities & Social Sciences
        $question5 = Question::create([
            'assessment_id' => $assessment5->id,
            'text' => 'Are you fascinated by history, cultures, and human behavior?',
            'textAr' => 'هل تثير اهتمامك دراسة التاريخ، الثقافات، والسلوك البشري؟',
            'track' => 'Scientific',
            'weight' => 1,
        ]);

        // 5. سؤال إضافي لـ الهندسة والتكنولوجيا لربطها بالبرمجة أو الابتكار
        $question6 = Question::create([
            'assessment_id' => $assessment1->id,
            'text' => 'Do you like solving complex logic puzzles and programming problems?',
            'textAr' => 'هل تحب حل الألغاز المنطقية المعقدة ومشاكل البرمجة؟',
            'track' => 'Scientific',
            'weight' => 1,
        ]);

        // $question2 = Question::create([
        //     'assessment_id' => $assessment1->id,
        //     'text' => 'Do you enjoy teamwork?',
        //     'textAr' => 'أي ﻧﺸﺎط ﻳﺜﻴﺮ ﺣﻤﺎﺳﻚ أﻛﺜﺮ؟',
        //     'track' => 'Scientific',
        //     'weight' => 1,
        // ]);
        // $question3 = Question::create([
        //     'assessment_id' => $assessment1->id,
        //     'text' => 'Do you enjoy teamwork?',
        //     'textAr' => 'أي ﻧﺸﺎط ﻳﺜﻴﺮ ﺣﻤﺎﺳﻚ أﻛﺜﺮ؟',
        //     'track' => 'Scientific',
        //     'weight' => 1,
        // ]);
        // $question4 = Question::create([
        //     'assessment_id' => $assessment1->id,
        //     'text' => 'Do you enjoy teamwork?',
        //     'textAr' => 'أي ﻧﺸﺎط ﻳﺜﻴﺮ ﺣﻤﺎﺳﻚ أﻛﺜﺮ؟',
        //     'track' => 'Scientific',
        //     'weight' => 1,
        // ]);
        // $question5 = Question::create([
        //     'assessment_id' => $assessment1->id,
        //     'text' => 'Do you enjoy teamwork?',
        //     'textAr' => 'أي ﻧﺸﺎط ﻳﺜﻴﺮ ﺣﻤﺎﺳﻚ أﻛﺜﺮ؟',
        //     'track' => 'Scientific',
        //     'weight' => 1,
        // ]);
        // $question6 = Question::create([
        //     'assessment_id' => $assessment1->id,
        //     'text' => 'Do you enjoy teamwork?',
        //     'textAr' => 'أي ﻧﺸﺎط ﻳﺜﻴﺮ ﺣﻤﺎﺳﻚ أﻛﺜﺮ؟',
        //     'track' => 'Scientific',
        //     'weight' => 1,
        // ]);

        /*
        |--------------------------------------------------------------------------
        | Options
        |--------------------------------------------------------------------------
        */
        // for ($i = 0; $i < 6; $i++) {

        //     $option1 = Option::create([
        //         'question_id' => $question1->id - 5 + $i,
        //         'label' => 'Solving a tricky math or logic puzzle',
        //         'labelAr' => 'ﺣﻞ ﻟﻐﺰ رﻳﺎﺿﻲ ﻣﻌﻘﺪ',
        //         'score_value' => 10,
        //         'tag' => 'extrovert',
        //     ]);

        //     $option2 = Option::create([
        //         'question_id' => $question1->id - 5 + $i,
        //         'label' => 'Helping someone recover from illness',
        //         'labelAr' => 'ﻣﺴﺎﻋﺪة ﺷﺨﺺ ﻋﻠﻰ اﻟﺸﻔﺎء',
        //         'score_value' => 5,
        //         'tag' => 'introvert',
        //     ]);
        //     $option3 = Option::create([
        //         'question_id' => $question1->id - 5 + $i,
        //         'label' => 'Designing a poster or short film',
        //         'labelAr' => 'ﺗﺼﻤﻴﻢ ﺑﻮﺳﺘﺮ أو ﻓﻴﻠﻢ ﻗﺼﻴﺮ',
        //         'score_value' => 10,
        //         'tag' => 'extrovert',
        //     ]);

        //     $option4 = Option::create([
        //         'question_id' => $question1->id - 5 + $i,
        //         'label' => 'Debating ideas, history or languages',
        //         'labelAr' => 'اﻟﻨﻘﺎش ﻓﻲ اﻷﻓﻜﺎر واﻟﻠﻐﺎت',
        //         'score_value' => 5,
        //         'tag' => 'introvert',
        //     ]);
        // }
        // ==========================================
        // السؤال الأول (طبي) -> $question2
        // ==========================================
        $opt1_q2 = Option::create(['question_id' => $question2->id, 'label' => 'Highly Interested', 'labelAr' => 'مهتم جداً', 'score_value' => 5, 'tag' => 'Medical']);
        $opt2_q2 = Option::create(['question_id' => $question2->id, 'label' => 'Somewhat Interested', 'labelAr' => 'مهتم نوعاً ما', 'score_value' => 3, 'tag' => 'Medical']);
        $opt3_q2 = Option::create(['question_id' => $question2->id, 'label' => 'Neutral', 'labelAr' => 'محايد', 'score_value' => 1, 'tag' => 'General']);
        $opt4_q2 = Option::create(['question_id' => $question2->id, 'label' => 'Not Interested', 'labelAr' => 'غير مهتم تماماً', 'score_value' => 0, 'tag' => 'General']);

        // توزيع الأوزان للخيار الأول (مهتم جداً بالطب)
        // DB::table('option_assessment_weights')->insert([
        //     ['option_id' => $opt1_q2->id, 'assessment_id' => $assessment2->id, 'weight' => 5], // طبي
        //     ['option_id' => $opt1_q2->id, 'assessment_id' => $assessment1->id, 'weight' => 2], // هندسة (أجهزة طبية مثلاً)
        // ]);

        // ==========================================
        // السؤال الثاني (إداري واقتصادي) -> $question3
        // ==========================================
        $opt1_q3 = Option::create(['question_id' => $question3->id, 'label' => 'Always prefer leading', 'labelAr' => 'أفضل القيادة دائماً', 'score_value' => 5, 'tag' => 'Management']);
        $opt2_q3 = Option::create(['question_id' => $question3->id, 'label' => 'I can lead if needed', 'labelAr' => 'يمكنني القيادة عند الحاجة', 'score_value' => 3, 'tag' => 'Management']);
        $opt3_q3 = Option::create(['question_id' => $question3->id, 'label' => 'I prefer to follow instructions', 'labelAr' => 'أفضل اتباع التعليمات فقط', 'score_value' => 1, 'tag' => 'Routine']);
        $opt4_q3 = Option::create(['question_id' => $question3->id, 'label' => 'I dislike group projects', 'labelAr' => 'لا أحب المشاريع الجماعية', 'score_value' => 0, 'tag' => 'Individual']);

        // توزيع الأوزان للخيار الأول (أفضل القيادة دائماً)
        // DB::table('option_assessment_weights')->insert([
        //     ['option_id' => $opt1_q3->id, 'assessment_id' => $assessment3->id, 'weight' => 5], // إدارة واقتصاد
        //     ['option_id' => $opt1_q3->id, 'assessment_id' => $assessment5->id, 'weight' => 3], // علوم اجتماعية
        // ]);

        // ==========================================
        // السؤال الثالث (فنون وتصميم) -> $question4
        // ==========================================
        $opt1_q4 = Option::create(['question_id' => $question4->id, 'label' => 'Yes, sketches and visuals', 'labelAr' => 'نعم، من خلال الرسومات والمخططات', 'score_value' => 5, 'tag' => 'Creative']);
        $opt2_q4 = Option::create(['question_id' => $question4->id, 'label' => 'Yes, through digital media', 'labelAr' => 'نعم، باستخدام الوسائط الرقمية', 'score_value' => 4, 'tag' => 'Technical_Creative']);
        $opt3_q4 = Option::create(['question_id' => $question4->id, 'label' => 'Sometimes, but I prefer text', 'labelAr' => 'أحياناً، لكني أفضل النصوص والأرقام', 'score_value' => 2, 'tag' => 'Analytical']);
        $opt4_q4 = Option::create(['question_id' => $question4->id, 'label' => 'No, I prefer verbal communication', 'labelAr' => 'لا، أفضل التواصل اللفظي المباشر', 'score_value' => 0, 'tag' => 'Verbal']);

        // توزيع الأوزان للخيار الثاني (الوسائط الرقمية)
        // DB::table('option_assessment_weights')->insert([
        //     ['option_id' => $opt2_q4->id, 'assessment_id' => $assessment4->id, 'weight' => 5], // فنون وتصميم
        //     ['option_id' => $opt2_q4->id, 'assessment_id' => $assessment1->id, 'weight' => 3], // هندسة وتكنولوجيا (تصميم واجهات/برمجة مرئية)
        // ]);

        // ==========================================
        // السؤال الرابع (إنساني واجتماعي) -> $question5
        // ==========================================
        $opt1_q5 = Option::create(['question_id' => $question5->id, 'label' => 'Fascinated by all of them', 'labelAr' => 'تستهويني جداً كلها', 'score_value' => 5, 'tag' => 'Social']);
        $opt2_q5 = Option::create(['question_id' => $question5->id, 'label' => 'Interested only in history', 'labelAr' => 'مهتم بالتاريخ فقط', 'score_value' => 3, 'tag' => 'History']);
        $opt3_q5 = Option::create(['question_id' => $question5->id, 'label' => 'Interested only in human behavior', 'labelAr' => 'مهتم بسلوك ومشاكل البشر فقط', 'score_value' => 4, 'tag' => 'Behavioral']);
        $opt4_q5 = Option::create(['question_id' => $question5->id, 'label' => 'Not interested in these topics', 'labelAr' => 'لا تهمني هذه المواضيع', 'score_value' => 0, 'tag' => 'General']);

        // توزيع الأوزان للخيار الثالث (مهتم بسلوك البشر)
        // DB::table('option_assessment_weights')->insert([
        //     ['option_id' => $opt3_q5->id, 'assessment_id' => $assessment5->id, 'weight' => 5], // علوم إنسانية واجتماعية
        //     ['option_id' => $opt3_q5->id, 'assessment_id' => $assessment2->id, 'weight' => 2], // علوم طبية (طب نفسي وسلوكي)
        // ]);

        // ==========================================
        // السؤال الخامس (هندسي وتقني) -> $question6
        // ==========================================
        $opt1_q6 = Option::create(['question_id' => $question6->id, 'label' => 'I love solving complex puzzles', 'labelAr' => 'أعشق حل الألغاز المعقدة', 'score_value' => 5, 'tag' => 'Logic']);
        $opt2_q6 = Option::create(['question_id' => $question6->id, 'label' => 'I enjoy logical thinking occasionally', 'labelAr' => 'أستمتع بالتفكير المنطقي أحياناً', 'score_value' => 3, 'tag' => 'Logic']);
        $opt3_q6 = Option::create(['question_id' => $question6->id, 'label' => 'I prefer simple straightforward tasks', 'labelAr' => 'أفضل المهام البسيطة والمباشرة', 'score_value' => 1, 'tag' => 'Routine']);
        $opt4_q6 = Option::create(['question_id' => $question6->id, 'label' => 'I completely avoid logic puzzles', 'labelAr' => 'أتجنب الألغاز المنطقية تماماً', 'score_value' => 0, 'tag' => 'Non_Technical']);

        // توزيع الأوزان للخيار الأول (أعشق حل الألغاز المعقدة)
        // DB::table('option_assessment_weights')->insert([
        //     ['option_id' => $opt1_q6->id, 'assessment_id' => $assessment1->id, 'weight' => 5], // هندسة وتكنولوجيا
        //     ['option_id' => $opt1_q6->id, 'assessment_id' => $assessment3->id, 'weight' => 3], // إدارة واقتصاد (تحليل بيانات مالي)
        // ]);

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

        // Answer::create([
        //     'attempt_id' => $attempt1->id,
        //     'question_id' => $question1->id,
        //     'option_id' => $option1->id,
        // ]);

        // Answer::create([
        //     'attempt_id' => $attempt1->id,
        //     'question_id' => $question1->id,
        //     'option_id' => $option3->id,
        // ]);

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
            'type' => 'email_verification',
            'expires_at' => now()->addMinutes(15),
            'used_at' => null,
        ]);
    }
}










// {
//   "categories": [
//     {
//       "category_title_ar": "الهندسة والتكنولوجيا",
//       "category_title_en": "Engineering & Technology",
//       "majors": [
//         {
//           "title_ar": "الهندسة والتقنية",
//           "title_en": "Engineering & Technology",
//           "description": "تخصصات مبتكرة لتصميم وبناء المستقبل الرقمي والمادي."
//         },
//         {
//           "title_ar": "هندسة الكمبيوتر",
//           "title_en": "Computer Engineering",
//           "description": "دمج الأجهزة والبرمجيات لتطوير الأنظمة الحاسوبية الذكية."
//         },
//         {
//           "title_ar": "هندسة البرمجيات",
//           "title_en": "Software Engineering",
//           "description": "بناء وتطوير وإدارة التطبيقات والأنظمة البرمجية المعقدة."
//         },
//         {
//           "title_ar": "الهندسة الكهربائية",
//           "title_en": "Electrical Engineering",
//           "description": "دراسة الطاقة والتحكم وأنظمة الاتصالات والدوائر الإلكترونية."
//         },
//         {
//           "title_ar": "تكنولوجيا المعلومات",
//           "title_en": "Information Technology - IT",
//           "description": "إدارة شبكات الحاسوب وحمايتها ونقل البيانات وتخزينها."
//         }
//       ]
//     },
//     {
//       "category_title_ar": "العلوم الطبية والصحية",
//       "category_title_en": "Medical & Health Sciences",
//       "majors": [
//         {
//           "title_ar": "الطب والرعاية الصحية",
//           "title_en": "Medicine & Health Sciences",
//           "description": "مجالات إنسانية تهدف لحماية صحة المجتمع وعلاج الأمراض."
//         },
//         {
//           "title_ar": "الطب البشري",
//           "title_en": "Human Medicine",
//           "description": "تشخيص الأمراض وتقديم العلاج والرعاية الطبية الشاملة والمركّزة."
//         },
//         {
//           "title_ar": "الصيدلة",
//           "title_en": "Pharmacy",
//           "description": "تركيب الأدوية وفهم تفاعلاتها الكيميائية وتأثيرها على الجسم."
//         },
//         {
//           "title_ar": "طب الأسنان",
//           "title_en": "Dentistry",
//           "description": "رعاية وصحة الفم والأسنان وتجميلها وعلاج مشكلاتها."
//         },
//         {
//           "title_ar": "التمريض",
//           "title_en": "Nursing",
//           "description": "تقديم الرعاية المباشرة للمرضى ودعم المنظومة الطبية كاملة."
//         }
//       ]
//     },
//     {
//       "category_title_ar": "العلوم الإدارية والاقتصادية",
//       "category_title_en": "Business & Economics",
//       "majors": [
//         {
//           "title_ar": "الإدارة والاقتصاد",
//           "title_en": "Business & Economics",
//           "description": "دراسة عالم المال والأعمال وكيفية إدارة المؤسسات بنجاح."
//         },
//         {
//           "title_ar": "إدارة الأعمال",
//           "title_en": "Business Administration",
//           "description": "تنظيم وتوجيه الشركات واتخاذ القرارات الاستراتيجية الذكية."
//         },
//         {
//           "title_ar": "الاقتصاد",
//           "title_en": "Economics",
//           "description": "تحليل إنتاج وتوزيع واستهلاك السلع والخدمات محلياً وعالمياً."
//         },
//         {
//           "title_ar": "المحاسبة",
//           "title_en": "Accounting",
//           "description": "تسجيل وتدقيق العمليات المالية وإعداد التقارير الضريبية والميزانيات."
//         },
//         {
//           "title_ar": "التسويق",
//           "title_en": "Marketing",
//           "description": "دراسة الأسواق وجذب العملاء وترويج المنتجات والخدمات بذكاء."
//         }
//       ]
//     },
//     {
//       "category_title_ar": "الفنون والتصميم",
//       "category_title_en": "Arts & Design",
//       "majors": [
//         {
//           "title_ar": "الإبداع والتصميم",
//           "title_en": "Arts & Design",
//           "description": "مسارات تجمع بين الموهبة الفنية والمهارة التقنية التطبيقية."
//         },
//         {
//           "title_ar": "الهندسة المعمارية",
//           "title_en": "Architecture",
//           "description": "تخطيط وتصميم وتشييد المباني والمنشآت بشكل جمالي ووظيفي."
//         },
//         {
//           "title_ar": "الفنون الجميلة",
//           "title_en": "Fine Arts",
//           "description": "التعبير الإبداعي الكلاسيكي من خلال الرسم والنحت والخزف."
//         },
//         {
//           "title_ar": "التصميم الجرافيكي",
//           "title_en": "Graphic Design",
//           "description": "ابتكار الهويات البصرية والإعلانات باستخدام البرامج الرقمية الحديثة."
//         },
//         {
//           "title_ar": "الإنتاج الإعلامي",
//           "title_en": "Media Production",
//           "description": "صناعة المحتوى المرئي والمسموع وإخراج الأفلام والبرامج."
//         }
//       ]
//     },
//     {
//       "category_title_ar": "العلوم الإنسانية والاجتماعية",
//       "category_title_en": "Humanities & Social Sciences",
//       "majors": [
//         {
//           "title_ar": "المجتمع والثقافة",
//           "title_en": "Humanities & Social Sciences",
//           "description": "دراسة السلوك البشري والقوانين واللغات التي تحكم العالم."
//         },
//         {
//           "title_ar": "القانون",
//           "title_en": "Law",
//           "description": "فهم التشريعات والأنظمة وتحقيق العدالة والدفاع عن الحقوق."
//         },
//         {
//           "title_ar": "اللغات والترجمة",
//           "title_en": "Languages & Translation",
//           "description": "دراسة الآداب ونقل المعارف والاتصال بين الثقافات المختلفة."
//         },
//         {
//           "title_ar": "التاريخ",
//           "title_en": "History",
//           "description": "توثيق وتحليل الأحداث الماضية لفهم الحاضر واستشراف المستقبل."
//         },
//         {
//           "title_ar": "الصحافة",
//           "title_en": "Journalism",
//           "description": "البحث عن الحقائق ونشر الأخبار وصياغة الرأي العام بمهنية."
//         }
//       ]
//     }
//   ]
// }
// ==========================================
// السؤال الأول (طبي) -> $question2
// ==========================================
// $opt1_q2 = Option::create(['question_id' => $question2->id, 'text' => 'Highly Interested', 'textAr' => 'مهتم جداً'
// $opt2_q2 = Option::create(['question_id' => $question2->id, 'text' => 'Somewhat Interested', 'textAr' => 'مهتم نوعاً ما'
// $opt3_q2 = Option::create(['question_id' => $question2->id, 'text' => 'Neutral', 'textAr' => 'محايد'
// $opt4_q2 = Option::create(['question_id' => $question2->id, 'text' => 'Not Interested', 'textAr' => 'غير مهتم تماماً'

// // توزيع الأوزان الإضافية بين الأقسام
// DB::table('option_assessment_weights')->insert([
//     ['option_id' => $opt1_q2->id, 'assessment_id' => $assessment2->id, 'weight' => 5],
//     ['option_id' => $opt1_q2->id, 'assessment_id' => $assessment1->id, 'weight' => 2],
// ]);

// // ==========================================
// // السؤال الثاني (إداري واقتصادي) -> $question3
// // ==========================================
// $opt1_q3 = Option::create(['question_id' => $question3->id, 'text' => 'Always prefer leading', 'textAr' => 'أفضل القيادة دائماً'
// $opt2_q3 = Option::create(['question_id' => $question3->id, 'text' => 'I can lead if needed', 'textAr' => 'يمكنني القيادة عند الحاجة'
// $opt3_q3 = Option::create(['question_id' => $question3->id, 'text' => 'I prefer to follow instructions', 'textAr' => 'أفضل اتباع التعليمات فقط'
// $opt4_q3 = Option::create(['question_id' => $question3->id, 'text' => 'I dislike group projects', 'textAr' => 'لا أحب المشاريع الجماعية'

// DB::table('option_assessment_weights')->insert([
//     ['option_id' => $opt1_q3->id, 'assessment_id' => $assessment3->id, 'weight' => 5],
//     ['option_id' => $opt1_q3->id, 'assessment_id' => $assessment5->id, 'weight' => 3],
// ]);

// // ==========================================
// // السؤال الثالث (فنون وتصميم) -> $question4
// // ==========================================
// $opt1_q4 = Option::create(['question_id' => $question4->id, 'text' => 'Yes, sketches and visuals', 'textAr' => 'نعم، من خلال الرسومات والمخططات'
// $opt2_q4 = Option::create(['question_id' => $question4->id, 'text' => 'Yes, through digital media', 'textAr' => 'نعم، باستخدام الوسائط الرقمية'
// $opt3_q4 = Option::create(['question_id' => $question4->id, 'text' => 'Sometimes, but I prefer text', 'textAr' => 'أحياناً، لكني أفضل النصوص والأرقام'
// $opt4_q4 = Option::create(['question_id' => $question4->id, 'text' => 'No, I prefer verbal communication', 'textAr' => 'لا، أفضل التواصل اللفظي المباشر'

// DB::table('option_assessment_weights')->insert([
//     ['option_id' => $opt2_q4->id, 'assessment_id' => $assessment4->id, 'weight' => 5],
//     ['option_id' => $opt2_q4->id, 'assessment_id' => $assessment1->id, 'weight' => 3],
// ]);

// // ==========================================
// // السؤال الرابع (إنساني واجتماعي) -> $question5
// // ==========================================
// $opt1_q5 = Option::create(['question_id' => $question5->id, 'text' => 'Fascinated by all of them', 'textAr' => 'تستهويني جداً كلها'
// $opt2_q5 = Option::create(['question_id' => $question5->id, 'text' => 'Interested only in history', 'textAr' => 'مهتم بالتاريخ فقط'
// $opt3_q5 = Option::create(['question_id' => $question5->id, 'text' => 'Interested only in human behavior', 'textAr' => 'مهتم بسلوك ومشاكل البشر فقط'
// $opt4_q5 = Option::create(['question_id' => $question5->id, 'text' => 'Not interested in these topics', 'textAr' => 'لا تهمني هذه المواضيع'

// DB::table('option_assessment_weights')->insert([
//     ['option_id' => $opt3_q5->id, 'assessment_id' => $assessment5->id, 'weight' => 5],
//     ['option_id' => $opt3_q5->id, 'assessment_id' => $assessment2->id, 'weight' => 2],
// ]);

// // ==========================================
// // السؤال الخامس (هندسي وتقني) -> $question6
// // ==========================================
// $opt1_q6 = Option::create(['question_id' => $question6->id, 'text' => 'I love solving complex puzzles', 'textAr' => 'أعشق حل الألغاز المعقدة'
// $opt2_q6 = Option::create(['question_id' => $question6->id, 'text' => 'I enjoy logical thinking occasionally', 'textAr' => 'أستمتع بالتفكير المنطقي أحياناً'
// $opt3_q6 = Option::create(['question_id' => $question6->id, 'text' => 'I prefer simple straightforward tasks', 'textAr' => 'أفضل المهام البسيطة والمباشرة'
// $opt4_q6 = Option::create(['question_id' => $question6->id, 'text' => 'I completely avoid logic puzzles', 'textAr' => 'أتجنب الألغاز المنطقية تماماً'

// DB::table('option_assessment_weights')->insert([
//     ['option_id' => $opt1_q6->id, 'assessment_id' => $assessment1->id, 'weight' => 5],
//     ['option_id' => $opt1_q6->id, 'assessment_id' => $assessment3->id, 'weight' => 3],
// ]);





// ==========================================
// السؤال الأول (طبي) -> $question2
// ==========================================
// $opt1_q2 = Option::create(['question_id' => $question2->id, 'text' => 'Highly Interested', 'textAr' => 'مهتم جداً', 'score_value' => 5, 'tag' => 'Medical']);
// $opt2_q2 = Option::create(['question_id' => $question2->id, 'text' => 'Somewhat Interested', 'textAr' => 'مهتم نوعاً ما', 'score_value' => 3, 'tag' => 'Medical']);
// $opt3_q2 = Option::create(['question_id' => $question2->id, 'text' => 'Neutral', 'textAr' => 'محايد', 'score_value' => 1, 'tag' => 'General']);
// $opt4_q2 = Option::create(['question_id' => $question2->id, 'text' => 'Not Interested', 'textAr' => 'غير مهتم تماماً', 'score_value' => 0, 'tag' => 'General']);

// DB::table('option_assessment_weights')->insert([
//     ['option_id' => $opt1_q2->id, 'assessment_id' => $assessment2->id, 'weight' => 5],
//     ['option_id' => $opt1_q2->id, 'assessment_id' => $assessment1->id, 'weight' => 2],
// ]);

// // ==========================================
// // السؤال الثاني (إداري واقتصادي) -> $question3
// // ==========================================
// $opt1_q3 = Option::create(['question_id' => $question3->id, 'text' => 'Always prefer leading', 'textAr' => 'أفضل القيادة دائماً', 'score_value' => 5, 'tag' => 'Management']);
// $opt2_q3 = Option::create(['question_id' => $question3->id, 'text' => 'I can lead if needed', 'textAr' => 'يمكنني القيادة عند الحاجة', 'score_value' => 3, 'tag' => 'Management']);
// $opt3_q3 = Option::create(['question_id' => $question3->id, 'text' => 'I prefer to follow instructions', 'textAr' => 'أفضل اتباع التعليمات فقط', 'score_value' => 1, 'tag' => 'Routine']);
// $opt4_q3 = Option::create(['question_id' => $question3->id, 'text' => 'I dislike group projects', 'textAr' => 'لا أحب المشاريع الجماعية', 'score_value' => 0, 'tag' => 'Individual']);

// DB::table('option_assessment_weights')->insert([
//     ['option_id' => $opt1_q3->id, 'assessment_id' => $assessment3->id, 'weight' => 5],
//     ['option_id' => $opt1_q3->id, 'assessment_id' => $assessment5->id, 'weight' => 3],
// ]);

// // ==========================================
// // السؤال الثالث (فنون وتصميم) -> $question4
// // ==========================================
// $opt1_q4 = Option::create(['question_id' => $question4->id, 'text' => 'Yes, sketches and visuals', 'textAr' => 'نعم، من خلال الرسومات والمخططات', 'score_value' => 5, 'tag' => 'Creative']);
// $opt2_q4 = Option::create(['question_id' => $question4->id, 'text' => 'Yes, through digital media', 'textAr' => 'نعم، باستخدام الوسائط الرقمية', 'score_value' => 4, 'tag' => 'Technical_Creative']);
// $opt3_q4 = Option::create(['question_id' => $question4->id, 'text' => 'Sometimes, but I prefer text', 'textAr' => 'أحياناً، لكني أفضل النصوص والأرقام', 'score_value' => 2, 'tag' => 'Analytical']);
// $opt4_q4 = Option::create(['question_id' => $question4->id, 'text' => 'No, I prefer verbal communication', 'textAr' => 'لا، أفضل التواصل اللفظي المباشر', 'score_value' => 0, 'tag' => 'Verbal']);

// DB::table('option_assessment_weights')->insert([
//     ['option_id' => $opt2_q4->id, 'assessment_id' => $assessment4->id, 'weight' => 5],
//     ['option_id' => $opt2_q4->id, 'assessment_id' => $assessment1->id, 'weight' => 3],
// ]);

// // ==========================================
// // السؤال الرابع (إنساني واجتماعي) -> $question5
// // ==========================================
// $opt1_q5 = Option::create(['question_id' => $question5->id, 'text' => 'Fascinated by all of them', 'textAr' => 'تستهويني جداً كلها', 'score_value' => 5, 'tag' => 'Social']);
// $opt2_q5 = Option::create(['question_id' => $question5->id, 'text' => 'Interested only in history', 'textAr' => 'مهتم بالتاريخ فقط', 'score_value' => 3, 'tag' => 'History']);
// $opt3_q5 = Option::create(['question_id' => $question5->id, 'text' => 'Interested only in human behavior', 'textAr' => 'مهتم بسلوك ومشاكل البشر فقط', 'score_value' => 4, 'tag' => 'Behavioral']);
// $opt4_q5 = Option::create(['question_id' => $question5->id, 'text' => 'Not interested in these topics', 'textAr' => 'لا تهمني هذه المواضيع', 'score_value' => 0, 'tag' => 'General']);

// DB::table('option_assessment_weights')->insert([
//     ['option_id' => $opt3_q5->id, 'assessment_id' => $assessment5->id, 'weight' => 5],
//     ['option_id' => $opt3_q5->id, 'assessment_id' => $assessment2->id, 'weight' => 2],
// ]);

// // ==========================================
// // السؤال الخامس (هندسي وتقني) -> $question6
// // ==========================================
// $opt1_q6 = Option::create(['question_id' => $question6->id, 'text' => 'I love solving complex puzzles', 'textAr' => 'أعشق حل الألغاز المعقدة', 'score_value' => 5, 'tag' => 'Logic']);
// $opt2_q6 = Option::create(['question_id' => $question6->id, 'text' => 'I enjoy logical thinking occasionally', 'textAr' => 'أستمتع بالتفكير المنطقي أحياناً', 'score_value' => 3, 'tag' => 'Logic']);
// $opt3_q6 = Option::create(['question_id' => $question6->id, 'text' => 'I prefer simple straightforward tasks', 'textAr' => 'أفضل المهام البسيطة والمباشرة', 'score_value' => 1, 'tag' => 'Routine']);
// $opt4_q6 = Option::create(['question_id' => $question6->id, 'text' => 'I completely avoid logic puzzles', 'textAr' => 'أتجنب الألغاز المنطقية تماماً', 'score_value' => 0, 'tag' => 'Non_Technical']);

// DB::table('option_assessment_weights')->insert([
//     ['option_id' => $opt1_q6->id, 'assessment_id' => $assessment1->id, 'weight' => 5],
//     ['option_id' => $opt1_q6->id, 'assessment_id' => $assessment3->id, 'weight' => 3],
// ]);
