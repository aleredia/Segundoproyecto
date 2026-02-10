<div {{$attributes -> merge (['class'=>'p-4 text-sm rounded-lg'.$class])}} role="alert">
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh 
    $atributtes contiene todos los aributos del componente. Todo el contenido que está dentro de las llaves
    del mismo componente-->
    <span class="font-medium">{{$title ?? "No existe valor del title"}}</span>{{$slot}}
    <h1>Estos son los valores de la variable attributes</h1>
    {{$attributes}}
</div>