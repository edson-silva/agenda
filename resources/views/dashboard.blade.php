<x-app-layout>
    <link href="{{url('js/fullcalendar/lib/main.css')}}" rel='stylesheet' />
    <link href="{{url('css/style.css')}}" rel='stylesheet' />

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="margin-bottom-50">
                        <a href="" class='btn-add-tarefa'>Adicionar nova tarefa</a>
                    </div>
                   
                    <div class="calendar"></div>

                </div>
            </div>
        </div>
    </div>
    
    <script src="{{url('js/fullcalendar/lib/main.js')}}"></script>
    <script src="{{url('js/javascript.js')}}"></script>
</x-app-layout>
