const menuinfo1 = document.querySelectorAll(".infomenu1");
const nextinfo = document.querySelectorAll(".infomenu2");
const infosteps = document.querySelectorAll(".info-step");

let formStepsNum = 0;

nextinfo.forEach((btn) => {
    btn.addEventListener("click", () => {
        formStepsNum++;
        updateFormSteps();
    });
});

menuinfo1.forEach((btn) => {
    btn.addEventListener("click", () => {
        formStepsNum--;
        updateFormSteps();
    });
});

function updateFormSteps() {
    infosteps.forEach((formStep) => {
        formStep.classList.contains("info-step-active") &&
            formStep.classList.remove("info-step-active");
    });

    infosteps[formStepsNum].classList.add("info-step-active");
}
