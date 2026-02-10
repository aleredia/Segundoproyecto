<x-app-layout>
    
    <div class="max-w-4xl mx-auto px-4">
        <h1>About Page</h1>
     
        <x-alert2>
             <x-slot name="title">Título de alerta</x-slot>
        </x-alert2>
        
        <x-button type="success">Botón de Inicio</x-button>
        <x-button type="danger">Botón de Danger</x-button>
        <x-button type="warning">Botón de Warning</x-button>
         
    </div>
  
    @if(!empty($nombre))
        <h4>El nombre ingresado es: {{$nombre}}</h4>
    @endif 
</x-app-layout>