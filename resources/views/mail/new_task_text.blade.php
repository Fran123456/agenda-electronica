{{ $demo->titulo }}

Buen día te desea {{ $demo->sender  }} 

{{ $message->embed($demo->path) }}


Tienes una nueva notificación de: {{$demo->TaskSenderName}}
Correo: {{$demo->TaskSenderEmail}} 

Contenido: 
{{$demo->data}}

Gracias
 att: {{$demo->fromEmail}}


 No contestar a este correo electronico.