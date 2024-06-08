<!--- Designation Config Model View -->
<div class="modal fade" id="model_form_editor" data-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">

            <div id="designation_progress_overlay" class="overlay dark" hidden>
                <i class="text-white fa-2x fa-solid fa-spinner fa-spin"></i>
            </div>


            <div class="modal-header">
                <h4 class="modal-title">Form Attributes Editor</h4>
                <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                    <i class="fa-sharp fa-thin fa-circle-xmark"></i>
                </button>
            </div>

            <div class="modal-body">

                <div class="row">
                    <div class="col-12">
                        <div class="site-wrap">
                            <header id="demo-header">
                                <nav>
                                    <ul>
                                        <li>
                                            <label for="control-filter">Control Filter:</label>
                                            <input type="text" id="control-filter" placeholder="ex. text" class="form-control" />
                                        </li>
                                    </ul>
                                </nav>
                            </header>
                            <section id="main_content" class="inner">
                                <form class="build-form clearfix"></form>
                                <div class="render-form"></div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="container render-btn-wrap" id="editor-action-buttons"></div>
            </div>
        </div>
    </div>
</div>

@push('script')
<!--- Designation Config Model Script -->
<script nonce="{{ csp_nonce() }}" defer>
    $(document).ready(function() {

        const $thisModel = $('#model_form_editor');

        $(document).on('click', '.editForm', function() {
            $thisModel.modal('show');
        });
    });
</script>
@endpush
