document.addEventListener("turbo:load", loadPrescriptionCreate);
// Livewire.hook("element.init", () => {
//     $("#prescriptionHead").select2({
//         width: "100%",
//     });
//     loadPrescriptionCreate();
// });
let uniquePrescriptionId = $(".prescriptionUniqueId").val();

function loadPrescriptionCreate() {
    if (
        !$("#prescriptionPatientId").length &&
        !$("#editPrescriptionPatientId").length
    ) {
        return;
    }
    const prescriptionAddedAtElement = $("#prescriptionAddedAt");
    const editPrescriptionAddedAtElement = $("#editPrescriptionAddedAt");

    $(
        "#prescriptionPatientId,#editPrescriptionPatientId,#filter_status,#prescriptionDoctorId,#editPrescriptionDoctorId,#prescriptionTime,#prescriptionMedicineCategoryId,#prescriptionMedicineBrandId,.prescriptionMedicineId,.prescriptionMedicineMealId,#editPrescriptionTime"
    ).select2({
        width: "100%",
    });

    $("#prescriptionMedicineBrandId, #prescriptionMedicineBrandId").select2({
        width: "100%",
        dropdownParent: $("#add_new_medicine"),
    });

    $("#prescriptionPatientId,#editPrescriptionPatientId").first().focus();

    if (prescriptionAddedAtElement.length) {
        $("#prescriptionAddedAt").flatpickr({
            maxDate: new Date(),
            locale: $(".userCurrentLanguage").val(),
        });
    }
    if (editPrescriptionAddedAtElement.length) {
        $("#editPrescriptionAddedAt").flatpickr({
            maxDate: new Date(),
            locale: $(".userCurrentLanguage").val(),
        });
    }
}

listenSubmit("#createPrescription, #editPrescription", function () {
    $(".btnPrescriptionSave").attr("disabled", true);
});

listenSubmit("#createMedicineFromPrescription", function (e) {
    e.preventDefault();
    $.ajax({
        url: $("#createMedicineFromPrescriptionPost").val(),
        method: "POST",
        data: $(this).serialize(),
        success: function (result) {
            displaySuccessMessage(result.message);
            $("#add_new_medicine").modal("hide");
            $(".medicineTable").load(location.href + " .medicineTable");
        },
        error: function (result) {
            printErrorMessage("#medicinePrescriptionErrorBox", result);
        },
    });
});

listenHiddenBsModal("#add_new_medicine", function () {
    resetModalForm(
        "#createMedicineFromPrescription",
        "#medicinePrescriptionErrorBox"
    );
});

const dropdownToSelecte2 = (selector) => {
    $(selector).select2({
        placeholder: Lang.get("js.select_medicine"),
        width: "100%",
    });
};
const dropdownToSelecteDuration2 = (selector) => {
    $(selector).select2({
        placeholder: Lang.get("js.select_duration"),
        width: "100%",
    });
};
const dropdownToSelecteInterVal = (selector) => {
    $(selector).select2({
        placeholder: Lang.get("js.select_dose_interval"),
        width: "100%",
    });
};

listenClick(".delete-prescription-medicine-item", function () {
    $(this).parents("tr").remove();
    // resetPrescriptionMedicineItemIndex()
});

listenClick(".add-medicine-btn", function () {
    let uniquePrescriptionId = $(".prescriptionUniqueId").val();

    let data = {
        medicines: JSON.parse($(".associatePrescriptionMedicines").val()),
        meals: JSON.parse($(".associatePrescriptionMeals").val()),
        doseDuration: JSON.parse($(".DoseDurationId").val()),
        doseInterVal: JSON.parse($(".DoseInterValId").val()),
        uniqueId: uniquePrescriptionId,
    };
    let prescriptionMedicineHtml = prepareTemplateRender(
        "#prescriptionMedicineTemplate",
        data
    );
    $(".prescription-medicine-container").append(prescriptionMedicineHtml);
    dropdownToSelecte2(".prescriptionMedicineId");
    dropdownToSelecte2(".prescriptionMedicineMealId");
    dropdownToSelecteDuration2(".DoseDurationIdTemplate");
    dropdownToSelecteInterVal(".DoseInterValIdTemplate");
    uniquePrescriptionId++;
    $(".prescriptionUniqueId").val(uniquePrescriptionId);

    // resetPrescriptionMedicineItemIndex();
});

const resetPrescriptionMedicineItemIndex = () => {
    let index = 1;
    if (index - 1 == 0) {
        let data = {
            medicines: JSON.parse($(".associatePrescriptionMedicines").val()),
            meals: JSON.parse($(".associatePrescriptionMeals").val()),
            doseDuration: JSON.parse($(".DoseDurationId").val()),
            doseInterVal: JSON.parse($(".DoseInterValId").val()),
            uniqueId: uniquePrescriptionId,
        };
        let packageServiceItemHtml = prepareTemplateRender(
            "#prescriptionMedicineTemplate",
            data
        );
        $(".prescription-medicine-container").append(packageServiceItemHtml);
        dropdownToSelecte2(".prescriptionMedicineId");
        dropdownToSelecte2(".prescriptionMedicineMealId");
        dropdownToSelecteDuration2(".DoseDurationIdTemplate");
        dropdownToSelecteInterVal(".DoseInterValIdTemplate");
        uniquePrescriptionId++;
    }
};

listenClick('#openAiPrompt', function (e) {
    e.preventDefault();
    let $btn = $(this);
    let originalButtonText = $btn.html();

    let highBloodPressure = $('#highBloodPressure').val();
    let foodAllergies = $('#foodAllergies').val();
    let tendencyBleed = $('#tendencyBleed').val();
    let diabetic = $('#diabetic').val();
    let heartDisease = $('#heartDisease').val();
    let femalePregnancy = $('#femalePregnancy').val();
    let breastFeeding = $('#breastFeeding').val();
    let currentMedication = $('#currentMedication').val();
    let surgery = $('#surgery').val();
    let accident = $('#accident').val();
    let others = $('#others').val();
    let plusRate = $('#plusRate').val();
    let temperature = $('#temperature').val();
    let problemDescription = $('#problemDescription').val();

    if (!highBloodPressure &&
        !foodAllergies &&
        !diabetic &&
        !tendencyBleed &&
        !heartDisease &&
        !femalePregnancy &&
        !breastFeeding &&
        !currentMedication &&
        !surgery &&
        !accident &&
        !others &&
        !plusRate &&
        !temperature &&
        !problemDescription
    ) {
        displayErrorMessage(Lang.get('js.fill_physical_info'));
        return;
    }

    let data = {
        highBloodPressure: highBloodPressure,
        diabetic: diabetic,
        foodAllergies: foodAllergies,
        tendencyBleed: tendencyBleed,
        heartDisease: heartDisease,
        femalePregnancy: femalePregnancy,
        breastFeeding: breastFeeding,
        currentMedication: currentMedication,
        surgery: surgery,
        accident: accident,
        others: others,
        plusRate: plusRate,
        temperature: temperature,
        problemDescription: problemDescription
    };

    $btn.html($btn.data('loading-text')).prop('disabled', true);

    $.ajax({
        url: route('prescription.open-ai-prompt'),
        type: 'POST',
        data: data,
        success: function (result) {

            if (result.success && result.data.medicines) {
                let medicines = result.data.medicines

                let suggestionBox = $('.suggestion-box');
                suggestionBox.empty();

                medicines.forEach(function (medicine, index) {
                    let medicineHtml = `
                        <div class="medicine-item">
                            <h5>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <strong>Medicine Name:</strong>
                                        <span id="medicine-name-${index}">${medicine["Real Medicine Name"]}</span>
                                    </div>
                                    <button class="btn btn-primary btn-sm copy-medicine-btn" data-clipboard-target="#medicine-name-${index}" title="Copy">
                                        <i class="fas fa-copy"></i>
                                    </button>
                                </div>
                            </h5>
                            <p class="mb-2"><strong>Dosage:</strong> ${medicine["Dosage"]}</p>
                            <p class="mb-2"><strong>Dose Duration:</strong> ${medicine["Dose Duration"]}</p>
                            <p class="mb-2"><strong>Dose Interval:</strong> ${medicine["Dose Interval"]}</p>
                            <p class="mb-2"><strong>Time:</strong> ${medicine["Time"]}</p>
                            <p class="mb-2"><strong>Comment:</strong> ${medicine["Comment"]}</p>
                        </div>
                        <hr>
                    `;
                    suggestionBox.append(medicineHtml);
                });

                new ClipboardJS('.copy-medicine-btn');

                $('#medicineSuggestModal').modal('show');

            }

            $btn.html(originalButtonText).prop('disabled', false);
        },
        error: function (result) {
            displayErrorMessage(result.responseJSON.message);
            $btn.html(originalButtonText).prop('disabled', false);
        }
    });
});
