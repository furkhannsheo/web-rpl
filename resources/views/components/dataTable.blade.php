<script>
    $(document).ready(function() {
        const table = $("#multi-filter-select").DataTable({
            pageLength: 5,
            responsive: true,

            initComplete: function() {
                const api = this.api();

                api.columns().every(function(index) {
                    const column = this;
                    const footer = $(column.footer());

                    // skip kolom tanpa footer
                    if (!footer.length) return;

                    // KHUSUS kolom "Ditampilkan" (index 5)
                    if (index === 5) {
                        const select = $(`
                        <select class="form-select form-select-sm">
                            <option value="">Semua</option>
                            <option value="Ditampilkan">Ditampilkan</option>
                            <option value="Disembunyikan">Disembunyikan</option>
                        </select>
                    `)
                            .appendTo(footer.empty())
                            .on("change", function() {
                                const val = $.fn.dataTable.util.escapeRegex($(this)
                                .val());
                                column.search(val ? "^" + val + "$" : "", true, false)
                                    .draw();
                            });

                        return;
                    }

                    // FILTER DEFAULT UNTUK KOLOM LAIN
                    const select = $(
                            '<select class="form-select form-select-sm"><option value=""></option></select>'
                            )
                        .appendTo(footer.empty())
                        .on("change", function() {
                            const val = $.fn.dataTable.util.escapeRegex($(this).val());
                            column.search(val ? "^" + val + "$" : "", true, false)
                            .draw();
                        });

                    column.data().unique().sort().each(function(d) {
                        select.append('<option value="' + d + '">' + d +
                            '</option>');
                    });
                });
            }
        });
    });
</script>
