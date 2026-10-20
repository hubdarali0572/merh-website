<?php

namespace App\Console\Commands;

use App\Models\Blog;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemap = Sitemap::create();


        /*
        |--------------------------------------------------------------------------
        | Static Pages
        |--------------------------------------------------------------------------
        */

        $staticPages = [
            '/'                  => 1.0,
            '/about'             => 0.8,
            '/services'          => 0.8,
            '/projects'          => 0.7,
            '/contact'           => 0.7,
            '/privacy-policy'    => 0.3,
            '/terms-of-service'  => 0.3,
            '/gallary'           => 0.3,
        ];

        foreach ($staticPages as $page => $priority) {
            $sitemap->add(
                Url::create(url($page))
                    ->setPriority($priority)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_HOURLY)
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Blog Pages
        |--------------------------------------------------------------------------
        */

        $sitemap->add(
            Url::create('/frontend-blogs')
                ->setPriority(0.8)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_HOURLY)
        );

        /*
        |--------------------------------------------------------------------------
        | Blog Details Each Page
        |--------------------------------------------------------------------------
        */

        Blog::latest()->get()->each(function ($blog) use ($sitemap) {
            $sitemap->add(
                Url::create('/detailPage/' . $blog->slug)
                    ->setLastModificationDate($blog->updated_at)
                    ->setPriority(0.9)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_HOURLY)
            );
        });

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('✅ sitemap.xml generated successfully!');
    }
}
