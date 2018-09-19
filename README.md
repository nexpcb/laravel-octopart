# laravel-octopart
A laravel octopart package.

## Installation

1. `composer require "nexpcb/laravel-octopart"`
2. `php artisan vendor:publish --provider='NexPCB\LaravelOctopart\LaravelOctopartServiceProvider'`
3. Configure OCTOPART_API_KEY=xxxxx on .env file.
4. Adds Facades to `config/app.php` file:
  `'Octopart' => NexPCB\LaravelOctopart\Facades\Octopart::class,`

## Examples

Using Facades making the reference to the methods easier like below:
- \Octopart::getBrandsByUID('2239e3330e2df5fe')
- \Octopart::getMultipleBrands(['uid' => ['2239e3330e2df5fe', '56b297b87fa88175'])
- \Octopart::searchBrands(['q' => 'texas'])
