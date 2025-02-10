{{-- Acest blade reprezinta sablonul pe care se vor construi paginile Tabloului Admin --}} 
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Codare de caractere standard, suporta o gama larga de caractere -->
    <meta charset="UTF-8">

<!-- Setarea parametrilor intitiali pentru afisarea paginii web -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

<!-- Introducerea pentru iconite -->
    <link rel="icon" type="image/png" href="{{ asset('uploads/favicon.png') }}">

<!-- Titlul care apare pe tab-ul din browser -->
    <title>Panou Admin</title>

<!-- Integrare google font -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

{{-- Se  include layout ul de stiluri --}}
    @include('Admin.layout.styles')

{{-- Se  include layout ul de scripts --}}   
    @include('Admin.layout.scripts')

</head>


{{-- Se deschide parte de corp a paginii --}}
<body>

<div id="app">
    <div class="main-wrapper">

{{-- Se  include layout ul pentru bara de navigatie --}} 
       @include('Admin.layout.nav')

{{-- Se  include layout ul pentru bara laterala --}} 
       @include('Admin.layout.sidebar');

{{-- Se creeaza clasa main-section dupa incepe separarea contentului intre sablon si pagina acasa --}}
        <div class="main-content">
            <section class="section">
                <div class="section-header justify-content-between">
{{-- comanda @yield('heading') face separarea contentului sablonului de continutul unei pagini construita cu acesta --}}
                    <h1>@yield('heading')</h1>
                    @yield('buton')
                </div>
{{-- comanda @yield preia sectiunea "main-content" din blade-ul home astfel incat acesta sa poata fi afisat si in sablon chiar daca nu este parte din acesta --}}
           @yield('main_content')

            </section>
        </div>

    </div>
</div>
{{-- Se  include layout ul pentru bara laterala --}}
        @include('Admin.layout.scripts_footer')

{{-- Cu ajutorul librrariilor de style si script ale iziToast 
     se pot creea o multitudine de alerte de tip pop up --}}
     
{{--Pentru orice tip de eroare aparuta se va inistia iziToast.error 
    care va afisa mesajul din variabila error intr-un pop in coltul drept superior cu un chenar rosu  --}}
@if($errors->any())
    @foreach ($errors->all() as $error)
    <script>
        iziToast.error({
         title: '',
         position: 'topRight',
         message: '{{ $error }}',
        });
        </script>
    @endforeach
@endif

@if (session()->get('error'))
    <script>
        iziToast.error({
         title: '',
         position: 'topRight'
         message: '{{ session()->get('error') }}',
        });
     </script>
 @endif

{{--Pentru orice tip de succes aparut se va inistia iziToast.succes
    care va afisa mesajul din variabila succes intr-un pop in coltul drept superior cu un chenar verde  --}}
@if (session()->get('success'))
    <script>
        iziToast.success({
         title: '',
         position: 'topRight',
         message: '{{ session()->get('success') }}',
        });
     </script>
@endif
        
</body>
</html>