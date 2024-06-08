<x-admin-layout selected_group='settings' selected_menu='form_editor'>

    @push('head')
    <link nonce="{{ csp_nonce() }}" rel="stylesheet" href="{{ asset('assets/plugins/formeo/css/demo.min.css')}}">
    @endpush

    <x-slot:sectiontitle>
        Advanced Form Editor
    </x-slot:sectiontitle>

    <div class="row">
        @forelse ($regiterd_form as $form)
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box shadow">
                <span class="info-box-icon bg-warning"><i class="fa-regular fa-rectangle-list"></i></span>
                <div class="info-box-content">
                    <span class="info-box-number">{{$form->id}} - {{$form->name}}</span>
                    <a href='#' data-id='{{$form->id}}' class='btn btn-sm btn-success editForm'><i class='fa-sharp fa-solid fa-pen-to-square'></i></a>
                </div>

            </div>
        </div>
        @empty
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box shadow">
                <span class="info-box-icon bg-warning"></span>
                <div class="info-box-content">
                    <span class="info-box-text">No Forms Found</span>
                </div>
            </div>
        </div>
        @endforelse
    </div>

    @push('models')
    @include('models.config.form-editor')
    @endpush

    @push('script-include')
    <script nonce="{{ csp_nonce() }}" src="{{ asset('assets/plugins/formeo/js/demo.min.js')}}"></script>
    @endpush
</x-admin-layout>
