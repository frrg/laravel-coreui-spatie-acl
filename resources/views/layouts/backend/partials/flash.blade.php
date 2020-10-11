@if (session()->has('flash_notification.message'))
<div class="alert alert-{{ session()->get('flash_notification.level') }} alert-dismissible fade show" role="alert">

    <i class="fa fa-{{ session()->get('flash_notification.icon') }}"></i> {!! session()->get('flash_notification.message') !!}

    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>

</div>
@endif