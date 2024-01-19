<div class="form-group @error($inputName) form-error @enderror">
    {{ $slot }}

    @error($inputName)
    <div class="text-red-500 text-sm">{{ $message }}</div>
    @enderror
</div>
