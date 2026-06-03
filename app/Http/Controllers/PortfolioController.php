<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Portfolio data — edit this to update your site
     */
    private array $data = [
        'name'       => 'Suborno Kundu',
        'role'       => 'Full Stack Web Developer',
        'location'   => 'Bashabo, Dhaka',
        'email'      => 'Suborno52@gmail.com',
        'phone'      => '+8801761143608',
        'github'     => 'https://github.com/SubornoKundu',
        'linkedin'   => 'https://linkedin.com/in/subornokundu',
        'available'  => true,
        'summary'    => 'Building thoughtful, performant web applications with Laravel, Vue.js, and a deep care for user experience.',

        'skills' => [
            [
                'icon'     => '⬡',
                'category' => 'Frontend',
                'items'    => ['HTML5', 'CSS3', 'JavaScript', 'Bootstrap', 'Tailwind CSS', 'Vue.js'],
            ],
            [
                'icon'     => '◈',
                'category' => 'Backend',
                'items'    => ['PHP', 'Laravel', 'REST API', 'MVC Pattern'],
            ],
            [
                'icon'     => '◎',
                'category' => 'Database',
                'items'    => ['MySQL', 'Firebase', 'Firestore', 'phpMyAdmin'],
            ],
            [
                'icon'     => '⊞',
                'category' => 'CMS',
                'items'    => ['WordPress', 'Theme Dev', 'Plugin Dev', 'Customization'],
            ],
            [
                'icon'     => '◻',
                'category' => 'Tools',
                'items'    => ['Git / GitHub', 'VS Code', 'Composer', 'Flutter'],
            ],
        ],

        'projects' => [
            [
                'number'   => '01',
                'featured' => true,
                'title'    => 'MediCare',
                'subtitle' => 'Hospital Management System',
                'desc'     => 'A full-featured hospital management platform for appointments, prescriptions, and patient records. Integrated AI-powered symptom analysis and intelligent reporting features to support clinical decision-making.',
                'tags'     => ['Laravel', 'PHP', 'MySQL', 'AI Integration'],
                'emoji'    => '🏥',
                'color'    => 'proj-1',
            ],
            [
                'number'   => '02',
                'featured' => false,
                'title'    => 'University Event Manager',
                'subtitle' => 'Event Management App',
                'desc'     => 'A mobile app with real-time event tracking, push notifications, and favorites — built for campus-wide use.',
                'tags'     => ['Flutter', 'Firebase'],
                'emoji'    => '🎓',
                'color'    => 'proj-2',
            ],
            [
                'number'   => '03',
                'featured' => false,
                'title'    => 'Smart Room — Expert Edition',
                'subtitle' => '3D Simulation',
                'desc'     => 'An interactive 3D smart room simulation with real-time collision detection and environment controls.',
                'tags'     => ['C', 'OpenGL', 'FreeGLUT'],
                'emoji'    => '🏠',
                'color'    => 'proj-3',
            ],
        ],

        'education' => [
            'university' => 'Daffodil International University',
            'degree'     => 'B.Sc. in Computer Science and Engineering',
            'year'       => 'June 2026',
        ],

        'stats' => [
            ['num' => '3+',  'label' => 'Projects shipped'],
            ['num' => '5+',  'label' => 'Technologies mastered'],
            ['num' => 'CSE', 'label' => 'Graduate — DIU 2026'],
            ['num' => '2',   'label' => 'Languages spoken'],
        ],
    ];

    /**
     * Show the portfolio homepage
     */
    public function index()
    {
        return view('portfolio', $this->data);
    }
}
