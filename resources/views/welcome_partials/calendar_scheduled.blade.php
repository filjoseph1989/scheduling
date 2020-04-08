<div class="bg-white border card my-2 p-5 rounded shadow">
    @php $month_year = date('F Y'); @endphp
    <h1 class="font-black mb-4">{{ $month_year }}</h1>

    <div class="">
        @php extract(list_of_days()); @endphp

        <ul>
            @foreach ($lists as $element)
                @if (isset($date_begin) && date('m', strtotime($date_begin)) == $month)
                    @php $class = in_array(strtolower($element[1]), $days) ? "bg-gray-200" : ""; @endphp
                @endif

                <li class="border-t py-1 {{ $class ?? '' }}">
                    <div class="grid grid-cols-3">
                        <span>{{ $element[0] }}</span>
                        @if (isset($date_end) && ($element[2] <= strtotime($date_end)))
                            <span>
                                @if ($class != "")
                                    {{ $title ?? "" }}
                                @endif
                            </span>
                        @endif
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
