<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data=[
            'title'=>'Sadguru Shri Nithyananda Vidyapeeta, Kondevoor',
            'description'=>'',
            'app_name'=>'Sadguru Shri Nithyananda Vidyapeeta, Kondevoor'
        ];

        echo view('header',$data);
        echo view('home');
        echo view('footer');
    }

    public function about()
    {
        $data=[
            'title'=>'About - Sadguru Shri Nithyananda Vidyapeeta, Kondevoor',
            'description'=>'',
            'app_name'=>'Sadguru Shri Nithyananda Vidyapeeta, Kondevoor'
        ];

        echo view('header',$data);
        echo view('about');
        echo view('footer');
    }

    public function mission_vision()
    {
        $data=[
            'title'=>'Mission & Vision - Sadguru Shri Nithyananda Vidyapeeta, Kondevoor - Home',
            'description'=>'',
            'app_name'=>'Sadguru Shri Nithyananda Vidyapeeta, Kondevoor'
        ];

        echo view('header',$data);
        echo view('mission_vision');
        echo view('footer');
    }

    public function fees()
    {
        $data=[
            'title'=>'Fees details - Sadguru Shri Nithyananda Vidyapeeta, Kondevoor - Home',
            'description'=>'',
            'app_name'=>'Sadguru Shri Nithyananda Vidyapeeta, Kondevoor'
        ];

        echo view('header',$data);
        echo view('fees');
        echo view('footer');
    }

    public function teachers()
    {
        $data=[
            'title'=>'Teachers - Sadguru Shri Nithyananda Vidyapeeta, Kondevoor - Home',
            'description'=>'',
            'app_name'=>'Sadguru Shri Nithyananda Vidyapeeta, Kondevoor'
        ];

        echo view('header',$data);
        echo view('teachers');
        echo view('footer');
    }

    public function contact()
    {
        $data=[
            'title'=>'Contact - Sadguru Shri Nithyananda Vidyapeeta, Kondevoor - Home',
            'description'=>'',
            'app_name'=>'Sadguru Shri Nithyananda Vidyapeeta, Kondevoor'
        ];

        echo view('header',$data);
        echo view('contact');
        echo view('footer');
    }



    public function link_of_pta()
    {
        $data=[
            'title'=>'PTA EXECUTIVE MEMBERS - Sadguru Shri Nithyananda Vidyapeeta, Kondevoor - PTA Members',
            'description'=>'',
            'app_name'=>'Sadguru Shri Nithyananda Vidyapeeta, Kondevoor'
        ];

        echo view('header',$data);
        echo view('link_of_pta');
        echo view('footer');
    }


    public function building()
    {
        $data=[
            'title'=>'FITNESS CERTIFICATE FOR SCHOOL BUILDING - Sadguru Shri Nithyananda Vidyapeeta, Kondevoor - Building',
            'description'=>'',
            'app_name'=>'Sadguru Shri Nithyananda Vidyapeeta, Kondevoor'
        ];

        echo view('header',$data);
        echo view('building');
        echo view('footer');
    }


    public function noc()
    {
        $data=[
            'title'=>'NO OBJECTION CERTIFICATE - Sadguru Shri Nithyananda Vidyapeeta, Kondevoor - No objection certificate',
            'description'=>'',
            'app_name'=>'Sadguru Shri Nithyananda Vidyapeeta, Kondevoor'
        ];

        echo view('header',$data);
        echo view('noc');
        echo view('footer');
    }

    public function fire_certificate()
    {
        $data=[
            'title'=>'FIRE SAFETY - Sadguru Shri Nithyananda Vidyapeeta, Kondevoor - Fire Certificate',
            'description'=>'',
            'app_name'=>'Sadguru Shri Nithyananda Vidyapeeta, Kondevoor'
        ];

        echo view('header',$data);
        echo view('fire_certificate');
        echo view('footer');
    }

    public function health_certificate()
    {
        $data=[
            'title'=>'SANITARY CERTIFICATE - Sadguru Shri Nithyananda Vidyapeeta, Kondevoor - Water, health and sanitary certificate',
            'description'=>'',
            'app_name'=>'Sadguru Shri Nithyananda Vidyapeeta, Kondevoor'
        ];

        echo view('header',$data);
        echo view('health_certificate');
        echo view('footer');
    }

    public function affiliation_letter()
    {
        $data=[
            'title'=>'AFFILIATION CERTIFICATE - Sadguru Shri Nithyananda Vidyapeeta, Kondevoor - Affiliation letter',
            'description'=>'',
            'app_name'=>'Sadguru Shri Nithyananda Vidyapeeta, Kondevoor'
        ];

        echo view('header',$data);
        echo view('affiliation_letter');
        echo view('footer');
    }

    public function recognition_certificate()
    {
        $data=[
            'title'=>'RECOGNITION LETTER - Sadguru Shri Nithyananda Vidyapeeta, Kondevoor - Recognition certificate',
            'description'=>'',
            'app_name'=>'Sadguru Shri Nithyananda Vidyapeeta, Kondevoor'
        ];

        echo view('header',$data);
        echo view('recognition_certificate');
        echo view('footer');
    }

    public function deocertificate()
    {
        $data=[
            'title'=>'SELF CERTIFICATE - Sadguru Shri Nithyananda Vidyapeeta, Kondevoor - Deo certificate',
            'description'=>'',
            'app_name'=>'Sadguru Shri Nithyananda Vidyapeeta, Kondevoor'
        ];

        echo view('header',$data);
        echo view('deocertificate');
        echo view('footer');
    }

    public function academic_calendar()
    {
        $data=[
            'title'=>'ACADEMIC CALENDAR - Sadguru Shri Nithyananda Vidyapeeta, Kondevoor - Academic calendar',
            'description'=>'',
            'app_name'=>'Sadguru Shri Nithyananda Vidyapeeta, Kondevoor'
        ];

        echo view('header',$data);
        echo view('academic_calendar');
        echo view('footer');
    }

    public function list_of_smc()
    {
        $data=[
            'title'=>'SCHOOL MANAGEMENT - Sadguru Shri Nithyananda Vidyapeeta, Kondevoor - SMC',
            'description'=>'',
            'app_name'=>'Sadguru Shri Nithyananda Vidyapeeta, Kondevoor'
        ];

        echo view('header',$data);
        echo view('list_of_smc');
        echo view('footer');
    }

    public function link_of_result()
    {
        $data=[
            'title'=>'RESULTS OF BOARD EXAM - Sadguru Shri Nithyananda Vidyapeeta, Kondevoor - Result',
            'description'=>'',
            'app_name'=>'Sadguru Shri Nithyananda Vidyapeeta, Kondevoor'
        ];

        echo view('header',$data);
        echo view('link_of_result');
        echo view('footer');
    }
    


}
