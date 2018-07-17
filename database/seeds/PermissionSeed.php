<?php

use Illuminate\Database\Seeder;

class PermissionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'user_management_access',],
            ['id' => 2, 'title' => 'permission_access',],
            ['id' => 3, 'title' => 'permission_create',],
            ['id' => 4, 'title' => 'permission_edit',],
            ['id' => 5, 'title' => 'permission_view',],
            ['id' => 6, 'title' => 'permission_delete',],
            ['id' => 7, 'title' => 'role_access',],
            ['id' => 8, 'title' => 'role_create',],
            ['id' => 9, 'title' => 'role_edit',],
            ['id' => 10, 'title' => 'role_view',],
            ['id' => 11, 'title' => 'role_delete',],
            ['id' => 12, 'title' => 'user_access',],
            ['id' => 13, 'title' => 'user_create',],
            ['id' => 14, 'title' => 'user_edit',],
            ['id' => 15, 'title' => 'user_view',],
            ['id' => 16, 'title' => 'user_delete',],
            ['id' => 17, 'title' => 'user_action_access',],
            ['id' => 18, 'title' => 'user_action_create',],
            ['id' => 19, 'title' => 'user_action_edit',],
            ['id' => 20, 'title' => 'user_action_view',],
            ['id' => 21, 'title' => 'user_action_delete',],
            ['id' => 22, 'title' => 'team_access',],
            ['id' => 23, 'title' => 'team_create',],
            ['id' => 24, 'title' => 'team_edit',],
            ['id' => 25, 'title' => 'team_view',],
            ['id' => 26, 'title' => 'team_delete',],
            ['id' => 27, 'title' => 'content_management_access',],
            ['id' => 28, 'title' => 'content_management_create',],
            ['id' => 29, 'title' => 'content_management_edit',],
            ['id' => 30, 'title' => 'content_management_view',],
            ['id' => 31, 'title' => 'content_management_delete',],
            ['id' => 32, 'title' => 'content_category_access',],
            ['id' => 33, 'title' => 'content_category_create',],
            ['id' => 34, 'title' => 'content_category_edit',],
            ['id' => 35, 'title' => 'content_category_view',],
            ['id' => 36, 'title' => 'content_category_delete',],
            ['id' => 37, 'title' => 'content_tag_access',],
            ['id' => 38, 'title' => 'content_tag_create',],
            ['id' => 39, 'title' => 'content_tag_edit',],
            ['id' => 40, 'title' => 'content_tag_view',],
            ['id' => 41, 'title' => 'content_tag_delete',],
            ['id' => 42, 'title' => 'content_page_access',],
            ['id' => 43, 'title' => 'content_page_create',],
            ['id' => 44, 'title' => 'content_page_edit',],
            ['id' => 45, 'title' => 'content_page_view',],
            ['id' => 46, 'title' => 'content_page_delete',],
            ['id' => 47, 'title' => 'internal_notification_access',],
            ['id' => 48, 'title' => 'internal_notification_create',],
            ['id' => 49, 'title' => 'internal_notification_edit',],
            ['id' => 50, 'title' => 'internal_notification_view',],
            ['id' => 51, 'title' => 'internal_notification_delete',],

        ];

        foreach ($items as $item) {
            \App\Permission::create($item);
        }
    }
}
