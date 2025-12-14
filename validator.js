function validateForm(){
    // Shortcut to the form
    let form = document.frmApp;
    // Shortcuts to various form elements
    let firstName = form.txtFirstName.value.trim();
    let lastName = form.txtLastName.value.trim();
    let numYears = form.txtExpYears.value.trim();

    // Error Message Element Shortcut
    let errMessage = document.getElementById("errorMessage");

    // Checks the input for the values
    // Checks to see if there is input for the first name
    if (firstName.length == 0){
        // Display message if the first name does not have a valid entry
        errMessage.textContent="Please Enter First Name";
        return false;

    }
    // Checks to see if there is input for the last name
    if (lastName.length == 0){
        // Display message if the last name does not have a valid entry
        errMessage.textContent="Please Enter Last Name";
        return false;

    }
    // Checks to see if there is input for the number of years experience
    if (numYears.length == 0){
        // Display message if the number of years does not have a valid entry
        errMessage.textContent="Please Enter Number of Years of Experience";
        return false;

    }    
    // Form Submission was a success if we get here
    return true;


}

function validateLogin(){
    let form = document.frmLogin;
    let user = form.txtUsername.value.trim();
    let password = form.txtPassword.value.trim();

    if (user.length == 0){
        // Display message if the username does not have a valid entry
        errMessage.textContent="Please Enter a username";
        return false;

    }
    if (password.length == 0){
        // Display message if the username does not have a valid entry
        errMessage.textContent="Please Enter a password";
        return false;

    }
    
    
    return true;

}