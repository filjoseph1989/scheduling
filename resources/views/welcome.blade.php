<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Event Schedule</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>

    <body>
        @isset($data)
            @php extract($data); @endphp
        @endisset

        <div class="grid" style="grid-template-columns: 640px 1fr;">
            <div class="px-3" style="height: 100vh;">
                @include('welcome_partials.set_schedule_form')
            </div>

            <div class="bg-gray-300 px-10">
                @include('welcome_partials.calendar_scheduled')
            </div>
        </div>
    </body>
</html>
