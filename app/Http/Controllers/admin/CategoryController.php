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

                    if (auth()->user()->can('productCares.edit')) {
                        $can['edit'] = true;
                    }

                    if (auth()->user()->can('productCares.delete')) {
                        $can['delete'] = true;
                    }

                    if (auth()->user()->can('productCares.create')) {
                        $can['add'] = true;
                    }

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

            $data = $json['data'];

            $images = Arr::pluck($data, 'image');

            $files = [];

            foreach ($images as $id) {
                $files['files'][$id] = [
                    'filename'      => $id,
                    'directory'     => 'editor',
                    'disk'          => config('filesystems.default'),
                    'url'           => Storage::disk(config('filesystems.default'))->url($id),
                ];
            }

            $json['files'] = $files;

            return response()->json($json);
        }

        return view('admin.category.index');
    }

    public function proccessEditor(CategoryDataTableEditor $categoryDataTableEditor)
    {
        return $categoryDataTableEditor->process(\request());
    }
}
