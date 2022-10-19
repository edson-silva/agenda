<x-app-layout>
    <link href="{{url('js/fullcalendar/lib/main.css')}}" rel='stylesheet' />
    <link href="{{url('css/style.css')}}" rel='stylesheet' />

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Deletar Tarefa
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form name='formDeletar' id='formDeletar' method='post' action="{{url('admin/agenda/eventos/deletar/'.$id)}}">
                        Deseja mesmo deletar essa tarefa? <br>
                        @csrf
                        <input type="hidden" name='id' id='id' value="{{$id}}">
                        <input class="btn-add-tarefa" style="cursor:pointer;" type="submit" value='Deletar'>
                    </form>

                </div>
            </div>
        </div>
    </div>
    
    <script src="{{url('js/fullcalendar/lib/main.js')}}"></script>
    <script src="{{url('js/javascript.js')}}"></script>
</x-app-layout>
