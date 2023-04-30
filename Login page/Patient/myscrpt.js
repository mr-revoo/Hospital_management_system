const form = document.getElementById('form1');
const username = document.getElementById('Name');
const email = document.getElementById('Email');
const password = document.getElementById('Password');
const password2 = document.getElementById('repass');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = Email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(Email).toLowerCase());
}

const validateInputs = () => {
    const usernameValue = Name.value.trim();
    const emailValue = Email.value.trim();
    const passwordValue = Password.value.trim();
    const password2Value = repass.value.trim();

    if(usernameValue === '') {
        setError(Name, 'Username is required');
    } else {
        setSuccess(Name);
    }

    if(emailValue === '') {
        setError(Email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(Email, 'Provide a valid email address');
    } else {
        setSuccess(Email);
    }

    if(passwordValue === '') {
        setError(Password, 'Password is required');
    } else if (passwordValue.length < 8 ) {
        setError(Password, 'Password must be at least 8 character.')
    } else {
        setSuccess(Password);
    }

    if(password2Value === '') {
        setError(repass, 'Please confirm your password');
    } else if (password2Value !== passwordValue) {
        setError(repass, "Passwords doesn't match");
    } else {
        setSuccess(repass);
    }

};
