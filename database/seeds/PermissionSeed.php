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
            ['id' => 52, 'title' => 'time_management_access',],
            ['id' => 53, 'title' => 'time_management_create',],
            ['id' => 54, 'title' => 'time_management_edit',],
            ['id' => 55, 'title' => 'time_management_view',],
            ['id' => 56, 'title' => 'time_management_delete',],
            ['id' => 57, 'title' => 'time_work_type_access',],
            ['id' => 58, 'title' => 'time_work_type_create',],
            ['id' => 59, 'title' => 'time_work_type_edit',],
            ['id' => 60, 'title' => 'time_work_type_view',],
            ['id' => 61, 'title' => 'time_work_type_delete',],
            ['id' => 62, 'title' => 'time_project_access',],
            ['id' => 63, 'title' => 'time_project_create',],
            ['id' => 64, 'title' => 'time_project_edit',],
            ['id' => 65, 'title' => 'time_project_view',],
            ['id' => 66, 'title' => 'time_project_delete',],
            ['id' => 67, 'title' => 'time_entry_access',],
            ['id' => 68, 'title' => 'time_entry_create',],
            ['id' => 69, 'title' => 'time_entry_edit',],
            ['id' => 70, 'title' => 'time_entry_view',],
            ['id' => 71, 'title' => 'time_entry_delete',],
            ['id' => 72, 'title' => 'time_report_access',],
            ['id' => 73, 'title' => 'time_report_create',],
            ['id' => 74, 'title' => 'time_report_edit',],
            ['id' => 75, 'title' => 'time_report_view',],
            ['id' => 76, 'title' => 'time_report_delete',],
            ['id' => 77, 'title' => 'faq_management_access',],
            ['id' => 78, 'title' => 'faq_management_create',],
            ['id' => 79, 'title' => 'faq_management_edit',],
            ['id' => 80, 'title' => 'faq_management_view',],
            ['id' => 81, 'title' => 'faq_management_delete',],
            ['id' => 82, 'title' => 'faq_category_access',],
            ['id' => 83, 'title' => 'faq_category_create',],
            ['id' => 84, 'title' => 'faq_category_edit',],
            ['id' => 85, 'title' => 'faq_category_view',],
            ['id' => 86, 'title' => 'faq_category_delete',],
            ['id' => 87, 'title' => 'faq_question_access',],
            ['id' => 88, 'title' => 'faq_question_create',],
            ['id' => 89, 'title' => 'faq_question_edit',],
            ['id' => 90, 'title' => 'faq_question_view',],
            ['id' => 91, 'title' => 'faq_question_delete',],
            ['id' => 92, 'title' => 'basic_crm_access',],
            ['id' => 93, 'title' => 'basic_crm_create',],
            ['id' => 94, 'title' => 'basic_crm_edit',],
            ['id' => 95, 'title' => 'basic_crm_view',],
            ['id' => 96, 'title' => 'basic_crm_delete',],
            ['id' => 97, 'title' => 'crm_status_access',],
            ['id' => 98, 'title' => 'crm_status_create',],
            ['id' => 99, 'title' => 'crm_status_edit',],
            ['id' => 100, 'title' => 'crm_status_view',],
            ['id' => 101, 'title' => 'crm_status_delete',],
            ['id' => 102, 'title' => 'crm_customer_access',],
            ['id' => 103, 'title' => 'crm_customer_create',],
            ['id' => 104, 'title' => 'crm_customer_edit',],
            ['id' => 105, 'title' => 'crm_customer_view',],
            ['id' => 106, 'title' => 'crm_customer_delete',],
            ['id' => 107, 'title' => 'crm_note_access',],
            ['id' => 108, 'title' => 'crm_note_create',],
            ['id' => 109, 'title' => 'crm_note_edit',],
            ['id' => 110, 'title' => 'crm_note_view',],
            ['id' => 111, 'title' => 'crm_note_delete',],
            ['id' => 112, 'title' => 'crm_document_access',],
            ['id' => 113, 'title' => 'crm_document_create',],
            ['id' => 114, 'title' => 'crm_document_edit',],
            ['id' => 115, 'title' => 'crm_document_view',],
            ['id' => 116, 'title' => 'crm_document_delete',],
            ['id' => 117, 'title' => 'expense_management_access',],
            ['id' => 118, 'title' => 'expense_management_create',],
            ['id' => 119, 'title' => 'expense_management_edit',],
            ['id' => 120, 'title' => 'expense_management_view',],
            ['id' => 121, 'title' => 'expense_management_delete',],
            ['id' => 122, 'title' => 'expense_category_access',],
            ['id' => 123, 'title' => 'expense_category_create',],
            ['id' => 124, 'title' => 'expense_category_edit',],
            ['id' => 125, 'title' => 'expense_category_view',],
            ['id' => 126, 'title' => 'expense_category_delete',],
            ['id' => 127, 'title' => 'income_category_access',],
            ['id' => 128, 'title' => 'income_category_create',],
            ['id' => 129, 'title' => 'income_category_edit',],
            ['id' => 130, 'title' => 'income_category_view',],
            ['id' => 131, 'title' => 'income_category_delete',],
            ['id' => 132, 'title' => 'income_access',],
            ['id' => 133, 'title' => 'income_create',],
            ['id' => 134, 'title' => 'income_edit',],
            ['id' => 135, 'title' => 'income_view',],
            ['id' => 136, 'title' => 'income_delete',],
            ['id' => 137, 'title' => 'expense_access',],
            ['id' => 138, 'title' => 'expense_create',],
            ['id' => 139, 'title' => 'expense_edit',],
            ['id' => 140, 'title' => 'expense_view',],
            ['id' => 141, 'title' => 'expense_delete',],
            ['id' => 142, 'title' => 'monthly_report_access',],
            ['id' => 143, 'title' => 'monthly_report_create',],
            ['id' => 144, 'title' => 'monthly_report_edit',],
            ['id' => 145, 'title' => 'monthly_report_view',],
            ['id' => 146, 'title' => 'monthly_report_delete',],
            ['id' => 147, 'title' => 'internal_notification_access',],
            ['id' => 148, 'title' => 'internal_notification_create',],
            ['id' => 149, 'title' => 'internal_notification_edit',],
            ['id' => 150, 'title' => 'internal_notification_view',],
            ['id' => 151, 'title' => 'internal_notification_delete',],
            ['id' => 152, 'title' => 'assets_category_access',],
            ['id' => 153, 'title' => 'assets_category_create',],
            ['id' => 154, 'title' => 'assets_category_edit',],
            ['id' => 155, 'title' => 'assets_category_view',],
            ['id' => 156, 'title' => 'assets_category_delete',],
            ['id' => 157, 'title' => 'assets_management_access',],
            ['id' => 158, 'title' => 'assets_management_create',],
            ['id' => 159, 'title' => 'assets_management_edit',],
            ['id' => 160, 'title' => 'assets_management_view',],
            ['id' => 161, 'title' => 'assets_management_delete',],
            ['id' => 162, 'title' => 'assets_status_access',],
            ['id' => 163, 'title' => 'assets_status_create',],
            ['id' => 164, 'title' => 'assets_status_edit',],
            ['id' => 165, 'title' => 'assets_status_view',],
            ['id' => 166, 'title' => 'assets_status_delete',],
            ['id' => 167, 'title' => 'assets_location_access',],
            ['id' => 168, 'title' => 'assets_location_create',],
            ['id' => 169, 'title' => 'assets_location_edit',],
            ['id' => 170, 'title' => 'assets_location_view',],
            ['id' => 171, 'title' => 'assets_location_delete',],
            ['id' => 172, 'title' => 'asset_access',],
            ['id' => 173, 'title' => 'asset_create',],
            ['id' => 174, 'title' => 'asset_edit',],
            ['id' => 175, 'title' => 'asset_view',],
            ['id' => 176, 'title' => 'asset_delete',],
            ['id' => 177, 'title' => 'assets_history_access',],
            ['id' => 178, 'title' => 'assets_history_create',],
            ['id' => 179, 'title' => 'assets_history_edit',],
            ['id' => 180, 'title' => 'assets_history_view',],
            ['id' => 181, 'title' => 'assets_history_delete',],
            ['id' => 182, 'title' => 'contact_management_access',],
            ['id' => 183, 'title' => 'contact_management_create',],
            ['id' => 184, 'title' => 'contact_management_edit',],
            ['id' => 185, 'title' => 'contact_management_view',],
            ['id' => 186, 'title' => 'contact_management_delete',],
            ['id' => 187, 'title' => 'contact_company_access',],
            ['id' => 188, 'title' => 'contact_company_create',],
            ['id' => 189, 'title' => 'contact_company_edit',],
            ['id' => 190, 'title' => 'contact_company_view',],
            ['id' => 191, 'title' => 'contact_company_delete',],
            ['id' => 192, 'title' => 'contact_access',],
            ['id' => 193, 'title' => 'contact_create',],
            ['id' => 194, 'title' => 'contact_edit',],
            ['id' => 195, 'title' => 'contact_view',],
            ['id' => 196, 'title' => 'contact_delete',],
            ['id' => 197, 'title' => 'task_status_access',],
            ['id' => 198, 'title' => 'task_status_create',],
            ['id' => 199, 'title' => 'task_status_edit',],
            ['id' => 200, 'title' => 'task_status_view',],
            ['id' => 201, 'title' => 'task_status_delete',],
            ['id' => 202, 'title' => 'task_management_access',],
            ['id' => 203, 'title' => 'task_management_create',],
            ['id' => 204, 'title' => 'task_management_edit',],
            ['id' => 205, 'title' => 'task_management_view',],
            ['id' => 206, 'title' => 'task_management_delete',],
            ['id' => 207, 'title' => 'task_tag_access',],
            ['id' => 208, 'title' => 'task_tag_create',],
            ['id' => 209, 'title' => 'task_tag_edit',],
            ['id' => 210, 'title' => 'task_tag_view',],
            ['id' => 211, 'title' => 'task_tag_delete',],
            ['id' => 212, 'title' => 'task_access',],
            ['id' => 213, 'title' => 'task_create',],
            ['id' => 214, 'title' => 'task_edit',],
            ['id' => 215, 'title' => 'task_view',],
            ['id' => 216, 'title' => 'task_delete',],
            ['id' => 217, 'title' => 'task_calendar_access',],
            ['id' => 218, 'title' => 'task_calendar_create',],
            ['id' => 219, 'title' => 'task_calendar_edit',],
            ['id' => 220, 'title' => 'task_calendar_view',],
            ['id' => 221, 'title' => 'task_calendar_delete',],
            ['id' => 222, 'title' => 'client_management_access',],
            ['id' => 223, 'title' => 'client_management_create',],
            ['id' => 224, 'title' => 'client_management_edit',],
            ['id' => 225, 'title' => 'client_management_view',],
            ['id' => 226, 'title' => 'client_management_delete',],
            ['id' => 227, 'title' => 'client_management_setting_access',],
            ['id' => 228, 'title' => 'client_management_setting_create',],
            ['id' => 229, 'title' => 'client_management_setting_edit',],
            ['id' => 230, 'title' => 'client_management_setting_view',],
            ['id' => 231, 'title' => 'client_management_setting_delete',],
            ['id' => 232, 'title' => 'client_currency_access',],
            ['id' => 233, 'title' => 'client_currency_create',],
            ['id' => 234, 'title' => 'client_currency_edit',],
            ['id' => 235, 'title' => 'client_currency_view',],
            ['id' => 236, 'title' => 'client_currency_delete',],
            ['id' => 237, 'title' => 'client_transaction_type_access',],
            ['id' => 238, 'title' => 'client_transaction_type_create',],
            ['id' => 239, 'title' => 'client_transaction_type_edit',],
            ['id' => 240, 'title' => 'client_transaction_type_view',],
            ['id' => 241, 'title' => 'client_transaction_type_delete',],
            ['id' => 242, 'title' => 'client_income_source_access',],
            ['id' => 243, 'title' => 'client_income_source_create',],
            ['id' => 244, 'title' => 'client_income_source_edit',],
            ['id' => 245, 'title' => 'client_income_source_view',],
            ['id' => 246, 'title' => 'client_income_source_delete',],
            ['id' => 247, 'title' => 'client_status_access',],
            ['id' => 248, 'title' => 'client_status_create',],
            ['id' => 249, 'title' => 'client_status_edit',],
            ['id' => 250, 'title' => 'client_status_view',],
            ['id' => 251, 'title' => 'client_status_delete',],
            ['id' => 252, 'title' => 'client_project_status_access',],
            ['id' => 253, 'title' => 'client_project_status_create',],
            ['id' => 254, 'title' => 'client_project_status_edit',],
            ['id' => 255, 'title' => 'client_project_status_view',],
            ['id' => 256, 'title' => 'client_project_status_delete',],
            ['id' => 257, 'title' => 'client_access',],
            ['id' => 258, 'title' => 'client_create',],
            ['id' => 259, 'title' => 'client_edit',],
            ['id' => 260, 'title' => 'client_view',],
            ['id' => 261, 'title' => 'client_delete',],
            ['id' => 262, 'title' => 'client_project_access',],
            ['id' => 263, 'title' => 'client_project_create',],
            ['id' => 264, 'title' => 'client_project_edit',],
            ['id' => 265, 'title' => 'client_project_view',],
            ['id' => 266, 'title' => 'client_project_delete',],
            ['id' => 267, 'title' => 'client_note_access',],
            ['id' => 268, 'title' => 'client_note_create',],
            ['id' => 269, 'title' => 'client_note_edit',],
            ['id' => 270, 'title' => 'client_note_view',],
            ['id' => 271, 'title' => 'client_note_delete',],
            ['id' => 272, 'title' => 'client_document_access',],
            ['id' => 273, 'title' => 'client_document_create',],
            ['id' => 274, 'title' => 'client_document_edit',],
            ['id' => 275, 'title' => 'client_document_view',],
            ['id' => 276, 'title' => 'client_document_delete',],
            ['id' => 277, 'title' => 'client_transaction_access',],
            ['id' => 278, 'title' => 'client_transaction_create',],
            ['id' => 279, 'title' => 'client_transaction_edit',],
            ['id' => 280, 'title' => 'client_transaction_view',],
            ['id' => 281, 'title' => 'client_transaction_delete',],

        ];

        foreach ($items as $item) {
            \App\Permission::create($item);
        }
    }
}
