document.addEventListener("DOMContentLoaded", function () {
    const activitySelect = document.getElementById("activitySelect");
    const dateInputWrapper = document.getElementById("dateInputWrapper");
    const dateInput = document.getElementById("dateInput");
    const step3Content = document.getElementById("step3Content");

    // Function to handle showing/hiding date input
    function toggleDateInputVisibility() {
        if (activitySelect.value !== "") {
            // If an activity is selected
            dateInputWrapper.classList.remove("hidden"); // Show date input
        } else {
            dateInputWrapper.classList.add("hidden"); // Hide date input
            dateInput.value = ""; // Clear date input if activity is deselected
        }
    }

    // Function to handle showing/hiding step 3 content (Location and NEXT button)
    function toggleStep3ContentVisibility() {
        // Show step3Content only if both activity and date are selected (dateInput has a value)
        if (activitySelect.value !== "" && dateInput.value !== "") {
            step3Content.classList.remove("hidden");
        } else {
            step3Content.classList.add("hidden");
        }
    }

    // Initial checks when the page loads
    toggleDateInputVisibility();
    toggleStep3ContentVisibility();

    // Event listener for when the activity selection changes
    activitySelect.addEventListener("change", function () {
        toggleDateInputVisibility(); // Update visibility of date input
        toggleStep3ContentVisibility(); // Update visibility of step3 content
    });

    // Event listener for when the date input value changes
    dateInput.addEventListener("change", toggleStep3ContentVisibility);

    // No need for custom form submission handler here.
    // The form will naturally submit to the Laravel route when 'NEXT' is clicked
    // and conditions for its visibility are met.
});

document
    .querySelector(".copy-account-btn")
    .addEventListener("click", function () {
        const accountNumber = "6485277068";
        navigator.clipboard
            .writeText(accountNumber)
            .then(() => {
                alert("Nomor rekening berhasil disalin: " + accountNumber);
            })
            .catch((err) => {
                console.error("Gagal menyalin nomor rekening: ", err);
            });
    });
