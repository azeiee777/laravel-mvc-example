Project structure and there works
my-laravel-project/
│
├── app/
│   ├── Console/               # Custom Artisan commands
│   ├── Events/                # Events for the app
│   ├── Exceptions/            # Application-level exceptions
│   ├── Http/
│   │   ├── Controllers/       # Controllers for routes
│   │   │   └── Api/           # API-specific controllers
│   │   ├── Middleware/        # Custom middleware
│   │   ├── Requests/          # Form request validation classes
│   ├── Models/                # Eloquent models
│   ├── Repositories/          # Repository classes (e.g., UserRepository)
│   │   ├── Contracts/         # Interface contracts for repositories
│   │   └── Eloquent/          # Eloquent-based repository implementations
│   ├── Services/              # Service classes (business logic)
│   ├── Providers/             # Service providers
│   └── Policies/              # Authorization policies
│
├── bootstrap/                 # Application bootstrap files
│   └── cache/
├── config/                    # Configuration files for packages and app
├── database/
│   ├── factories/             # Model factories for testing
│   ├── migrations/            # Database migration files
│   ├── seeders/               # Database seeders
│
├── routes/
│   ├── api.php                # API routes
│   ├── web.php                # Web routes
│   └── channels.php           # Broadcast channel routes
│
├── resources/
│   ├── views/                 # Blade templates (HTML)
│   ├── lang/                  # Localization files
│   └── js/                    # JavaScript and Vue/React components
│
├── public/                    # Public assets (images, JS, CSS)
│   └── index.php              # Entry point for the app
│
├── storage/
│   ├── logs/                  # Log files
│   ├── framework/             # Cache and session data
│
├── tests/
│   ├── Feature/               # Feature tests
│   └── Unit/                  # Unit tests
│
├── vendor/                    # Composer dependencies
├── .env                       # Environment configuration
├── artisan                    # Artisan CLI script
├── composer.json              # Composer dependencies config
└── package.json               # Node dependencies config