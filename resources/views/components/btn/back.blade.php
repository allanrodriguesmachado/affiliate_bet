@props([
    'name',
    'route'
])

<div class="ms-2 flex justify-start items-center mb-6">
    <a href="{{$route}}"
       class="inline-flex justify-center items-center py-1 px-3 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
        {{$name}}
        <svg width="15" height="9" class="m-2" viewBox="0 0 16 10" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path d="M1 5H15M1 5L5 1M1 5L5 9" stroke="white" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </a>
</div>
