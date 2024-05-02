<div class="space-y-6">
    
    <div>
        <x-input-label for="nombre" :value="__('Nombre')"/>
        <x-text-input id="nombre" name="nombre" type="text" class="mt-1 block w-full" :value="old('nombre', $municipio?->nombre)" autocomplete="nombre" placeholder="Nombre"/>
        <x-input-error class="mt-2" :messages="$errors->get('nombre')"/>
    </div>
    <div>
        <x-input-label for="id_departamento" :value="__('Id Departamento')"/>
        <x-text-input id="id_departamento" name="id_departamento" type="text" class="mt-1 block w-full" :value="old('id_departamento', $municipio?->id_departamento)" autocomplete="id_departamento" placeholder="Id Departamento"/>
        <x-input-error class="mt-2" :messages="$errors->get('id_departamento')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>