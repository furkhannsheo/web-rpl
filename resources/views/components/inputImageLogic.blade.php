<script>
    document.addEventListener('DOMContentLoaded', function() {

        function setupPreview(container) {
            // CARI INPUT FILE (baru atau lama)
            let input =
                container.querySelector('.gambar-input') ||
                container.nextElementSibling?.classList?.contains('gambar-input') ?
                container.nextElementSibling :
                null ||
                document.getElementById('gambar');

            if (!input) return;

            // CARI GAMBAR PREVIEW (baru atau lama)
            let img =
                container.querySelector('.gambar-preview') ||
                container.querySelector('#gambar-preview');

            if (!img) return;

            // PLACEHOLDER (opsional)
            const placeholder =
                container.querySelector('.placeholder-text');

            function showPreview(file) {
                const reader = new FileReader();
                reader.onload = e => {
                    img.src = e.target.result;
                    img.style.display = 'block';
                    if (placeholder) placeholder.classList.add('hidden');
                };
                reader.readAsDataURL(file);
            }

            container.addEventListener('click', () => input.click());

            input.addEventListener('change', () => {
                if (input.files && input.files[0]) {
                    showPreview(input.files[0]);
                }
            });

            // DRAG & DROP (AMAN KALAU TIDAK ADA)
            container.addEventListener('dragover', e => {
                e.preventDefault();
                container.classList.add('drag-over');
            });

            container.addEventListener('dragleave', () => {
                container.classList.remove('drag-over');
            });

            container.addEventListener('drop', e => {
                e.preventDefault();
                container.classList.remove('drag-over');

                if (e.dataTransfer.files && e.dataTransfer.files.length) {
                    const file = e.dataTransfer.files[0];
                    const dt = new DataTransfer();
                    dt.items.add(file);
                    input.files = dt.files;
                    showPreview(file);
                }
            });
        }

        // STRUKTUR BARU (MULTI)
        document.querySelectorAll('.image-preview-container').forEach(setupPreview);

        // STRUKTUR LAMA (SATU)
        const legacyContainer = document.getElementById('image-preview-container');
        if (legacyContainer) setupPreview(legacyContainer);

    });
</script>
 