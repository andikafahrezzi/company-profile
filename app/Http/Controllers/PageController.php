<?php

namespace App\Http\Controllers;

use App\Models\Page;

class PageController extends Controller
{
    public function home()
    {
        return $this->renderPage('home');
    }

    public function about()
    {
        return $this->renderPage('about');
    }

    public function services()
    {
        return $this->renderPage('services');
    }

    public function contact()
    {
        return $this->renderPage('contact');
    }

    private function renderPage(string $pageName)
    {
        $page = Page::with(['sections.contents' => function ($q) {
            $q->orderBy('position');
        }])->where('name', $pageName)->firstOrFail();

        return view("pages.$pageName", compact('page'));
    }
}
