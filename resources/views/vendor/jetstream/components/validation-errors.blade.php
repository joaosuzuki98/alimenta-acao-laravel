<style>
    .cor-bege {
        color: #F2E3D5;
    }
</style>

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium cor-bege">{{ __('Opa! Alguma coisa deu errado.') }}</div>

        <ul class="mt-3 list-disc list-inside text-sm cor-bege">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
