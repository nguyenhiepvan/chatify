<script src="https://js.pusher.com/7.4.0/pusher.min.js"></script>
<script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    const pusher = new Pusher("{{ config('chatify.pusher.key') }}", {
        wsHost: '{{ config('chatify.pusher.options.host') }}',
        wsPort: '{{ config('chatify.pusher.options.port') }}',
        forceTLS: false,
        encrypted: true,
        // disableStats: true,
        enabledTransports: ['ws', 'wss'],
        authEndpoint: '{{route("pusher.auth")}}',
        auth: {
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }
    });

    // Bellow are all the methods/variables that using php to assign globally.
    const allowedImages = {!! json_encode(config('chatify.attachments.allowed_images')) !!} || [];
    const allowedFiles = {!! json_encode(config('chatify.attachments.allowed_files')) !!} || [];
    const getAllowedExtensions = [...allowedImages, ...allowedFiles];
    const getMaxUploadSize = {{ Chatify::getMaxUploadSize() }};
</script>
<script src="{{ asset('js/chatify/code.js') }}"></script>
