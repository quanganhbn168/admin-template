<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Settings\GeneralSettings;
use App\Support\Html;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SettingController extends Controller
{
    public function edit(GeneralSettings $settings)
    {
        return view('admin.settings', [
            'values' => [
                // null in the settings means "use .env", so show the value that is actually in effect
                'app_name' => $settings->app_name ?? config('app.name'),
                'contact_email' => $settings->contact_email,
                'footer_note' => $settings->footer_note,
                'timezone' => $settings->timezone ?? config('app.timezone'),
            ],
            'timezones' => collect(timezone_identifiers_list())->mapWithKeys(fn (string $zone) => [$zone => $zone])->all(),
        ]);
    }

    public function update(Request $request, GeneralSettings $settings): RedirectResponse
    {
        $data = $request->validate([
            'app_name' => ['required', 'string', 'max:100'],
            'contact_email' => ['nullable', 'email', 'max:255'],
            'footer_note' => ['nullable', 'string', 'max:5000'],
            'timezone' => ['required', Rule::in(timezone_identifiers_list())],
        ]);

        $settings->app_name = $data['app_name'];
        $settings->contact_email = $data['contact_email'] ?? null;
        $settings->timezone = $data['timezone'];
        // Rich text from the editor: never store it raw.
        $settings->footer_note = Html::clean($data['footer_note'] ?? '') ?: null;
        $settings->save();

        return back()->with('success', __('Settings saved.'));
    }
}
