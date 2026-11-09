<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Stores one uploaded file on the public disk (run `php artisan storage:link` once).
     * Used by <x-dropzone>; reuse it, or copy it and adjust the rules per feature.
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'file' => ['required', 'file', 'max:5120', 'mimes:jpg,jpeg,png,gif,webp,pdf,doc,docx,xls,xlsx,csv,txt,zip'],
        ]);

        $file = $request->file('file');
        $path = $file->store('uploads/' . now()->format('Y/m'), 'public');

        return response()->json([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
            'url' => asset('storage/' . $path),
            'size' => $file->getSize(),
        ], 201);
    }
}
