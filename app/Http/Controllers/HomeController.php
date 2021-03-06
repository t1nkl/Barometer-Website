<?php

namespace App\Http\Controllers;

use Identify;
use Jenssegers\Date\Date;
use Illuminate\Http\Request;
use App\Models\{Setting, Event, Speaker, Bar, Article, Mainpartners, Partners, Ticket, Program, Scene, VisitorId, VisitorIp};

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request )
    {
        if(Identify::browser()->getName() && Identify::os()->getName()) {
            VisitorId::addVisitorId(session()->getId(), Identify::browser()->getName(), Identify::os()->getName());
        } else {
            VisitorId::addVisitorId(session()->getId(), null);
        }
        VisitorIp::addVisitorIp($request->ip());

        $url_array = array_slice(explode("/",url()->current()),3);
        $lang = $url_array[0];
        if(!empty($lang) && array_key_exists($lang, \Config::get('app.locales'))) {
            Date::setLocale($lang);
        } else {
            Date::setLocale('ru');
        }

        $browser = Identify::browser()->getName();
        $settings = Setting::first();
        $event = Event::first();
        $blogs = Article::orderBy("rgt")->limit(2)->get();
        $mainpartners = Mainpartners::limit(4)->get();
        $tickets = Ticket::all();
        $programs = Program::all();
        $scenes = Scene::all();
        $program_days = Setting::first()->getDays(1);
        $fest_days = Setting::first()->getDays();

        return view('home', compact('browser', 'settings', 'event', 'blogs', 'mainpartners', 'tickets', 'programs', 'scenes', 'program_days', 'fest_days'));
    }

    public function speakersAjax( Request $request )
    {
        if (Identify::os()->getName() == 'Windows' || Identify::os()->getName() == 'OS X' || Identify::os()->getName() == 'Linux') {
            return Speaker::orderBy("rgt")->with('programs')->paginate(10)->toArray()['data'];
        } else {
            return Speaker::orderBy("rgt")->with('programs')->paginate(6)->toArray()['data'];
        }
    }

    public function barsAjax( Request $request )
    {
        if (Identify::os()->getName() == 'Windows' || Identify::os()->getName() == 'OS X' || Identify::os()->getName() == 'Linux') {
            return Bar::orderBy("rgt")->paginate(10)->toArray()['data'];
        } else {
            return Bar::orderBy("rgt")->paginate(6)->toArray()['data'];
        }
    }

    public function partnersAjax( Request $request )
    {
        if (Identify::os()->getName() == 'Windows' || Identify::os()->getName() == 'OS X' || Identify::os()->getName() == 'Linux') {
            return Partners::orderBy("rgt")->paginate(18)->toArray()['data'];
        } else {
            return Partners::orderBy("rgt")->paginate(9)->toArray()['data'];
        }
    }

}
