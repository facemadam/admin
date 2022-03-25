(function () {
    let form = document.querySelector('form[name="admin-register-form"]');
    form.addEventListener('submit', (event) => {
        event.preventDefault();
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }
        fetch('/admin/create', {
            method: 'post',
            body: new FormData(form),
        })
            .then((response) => response.json())
            .then((json) => {
                if (json.id) {
                    location.assign('/admin');
                } else {
                    let message = '';
                    for (key in json.message) {
                        message += json.message[key] + '<br>';
                    }
                    document
                        .querySelector('input[name="' + Object.keys(json.message)[0] + '"]')
                        .focus();
                    let modal = document.querySelector('#alert-modal');
                    modal.querySelector('.modal-title').innerHTML = '운영자 등록 실패';
                    modal.querySelector('.modal-body').innerHTML = message;
                    new bootstrap.Modal(document.querySelector('#alert-modal')).show();
                }
            });
    });
})();
