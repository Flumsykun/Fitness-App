<!-- resources/views/components/nav-link.blade.php -->

<a {{ $attributes->merge(['class' => 'text-blue-500 hover:underline']) }}>
    {{ $slot }}
</a>
<!-- resources/views/layouts/app.blade.php -->
