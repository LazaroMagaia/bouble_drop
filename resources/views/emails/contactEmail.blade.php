<x-mail::message>
    ###   Olá, o senhor(a) {{$data["name"]}} qentrou em contacto, a seguir os seus dados
---
    
    Nome: {{$data["name"]}}

    Telemóvel: {{$data["phone"]}}

    Email: {{$data["email"]}}

    Mensagem: {{ $data["message"]}}



    Obrigado,<br>
    {{ config('app.name') }}
</x-mail::message>
