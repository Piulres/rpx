<?php

return [
		'user-management' => [		'title' => 'Gestão de usuários',		'fields' => [		],	],
		'permissions' => [		'title' => 'Permissões',		'fields' => [			'title' => 'Título',		],	],
		'roles' => [		'title' => 'Funções',		'fields' => [			'title' => 'Título',			'permission' => 'Permissões',		],	],
		'users' => [		'title' => 'Usuários',		'fields' => [			'name' => 'Nome',			'email' => 'E-mail',			'password' => 'Senha',			'role' => 'Função',			'remember-token' => 'Lembrar Senha',			'team' => 'Equipe',			'approved' => 'Approved',			'created-by' => 'Created by',		],	],
		'user-actions' => [		'title' => 'Ações do usuário',		'created_at' => 'Tempo',		'fields' => [			'user' => 'Usuário',			'action' => 'Ação',			'action-model' => 'Modelo de ação',			'action-id' => 'ID de ação',		],	],
		'teams' => [		'title' => 'Teams',		'fields' => [			'name' => 'Name',		],	],
		'content-management' => [		'title' => 'Gestão de conteúdo',		'fields' => [		],	],
		'content-categories' => [		'title' => 'Categorias',		'fields' => [			'title' => 'Categoria',			'slug' => 'Slug',		],	],
		'content-tags' => [		'title' => 'Tags',		'fields' => [			'title' => 'Tag',			'slug' => 'Slug',		],	],
		'content-pages' => [		'title' => 'Páginas',		'fields' => [			'title' => 'Título',			'category-id' => 'Categorias',			'tag-id' => 'Tags',			'page-text' => 'Texto',			'excerpt' => 'Resumo',			'featured-image' => 'Imagem em destaque',		],	],
		'internal-notifications' => [		'title' => 'Notifications',		'fields' => [		],	],
		'time-management' => [		'title' => 'Time management',		'fields' => [		],	],
		'time-work-types' => [		'title' => 'Work types',		'fields' => [			'name' => 'Name',		],	],
		'time-projects' => [		'title' => 'Projetos',		'fields' => [			'name' => 'Nome',		],	],
		'time-entries' => [		'title' => 'Entradas de tempo',		'fields' => [			'work-type' => 'Tipo de trabalho',			'project' => 'Projeto',			'start-time' => 'Tempo de início',			'end-time' => 'Tempo de final',			'created-by' => 'Created by',			'created-by-team' => 'Created by Team',		],	],
		'time-reports' => [		'title' => 'Relatórios',		'fields' => [		],	],
		'faq-management' => [		'title' => 'Gestão de FAQ',		'fields' => [		],	],
		'faq-categories' => [		'title' => 'Categorias',		'fields' => [			'title' => 'Categoria',		],	],
		'faq-questions' => [		'title' => 'Questões',		'fields' => [			'category' => 'Categoria',			'question-text' => 'Questão',			'answer-text' => 'Resposta',		],	],
		'basic-crm' => [		'title' => 'CRM Básico',		'fields' => [		],	],
		'crm-statuses' => [		'title' => 'Status',		'fields' => [			'title' => 'Título',		],	],
		'crm-customers' => [		'title' => 'Clientes',		'fields' => [			'first-name' => 'Primeiro nome',			'last-name' => 'Último nome',			'crm-status' => 'Estado',			'email' => 'E-mail',			'phone' => 'Telefone',			'address' => 'Endereço',			'skype' => 'Skype',			'website' => 'Website',			'description' => 'Descrição',		],	],
		'crm-notes' => [		'title' => 'Notas',		'fields' => [			'customer' => 'Cliente',			'note' => 'Notas',		],	],
		'crm-documents' => [		'title' => 'Documentos',		'fields' => [			'customer' => 'Cliente',			'name' => 'Título',			'description' => 'Descrição',			'file' => 'Arquivo',		],	],
		'expense-management' => [		'title' => 'Expense Management',		'fields' => [		],	],
		'expense-category' => [		'title' => 'Expense Categories',		'fields' => [			'name' => 'Name',		],	],
		'income-category' => [		'title' => 'Categorias de entrada',		'fields' => [			'name' => 'Name',		],	],
		'income' => [		'title' => 'Income',		'fields' => [			'income-category' => 'Income Category',			'entry-date' => 'Entry date',			'amount' => 'Amount',		],	],
		'expense' => [		'title' => 'Despesas',		'fields' => [			'expense-category' => 'Categoria de Despesa',			'entry-date' => 'Data de entrada',			'amount' => 'Quantidade',		],	],
		'monthly-report' => [		'title' => 'Relatório mensal',		'fields' => [		],	],
		'internal-notifications' => [		'title' => 'Notifications',		'fields' => [			'text' => 'Text',			'link' => 'Link',			'users' => 'Users',		],	],
		'assets-management' => [		'title' => 'Assets management',		'fields' => [		],	],
		'assets-categories' => [		'title' => 'Categories',		'fields' => [			'title' => 'Title',		],	],
		'assets-statuses' => [		'title' => 'Statuses',		'fields' => [			'title' => 'Title',		],	],
		'assets-locations' => [		'title' => 'Locations',		'fields' => [			'title' => 'Title',		],	],
		'assets' => [		'title' => 'Assets',		'fields' => [			'category' => 'Category',			'serial-number' => 'Serial number',			'title' => 'Title',			'photo1' => 'Photo1',			'photo2' => 'Photo2',			'photo3' => 'Photo3',			'status' => 'Status',			'location' => 'Location',			'assigned-user' => 'Assigned (user)',			'notes' => 'Notes',		],	],
		'assets-history' => [		'title' => 'Assets history',		'created_at' => 'Tempo',		'fields' => [			'asset' => 'Asset',			'status' => 'Status',			'location' => 'Location',			'assigned-user' => 'Assigned (user)',		],	],
		'contact-management' => [		'title' => 'Contact management',		'fields' => [		],	],
		'contact-companies' => [		'title' => 'Companies',		'fields' => [			'name' => 'Company name',			'address' => 'Address',			'website' => 'Website',			'email' => 'Email',		],	],
		'contacts' => [		'title' => 'Contacts',		'fields' => [			'company' => 'Company',			'first-name' => 'First name',			'last-name' => 'Last name',			'phone1' => 'Phone 1',			'phone2' => 'Phone 2',			'email' => 'Email',			'skype' => 'Skype',			'address' => 'Address',		],	],
		'task-management' => [		'title' => 'Task management',		'fields' => [		],	],
		'task-statuses' => [		'title' => 'Statuses',		'fields' => [			'name' => 'Name',		],	],
		'task-tags' => [		'title' => 'Tags',		'fields' => [			'name' => 'Name',		],	],
		'tasks' => [		'title' => 'Tasks',		'fields' => [			'name' => 'Name',			'description' => 'Description',			'status' => 'Status',			'tag' => 'Tags',			'attachment' => 'Attachment',			'due-date' => 'Due date',			'user' => 'Assigned to',		],	],
		'task-calendar' => [		'title' => 'Calendar',		'fields' => [		],	],
		'client-management' => [		'title' => 'Client management',		'fields' => [		],	],
		'client-management-settings' => [		'title' => 'Client management settings',		'fields' => [		],	],
		'client-currencies' => [		'title' => 'Currencies',		'fields' => [			'title' => 'Title',			'code' => 'Code',			'main-currency' => 'Main currency',		],	],
		'client-transaction-types' => [		'title' => 'Transaction types',		'fields' => [			'title' => 'Title',		],	],
		'client-income-sources' => [		'title' => 'Income sources',		'fields' => [			'title' => 'Title',			'fee-percent' => 'Fee percent',		],	],
		'client-statuses' => [		'title' => 'Client statuses',		'fields' => [			'title' => 'Title',		],	],
		'client-project-statuses' => [		'title' => 'Project statuses',		'fields' => [			'title' => 'Title',		],	],
		'clients' => [		'title' => 'Clients',		'fields' => [			'first-name' => 'First name',			'last-name' => 'Last name',			'company-name' => 'Company',			'email' => 'Email',			'phone' => 'Phone',			'website' => 'Website',			'skype' => 'Skype',			'country' => 'Country',			'client-status' => 'Client status',		],	],
		'client-projects' => [		'title' => 'Projects',		'fields' => [			'title' => 'Title',			'client' => 'Client',			'description' => 'Description',			'date' => 'Start date',			'budget' => 'Budget',			'project-status' => 'Project status',		],	],
		'client-notes' => [		'title' => 'Notes',		'fields' => [			'project' => 'Project',			'text' => 'Note text',		],	],
		'client-documents' => [		'title' => 'Documents',		'fields' => [			'project' => 'Project',			'title' => 'Title',			'description' => 'Description',			'file' => 'File',		],	],
		'client-transactions' => [		'title' => 'Transactions',		'fields' => [			'project' => 'Project',			'transaction-type' => 'Transaction type',			'income-source' => 'Income source',			'title' => 'Title',			'description' => 'Description',			'amount' => 'Amount',			'currency' => 'Currency',			'transaction-date' => 'Transaction date',		],	],
		'client-reports' => [		'title' => 'Reports',		'fields' => [		],	],
	'app_create' => 'Criar',
	'app_save' => 'Salvar',
	'app_edit' => 'Editar',
	'app_view' => 'Visualizar',
	'app_update' => 'Atualizar',
	'app_list' => 'Listar',
	'app_no_entries_in_table' => 'Sem entradas na tabela',
	'app_custom_controller_index' => 'Índice de Controller personalizado.',
	'app_logout' => 'Sair',
	'app_add_new' => 'Novo',
	'app_are_you_sure' => 'Tem certeza?',
	'app_back_to_list' => 'Voltar',
	'app_dashboard' => 'Painel',
	'app_delete' => 'Excluir',
	'app_restore' => 'Restaurar',
	'app_permadel' => 'Excluir',
	'app_all' => 'Todos',
	'app_trash' => 'Lixo',
	'app_delete_selected' => 'Excluir Selecionados',
	'app_category' => 'Categoria',
	'app_categories' => 'Categorias',
	'app_sample_category' => 'Categoria Exemplo',
	'app_questions' => 'Questões',
	'app_question' => 'Questão',
	'app_answer' => 'Resposta',
	'app_administrator_can_create_other_users' => 'Administrador',
	'app_simple_user' => 'Usuário simples',
	'app_title' => 'Título',
	'app_roles' => 'Funções',
	'app_role' => 'Função',
	'app_name' => 'Nome',
	'app_password' => 'Senha',
	'app_remember_token' => 'Lembrar Senha',
	'app_permissions' => 'Permissões',
	'app_action' => 'Ação',
	'app_forgot_password' => 'Esqueceu-se da senha?',
	'app_remember_me' => 'Lembrar',
	'app_change_password' => 'Alterar senha',
	'app_print' => 'Imprimir',
	'app_copy' => 'Copiar',
	'app_colvis' => 'Colunas Visíveis',
	'app_reset_password' => 'Redefinir senha',
	'app_email_greet' => 'Olá',
	'app_confirm_password' => 'Confirmação da senha',
	'app_please_select' => 'Selecione por favor',
	'app_sample_question' => 'Questão Exemplo',
	'app_sample_answer' => 'Resposta Exemplo',
	'app_faq_management' => 'Gestão de FAQ',
	'app_user_management' => 'Gestão de usuários',
	'app_users' => 'Usuários',
	'app_user' => 'Usuário',
	'app_email' => 'E-mail',
	'app_user_actions' => 'Ações do usuário',
	'app_action_model' => 'Modelo de ação',
	'app_action_id' => 'ID de ação',
	'app_time' => 'Tempo',
	'app_campaign' => 'Campanha',
	'app_campaigns' => 'Campanhas',
	'app_description' => 'Descrição',
	'app_valid_from' => 'Válido de',
	'app_valid_to' => 'Válido até',
	'app_discount_amount' => 'Quantia de desconto',
	'app_discount_percent' => 'Percentual de desconto',
	'app_coupons_amount' => 'Quantia de cupons',
	'app_coupons' => 'Cupons',
	'app_code' => 'Código',
	'app_redeem_time' => 'Tempo de resgate',
	'app_coupon_management' => 'Gesão de cupons',
	'app_time_management' => 'Gestão de tempo',
	'app_projects' => 'Projetos',
	'app_reports' => 'Relatórios',
	'app_time_entries' => 'Entradas de tempo',
	'app_work_type' => 'Tipo de trabalho',
	'app_work_types' => 'Tipos de trabalho',
	'app_project' => 'Projeto',
	'app_start_time' => 'Tempo de início',
	'app_end_time' => 'Tempo de final',
	'app_expense_category' => 'Categoria de Despesa',
	'app_expense_categories' => 'Categorias de Despesa',
	'app_expense_management' => 'Gestão de Despesa',
	'app_expenses' => 'Despesas',
	'app_expense' => 'Despesa',
	'app_entry_date' => 'Data de entrada',
	'app_amount' => 'Quantidade',
	'app_income_categories' => 'Categorias de entrada',
	'app_monthly_report' => 'Relatório mensal',
	'app_companies' => 'Empresas',
	'app_company_name' => 'Nome da empresa',
	'app_address' => 'Endereço',
	'app_website' => 'Website',
	'app_contact_management' => 'Gestão de contato',
	'app_contacts' => 'Contatos',
	'app_company' => 'Empresa',
	'app_first_name' => 'Primeiro nome',
	'app_last_name' => 'Último nome',
	'app_phone' => 'Telefone',
	'app_phone1' => 'Telefone 1',
	'app_phone2' => 'Telefone 2',
	'app_skype' => 'Skype',
	'app_photo' => 'Foto (máx. 8 MB)',
	'app_category_name' => 'Nome da categoria',
	'app_product_management' => 'Gestão de produtos',
	'app_products' => 'Produtos',
	'app_product_name' => 'Nome do produto',
	'app_price' => 'Preço',
	'app_tags' => 'Tags',
	'app_tag' => 'Tag',
	'app_photo1' => 'Foto1',
	'app_photo2' => 'Foto2',
	'app_photo3' => 'Foto3',
	'app_calendar' => 'Calendário',
	'app_statuses' => 'Status',
	'app_task_management' => 'Gestão de tarefas',
	'app_tasks' => 'Tarefas',
	'app_status' => 'Estado',
	'app_attachment' => 'Anexo',
	'app_due_date' => 'Data de vencimento',
	'app_assigned_to' => 'Atribuído',
	'app_assets' => 'Ativos',
	'app_asset' => 'Ativo',
	'app_serial_number' => 'Número de série',
	'app_location' => 'Local',
	'app_locations' => 'Locais',
	'app_assigned_user' => 'Atribuído (usuário)',
	'app_notes' => 'Notas',
	'app_assets_history' => 'Histórico de ativos',
	'app_assets_management' => 'Gestão de ativos',
	'app_content_management' => 'Gestão de conteúdo',
	'app_text' => 'Texto',
	'app_pages' => 'Páginas',
	'app_axis' => 'Eixo',
	'app_show' => 'Exibir',
	'app_group_by' => 'Agrupar por',
	'app_chart_type' => 'Tipo de gráfico',
	'app_create_new_report' => 'Criar novo relatório',
	'app_no_reports_yet' => 'Nenhum relatório ainda.',
	'app_created_at' => 'Criado em',
	'app_updated_at' => 'Atualizado em',
	'app_deleted_at' => 'Excluído em',
	'app_reports_x_axis_field' => 'Eixo X - por favor escolha um dos campos de data/hora',
	'app_reports_y_axis_field' => 'Eixo Y - por favor escolha um dos campos numéricos',
	'app_select_crud_placeholder' => 'Por favor selecione um de seus CRUDs',
	'app_select_dt_placeholder' => 'Por favor selecione um dos campos de data/hora',
	'app_aggregate_function_use' => 'Agregar função a utilizar',
	'app_x_axis_group_by' => 'Eixo X agrupar por',
	'app_x_axis_field' => 'Campo do eixo X (data/hora)',
	'app_y_axis_field' => 'Campo do eixo Y',
	'app_integer_float_placeholder' => 'Por favor selecione um dos campos inteiros/float',
	'app_change_notifications_field_1_label' => 'Enviar notificação por e-mail ao Usuário',
	'app_select_users_placeholder' => 'Por favor selecione um de seus Usuários',
	'app_is_created' => 'foi criado',
	'app_is_updated' => 'foi atualizado',
	'app_is_deleted' => 'foi excluído',
	'app_notifications' => 'Notificações',
	'app_notify_user' => 'Notificar usuário',
	'app_when_crud' => 'Quando CRUD',
	'app_create_new_notification' => 'Criar nova Notificação',
	'app_stripe_transactions' => 'Classe de transações',
	'app_upgrade_to_premium' => 'Atualizar para Premium',
	'app_messages' => 'Mensagens',
	'app_you_have_no_messages' => 'Você não possui nenhuma mensagem.',
	'app_all_messages' => 'Todas as mensagens',
	'app_new_message' => 'Nova mensagem',
	'app_outbox' => 'Caixa de saída',
	'app_inbox' => 'Caixa de entrada',
	'app_recipient' => 'Destinatário',
	'app_subject' => 'Assunto',
	'app_message' => 'Mensagem',
	'app_send' => 'Enviar',
	'app_reply' => 'Responder',
	'app_calendar_sources' => 'Fontes de calendário',
	'app_new_calendar_source' => 'Criar nova fonte de calendário',
	'app_crud_title' => 'Título do CRUD',
	'app_crud_date_field' => 'Campo de data CRUD',
	'app_prefix' => 'Prefixo',
	'app_label_field' => 'Campo de rótulo',
	'app_suffix' => 'Sufixo',
	'app_no_calendar_sources' => 'Nenhuma fonte de calendário ainda.',
	'app_crud_event_field' => 'Campo de rótulo do evento',
	'app_create_new_calendar_source' => 'Criar nova Fonte de Calendário',
	'app_edit_calendar_source' => 'Editar Fonte de Calendário',
	'app_client_management' => 'Gestão de clientes',
	'app_client_management_settings' => 'Configurações de Gestão de clientes',
	'app_country' => 'País',
	'app_client_status' => 'Estado do cliente',
	'app_clients' => 'Clientes',
	'app_client_statuses' => 'Estado do cliente',
	'app_currencies' => 'Moedas',
	'app_main_currency' => 'Moeda principal',
	'app_documents' => 'Documentos',
	'app_file' => 'Arquivo',
	'app_income_source' => 'Fonte de entrada',
	'app_income_sources' => 'Fontes de entrada',
	'app_fee_percent' => 'Percentual de taxa',
	'app_note_text' => 'Texto da nota',
	'app_client' => 'Cliente',
	'app_start_date' => 'Data de início',
	'app_budget' => 'Orçamento',
	'app_project_status' => 'Estado do projeto',
	'app_project_statuses' => 'Estado do projeto',
	'app_transactions' => 'Transações',
	'app_transaction_types' => 'Tipos de transação',
	'app_transaction_type' => 'Tipo de transação',
	'app_transaction_date' => 'Data da transação',
	'app_currency' => 'Moeda',
	'app_current_password' => 'Senha atual',
	'app_new_password' => 'Nova senha',
	'app_password_confirm' => 'Confirmação da nova senha',
	'app_dashboard_text' => 'Sessão iniciada',
	'app_login' => 'Entrar',
	'app_reset_password_woops' => '<strong> Ooops! </strong> Há problemas com a entrada:',
	'app_email_line1' => 'Você está recebendo este e-mail porque nós recebemos uma solicitação de redefinição de senha para a sua conta.',
	'app_email_line2' => 'Se você não solicitou redefinição de senha, nenhuma ação é necessária.',
	'app_if_you_are_having_trouble' => 'Se você está tendo problemas para clicar no',
	'app_copy_paste_url_bellow' => 'botão, copie e cole a URL abaixo no seu navegador web:',
	'app_excerpt' => 'Resumo',
	'app_featured_image' => 'Imagem em destaque',
	'app_change_notifications_field_2_label' => 'Quando entrar no CRUD',
	'app_email_regards' => 'Saudações',
	'app_register' => 'Registrar',
	'app_registration' => 'Registro',
	'app_not_approved_title' => 'A sua conta não está aprovada',
	'app_not_approved_p' => 'Sua conta não foi liberada ainda pelo administrador, por favor, aguarde e tente mais tarde.',
	'app_there_were_problems_with_input' => 'Há problemas com a entrada',
	'app_whoops' => 'Ops!',
	'app_slug' => 'Slug',
	'app_csv' => 'CSV',
	'app_excel' => 'Excel',
	'app_pdf' => 'PDF',
	'app_file_contains_header_row' => 'O arquivo contém cabeçalho?',
	'app_csvImport' => 'Importação CSV',
	'app_csv_file_to_import' => 'Arquivo CSV para importar',
	'app_parse_csv' => 'Analisar CSV',
	'app_import_data' => 'Importar data',
	'app_imported_rows_to_table' => 'Importado :rows linhas para tabela :table',
	'app_subscription-billing' => 'Assinaturas',
	'app_subscription-payments' => 'Pagamentos',
	'app_basic_crm' => 'CRM Básico',
	'app_customers' => 'Clientes',
	'app_customer' => 'Cliente',
	'app_select_all' => 'Selecionar tudo',
	'app_deselect_all' => 'Cancelar seleção',
	'app_team-management' => 'Equipes',
	'app_team-management-singular' => 'Equipe',
	'global_title' => 'RPX',
];