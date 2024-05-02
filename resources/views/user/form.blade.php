<div class="space-y-6">
    
    <div>
        <x-input-label for="nombre" :value="__('Nombre')"/>
        <x-text-input id="nombre" name="nombre" type="text" class="mt-1 block w-full" :value="old('nombre', $user?->nombre)" autocomplete="nombre" placeholder="Nombre"/>
        <x-input-error class="mt-2" :messages="$errors->get('nombre')"/>
    </div>
    <div>
        <x-input-label for="apellido" :value="__('Apellido')"/>
        <x-text-input id="apellido" name="apellido" type="text" class="mt-1 block w-full" :value="old('apellido', $user?->apellido)" autocomplete="apellido" placeholder="Apellido"/>
        <x-input-error class="mt-2" :messages="$errors->get('apellido')"/>
    </div>
    <div>
        <x-input-label for="celular" :value="__('Celular')"/>
        <x-text-input id="celular" name="celular" type="text" class="mt-1 block w-full" :value="old('celular', $user?->celular)" autocomplete="celular" placeholder="Celular"/>
        <x-input-error class="mt-2" :messages="$errors->get('celular')"/>
    </div>
    <div>
        <x-input-label for="genero" :value="__('Genero')"/>
        <x-text-input id="genero" name="genero" type="text" class="mt-1 block w-full" :value="old('genero', $user?->genero)" autocomplete="genero" placeholder="Genero"/>
        <x-input-error class="mt-2" :messages="$errors->get('genero')"/>
    </div>
    <div>
        <x-input-label for="correo" :value="__('Correo')"/>
        <x-text-input id="correo" name="correo" type="text" class="mt-1 block w-full" :value="old('correo', $user?->correo)" autocomplete="correo" placeholder="Correo"/>
        <x-input-error class="mt-2" :messages="$errors->get('correo')"/>
    </div>
    <div>
        <x-input-label for="fecha_nacimiento" :value="__('Fecha Nacimiento')"/>
        <x-text-input id="fecha_nacimiento" name="fecha_nacimiento" type="text" class="mt-1 block w-full" :value="old('fecha_nacimiento', $user?->fecha_nacimiento)" autocomplete="fecha_nacimiento" placeholder="Fecha Nacimiento"/>
        <x-input-error class="mt-2" :messages="$errors->get('fecha_nacimiento')"/>
    </div>
    <div>
        <x-input-label for="id_departamento" :value="__('Id Departamento')"/>
        <x-text-input id="id_departamento" name="id_departamento" type="text" class="mt-1 block w-full" :value="old('id_departamento', $user?->id_departamento)" autocomplete="id_departamento" placeholder="Id Departamento"/>
        <x-input-error class="mt-2" :messages="$errors->get('id_departamento')"/>
    </div>
    <div>
        <x-input-label for="id_municipio" :value="__('Id Municipio')"/>
        <x-text-input id="id_municipio" name="id_municipio" type="text" class="mt-1 block w-full" :value="old('id_municipio', $user?->id_municipio)" autocomplete="id_municipio" placeholder="Id Municipio"/>
        <x-input-error class="mt-2" :messages="$errors->get('id_municipio')"/>
    </div>
    <div>
        <x-input-label for="id_estado" :value="__('Id Estado')"/>
        <x-text-input id="id_estado" name="id_estado" type="text" class="mt-1 block w-full" :value="old('id_estado', $user?->id_estado)" autocomplete="id_estado" placeholder="Id Estado"/>
        <x-input-error class="mt-2" :messages="$errors->get('id_estado')"/>
    </div>
    <div>
        <x-input-label for="id_tipo_documento" :value="__('Id Tipo Documento')"/>
        <x-text-input id="id_tipo_documento" name="id_tipo_documento" type="text" class="mt-1 block w-full" :value="old('id_tipo_documento', $user?->id_tipo_documento)" autocomplete="id_tipo_documento" placeholder="Id Tipo Documento"/>
        <x-input-error class="mt-2" :messages="$errors->get('id_tipo_documento')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>