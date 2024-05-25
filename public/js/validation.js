const nom=document.getElementById('nom');
nom.addEventListener('input', () => {
    const inputValue = nom.value;
    const inputLength = inputValue.length;

    // Si la longueur atteint 4, enlevez la classe is-invalid et ajoutez la classe is-valid
    if ((inputLength >= 3)) {
        nom.classList.remove('is-invalid');
        nom.classList.add('is-valid');
        console.log('valid');
    } else {
        // Sinon, inversez les classes
        nom.classList.remove('is-valid');
        nom.classList.add('is-invalid');
    }
});

const phone=document.getElementById('phone');
phone.addEventListener('input', () => {
    const inputValue = phone.value;
    const inputLength = inputValue.length;

    // Si la longueur atteint 4, enlevez la classe is-invalid et ajoutez la classe is-valid
    if ((inputLength >= 9) && (inputLength <= 13)) {
        phone.classList.remove('is-invalid');
        phone.classList.add('is-valid');
        console.log('valid');
    } else {
        // Sinon, inversez les classes
        phone.classList.remove('is-valid');
        phone.classList.add('is-invalid');
    }
});


  function maFonction() {
    console.log("Une seconde s'est écoulée ok!");
    const postnom=document.getElementById('mail');
    postnom.addEventListener('input', () => {
    const inputValue = postnom.value;
    const inputLength = inputValue.length;

    // Si la longueur atteint 4, enlevez la classe is-invalid et ajoutez la classe is-valid
    if (inputLength >= 3) {
        postnom.classList.remove('is-invalid');
        postnom.classList.add('is-valid');
        console.log('valid');
    } else {
        // Sinon, inversez les classes
        postnom.classList.remove('is-valid');
        postnom.classList.add('is-invalid');
    }
});
  }

  // Définir l'intervalle d'exécution à 1 seconde (1000 millisecondes)
  setInterval(maFonction, 1000);

  const postnom=document.getElementById('postnom');
  postnom.addEventListener('input', () => {
  const inputValue = postnom.value;
  const inputLength = inputValue.length;

  // Si la longueur atteint 4, enlevez la classe is-invalid et ajoutez la classe is-valid
  if (inputLength >= 3) {
      postnom.classList.remove('is-invalid');
      postnom.classList.add('is-valid');
      console.log('valid');
  } else {
      // Sinon, inversez les classes
      postnom.classList.remove('is-valid');
      postnom.classList.add('is-invalid');
  }
});

const prenom=document.getElementById('message');
prenom.addEventListener('input', () => {
    const inputValue = prenom.value;
    const inputLength = inputValue.length;

    // Si la longueur atteint 4, enlevez la classe is-invalid et ajoutez la classe is-valid
    if (inputLength >= 1) {
        prenom.classList.remove('is-invalid');
        prenom.classList.add('is-valid');
        console.log('valid');
    } else {
        // Sinon, inversez les classes
        prenom.classList.remove('is-valid');
        prenom.classList.add('is-invalid');
    }
});

const ville=document.getElementById('ville');
ville.addEventListener('input', () => {
    const inputValue = ville.value;
    const inputLength = inputValue.length;

    // Si la longueur atteint 4, enlevez la classe is-invalid et ajoutez la classe is-valid
    if (inputLength >= 1) {
        ville.classList.remove('is-invalid');
        ville.classList.add('is-valid');
        console.log('valid');
    } else {
        // Sinon, inversez les classes
        ville.classList.remove('is-valid');
        ville.classList.add('is-invalid');
    }
});

const adresse=document.getElementById('adresse');
adresse.addEventListener('input', () => {
    const inputValue = adresse.value;
    const inputLength = inputValue.length;

    // Si la longueur atteint 4, enlevez la classe is-invalid et ajoutez la classe is-valid
    if (inputLength >= 1) {
        adresse.classList.remove('is-invalid');
        adresse.classList.add('is-valid');
        console.log('valid');
    } else {
        // Sinon, inversez les classes
        adresse.classList.remove('is-valid');
        adresse.classList.add('is-invalid');
    }
});

const quartier=document.getElementById('quartier');
quartier.addEventListener('input', () => {
    const inputValue = quartier.value;
    const inputLength = inputValue.length;

    // Si la longueur atteint 4, enlevez la classe is-invalid et ajoutez la classe is-valid
    if (inputLength >= 1) {
        quartier.classList.remove('is-invalid');
        quartier.classList.add('is-valid');
        console.log('valid');
    } else {
        // Sinon, inversez les classes
        quartier.classList.remove('is-valid');
        quartier.classList.add('is-invalid');
    }
});

const avenue=document.getElementById('avenue');
avenue.addEventListener('input', () => {
    const inputValue = avenue.value;
    const inputLength = inputValue.length;

    // Si la longueur atteint 4, enlevez la classe is-invalid et ajoutez la classe is-valid
    if (inputLength >= 1) {
        avenue.classList.remove('is-invalid');
        avenue.classList.add('is-valid');
        console.log('valid');
    } else {
        // Sinon, inversez les classes
        avenue.classList.remove('is-valid');
        avenue.classList.add('is-invalid');
    }
});

const numero=document.getElementById('numero');
numero.addEventListener('input', () => {
    const inputValue = numero.value;
    const inputLength = inputValue.length;

    // Si la longueur atteint 4, enlevez la classe is-invalid et ajoutez la classe is-valid
    if (inputLength >= 1) {
        numero.classList.remove('is-invalid');
        numero.classList.add('is-valid');
        console.log('valid');
    } else {
        // Sinon, inversez les classes
        numero.classList.remove('is-valid');
        numero.classList.add('is-invalid');
    }
});


const mail=document.getElementById('email');
mail.addEventListener('input', () => {
    const inputValue = mail.value;
    const inputLength = inputValue.length;

    // Si la longueur atteint 4, enlevez la classe is-invalid et ajoutez la classe is-valid
    if (inputLength >= 4)  {
        mail.classList.remove('is-invalid');
        mail.classList.add('is-valid');
        console.log('valid');
    } else {
        // Sinon, inversez les classes
        mail.classList.remove('is-valid');
        mail.classList.add('is-invalid');
    }
});
const mails=document.getElementById('email');
mails.addEventListener('input', () => {
    const inputValue = mails.value;
    const inputLength = inputValue.length;

    // Si la longueur atteint 4, enlevez la classe is-invalid et ajoutez la classe is-valid
    if (inputLength >= 4)  {
        mails.classList.remove('is-invalid');
        mails.classList.add('is-valid');
        console.log('valid');
    } else {
        // Sinon, inversez les classes
        mails.classList.remove('is-valid');
        mails.classList.add('is-invalid');
    }
});


