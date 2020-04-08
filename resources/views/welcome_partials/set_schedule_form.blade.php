<h1 class="font-medium mb-3 text-2xl">Set Schedule</h1>

<form action="{{ route('calendar.store') }}" method="post">
    @csrf

    <div class="grid grid-cols-3 py-2">
        <label for="title">Enter Event Title</label>
        <input type="text" id="title" name="title" value="{{ $title ?? '' }}" placeholder="Enter Event Title" class="border col-span-2 p-1">
    </div>

    <div class="grid grid-cols-3 py-2">
        <label for="date_begin">Date Begin</label>
        <input type="date" id="date_begin" name="date_begin" value="{{ $date_begin ?? '' }}" placeholder="Enter Starting Date" class="border col-span-2 p-1">
    </div>

    <div class="grid grid-cols-3 py-2">
        <label for="date_end">Date End</label>
        <input type="date" id="date_end" name="date_end" value="{{ $date_end ?? '' }}"placeholder="Enter Ending Date" class="border col-span-2 p-1">
    </div>

    <div>
        @php $daysDefault = [ 'mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun' ]; @endphp

        @foreach ($daysDefault as $day)
            @php $checked = in_array($day, $days) ? "checked" : ""; @endphp
            <input type="checkbox" name="days[]" value="{{ $day }}" {{ $checked }}> {{ ucfirst($day) }}
        @endforeach
    </div>

    <button type="submit" class="bg-teal-400 border capitalize my-2 px-4 py-1 rounded text-white">Save</button>
</form>
