async function Login() {


    const { value: formValues } = await Swal.fire({
        title: 'Login',
        html: '<div class="form-group">' +
            '<label class c-3 for="username">User Name</label>' +
            '<input class="form-control c-3" id="username" aria-describedby="userHelp" placeholder="Enter Username">' +
            '<small id="userHelp" class="form-text text-muted">Do not share your account with anyone else.</small>' +
            '</div>' +
            '<div class="form-group">' +
            '<label for="password">Password</label>' +
            '<input type="password" class="form-control" id="password" placeholder="Password">' +
            '</div>' +
            '<div class="form-check form-switch">' +
            '<input class="form-check-input" type="checkbox" id="RememberMe" checked>' +
            '<label class="form-check-label" for="RememberMe">Remember me</label>' +
            '</div>',
        focusConfirm: false,
        preConfirm: () => {
            return [
                document.getElementById('username').value,
                document.getElementById('password').value,
                document.getElementById('RememberMe').checked

            ]
        }
    })
    if (formValues) {

        if ((formValues[0] == "") || (formValues[1] == "")) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a onclick="Login()">Try again </a> <i>&#10240;&#10240;|&#10240;&#10240;</i>  <a onclick="SignUp()">Register</a>'
            })
        } else autoLogIn(formValues[0], formValues[1], formValues[2], 'login');
    }
}
async function SignUp() {


    const { value: formValues } = await Swal.fire({
        title: 'Sign Up',
        html: '<input id="username" class="swal2-input" placeholder="Username">' +
            '<input id="password" type="password" class="swal2-input" placeholder="Password">',
        focusConfirm: false,
        preConfirm: () => {
            return [
                document.getElementById('username').value,
                document.getElementById('password').value
            ]
        }
    })

    if (formValues) {
        if ((formValues[0] == "") || (formValues[1] == "")) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a onclick="SignUp()">Try again </a> <i>&#10240;&#10240;|&#10240;&#10240;</i>  <a onclick="Login()">Login</a>'
            })
        } else autoLogIn(formValues[0], formValues[1], false, 'signup');
    }
}

function autoLogIn(un, pw, rm, type) {
    var form = document.createElement("form");
    var element1 = document.createElement("input");
    var element2 = document.createElement("input");
    var element3 = document.createElement("input");

    form.method = "POST";
    if (type == 'login') {
        form.action = "includes/login.inc.php?back=" + window.location.pathname;
    }
    if (type == 'signup') {
        form.action = 'includes/signup.inc.php?back=' + window.location.pathname;
    }

    element1.value = un;
    element1.name = "username";
    form.appendChild(element1);

    element2.value = pw;
    element2.name = "password";
    form.appendChild(element2);

    element3.value = rm;
    element3.name = "RememberMe";
    form.appendChild(element3);


    document.body.appendChild(form);

    form.submit();

}

function logout() {

    window.location.replace('includes/logout.inc.php?back=' + window.location.pathname);
}