Edit Pet
<form action="{{ url('/pet/'.$pet->id) }}" method='post'> 
    @csrf
    {{-- se usa el put en lugar del post --}}
    {{ method_field('PUT') }}
    @include('pet.form')
</form>