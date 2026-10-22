@props(['type' => 'info', 'message'])

<div role="alert" class="alert alert-{{ $type }}">
    {{ $message }}
</div>
