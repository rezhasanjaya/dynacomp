<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectApiController extends Controller
{
    public function index(Request $request)
    {
        $query = Project::query();

        $categoryFilter = $request->input('filter.category');
        if ($categoryFilter) {
            $query->whereHas('category', function ($q) use ($categoryFilter) {
                $q->where('category', $categoryFilter);
            });
        }

        $yearFilter = $request->input('filter.year');
        if ($yearFilter) {
            $query->where('year', $yearFilter);
        }

        $include = $request->query('include');
        if ($include && in_array('category', explode(',', $include), true)) {
            $query->with('category');
        }

        $perPage = (int) $request->query('per_page', 10);
        $perPage = max(1, min($perPage, 100));
        $page = (int) $request->query('page', 1);

        $paginator = $query->orderByDesc('created_at')->paginate($perPage, ['*'], 'page', $page);

        return response()->json([
            'data' => $paginator->items(),
            'meta' => [
                'current_page' => $paginator->currentPage(),
                'per_page' => $paginator->perPage(),
                'total' => $paginator->total(),
                'last_page' => $paginator->lastPage(),
            ],
        ]);
    }
}
