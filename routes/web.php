<?php

use App\Mail\ContactFormSubmitted;
use App\Mail\GarageTipSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response(view('welcome')->render())
        ->header('Cache-Control', 'public, max-age=3600, s-maxage=86400');
});

Route::get('/garages', function () {
    return response(view('garages')->render())
        ->header('Cache-Control', 'public, max-age=3600, s-maxage=86400');
});

Route::get('/automobilisten', function () {
    return response(view('automobilisten')->render())
        ->header('Cache-Control', 'public, max-age=3600, s-maxage=86400');
});

Route::post('/contact', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'company' => 'nullable|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:50',
        'message' => 'required|string|max:5000',
        'source' => 'nullable|string|max:255',
    ]);

    Mail::to('info@wwwanted.nl')->send(new ContactFormSubmitted($validated));

    return back()->with('success', 'Bedankt voor uw bericht! We nemen zo snel mogelijk contact met u op.');
})->name('contact.submit');

Route::post('/tip-garage', function (Request $request) {
    $validated = $request->validate([
        'user_name' => 'required|string|max:255',
        'user_email' => 'required|email|max:255',
        'garage_name' => 'required|string|max:255',
        'garage_email' => 'required|email|max:255',
        'message' => 'required|string|max:5000',
    ]);

    $mail = new GarageTipSubmitted($validated);

    Mail::to($validated['garage_email'])
        ->cc($validated['user_email'])
        ->bcc('info@wwwanted.nl')
        ->send($mail);

    return back()->with('success', 'Uw tip is verstuurd! Zowel u als uw garage ontvangen een e-mail.');
})->name('garage-tip.submit');

Route::get('/sitemap.xml', function () {
    $urls = [
        ['loc' => url('/'), 'priority' => '1.0', 'changefreq' => 'weekly'],
        ['loc' => url('/garages'), 'priority' => '0.9', 'changefreq' => 'weekly'],
        ['loc' => url('/automobilisten'), 'priority' => '0.9', 'changefreq' => 'weekly'],
    ];

    $xml = '<?xml version="1.0" encoding="UTF-8"?>';
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    foreach ($urls as $url) {
        $xml .= '<url>';
        $xml .= '<loc>' . $url['loc'] . '</loc>';
        $xml .= '<lastmod>' . now()->format('Y-m-d') . '</lastmod>';
        $xml .= '<changefreq>' . $url['changefreq'] . '</changefreq>';
        $xml .= '<priority>' . $url['priority'] . '</priority>';
        $xml .= '</url>';
    }
    $xml .= '</urlset>';

    return response($xml, 200, ['Content-Type' => 'application/xml']);
});
