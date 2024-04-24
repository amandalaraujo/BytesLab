document.addEventListener('DOMContentLoaded', function() {
  const togglePasswords = document.querySelectorAll('.toggle-password');

  togglePasswords.forEach(function(icon) {
      icon.addEventListener('click', function() {
          const inputField = this.previousElementSibling.previousElementSibling; // O campo de senha está antes do ícone do olho e do texto "Senha"
          const fieldType = inputField.getAttribute('type');

          // Alterna o tipo do campo entre 'password' e 'text'
          inputField.setAttribute('type', fieldType === 'password' ? 'text' : 'password');
          
          // Altera a classe do ícone do olho para mostrar ou esconder a senha
          if (fieldType === 'password') {
              this.classList.remove('lnr-eye');
              this.classList.add('lnr-eye-hide');
              this.nextElementSibling.classList.remove('hide');
          } else {
              this.classList.remove('lnr-eye-hide');
              this.classList.add('lnr-eye');
              this.nextElementSibling.classList.add('hide');
          }
      });
  });
  });
