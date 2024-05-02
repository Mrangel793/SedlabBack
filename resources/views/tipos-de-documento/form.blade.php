<div class="space-y-6">
    
    <div>
        <x-input-label for="tipo_de_documento" :value="__('Tipo De Documento')"/>
        <x-text-input id="tipo_de_documento" name="tipo_de_documento" type="text" class="mt-1 block w-full" :value="old('tipo_de_documento', $tiposDeDocumento?->tipo_de_documento)" autocomplete="tipo_de_documento" placeholder="Tipo De Documento"/>
        <x-input-error class="mt-2" :messages="$errors->get('tipo_de_documento')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>