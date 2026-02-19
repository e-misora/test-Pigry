<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Contracts\RegisterResponse;
use App\Models\WeightLog;
use App\Models\WeightTarget;
use App\Http\Requests\WeightLogsRequest;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->instance(RegisterResponse::class, new class implements
        RegisterResponse {
            public function toResponse($request)
            {
                return view('register_step2');
            }

            public function store(Request $request)
            {
                $weight_logs = new WeightLog();

                $weight_logs->user_id = 1;
                $weight_logs->weight = $request->weight;
                $weight_logs = save();

                $weight_target = new WeightTarget();

                $weight_target->user_id = 1;
                $weight_target->target_weight = $request->target_weight;
                $weight_target = save();

                return redirect('/weight_log');
            }
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);

        Fortify::registerView(function () {
            return view('auth.register_step1');
        });

        Fortify::loginView(function () {
            return view('auth.login');
        });

        RateLimiter::for('login', function (Request $request) {
            $email = (string) $request->email;
            return Limit::perMinute(10)->by($email . $request->ip());
        });

    }
}