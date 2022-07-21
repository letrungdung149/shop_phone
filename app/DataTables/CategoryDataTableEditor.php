<?php


namespace App\DataTables;


use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\DataTablesEditor;

class CategoryDataTableEditor extends DataTablesEditor
{
    protected $model = Category::class;

    /**
     * Get create action validation rules.
     *
     * @return array
     */
    public function createRules(): array
    {
        return [
            'name' => ['required'],
        ];
    }

    /**
     * Get edit action validation rules.
     *
     * @param Model $model
     * @return array
     */
    public function editRules(Model $model): array
    {
        return [
            'name' => ['sometimes'],
        ];
    }
}
