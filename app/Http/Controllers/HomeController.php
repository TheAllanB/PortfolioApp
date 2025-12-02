<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // same idea as your PHP arrays, but now in Laravel
        $projects = [
            [
                "title" => "Project One",
                "desc"  => "Short description of project one. Tech: PHP, MySQL",
                "link"  => "#"
            ],
            [
                "title" => "Project Two",
                "desc"  => "Short description of project two. Tech: Python, Flask",
                "link"  => "#"
            ],
            [
                "title" => "Project Three",
                "desc"  => "Short description of project three. Tech: JS, React",
                "link"  => "#"
            ],
            [
                "title" => "Project Four",
                "desc"  => "Short description of project four. Tech: ML, Python",
                "link"  => "#"
            ],
        ];

        $experience = [
            [
                "role"    => "Associate Mobile Application Developer (Intern)",
                "company" => "Petrasoft Solutions LLP",
                "period"  => "Dec 2025 – Jun 2026 (Incoming)",
                "location"=> "Remote / India",
                "desc"    => "Working on Flutter-based mobile applications, feature development, bug fixing, and API integration."
            ],
            [
                "role"    => "Associate Mobile Application Developer (Intern)",
                "company" => "Petrasoft Solutions LLP",
                "period"  => "Dec 2025 – Jun 2026 (Incoming)",
                "location"=> "Remote / India",
                "desc"    => "Working on Flutter-based mobile applications, feature development, bug fixing, and API integration."
            ],
            [
                "role"    => "Associate Mobile Application Developer (Intern)",
                "company" => "Petrasoft Solutions LLP",
                "period"  => "Dec 2025 – Jun 2026 (Incoming)",
                "location"=> "Remote / India",
                "desc"    => "Working on Flutter-based mobile applications, feature development, bug fixing, and API integration."
            ],
        ];

        return view('home', compact('projects', 'experience'));
    }
}
