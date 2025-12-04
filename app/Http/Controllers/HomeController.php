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
                "title" => "Encrypted TCP Chat Application",
                "desc"  => "Developed a terminal-based peer-to-peer chat system using raw TCP sockets with AES-encrypted messaging and a custom key-exchange protocol (Diffie-Hellman/pre-shared).",
                "link"  => "#"
            ],
            [
                "title" => "AI-powered Image Recognition Chatbot",
                "desc"  => "Designed and implemented a chatbot capable of real-time object detection in images, integrating visual cues with natural language understanding to deliver context-aware responses. Tech: Python, YoloV5, NLP",
                "link"  => "#"
            ],
            [
                "title" => "AI Resume Screening & Ranking Model",
                "desc"  => "Developed an AI - based resume screening model which utilizes NLP and scikit-learn to screen and rank resumes based on a given Job Description",
                "link"  => "#"
            ],
            [
                "title" => "Agentic Teaching Assistant Tool",
                "desc"  => "Built an autonomous teaching-support agent with multi-step reasoning and RAG-based content generation using LangChain, FAISS, LangGraph, and Google STT.",
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
                "role"    => "AI Pipeline Intern",
                "company" => "Vidmagin.com",
                "period"  => "Aug 2025 – Dec 2025",
                "location"=> "Remote /Coimbatore, India",
                "desc"    => "Built LLM and RAG integrated pipelines, Fine-tuned local LLMs, increased accuracy by 45%, built multi-modal agents."
            ],
            [
                "role"    => "AI Intern",
                "company" => "Posiflex Technologies India Pvt Ltd",
                "period"  => "Jun 2024 – Aug 2024",
                "location"=> "Bengaluru, India",
                "desc"    => " Prototyped an automated Billing System, Annotated Data to improve accuracy of the system, Developed an AI Resume Screening Model"
            ],
        ];

        return view('home', compact('projects', 'experience'));
    }
}
