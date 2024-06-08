<x-admin-layout selected_group='members' selected_menu='members_add'>
    <x-slot:sectiontitle>
        Add Member
    </x-slot:sectiontitle>

    <x-ui.loader />

    <form id="member_form" method="post">
        <div class="row">
            <x-form.text col="col-8" id="member_name_input" name="member_name" lable="Member Full Name" placeholder="Enter Member Full Name" attr="required" />
            <x-form.text col="col-4" id="member_contact_input" name="member_contact" lable="Member Contact Number" placeholder="Enter Member Contact Number" />
        </div>
        <div class="row">
            <x-form.text col="col-8" id="member_address_input" name="member_address" lable="Member Address" placeholder="Enter Member Address" />
            <x-form.date col="col-4" id="member_dob_input" name="member_dob" lable="Member Date of Birth" placeholder="Enter Member Date of Birth" />
        </div>
        <div class="row">
            <x-form.button col="col-6" id="member_form_submit" type="primary" text="Create Member" />
        </div>
    </form>

    @push('script')

    <script nonce="{{ csp_nonce() }}" defer>
        $(function() {
            $('#member_form_submit').on('click', function() {
                $('#loader_wrapper').attr('hidden', false);
                $('.text-danger').text("");
                event.preventDefault();

                let memberData = new FormData();
                memberData.append('uid', 0);
                memberData.append('member_name', $('#member_name_input').val());
                memberData.append('member_contact', $('#member_contact_input').val());
                memberData.append('member_address', $('#member_address_input').val());
                memberData.append('member_dob', $('#member_dob_input').val());

                $.ajax({
                    type: 'POST',
                    url: "{{ route('MembersController.store') }}",
                    headers: {
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    },
                    data: memberData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.status == 1) {
                            Toast.fire({
                                icon: 'success',
                                title: response.msg
                            });
                            window.location = "{{ route('MembersController.members') }}";
                        }

                        if (response.status == 0) {
                            $.each(response.errors, function(fieldName, errorBag) {
                                $.each(errorBag, function(i, message) {
                                    $('#' + fieldName + '_error').text(message);
                                });
                            });
                        }
                    },
                    error: function(error) {
                        const _errors = error.responseJSON.errors;
                        for(let err in _errors) {
                            $('#' + err + '_error').text(_errors[err][0]);
                        }
                    },
                    complete: function() {
                        $('#loader_wrapper').attr('hidden', true);
                    }
                });
            })
        });
    </script>
    @endpush
</x-admin-layout>
