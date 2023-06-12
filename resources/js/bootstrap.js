window._ = require('lodash');

try {
    require('bootstrap');
} catch (e) {
}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });

// interceptanto os requests da aplicação
axios.interceptors.request.use(
    config => {
        console.log('Interceptando o request antes do envio', config)

        // definir para todas as requisicoes  Accept e  Authorization
        config.headers['Accept'] = 'application/json';

        // recuperando o token dos cookies
        let token = document.cookie.split(';').find(indice => {
            return indice.includes('token=')
        })

        token = token.split('=')[1];
        token = 'Bearer ' + token;

        config.headers['Authorization'] = token;

        return config;
    },
    error => {
        console.log('Erro: ', error);
        return Promisse.reject(error);
    }
);


// interceptar response da aplicação
axios.interceptors.request.use(
    response => {
        console.log('Interceptando o response antes do envio', response)

        return response;
    },
    error => {
        console.log('Erro: ', error.response);

        // verifcando se precisa de novo token por ter expirado
        if (error.response.status == 401 && error.response.data.message == 'Token has expired') {
            axios.post('http://localhost:8000/api/refresh')
                .then(response => {
                    document.cookie = 'token=' + data.token
                    window.location.reload()
                })
                .catch(error => {
                    console.log(error.data.message)
                })
        }

        return Promisse.reject(error);
    }
);

