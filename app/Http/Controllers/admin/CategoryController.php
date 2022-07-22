<?php


namespace App\Http\Controllers\admin;


use App\DataTables\CategoryDataTableEditor;
use App\DataTables\Formatters\DateFormatter;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class CategoryController
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Category::query();

            $json = datatables()
                ->eloquent($query)
                ->setRowId('id')
                ->addColumn('authorization', function ($row) {
                    $can = [
                        'edit'   => false,
                        'delete' => false,
                    ];

                    if ($row->is_system) {
                        $can['delete'] = false;
                    }

                    return $can;
                })
                ->addColumn('image_formatted', function ($post) {
                    return Storage::url($post->image);
                })
                ->formatColumn(['created_at', 'updated_at'], DateFormatter::class)
                ->toJson();
            $json = $json->getData(true);

            return response()->json($json);
        }

        return view('admin.category.index');
    }

    public function proccessEditor(CategoryDataTableEditor $categoryDataTableEditor)
    {
        return $categoryDataTableEditor->process(\request());
    }
}
