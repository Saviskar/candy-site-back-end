function auth() {
    var email = document.getElementsByClassName('email').value;
    var password = document.getElementsByClassName('password').value;
    if (email == 'abc@example.com' && password == 'admin') {
        window.location.assign('controlPage.html');
        alert('Logged In Successfully');
    }
    else {
        alert('Invalid Information');
        return;
    }
}

function hidePassword() {
    var x = document.getElementById('myInput');
    var y = document.getElementById('hide1');
    var z = document.getElementById('hide2');

    if (x.type == password) {
        x.type = 'text'; 
        y.style.display = 'block';
        z.style.display = 'none';
    }
    else {
        x.type = 'password'; 
        y.style.display = 'none';
        z.style.display = 'block';
    }
}
