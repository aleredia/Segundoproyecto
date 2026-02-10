<x-app-layout>
    <div class="max-w-4xl mx-auto px-10">
        <h3>Esto es lo que contiene el componente dentro y se lee como parte de la estructura o contenido del slot</h3>
        <x-button type='warning' id='ir' >Ir a la página principal del proyecto</x-button>
        <x-button type='success' id='success' >Botón de inicio</x-button>
        <x-alert type='Danger' title="Ejemplo de botón" >Mensaje de alert</x-alert>
        <x-Alert2 type="danger" class="mb-4" title="parámetro de título">
            Acceso al segundo alert de tipo clase
        </x-Alert2>
    </div>
</x-app-layout>