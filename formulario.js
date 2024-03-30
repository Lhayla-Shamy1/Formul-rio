function emailSend(){
    let username = document.getElementById('nome');
    let phone = document.getElementById('telefone');
    let email = document.getElementById('email');
    let message = document.getElementById('message');
    let messageBody = `Nome: ${username.value}<br>Telefone: ${phone.value}<br>Email: ${email.value}<br>Mensagem: ${message.value}`;
    console.log(username.value);
    Email.send({
        Host : "smtp.elasticemail.com",
        Username : "lhaylashamy@acad.ifma.edu.br",
        Password : "1C403A62240E76AB59CC49FE437D3B903086",
        To : 'lhaylashamy8@gmail.com',
        From : email.value,
        Subject : "This is the subject",
        Body : messageBody
    }).then(
    message => alert(message)
    );
}