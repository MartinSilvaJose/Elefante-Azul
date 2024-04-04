<x-template>
    
    <x-slot name="title">
        Crear cita
    </x-slot>

    <x-header/>

    <hgroup>
        <h1>Crear cita</h1>
        <h2>Rellena el formulario para solicitar una cita con nosotros</h2>
    </hgroup>


    <form action="{{ route('appointments.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name">Nombre</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
        <span>{{$message}}</span>
        @enderror
    
        <label for="phone">Teléfono</label>
        <input type="number" name="phone" placeholder="+34" value="{{ old('phone') }}">
        @error('phone')
        <span>{{$message}}</span>
        @enderror
    
        <div role="contentinfo" class="coche">
    
            <h3>Coche</h3>
    
            <label for="brand">Marca</label>
            <input type="text" name="brand" value="{{ old('brand') }}">
            @error('brand')
            <span>{{$message}}</span>
            @enderror
    
            <label for="model">Modelo</label>
            <input type="text" name="model" value="{{ old('model') }}">
            @error('model')
            <span>{{$message}}</span>
            @enderror
    
            <label for="lisense_plate">Matrícula</label>
            <input type="text" name="lisense_plate" value="{{ old('lisense_plate') }}">
            @error('lisense_plate')
            <span>{{$message}}</span>
            @enderror
        </div>
    
    
        <h3>Tipo de lavado</h3>
    
        {{-- <select name="tipe_wash">
            <option value="">Elige un tipo de lavado..</option>
            @foreach ($listado as $op)
            <option value="{{ $op->id }}" {{ old('tipe_wash') == $op->id ? 'selected' : '' }}>{{ $op->descripcion }}</option>
            @endforeach
        </select>
        @error('tipe_wash')
        <span>{{$message}}</span>
        @enderror --}}
    
        <div>
            <label for="wheels">Limpieza de llantas (15€)</label>
            <input type="checkbox" name="wheels" value="15">
        </div>
    
        <label for="entry">Fecha</label>
        <input type="date" name="entry" placeholder="dd/mm/yyyy" value={{old('entry')}}>
        @error('entry')
        <span>{{$message}}</span>
        @enderror
    
        <button  type="submit">Crear pedido</button>
        <a href="{{ route('appointments.index') }}">Ver Listado</a>
    </form>
    <x-footer/>
</x-template>