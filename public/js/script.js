
                                                       
const showUserInput = () => {
    document.getElementById("username").style.display = "none";
}

document.getElementById("project").style.display = "block";

showUserInput();

const showInput = () => {
    document.getElementById("username").style.display = "block";
}

document.getElementById("section-step").style.display = "none";

const hideFirstStep = () => {
    document.getElementById("first-step").style.display = "none";
    document.getElementById("section-step").style.display = "block";
}