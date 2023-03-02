<x-mail::message>

    # Olá, {{ $student->name }}
    
    Seu contrato irá vencer amanhã dia {{ date('d/m/Y',strtotime($student->expiration_date)) }}

</x-mail::message>