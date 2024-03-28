<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebisteController extends Controller
{
    //

    public function home()
    {
        $data = [
            'page_name' => 'Home'
        ];
        return view('home', compact('data'));
    }
    public function aboutUs()
    {
        $about_us_from_db = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum asperiores culpa ratione modi odio, error beatae enim nostrum ex ipsam iure amet, recusandae et possimus aspernatur odit! Non, accusamus deserunt.";
        $data = [
            'page_name' => 'About Us',
            'body_text' => $about_us_from_db
        ];
        return view('about-privacy-terms', compact('data'));
    }
    public function termsCondition()
    {
        $terms_and_conditions_from_db = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum asperiores culpa ratione modi odio, error beatae enim nostrum ex ipsam iure amet, recusandae et possimus aspernatur odit! Non, accusamus deserunt.";
        $data = [
            'page_name' => 'Term & Condition',
            'body_text' => $terms_and_conditions_from_db
        ];
        return view('about-privacy-terms', compact('data'));
    }
    public function privacyPolicy()
    {
        $privacy_policy_from_db = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum asperiores culpa ratione modi odio, error beatae enim nostrum ex ipsam iure amet, recusandae et possimus aspernatur odit! Non, accusamus deserunt.";
        $data = [
            'page_name' => 'Privacy Policy',
            'body_text' => $privacy_policy_from_db
        ];
        return view('about-privacy-terms', compact('data'));
    }

    public function contactUs()
    {
        $contact_from_db = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum asperiores culpa ratione modi odio, error beatae enim nostrum ex ipsam iure amet, recusandae et possimus aspernatur odit! Non, accusamus deserunt.";
        $data = [
            'page_name' => 'Contact Us',
            'body_text' => $contact_from_db
        ];
        return view('contact-us', compact('data'));
    }

    public function newsDetails($year, $month, $day, $title)
    {

        $convertedPageName = str_replace('-', ' ', $title);
        $data = [
            'page_name' => 'Contact Us',
            'year' => $year,
            'month' => $month,
            'day' => $day,
            'title' => ucwords($convertedPageName),
        ];
        return view('news-details', compact('data'));
    }

    public function category($pageName)
    {
        $convertedPageName = ucwords($pageName);

        if (strpos($convertedPageName, '-') !== false) {
            $convertedPageName = str_replace('-', ' ', $convertedPageName);
        }

        if(strtolower($convertedPageName) == 'health') {
            $convertedPageName = "Health & Wellbeing";
        }

        if(strtolower($convertedPageName) == 'lifestyle') {
            $convertedPageName = "Life & Style";
        }

        $data = [
            'page_name' => $convertedPageName
        ];
        return view('category', compact('data'));
    }
}
