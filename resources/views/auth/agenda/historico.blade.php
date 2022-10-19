<x-app-layout>
    <link href="{{url('js/fullcalendar/lib/main.css')}}" rel='stylesheet' />
    <link href="{{url('css/style.css')}}" rel='stylesheet' />

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Histórico de Tarefas
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class='historico'>
                        <div>
                            <div class="historico-title-abertos">Abertos</div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Título</th>
                                        <th>Início</th>
                                        <th>Fim</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($eventos as $evento)
                                        @if($evento->status == 'Aberto')                                            
                                            <tr>
                                                <td>{{$evento->title}}</td>
                                                <td>{{ \Carbon\Carbon::parse($evento->start)->format('d/m/Y H:i')}}</td>
                                                <td>{{ \Carbon\Carbon::parse($evento->end)->format('d/m/Y H:i')}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                        <div>
                            <div class="historico-title-finalizados">Finalizados</div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Título</th>
                                        <th>Início</th>
                                        <th>Fim</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($eventos as $evento)
                                        @if($evento->status == 'Finalizado')                                            
                                            <tr>
                                                <td>{{$evento->title}}</td>
                                                <td>{{ \Carbon\Carbon::parse($evento->start)->format('d/m/Y H:i')}}</td>
                                                <td>{{ \Carbon\Carbon::parse($evento->end)->format('d/m/Y H:i')}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>    

                </div>
            </div>
        </div>
    </div>
    
    <script src="{{url('js/fullcalendar/lib/main.js')}}"></script>
    <script src="{{url('js/javascript.js')}}"></script>
</x-app-layout>
