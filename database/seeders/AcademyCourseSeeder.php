<?php

namespace Database\Seeders;

use App\Models\AcademyCourse;
use Illuminate\Database\Seeder;

class AcademyCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Individual Courses
        $courses = [
            [
                'title' => 'Web Development Fundamentals',
                'slug' => 'web-development-fundamentals',
                'description' => 'Learn the basics of HTML, CSS, and JavaScript',
                'duration' => '4 weeks',
                'format' => 'online',
                'price' => 99,
                'includes_certificate' => true,
                'is_free' => false,
                'is_bootcamp' => false,
                'sort_order' => 1,
            ],
            [
                'title' => 'Frontend Development (React)',
                'slug' => 'frontend-development-react',
                'description' => 'Master React.js and modern frontend development',
                'duration' => '6 weeks',
                'format' => 'online',
                'price' => 149,
                'includes_certificate' => true,
                'is_free' => false,
                'is_bootcamp' => false,
                'sort_order' => 2,
            ],
            [
                'title' => 'Backend Development (Node.js/Python)',
                'slug' => 'backend-development-nodejs-python',
                'description' => 'Build robust backend applications with Node.js or Python',
                'duration' => '6 weeks',
                'format' => 'online',
                'price' => 149,
                'includes_certificate' => true,
                'is_free' => false,
                'is_bootcamp' => false,
                'sort_order' => 3,
            ],
            [
                'title' => 'Full Stack Development (Complete)',
                'slug' => 'full-stack-development-complete',
                'description' => 'Complete full-stack development program',
                'duration' => '12 weeks',
                'format' => 'online',
                'price' => 299,
                'includes_certificate' => true,
                'is_free' => false,
                'is_bootcamp' => false,
                'sort_order' => 4,
            ],
            [
                'title' => 'UI/UX Design Fundamentals',
                'slug' => 'ui-ux-design-fundamentals',
                'description' => 'Introduction to user interface and user experience design',
                'duration' => '4 weeks',
                'format' => 'online',
                'price' => 99,
                'includes_certificate' => true,
                'is_free' => false,
                'is_bootcamp' => false,
                'sort_order' => 5,
            ],
            [
                'title' => 'Data Science & Analytics',
                'slug' => 'data-science-analytics',
                'description' => 'Learn data analysis and machine learning basics',
                'duration' => '8 weeks',
                'format' => 'online',
                'price' => 199,
                'includes_certificate' => true,
                'is_free' => false,
                'is_bootcamp' => false,
                'sort_order' => 6,
            ],
            [
                'title' => 'Cybersecurity Basics',
                'slug' => 'cybersecurity-basics',
                'description' => 'Introduction to cybersecurity fundamentals',
                'duration' => '5 weeks',
                'format' => 'online',
                'price' => 129,
                'includes_certificate' => true,
                'is_free' => false,
                'is_bootcamp' => false,
                'sort_order' => 7,
            ],
            [
                'title' => 'Mobile App Development (Flutter)',
                'slug' => 'mobile-app-development-flutter',
                'description' => 'Build cross-platform mobile apps with Flutter',
                'duration' => '6 weeks',
                'format' => 'online',
                'price' => 149,
                'includes_certificate' => true,
                'is_free' => false,
                'is_bootcamp' => false,
                'sort_order' => 8,
            ],
            [
                'title' => 'AI & Machine Learning Intro',
                'slug' => 'ai-machine-learning-intro',
                'description' => 'Introduction to artificial intelligence and machine learning',
                'duration' => '8 weeks',
                'format' => 'online',
                'price' => 249,
                'includes_certificate' => true,
                'is_free' => false,
                'is_bootcamp' => false,
                'sort_order' => 9,
            ],
            [
                'title' => 'Product Management for Tech',
                'slug' => 'product-management-tech',
                'description' => 'Product management principles for technology products',
                'duration' => '4 weeks',
                'format' => 'online',
                'price' => 99,
                'includes_certificate' => true,
                'is_free' => false,
                'is_bootcamp' => false,
                'sort_order' => 10,
            ],
            [
                'title' => 'DevOps Fundamentals',
                'slug' => 'devops-fundamentals',
                'description' => 'Learn DevOps practices and tools',
                'duration' => '5 weeks',
                'format' => 'online',
                'price' => 149,
                'includes_certificate' => true,
                'is_free' => false,
                'is_bootcamp' => false,
                'sort_order' => 11,
            ],
            [
                'title' => 'Cloud Computing (AWS/Azure)',
                'slug' => 'cloud-computing-aws-azure',
                'description' => 'Master cloud computing with AWS and Azure',
                'duration' => '6 weeks',
                'format' => 'online',
                'price' => 199,
                'includes_certificate' => true,
                'is_free' => false,
                'is_bootcamp' => false,
                'sort_order' => 12,
            ],
        ];

        foreach ($courses as $course) {
            AcademyCourse::create($course);
        }

        // Bootcamps
        $bootcamps = [
            [
                'title' => 'Full Stack Immersive',
                'slug' => 'full-stack-immersive',
                'description' => 'Intensive full-stack development bootcamp',
                'duration' => '12 weeks (full-time)',
                'format' => 'in_person_virtual',
                'price' => 1499,
                'includes_certificate' => true,
                'is_free' => false,
                'is_bootcamp' => true,
                'sort_order' => 13,
            ],
            [
                'title' => 'Data Science Intensive',
                'slug' => 'data-science-intensive',
                'description' => 'Comprehensive data science bootcamp',
                'duration' => '10 weeks (full-time)',
                'format' => 'virtual',
                'price' => 1299,
                'includes_certificate' => true,
                'is_free' => false,
                'is_bootcamp' => true,
                'sort_order' => 14,
            ],
            [
                'title' => 'UI/UX Career Track',
                'slug' => 'ui-ux-career-track',
                'description' => 'Career-focused UI/UX design program',
                'duration' => '8 weeks (full-time)',
                'format' => 'in_person',
                'price' => 999,
                'includes_certificate' => true,
                'is_free' => false,
                'is_bootcamp' => true,
                'sort_order' => 15,
            ],
            [
                'title' => 'Cybersecurity Professional',
                'slug' => 'cybersecurity-professional',
                'description' => 'Professional cybersecurity certification program',
                'duration' => '10 weeks (weekends)',
                'format' => 'hybrid',
                'price' => 899,
                'includes_certificate' => true,
                'is_free' => false,
                'is_bootcamp' => true,
                'sort_order' => 16,
            ],
            [
                'title' => 'Mobile Dev Accelerator',
                'slug' => 'mobile-dev-accelerator',
                'description' => 'Mobile app development accelerator',
                'duration' => '8 weeks (full-time)',
                'format' => 'virtual',
                'price' => 1199,
                'includes_certificate' => true,
                'is_free' => false,
                'is_bootcamp' => true,
                'sort_order' => 17,
            ],
        ];

        foreach ($bootcamps as $bootcamp) {
            AcademyCourse::create($bootcamp);
        }

        // Free Courses
        $freeCourses = [
            [
                'title' => 'Intro to Coding',
                'slug' => 'intro-to-coding',
                'description' => 'Basic introduction to programming concepts',
                'duration' => '2 hours',
                'format' => 'online',
                'price' => 0,
                'includes_certificate' => false,
                'is_free' => true,
                'is_bootcamp' => false,
                'sort_order' => 18,
            ],
            [
                'title' => 'HTML & CSS Basics',
                'slug' => 'html-css-basics',
                'description' => 'Learn the fundamentals of HTML and CSS',
                'duration' => '3 hours',
                'format' => 'online',
                'price' => 0,
                'includes_certificate' => false,
                'is_free' => true,
                'is_bootcamp' => false,
                'sort_order' => 19,
            ],
            [
                'title' => 'How to Build a Startup',
                'slug' => 'how-to-build-startup',
                'description' => 'Essential steps for building a successful startup',
                'duration' => '1 hour',
                'format' => 'online',
                'price' => 0,
                'includes_certificate' => false,
                'is_free' => true,
                'is_bootcamp' => false,
                'sort_order' => 20,
            ],
            [
                'title' => 'Intro to UI/UX',
                'slug' => 'intro-ui-ux',
                'description' => 'Introduction to user interface and user experience',
                'duration' => '2 hours',
                'format' => 'online',
                'price' => 0,
                'includes_certificate' => false,
                'is_free' => true,
                'is_bootcamp' => false,
                'sort_order' => 21,
            ],
            [
                'title' => 'Git & GitHub Basics',
                'slug' => 'git-github-basics',
                'description' => 'Learn version control with Git and GitHub',
                'duration' => '1.5 hours',
                'format' => 'online',
                'price' => 0,
                'includes_certificate' => false,
                'is_free' => true,
                'is_bootcamp' => false,
                'sort_order' => 22,
            ],
        ];

        foreach ($freeCourses as $freeCourse) {
            AcademyCourse::create($freeCourse);
        }
    }
}
