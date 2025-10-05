// Bootstrap Modal trigger for custom product
document.addEventListener('DOMContentLoaded', function () {
    var openBtn = document.getElementById('openCustomProductModal');
    if (openBtn) {
        openBtn.addEventListener('click', function () {
            var modal = new bootstrap.Modal(document.getElementById('customProductModal'));
            modal.show();
        });
    }

    // Quantity buttons in modal
    var modalQtyInput = document.getElementById('modalQtyInput');
    var modalQtyMinus = document.getElementById('modalQtyMinus');
    var modalQtyPlus = document.getElementById('modalQtyPlus');
    if (modalQtyInput && modalQtyMinus && modalQtyPlus) {
        modalQtyMinus.onclick = function () {
            let val = parseInt(modalQtyInput.value, 10);
            if (val > 1) modalQtyInput.value = val - 1;
        };
        modalQtyPlus.onclick = function () {
            let val = parseInt(modalQtyInput.value, 10);
            modalQtyInput.value = val + 1;
        };
    }
});