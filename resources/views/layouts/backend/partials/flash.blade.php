@if(session()->has('flash_notification.message'))
@push('scripts')
<script>
    $(document).ready(function() {

        toastr.options.closeMethod = 'fadeOut';
        toastr.options.closeDuration = 300;
        toastr.options.closeEasing = 'swing';

        var type = "{!! session()->get('flash_notification.level','info') !!}";
        switch (type) {
            case 'info':
                toastr.info("{!! session()->get('flash_notification.message') !!}");
                break;
            case 'warning':
                toastr.warning("{!! session()->get('flash_notification.message') !!}");
                break;
            case 'success':
                toastr.success("{!! session()->get('flash_notification.message') !!}");
                break;
            case 'error':
                toastr.error("{!! session()->get('flash_notification.message') !!}");
                break;
        }
    });
</script>
@endpush

@endif