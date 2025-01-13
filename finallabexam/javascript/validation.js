function validateregform() {
    let isValid = true;
    document.getElementById("enameError").innerText = "";
    document.getElementById("contractError").innerText = "";
    document.getElementById("usernameError").innerText = "";
    document.getElementById("passwordError").innerText = "";
     
    const ename = document.getElementById("ename").value;
    const contract = document.getElementById("contract").value;
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
     
     
    if (ename === "")
    {
    document.getElementById("enameError").innerText = "Employee Name is required.";
    isValid = false;
    }
    if (contract === "")
     
    {
    document.getElementById("contractError").innerText = "Contract is required.";
    isValid = false;
    }
    if (username === "")
    {
    document.getElementById("usernameError").innerText = "Username is required.";
    isValid = false;
    }
    if (password === "")
    {
    document.getElementById("passwordError").innerText = "Password is required.";
    isValid = false;
    }
     
     
    return isValid;
    }