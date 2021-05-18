<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Course;
use App\Models\CourseDetail;
use App\Models\Article;
use App\Models\ArticleType;
use App\Models\ArticleDetail;
use App\Models\Page;
use App\Models\Alumni;
use Illuminate\Database\Eloquent\Builder;

class LandingController extends Controller
{
    public function index()
    {
        $testimonies = Alumni::with('user','user.userDetail','course')->get();
        $landingTitle = Setting::where('key','landing-title')->first();
        $landingExcerpt = Setting::where('key','landing-excerpt')->first();
        $landingButtonText1 = Setting::where('key','landing-button-text-1')->first();
        $landingBgSection1 = Setting::where('key','landing-bg-section-1')->first();
        $landingVidSection1 = Setting::where('key','landing-video-section-1')->first();
        $about = Setting::where('key','about')->first();
        // landing points
        $title1 = Setting::where('key','landing-point-title-1')->first();
        $icon1 = Setting::where('key','landing-point-icon-1')->first();
        $content1 = Setting::where('key','landing-point-content-1')->first();
        // 2
        $title2 = Setting::where('key','landing-point-title-2')->first();
        $icon2 = Setting::where('key','landing-point-icon-2')->first();
        $content2 = Setting::where('key','landing-point-content-2')->first();
        // 3
        $title3 = Setting::where('key','landing-point-title-3')->first();
        $icon3 = Setting::where('key','landing-point-icon-3')->first();
        $content3 = Setting::where('key','landing-point-content-3')->first();
        // 4
        $title4 = Setting::where('key','landing-point-title-4')->first();
        $icon4 = Setting::where('key','landing-point-icon-4')->first();
        $content4 = Setting::where('key','landing-point-content-4')->first();
        // end
        $shortCourses = Course::with('status')->whereHas('courseDetail', function (Builder $query) {
            $query->where('degree', 'non');
        })->take(3)->get();
        $courses = Course::with('status')->whereHas('courseDetail', function (Builder $query) {
            $query->where('degree', '!=', 'non');
        })->take(3)->get();
        $researchs = Article::whereHas('articleType', function (Builder $query) {
            $query->where('name', 'research');
        })->with('status', 'articleType', 'articleDetail')->get();
        $rgroups = Article::select('group')->distinct()->get();
        $about = Page::where('key', 'about')->first();
        $sit = Page::where('key', 'sit')->first();
        return view('welcome')->with([
            'about' => $about,
            'sit' => $sit,
            'landingTitle'      => $landingTitle,
            'landingExcerpt'    => $landingExcerpt,
            'landingButtonText1'=> $landingButtonText1,
            'landingVidSection1'=> $landingVidSection1,
            'landingBgSection1' => $landingBgSection1,
            'rgroups'           => $rgroups,
            'researchs'         => $researchs,
            'about'             => $about,
            'shortCourses'       => $shortCourses,
            'courses'           => $courses,
            'title1'            => $title1,
            'icon1'             => $icon1,
            'content1'          => $content1,
            'title2'            => $title2,
            'icon2'             => $icon2,
            'content2'          => $content2,
            'title3'            => $title3,
            'icon3'             => $icon3,
            'content3'          => $content3,
            'title4'            => $title4,
            'icon4'             => $icon4,
            'content4'          => $content4,
            'testimonies'       => $testimonies,
        ]);
    }
}