const form = document.querySelector('.single-form');

form.addEventListener('submit', (ev) => {
    ev.preventDefault();
    const fName = ev.target.name.value;
    const password = ev.target.password.value;
    console.log(fName, password);
})
console.log('hello');


function checkTheAnswer() {
    const currentURL = document.URL;

    const lengthOfLocation = currentURL.length;

    for (let i = 0; i < lengthOfLocation; i++) {
        const currentPageNumber = currentURL.charAt(i);

        switch (currentPageNumber) {
            case '2':
                const answer = document.getElementById('answerBox').value;

                if (answer === 'variable') {
                    alert('you have it correct');
                } else if (answer === '') {
                    alert('The field cannot be empty');
                } else {
                    document.getElementById('correctionBox').innerHTML = 'hi';

                }

                break;
            case '3':
                alert('i found number ');
                break;
            case '4':
                alert('i found number 2');
                break;
            case '5':
                alert('i found number ');
                break;
            case '6':
                alert('i found number 2');
                break;
            case '7':
                alert('i found number ');
                break;
            case '8':
                alert('i found number 2');
                break;
            case '9':
                alert('i found number ');
                break;
            case '10':
                alert('i found number 2');
                break;
            case '11':
                alert('i found number ');
                break;
        }
    }
}
