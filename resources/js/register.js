document.addEventListener("DOMContentLoaded", function() {
    var triggerInput = document.getElementById("newProfilePhoto");
    var deleteIconWrapper = document.getElementById("deleteIconWrapper");

    if (!triggerInput || !deleteIconWrapper) return;

    triggerInput.addEventListener("change", function(event) {
        var currentImg = triggerInput.closest(".pic-holder").querySelector(".pic").src;
        var holder = triggerInput.closest(".pic-holder");
        var wrapper = triggerInput.closest(".profile-pic-wrapper");

        var alerts = wrapper.querySelectorAll('[role="alert"]');
        alerts.forEach(function(alert) {
            alert.remove();
        });

        var files = triggerInput.files || [];
        if (!files.length || !window.FileReader) {
            return;
        }

        if (/^image/.test(files[0].type)) {
            var reader = new FileReader();
            reader.readAsDataURL(files[0]);

            reader.onloadend = function() {
                holder.querySelector(".pic").src = this.result;

                var successMessage = document.createElement('div');
                successMessage.className = 'snackbar show bg-green-500 text-white py-2 px-4 rounded';
                successMessage.setAttribute('role', 'alert');
                successMessage.innerHTML = '<i class="fas fa-check-circle mr-2"></i> Profile image updated successfully';
                wrapper.appendChild(successMessage);

                deleteIconWrapper.classList.remove('hidden'); // Mostrar el ícono de eliminar
                setTimeout(function() {
                    successMessage.remove();
                }, 3000);
            };

            reader.onerror = function() {
                var errorMessage = document.createElement('div');
                errorMessage.className = 'snackbar show bg-red-500 text-white py-2 px-4 rounded';
                errorMessage.setAttribute('role', 'alert');
                errorMessage.innerHTML = '<i class="fas fa-times-circle mr-2"></i> Error updating profile image';
                wrapper.appendChild(errorMessage);

                setTimeout(function() {
                    errorMessage.remove();
                }, 3000);
            };
        }
    });

    function deleteImage() {
        var defaultImagePath = deleteIconWrapper.dataset.defaultImage; // Obtener la ruta de la imagen predeterminada
        var holder = triggerInput.closest(".pic-holder");
        var wrapper = triggerInput.closest(".profile-pic-wrapper");

        holder.querySelector(".pic").src = defaultImagePath;

        triggerInput.value = "";

        deleteIconWrapper.classList.add('hidden');
    }

    deleteIconWrapper.addEventListener("click", deleteImage);
});


import Toastify from 'toastify-js';
import "toastify-js/src/toastify.css";

