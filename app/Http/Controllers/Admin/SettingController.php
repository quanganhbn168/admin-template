<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SettingController extends Controller
{
    public function edit()
    {
        return view('admin.settings', [
            'values' => [
                'app_name' => Setting::get('app_name', config('app.name')),
                'contact_email' => Setting::get('contact_email'),
                'timezone' => Setting::get('timezone', config('app.timezone')),
            ],
            'timezones' => collect(timezone_identifiers_list())->mapWithKeys(fn (string $zone) => [$zone => $zone])->all(),
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'app_name' => ['required', 'string', 'max:100'],
            'contact_email' => ['nullable', 'email', 'max:255'],
            'timezone' => ['required', Rule::in(timezone_identifiers_list())],
        ]);

        Setting::put($data);

        return back()->with('success', __('Settings saved.'));
    }
}
