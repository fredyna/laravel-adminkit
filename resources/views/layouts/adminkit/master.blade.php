<!DOCTYPE html>
<html lang="en">

@include('layouts.adminkit.partials._header')

<body>
    <div class="wrapper">
        @include('layouts.adminkit.partials._sidebar')

        <div class="main">
            @include('layouts.adminkit.partials._navbar')

            @yield('content')

            @include('layouts.adminkit.partials._footer')
        </div>
    </div>

    @include('layouts.adminkit.partials._script')
</body>

</html>
