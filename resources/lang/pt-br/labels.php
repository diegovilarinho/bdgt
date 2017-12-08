<?php

return [
    'modals' => [
        'button_close' => 'Fechar'
    ],
    'emails' => [
        'forgot_password_text' => 'Clique aqui para trocar sua senha:',
    ],
    'auth' => [
        'login' => 'Login',
        'logout' => 'Sair',
        'register' => 'Cadastrar',
        'register_button' => 'Criar uma nova conta',
        'forgot_password' => 'Esqueceu a senha?',
        'reset_password' => 'Trocar Senha',
        'send_password_reset_link' => 'Enviar link de troca de senha',
        'properties' => [
            'username' => 'Usuário',
            'email' => 'E-mail',
            'password' => 'Senha',
            'password_confirmation' => 'Confirmar Senha',
            'remember' => 'Lembrar-me',
        ]
    ],
    'accounts' => [
        'singular' => 'Account',
        'plural' => 'Accounts',
        'add_button' => 'Add Account',
        'edit_button' => 'Edit Account',
        'delete_button' => 'Delete this account',
        'properties' => [
            'date_opened' => 'Date Opened',
            'name' => 'Name',
            'balance' => 'Balance',
            'interest' => 'Interest Rate',
            'interest_period' => 'Interest Period',
        ],
        'modals' => [
            'create' => [
                'title' => 'Add an Account',
                'close_button' => 'Close',
                'save_button' => 'Save',
            ],
            'edit' => [
                'title' => 'Edit Account',
                'close_button' => 'Close',
                'save_button' => 'Edit',

            ],
            'delete' => [
                'title' => 'Delete Account',
                'close_button' => 'Close',
                'save_button' => 'Delete',
                'text' => 'Are you sure you want to delete this account? This operation cannot be undone.',
            ],
        ],
    ],
    'bills' => [
        'singular' => 'Bill',
        'plural' => 'Bills',
        'add_button' => 'Add Bill',
        'edit_button' => 'Edit Bill',
        'delete_button' => 'Delete this bill',
        'properties' => [
            'label' => 'Label',
            'amount' => 'Amount',
            'start_date' => 'Date',
            'frequency' => 'Frequency',
        ],
        'modals' => [
            'create' => [
                'title' => 'Add a Bill',
                'close_button' => 'Close',
                'save_button' => 'Save',
            ],
            'edit' => [
                'title' => 'Edit Bill',
                'close_button' => 'Close',
                'save_button' => 'Edit',

            ],
            'delete' => [
                'title' => 'Delete Bill',
                'close_button' => 'Close',
                'save_button' => 'Delete',
                'text' => 'Are you sure you want to delete this bill? This operation cannot be undone.',
            ],
        ],
    ],
    'calculators' => [
        'singular' => 'Calculator',
        'plural' => 'Calculators',
        'debt' => [
            'label' => 'Debt Calculator',
            'properties' => [
                'payment' => 'Monthly Payment',
                'currentBalance' => 'Current Balance',
                'interestRate' => 'Interest Rate',
                'minimumPayment' => 'Minimum Payment',
            ],
        ]
    ],
    'categories' => [
        'singular' => 'Category',
        'plural' => 'Categories',
        'add_button' => 'Add Category',
        'edit_button' => 'Edit Category',
        'delete_button' => 'Delete this category',
        'properties' => [
            'label' => 'Label',
            'budgeted' => 'Budget Amount',
        ],
        'modals' => [
            'create' => [
                'title' => 'Add a Category',
                'close_button' => 'Close',
                'save_button' => 'Save',
            ],
            'edit' => [
                'title' => 'Edit Category',
                'close_button' => 'Close',
                'save_button' => 'Edit',

            ],
            'delete' => [
                'title' => 'Delete Category',
                'close_button' => 'Close',
                'save_button' => 'Delete',
                'text' => 'Are you sure you want to delete this category? This operation cannot be undone.',
            ],
        ],
    ],
    'goals' => [
        'singular' => 'Goal',
        'plural' => 'Goals',
        'add_button' => 'Add Goal',
        'edit_button' => 'Edit Goal',
        'delete_button' => 'Delete this goal',
        'properties' => [
            'label' => 'Label',
            'amount' => 'Goal Amount',
            'balance' => 'Current Balance',
            'goal_date' => 'Goal Date',
        ],
        'modals' => [
            'create' => [
                'title' => 'Add a Goal',
                'close_button' => 'Close',
                'save_button' => 'Save',
            ],
            'edit' => [
                'title' => 'Edit Goal',
                'close_button' => 'Close',
                'save_button' => 'Edit',

            ],
            'delete' => [
                'title' => 'Delete Goal',
                'close_button' => 'Close',
                'save_button' => 'Delete',
                'text' => 'Are you sure you want to delete this goal? This operation cannot be undone.',
            ],
        ],
    ],
    'reports' => [
        'singular' => 'Report',
        'plural' => 'Reports',
        'spending_by_category' => 'Spending By Category',
        'spending_over_time' => 'Spending Over Time'
    ],
    'transactions' => [
        'singular' => 'Transaction',
        'plural' => 'Transactions',
        'add_button' => 'Add Transaction',
        'edit_button' => 'Edit Transaction',
        'delete_button' => 'Delete this transaction',
        'properties' => [
            'date' => 'Date',
            'account_id' => 'Account',
            'category_id' => 'Category',
            'bill_id' => 'Bill',
            'payee' => 'Payee',
            'amount' => 'Amount',
            'inflow' => 'Inflow',
            'outflow' => 'Outflow',
            'cleared' => 'Cleared',
            'flair' => 'Flair',
        ],
        'modals' => [
            'create' => [
                'title' => 'Add a Transaction',
                'close_button' => 'Close',
                'save_button' => 'Save',
            ],
            'edit' => [
                'title' => 'Edit Transaction',
                'close_button' => 'Close',
                'save_button' => 'Edit',

            ],
            'delete' => [
                'title' => 'Delete Transaction',
                'close_button' => 'Close',
                'save_button' => 'Delete',
                'text' => 'Are you sure you want to delete this transaction? This operation cannot be undone.',
            ],
        ],
    ],
];
