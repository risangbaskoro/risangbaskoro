<?php

namespace RisangBaskoro;

class About
{
    protected string $name;
    protected string|array $email;
    protected array $experience;
    protected array $education;
    protected array $skill;
    protected array $stack;
    protected array $goal;

    public function __construct()
    {
        $this->name = "Risang Baskoro";
        $this->email = [
            "personal" => "risangbaskoro@gmail.com",
            "icloud" => "risangbaskoro@icloud.com",
            "school" => "risangbaskoro@students.undip.ac.id",
        ];
        $this->experience = $this->getExperience();
        $this->education = $this->getEducation();
        $this->skill = $this->getSkill();
        $this->stack = $this->getStack();
        $this->goal = $this->getGoal();
    }

    protected function getExperience(): array
    {
        return [
            [
                "title" => "Web Developer",
                "company" => "LindungiHutan",
                "start" => "2021",
                "end" => "2022",
                "description" => "Created a web marketplace using TALL (Tailwind, AlpineJS, Laravel, Livewire) stack.",
            ],
            [
                "title" => "Data Analyst Intern",
                "company" => "SuperHelper",
                "start" => "2021",
                "end" => "2021",
                "description" => "Analysed and made reports of business performance, user growth, and other metrics. Cleaned the company’s database and help the company to make better data-driven decisions.",
            ],
            [
                "title" => "Graphic Design Intern",
                "company" => "LindungiHutan",
                "start" => "2020",
                "end" => "2021",
                "description" => "Created visual content and design systems for the company's social media posts on Instagram, Facebook, Twitter, and LinkedIn. I also developed the company's brand guidelines and resources to be used by the company's partners.",
            ],
        ];
    }

    protected function getEducation(): array
    {
        return [
            [
                "title" => "Bachelor of Computer Science",
                "school" => "Universitas Diponegoro",
                "start" => "2019",
                "end" => "2024",
                "description" => "I am currently in my 8th semester and will graduate in 2024. I have taken courses in Data Structures and Algorithms, Object-Oriented Programming, Database, Web Programming, and many more.",
            ],
        ];
    }

    protected function getSkill(): array
    {
        return [
            MachineLearning::class,
            ComputerVision::class,
            WebDevelopment::class,
            DataAnalysis::class,
        ];
    }

    protected function getStack(): array
    {
        return [
            Python::class,
            Tensorflow::class,
            PHP::class,
            Laravel::class,
            Livewire::class,
            TailwindCSS::class,
        ];
    }

    protected function getGoal(): array
    {
        return [
            "Be a better person than yesterday.",
            "Be a great web developer.",
            "Become a great machine learning engineer.",
            "Contribute more to Open Source.",
            "Contribute more to society."
        ];
    }
}