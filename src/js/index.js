import './navigation';
import '../scss/index.scss';

let hello = () => {
    let el = document.createElement('h2');
    el.innerHTML = 'Hello!';

    document.body.appendChild(el);
}

export {hello};
