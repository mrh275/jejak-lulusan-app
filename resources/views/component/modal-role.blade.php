<div class="modal modal-hide" id="modal" style="z-index: 99">
    <div class="modal-container" style="overflow-y: scroll">
        <div class="modal-card card-xl">
            <div class="card-header" style="justify-content: start">
                <h2 style="font-weight: 600; font-size: 1.4rem; color: #334155">Change Role <span class="nama-siswa"></span></h2>
            </div>
            <div class="card-body" style="margin-top: 1rem">
                <form action="" class="form-group" id="modal-biodata">
                    @csrf
                    <div class="form-wrapper">
                        <div class="label-wrapper">
                            <label class="label-form" for="input-role">User Role</label>
                        </div>
                        <div class="input-wrapper">
                            <select name="role" id="input-role" class="form-control">
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                            </select>
                        </div>
                    </div>

                    <div class="button-wrapper">
                        <button type="submit" class="btn btn-primary modal-submit">Submit</button>
                        <button type="button" class="btn btn-secondary" style="margin-left: 10px" id="modal-close">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        // Modal show toggle
        let modalButton = document.getElementById("modal-toggle");
        modalButton.addEventListener("click", function() {
            let selectedRow = document.querySelector("tr.selected");
            if (!selectedRow) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Pilih data terlebih dahulu',
                })
            } else {
                let modal = document.getElementById("modal");
                modal.classList.toggle("modal-hide");
                modal.classList.toggle("modal-show");
                const role = document.querySelector('tr.selected td#role').getAttributeNode('class').value;
                const roleInput = document.getElementById('input-role');
                // console.log(roleInput.querySelector('option[value="1"]'));
                if (role == 1) {
                    roleInput.firstElementChild.setAttribute("selected", 'selected');
                } else if (role == 2) {
                    roleInput.lastElementChild.setAttribute("selected", 'selected');
                }
            }
        });

        // Modal close toggle
        let modalClose = document.getElementById("modal-close");
        modalClose.addEventListener("click", function() {
            let modal = document.getElementById("modal");
            modal.classList.toggle("modal-hide");
            modal.classList.toggle("modal-show");
            const roleInput = document.getElementById('input-role');
            roleInput.firstElementChild.removeAttribute('selected');
            roleInput.lastElementChild.removeAttribute('selected');
        });

        // Modal submit
        $('form#modal-biodata').on('submit', function(e) {
            e.preventDefault();

            const username = document.querySelector('tr.selected td#username').getAttributeNode('class').value;

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                },
                url: "{{ url('admin/role/update') }}/" + username,
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    Swal.fire({
                            title: 'Sedang menyimpan data...',
                            didOpen: () => {
                                Swal.showLoading()
                            },
                            timer: 2000,
                            width: '30rem',
                        })
                        .then((dismiss) => {
                            Swal.fire({
                                    icon: 'success',
                                    title: 'Data berhasil disimpan',
                                    padding: '1rem',
                                })
                                .then((result) => {
                                    if (result.value) {
                                        location.reload();
                                    }
                                });;
                        });
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
        });
    </script>
@endpush
