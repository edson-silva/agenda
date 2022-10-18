<x-app-layout>
    <link href="{{url('js/fullcalendar/lib/main.css')}}" rel='stylesheet' />
    <link href="{{url('css/style.css')}}" rel='stylesheet' />

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Nova Tarefa
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class='formulario-agenda'>
                        <form name='formAgenda' id='formAgenda' method='post' action="{{url('admin/agenda/nova-tarefa/store')}}">
                            @csrf
                            
                            <input type="text" name='title' id='title' required placeholder="Título da Tarefa:">                            

                            <select name="status" id="status" required>
                                <option value="">Selecione o Status</option>
                                <option value="Aberto">Aberto</option>
                                <option value="Finalizado">Finalizado</option>
                            </select>

                            <small>Data / Hora de Início:</small><br>
                            <input type="datetime-local" name='start' id='start' required>

                            <small>Data / Hora do Fim:</small><br>
                            <input type="datetime-local" name='end' id='end' required>

                            <input type="submit" value='Salvar' class="btn-add-tarefa" style="cursor:pointer;">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
    <script src="{{url('js/fullcalendar/lib/main.js')}}"></script>
    <script src="{{url('js/javascript.js')}}"></script>
</x-app-layout>
