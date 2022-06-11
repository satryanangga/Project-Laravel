@if (session('success'))
    <div id="flash" data-flash="{{ session('success') }}"></div>
@endif
{{-- @if (session('danger'))
    <div class="alert alert-danger">
        {{ session('danger') }}
    </div>
@endif --}}