<?php
// Fisierul de configurare pentru autentificare 
return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session"
    |
    */
// Se identifica verificarile care vor fi folosite in aplicatie, 'web' fiind cea default din Laravel
    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        //Pentru verrificarea datelor Adminilor :
           
        'admin' => [
            // se foloseste driver ul session care stocheaza datele de autentificare in sesiunea user ului
            'driver' => 'session',
            // se foloseste provider ul admins pentru a citii informatii din baza de date
            'provider' => 'admins',
        ],

        'companie' => [
            // se foloseste driver ul session care stocheaza datele de autentificare in sesiunea user ului
            'driver' => 'session',
            // se foloseste provider ul admins pentru a citii informatii din baza de date
            'provider' => 'companies',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */
// Aici sunt definiti provideri folositi mai sus pentru a aduce inforrmatiile userilor pentru autentificare 
    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

// Pentru verificarea Adminilor se foloseste drriver ul eloquent care foloseste modelul construit App\Models\Admin pentru a retrage date din baza de date
        'companies' => [
            'driver' => 'eloquent',
            'model' => App\Models\Company::class,
        ],

        'companii' => [
            'driver' => 'eloquent',
            'model' => App\Models\Admin::class,
        ],

        

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that each reset token will be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */
//Pentru resetarea parolelor se face configurarea acelor resetari
    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    // Pentru restearea parolelor de admin se foloseste provide-ul admins pentru a aduce datele din tabelul de admini 
        'admins' => [
            'provider' => 'admins',
        //Password_resets este folosit pentru a stoca token urile de resetare parola 
            'table' => 'password_resets',
        //Expire defineste cat timp sun valabile token urile de resetare parola in minute
            'expire' => 60,
        // Throttle este foolosit pentru a limita numarul de incercari pentru resetarea parolei
        //  de catre un user inainte de a fi blocat pana la expirarea token ului 
            'throttle' => 60,
        ],
        'companies' => [
            'provider' => 'companies',
        //Password_resets este folosit pentru a stoca token urile de resetare parola 
            'table' => 'password_resets',
        //Expire defineste cat timp sun valabile token urile de resetare parola in minute
            'expire' => 60,
        // Throttle este foolosit pentru a limita numarul de incercari pentru resetarea parolei
        //  de catre un user inainte de a fi blocat pana la expirarea token ului 
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | times out and the user is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */
// Timpul in care parola trebuie validata din nou in secunde 
    'password_timeout' => 10800,

];
