document.addEventListener("DOMContentLoaded", function () {

    // LOGIN PASSWORD

    const loginEye =
    document.getElementById("loginEye");

    const loginPassword =
    document.getElementById("loginPassword");

    if(loginEye && loginPassword){

        loginEye.addEventListener("click", function(){

            if(loginPassword.type === "password"){

                loginPassword.type = "text";

                loginEye.classList.remove("fa-eye");

                loginEye.classList.add("fa-eye-slash");

            }else{

                loginPassword.type = "password";

                loginEye.classList.remove("fa-eye-slash");

                loginEye.classList.add("fa-eye");

            }

        });

    }



    // REGISTER PASSWORD

    const registerEye =
    document.getElementById("registerEye");

    const registerPassword =
    document.getElementById("registerPassword");

    if(registerEye && registerPassword){

        registerEye.addEventListener("click", function(){

            if(registerPassword.type === "password"){

                registerPassword.type = "text";

                registerEye.classList.remove("fa-eye");

                registerEye.classList.add("fa-eye-slash");

            }else{

                registerPassword.type = "password";

                registerEye.classList.remove("fa-eye-slash");

                registerEye.classList.add("fa-eye");

            }

        });

    }

});