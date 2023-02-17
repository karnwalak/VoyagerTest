<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;
use TCG\Voyager\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $res = \DB::table('data_types')->insert([
            'name' => 'Post',
            'slug' => 'posts-slug',
            'display_name_singular' => 'PostName',
            'display_name_plural' => 'Posts',
            'icon' => 'voyager-mail',
            'model_name' => 'TCG\Voyager\Models\Post',
            'policy_name' => NULL,
            'controller' => NULL,
            'description' => NULL,
            'generate_permissions' => 1,
            'server_side' => 0,
            'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
        ]);
     
        \DB::table('data_rows')->insert([
           [
                'data_type_id' => 11,
                'field' => 'author_id',
                'type' => 'text',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 1,
            ],
            [
                'data_type_id' => 11,
                'field' => 'category_id',
                'type' => 'text',
                'display_name' => 'Category ID',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 2,
            ],
            [
                'data_type_id' => 11,
                'field' => 'title',
                'type' => 'text',
                'display_name' => 'Title',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 2,
            ],
            [
                'data_type_id' => 11,
                'field' => 'seo_title',
                'type' => 'text',
                'display_name' => 'Seo Title',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"slugify":{"origin":"name"}}',
                'order' => 3,
            ],
            [
                'data_type_id' => 11,
                'field' => 'excerpt',
                'type' => 'textarea',
                'display_name' => 'Excerpt',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 4,
            ],
            [
               'data_type_id' => 11,
               'field' => 'body',
               'type' => 'textarea',
               'display_name' => 'Body',
               'required' => 1,
               'browse' => 0,
               'read' => 0,
               'edit' => 0,
               'add' => 0,
               'delete' => 0,
               'details' => '{}',
               'order' => 1,
            ],
            [
                'data_type_id' => 11,
                'field' => 'slug',
                'type' => 'text',
                'display_name' => 'Slug',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"slugify":{"origin":"name"}}',
                'order' => 4,
            ],
            [
                'data_type_id' => 11,
                'field' => 'image',
                'type' => 'image',
                'display_name' => 'Image',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 5,
            ],
            [
                'data_type_id' => 11,
                'field' => 'meta_description',
                'type' => 'text',
                'display_name' => 'Meta Description',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 6,
            ],
            [
                'data_type_id' => 11,
                'field' => 'meta_keywords',
                'type' => 'text',
                'display_name' => 'Meta Keywords',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 7,
            ],
            [
                'data_type_id' => 11,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 0,
                'delete' => 1,
                'details' => '{}',
                'order' => 8,
            ],
            [
                'data_type_id' => 11,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 9,
            ],
            [
                'data_type_id' => 11,
                'field' => 'post_belongstoone_user_relationship',
                'type' => 'relationship',
                'display_name' => 'users',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"model":"App\\\\Models\\\\User","table":"users","type":"belongsTo","column":"id","key":"id","label":"name"}',
                'order' => 2,
            ],
            [
                'data_type_id' => 11,
                'field' => 'status',
                'type' => 'text',
                'display_name' => 'Status',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 7,
            ],
            [
                'data_type_id' => 11,
                'field' => 'featured',
                'type' => 'checkbox',
                'display_name' => 'Featured',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 8,
            ],
        ]);

        

        \DB::table('permissions')->insert([
            [
                'id' => 111,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2022-11-07 18:41:28',
                'updated_at' => '2022-11-07 18:41:28',
            ],
            [
                'id' => 112,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2022-11-07 18:41:28',
                'updated_at' => '2022-11-07 18:41:28',
            ],
            [
                'id' => 113,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2022-11-07 18:41:28',
                'updated_at' => '2022-11-07 18:41:28',
            ],
            [
                'id' => 114,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2022-11-07 18:41:28',
                'updated_at' => '2022-11-07 18:41:28',
            ],
            [
                'id' => 115,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2022-11-07 18:41:28',
                'updated_at' => '2022-11-07 18:41:28',
            ]
        ]);

        \DB::table('permission_role')->insert([
            [
                'permission_id' => 111,
                'role_id' => 1,
            ],
            [
                'permission_id' => 112,
                'role_id' => 1,
            ],
            [
                'permission_id' => 113,
                'role_id' => 1,
            ],
            [
                'permission_id' => 114,
                'role_id' => 1,
            ],
            [
                'permission_id' => 115,
                'role_id' => 1,
            ]
        ]);

        \DB::table('menu_items')->insert([
            [
                'menu_id' => 1,
                'title' => 'Posts',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-categories',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 11,
                'created_at' => '2022-11-07 18:41:28',
                'updated_at' => '2022-11-07 18:41:28',
                'route' => 'voyager.posts.index',
                'parameters' => NULL,
            ],
        ]);
    }

    /**
     * [post description].
     *
     * @param [type] $slug [description]
     *
     * @return [type] [description]
     */
    protected function findPost($slug)
    {
        return Post::firstOrNew(['slug' => $slug]);
    }

    /**
     * [dataRow description].
     *
     * @param [type] $type  [description]
     * @param [type] $field [description]
     *
     * @return [type] [description]
     */
    protected function dataRow($type, $field)
    {
        return DataRow::firstOrNew([
            'data_type_id' => $type->id,
            'field'        => $field,
        ]);
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}